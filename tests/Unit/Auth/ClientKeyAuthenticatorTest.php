<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Auth\AuthConnector;
use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Auth\ClientKeyOAuthRequest;
use Emeq\SnelstartApi\Auth\LaravelTokenCache;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Data\AccessToken;
use Emeq\SnelstartApi\Data\SnelstartCredentials;
use Emeq\SnelstartApi\Exceptions\AuthenticationException;
use Saloon\Enums\Method;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\PendingRequest;
use Saloon\Http\Request;

/**
 * Helper: build an Authenticator wired with a MockClient'd AuthConnector.
 */
function buildAuthenticator(
    MockResponse|array $tokenResponse = ['access_token' => 'tok-fresh', 'token_type' => 'bearer', 'expires_in' => 3599],
    ?TokenCacheStore $cache = null,
    string $clientKey = 'ck',
    int $safetyMargin = 60,
): array {
    $credentials = new SnelstartCredentials(
        clientKey: $clientKey,
        subscriptionKey: 'sk-' . $clientKey,
        subscriptionId: 'sid',
    );

    $authConnector = new AuthConnector(baseUrl: 'https://auth.snelstart.nl');
    $authConnector->withMockClient(new MockClient([
        ClientKeyOAuthRequest::class => is_array($tokenResponse) ? MockResponse::make($tokenResponse) : $tokenResponse,
    ]));

    $cache ??= app(LaravelTokenCache::class);

    $authenticator = new ClientKeyAuthenticator(
        credentials: $credentials,
        tokenCache: $cache,
        authConnector: $authConnector,
        safetyMarginSeconds: $safetyMargin,
    );

    return [$authenticator, $credentials, $cache];
}

/**
 * Minimal Saloon Request stub for asserting headers set by the authenticator.
 */
final class FakeApiRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/echo';
    }
}

function makePendingRequest(): PendingRequest
{
    $connector = new AuthConnector(baseUrl: 'https://b2bapi.snelstart.nl');
    $connector->withMockClient(new MockClient([
        FakeApiRequest::class => MockResponse::make([], 200),
    ]));

    return $connector->createPendingRequest(new FakeApiRequest());
}

it('fetches and caches a token on first use', function (): void {
    [$authenticator, $credentials, $cache] = buildAuthenticator();

    expect($cache->get($credentials))->toBeNull();

    $authenticator->set(makePendingRequest());

    $cached = $cache->get($credentials);
    expect($cached)->toBeInstanceOf(AccessToken::class)
        ->and($cached->accessToken)->toBe('tok-fresh');
});

it('sets Authorization and Ocp-Apim-Subscription-Key headers', function (): void {
    [$authenticator] = buildAuthenticator(clientKey: 'principal-a');

    $pending = makePendingRequest();
    $authenticator->set($pending);

    expect($pending->headers()->get('Authorization'))->toBe('Bearer tok-fresh')
        ->and($pending->headers()->get('Ocp-Apim-Subscription-Key'))->toBe('sk-principal-a');
});

it('reuses a cached token instead of re-hitting the auth endpoint', function (): void {
    [$authenticator, $credentials, $cache] = buildAuthenticator();

    // Prime the cache with a still-valid token.
    $cachedToken = AccessToken::fromExpiresIn('tok-cached', 3599);
    $cache->put($credentials, $cachedToken);

    $pending = makePendingRequest();
    $authenticator->set($pending);

    expect($pending->headers()->get('Authorization'))->toBe('Bearer tok-cached');
});

it('refreshes a token that is inside the safety margin', function (): void {
    [$authenticator, $credentials, $cache] = buildAuthenticator(safetyMargin: 120);

    // Cached token expires in 60s; safety margin is 120s, so it counts as expired.
    $almostExpired = AccessToken::fromExpiresIn('tok-stale', 60);
    $cache->put($credentials, $almostExpired);

    $pending = makePendingRequest();
    $authenticator->set($pending);

    expect($pending->headers()->get('Authorization'))->toBe('Bearer tok-fresh');
});

it('forceRefresh clears the cache and fetches a new token', function (): void {
    [$authenticator, $credentials, $cache] = buildAuthenticator();

    $cache->put($credentials, AccessToken::fromExpiresIn('tok-old', 3599));

    $fresh = $authenticator->forceRefresh();

    expect($fresh->accessToken)->toBe('tok-fresh')
        ->and($cache->get($credentials)?->accessToken)->toBe('tok-fresh');
});

it('throws AuthenticationException when the auth endpoint returns 401', function (): void {
    [$authenticator] = buildAuthenticator(
        tokenResponse: MockResponse::make(['error' => 'invalid_clientkey'], 401),
    );

    expect(fn () => $authenticator->set(makePendingRequest()))
        ->toThrow(AuthenticationException::class, 'token endpoint returned HTTP 401');
});

it('throws AuthenticationException on a malformed token response', function (): void {
    [$authenticator] = buildAuthenticator(
        tokenResponse: MockResponse::make(['token_type' => 'bearer'], 200),
    );

    expect(fn () => $authenticator->set(makePendingRequest()))
        ->toThrow(AuthenticationException::class, 'without access_token / expires_in');
});

it('keeps clientKey out of the exception message', function (): void {
    [$authenticator] = buildAuthenticator(
        tokenResponse: MockResponse::make(['error' => 'invalid_clientkey'], 401),
        clientKey: 'super-secret-clientkey-XYZ',
    );

    try {
        $authenticator->set(makePendingRequest());
    } catch (AuthenticationException $e) {
        expect($e->getMessage())
            ->not->toContain('super-secret-clientkey-XYZ')
            ->toContain('fp:');
    }
});
