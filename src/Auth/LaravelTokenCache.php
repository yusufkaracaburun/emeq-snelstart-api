<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Auth;

use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Data\AccessToken;
use Emeq\SnelstartApi\Data\SnelstartCredentials;
use Illuminate\Contracts\Cache\Factory as CacheFactory;
use Illuminate\Contracts\Config\Repository as Config;

/**
 * Default TokenCacheStore implementation — uses Laravel's cache subsystem.
 *
 * Reads its store name from `config('snelstart.cache.store')` (null = default
 * store) and its key prefix from `config('snelstart.cache.prefix')`. Real
 * read/write semantics arrive in Fase 3 alongside the OAuth2 token-fetching
 * authenticator; the structure is in place here so SnelstartServiceProvider
 * can bind the contract immediately.
 */
final class LaravelTokenCache implements TokenCacheStore
{
    public function __construct(
        private readonly CacheFactory $cacheFactory,
        private readonly Config $config,
    ) {
    }

    public function get(SnelstartCredentials $credentials): ?AccessToken
    {
        $payload = $this->store()->get($this->key($credentials));

        if ( ! is_array($payload)) {
            return null;
        }

        /** @var array{accessToken: string, expiresAt: string} $payload */
        return AccessToken::fromArray($payload);
    }

    public function put(SnelstartCredentials $credentials, AccessToken $token): void
    {
        $ttl = max(1, $token->expiresAt->getTimestamp() - time());

        $this->store()->put($this->key($credentials), $token->toArray(), $ttl);
    }

    public function forget(SnelstartCredentials $credentials): void
    {
        $this->store()->forget($this->key($credentials));
    }

    private function store(): \Illuminate\Contracts\Cache\Repository
    {
        /** @var string|null $storeName */
        $storeName = $this->config->get('snelstart.cache.store');

        return $this->cacheFactory->store($storeName);
    }

    private function key(SnelstartCredentials $credentials): string
    {
        /** @var string $prefix */
        $prefix = $this->config->get('snelstart.cache.prefix', 'snelstart_token_');

        return $prefix . $credentials->fingerprint();
    }
}
