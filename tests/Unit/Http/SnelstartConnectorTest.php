<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Data\SnelstartCredentials;
use Emeq\SnelstartApi\Exceptions\AuthenticationException;
use Emeq\SnelstartApi\Exceptions\NotFoundException;
use Emeq\SnelstartApi\Exceptions\RateLimitException;
use Emeq\SnelstartApi\Exceptions\ServerException;
use Emeq\SnelstartApi\Exceptions\ValidationException;
use Emeq\SnelstartApi\Http\SnelstartConnector;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\PendingRequest;
use Saloon\Http\Response;

/**
 * Tests against SnelstartConnector::getRequestException() and ::handleRetry().
 *
 * Strategie: directe PHPUnit-mocks op Saloon\Http\Response (en zo nodig
 * PendingRequest), zonder de Saloon-fake-pipeline. De connector-methodes
 * accepteren een Response-instance en bevragen status()/body()/header()/
 * getPendingRequest()->getUrl(), dus stubben volstaat — een echte
 * request-cyclus is niet nodig om de mapping te valideren.
 */

// region Helpers

/**
 * Bouwt een gemockte Saloon Response met de gewenste status/body/headers
 * en (voor 404-pad) een gemockte PendingRequest die getUrl() teruggeeft.
 */
function fakeSnelstartResponse(
    int $status,
    string $body = '{}',
    ?string $retryAfter = null,
    string $url = 'https://b2bapi.snelstart.nl/v2/relaties',
): Response {
    $pendingRequest = test()->createMock(PendingRequest::class);
    $pendingRequest->method('getUrl')->willReturn($url);

    $response = test()->createMock(Response::class);
    $response->method('status')->willReturn($status);
    $response->method('body')->willReturn($body);
    $response->method('header')->willReturnCallback(
        static fn (string $name) => 'Retry-After' === $name ? $retryAfter : null,
    );
    $response->method('getPendingRequest')->willReturn($pendingRequest);

    return $response;
}

function makeSnelstartConnector(): SnelstartConnector
{
    $factory = app('snelstart.authenticator-factory');
    /** @var ClientKeyAuthenticator $auth */
    $auth = $factory(new SnelstartCredentials(clientKey: 'ck', subscriptionKey: 'sk'));

    return new SnelstartConnector(
        baseUrl: 'https://b2bapi.snelstart.nl/v2',
        authenticator: $auth,
    );
}

// endregion

// region Container bindings

it('invokes the authenticator factory', function (): void {
    $closure = app('snelstart.authenticator-factory');
    $creds   = new SnelstartCredentials(clientKey: 'ck', subscriptionKey: 'sk');

    $auth = $closure($creds);

    expect($auth)->toBeInstanceOf(ClientKeyAuthenticator::class);
});

// endregion

// region getRequestException — status-mapping

it('returns ValidationException for HTTP 400 and surfaces Snelstart error codes', function (): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse(400, '{"error":"Het ID dient leeg te zijn. Foutcode: ALG-0100"}');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(ValidationException::class)
        ->and($exception->errorCodes)->toBe(['ALG-0100'])
        ->and($exception->getMessage())->toContain('ALG-0100');
});

it('returns AuthenticationException for HTTP 401', function (): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse(401, 'unauthorized');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(AuthenticationException::class)
        ->and($exception->getMessage())->toContain('HTTP 401')
        ->and($exception->getMessage())->toContain('fp:');
});

it('returns AuthenticationException for HTTP 403', function (): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse(403, 'forbidden');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(AuthenticationException::class)
        ->and($exception->getMessage())->toContain('HTTP 403');
});

it('returns NotFoundException for HTTP 404 with the request URL in the message', function (): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse(
        status: 404,
        body: 'not found',
        url: 'https://b2bapi.snelstart.nl/v2/relaties/deleted-guid',
    );

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(NotFoundException::class)
        ->and($exception->getMessage())->toContain('/relaties/deleted-guid')
        ->and($exception->getMessage())->toContain('404');
});

it('returns RateLimitException for HTTP 429 and parses Retry-After header', function (): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse(429, 'throttled', retryAfter: '42');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(RateLimitException::class)
        ->and($exception->retryAfterSeconds)->toBe(42)
        ->and($exception->getMessage())->toContain('retry after 42s');
});

it('returns RateLimitException with null retryAfter when no Retry-After header is sent', function (): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse(429, 'throttled');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(RateLimitException::class)
        ->and($exception->retryAfterSeconds)->toBeNull()
        ->and($exception->getMessage())->not->toContain('retry after');
});

it('returns ServerException for transient 5xx statuses', function (int $status): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse($status, 'gateway error');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeInstanceOf(ServerException::class)
        ->and($exception->getMessage())->toContain("HTTP {$status}");
})->with([500, 502, 503, 504]);

it('returns null for unmapped 2xx and 3xx statuses', function (int $status): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse($status, '');

    $exception = $connector->getRequestException($response, null);

    expect($exception)->toBeNull();
})->with([204, 301]);

// endregion

// region handleRetry — retry-policy

it('handleRetry returns true for FatalRequestException (connection-level)', function (): void {
    $connector = makeSnelstartConnector();

    $pendingRequest = test()->createMock(PendingRequest::class);
    $fatal          = new FatalRequestException(new RuntimeException('connection refused'), $pendingRequest);

    /** @var Saloon\Http\Request $request */
    $request = test()->createMock(Saloon\Http\Request::class);

    expect($connector->handleRetry($fatal, $request))->toBeTrue();
});

it('handleRetry returns true for retryable statuses (429, 500, 502, 503, 504)', function (int $status): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse($status, 'retryable');
    $exception = new RequestException($response, message: 'stub');

    /** @var Saloon\Http\Request $request */
    $request = test()->createMock(Saloon\Http\Request::class);

    expect($connector->handleRetry($exception, $request))->toBeTrue();
})->with([429, 500, 502, 503, 504]);

it('handleRetry returns false for non-retryable 4xx statuses (400, 401, 404)', function (int $status): void {
    $connector = makeSnelstartConnector();
    $response  = fakeSnelstartResponse($status, 'non-retryable');
    $exception = new RequestException($response, message: 'stub');

    /** @var Saloon\Http\Request $request */
    $request = test()->createMock(Saloon\Http\Request::class);

    expect($connector->handleRetry($exception, $request))->toBeFalse();
})->with([400, 401, 404]);

// endregion
