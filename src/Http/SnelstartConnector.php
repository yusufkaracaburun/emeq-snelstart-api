<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Http;

use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Exceptions\AuthenticationException;
use Emeq\SnelstartApi\Exceptions\NotFoundException;
use Emeq\SnelstartApi\Exceptions\RateLimitException;
use Emeq\SnelstartApi\Exceptions\ServerException;
use Emeq\SnelstartApi\Exceptions\ValidationException;
use Saloon\Contracts\Authenticator;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Throwable;

/**
 * Main Saloon Connector against https://b2bapi.snelstart.nl/v2.
 *
 * Per-tenant instance — built by Snelstart::connector() which injects the
 * tenant-specific ClientKeyAuthenticator. The connector itself is stateless
 * across tenants except for the authenticator, so multiple tenants can have
 * concurrent connectors without colliding.
 *
 * Retries automatically on 429 and the transient 5xx codes (502/503/504),
 * with exponential-ish backoff (handled by Saloon). All other failures bubble
 * up as a SnelstartException subclass via getRequestException().
 */
class SnelstartConnector extends Connector
{
    private readonly ClientKeyAuthenticator $clientKeyAuthenticator;

    /**
     * @param  list<int>  $retryOnStatuses
     */
    public function __construct(
        private readonly string $baseUrl,
        ClientKeyAuthenticator $authenticator,
        private readonly int $timeoutSeconds = 30,
        public ?int $tries = 3,
        public ?int $retryInterval = 1000,
        private readonly array $retryOnStatuses = [429, 500, 502, 503, 504],
    ) {
        // Stored under a different name because Saloon\Http\Connector already
        // declares a non-readonly $authenticator property; PHP refuses to
        // redeclare an inherited property with different mutability.
        $this->clientKeyAuthenticator = $authenticator;
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * Saloon retry hook. Returns true to retry, false to bubble the exception.
     */
    public function handleRetry(FatalRequestException|RequestException $exception, Request $request): bool
    {
        if ($exception instanceof FatalRequestException) {
            // Connection-level (DNS, timeout, refused) — worth retrying once or twice.
            return true;
        }

        return in_array($exception->getResponse()->status(), $this->retryOnStatuses, true);
    }

    /**
     * Map HTTP status codes to Snelstart exception subclasses. Returning null
     * means Saloon falls back to its default RequestException — but we cover
     * every 4xx/5xx here, so the default branch is effectively unreachable.
     */
    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        $status = $response->status();
        $body   = $response->body();

        return match (true) {
            400 === $status                  => ValidationException::fromBody($body),
            401 === $status, 403 === $status => AuthenticationException::tokenFetchFailed(
                status: $status,
                body: $body,
                credentialFingerprint: '(api-response)',
            ),
            404 === $status => NotFoundException::forUrl((string) $response->getPendingRequest()->getUrl()),
            429 === $status => RateLimitException::fromBody(
                body: $body,
                retryAfterSeconds: self::parseRetryAfter($response),
            ),
            $status >= 500 && $status < 600 => ServerException::fromResponse($status, $body),
            default                         => null,
        };
    }

    protected function defaultAuth(): ?Authenticator
    {
        return $this->clientKeyAuthenticator;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultConfig(): array
    {
        return [
            'timeout' => $this->timeoutSeconds,
        ];
    }

    private static function parseRetryAfter(Response $response): ?int
    {
        $value = $response->header('Retry-After');

        if (null === $value || '' === $value) {
            return null;
        }

        return is_numeric($value) ? (int) $value : null;
    }
}
