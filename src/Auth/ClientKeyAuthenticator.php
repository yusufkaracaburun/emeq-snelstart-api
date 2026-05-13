<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Auth;

use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Data\AccessToken;
use Emeq\SnelstartApi\Data\SnelstartCredentials;
use Emeq\SnelstartApi\Exceptions\AuthenticationException;
use Saloon\Contracts\Authenticator;
use Saloon\Http\PendingRequest;

/**
 * Saloon Authenticator that, on each outbound API request:
 *
 *   1. Looks up the cached AccessToken for $credentials->fingerprint().
 *   2. If absent / expired (within safetyMargin), POSTs to Snelstart's OAuth2
 *      endpoint with grant_type=clientkey and caches the fresh token.
 *   3. Sets two headers on the API request:
 *        - Authorization: Bearer <token>
 *        - Ocp-Apim-Subscription-Key: <subscriptionKey>
 *
 * Construct one of these per logical "principal" (tenant). The same instance
 * can be reused for many API requests; cache hits keep latency to a single
 * memory lookup.
 */
final class ClientKeyAuthenticator implements Authenticator
{
    public function __construct(
        private readonly SnelstartCredentials $credentials,
        private readonly TokenCacheStore $tokenCache,
        private readonly AuthConnector $authConnector,
        private readonly int $safetyMarginSeconds = 60,
    ) {
    }

    public function set(PendingRequest $pendingRequest): void
    {
        $token = $this->resolveToken();

        $pendingRequest->headers()->add('Authorization', 'Bearer ' . $token->accessToken);
        $pendingRequest->headers()->add('Ocp-Apim-Subscription-Key', $this->credentials->subscriptionKey);
    }

    /**
     * Fetch a fresh token even if the cache holds a valid one. Useful when an
     * API endpoint replied 401 mid-session and the caller wants to retry.
     */
    public function forceRefresh(): AccessToken
    {
        $this->tokenCache->forget($this->credentials);

        return $this->fetchAndCache();
    }

    private function resolveToken(): AccessToken
    {
        $cached = $this->tokenCache->get($this->credentials);

        if (null !== $cached && ! $cached->isExpired($this->safetyMarginSeconds)) {
            return $cached;
        }

        return $this->fetchAndCache();
    }

    private function fetchAndCache(): AccessToken
    {
        $response = $this->authConnector->send(new ClientKeyOAuthRequest($this->credentials));

        if ($response->failed()) {
            throw AuthenticationException::tokenFetchFailed(
                status: $response->status(),
                body: $response->body(),
                credentialFingerprint: $this->credentials->fingerprint(),
            );
        }

        /** @var array{access_token?: string, expires_in?: int, token_type?: string} $body */
        $body = $response->json();

        if ( ! isset($body['access_token'], $body['expires_in'])) {
            throw AuthenticationException::malformedTokenResponse($response->body());
        }

        $token = AccessToken::fromExpiresIn(
            accessToken: $body['access_token'],
            expiresIn: (int) $body['expires_in'],
        );

        $this->tokenCache->put($this->credentials, $token);

        return $token;
    }
}
