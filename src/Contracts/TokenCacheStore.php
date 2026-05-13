<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Contracts;

use Emeq\SnelstartApi\Data\AccessToken;
use Emeq\SnelstartApi\Data\SnelstartCredentials;

/**
 * Per-credentials cache for Snelstart OAuth2 Bearer tokens.
 *
 * The default Laravel implementation (LaravelTokenCache) is bound automatically.
 * Host apps can rebind this contract to a custom store (Redis hash, Vault,
 * encrypted DB column, etc.).
 *
 * Implementations MUST namespace cache entries by `$credentials->fingerprint()`
 * so that two tenants with different clientKeys never collide.
 */
interface TokenCacheStore
{
    public function get(SnelstartCredentials $credentials): ?AccessToken;

    public function put(SnelstartCredentials $credentials, AccessToken $token): void;

    public function forget(SnelstartCredentials $credentials): void;
}
