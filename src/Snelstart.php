<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi;

use Closure;
use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Data\SnelstartCredentials;
use Emeq\SnelstartApi\Http\SnelstartConnector;

/**
 * Main client + facade target.
 *
 * Builds per-tenant Saloon Connectors on demand: every call to connector()
 * resolves the current credentials via the bound resolver and constructs a
 * fresh SnelstartConnector wired with a tenant-specific authenticator. The
 * underlying TokenCacheStore and AuthConnector are singletons, so the token
 * cache is shared across connectors (keyed by credential fingerprint).
 *
 * Resource accessors in Fase 7 (`relaties()`, `verkoopfacturen()`, etc.) will
 * delegate to `connector()` under the hood.
 */
class Snelstart
{
    /**
     * @param  Closure(SnelstartCredentials): ClientKeyAuthenticator  $authenticatorFactory
     * @param  Closure(ClientKeyAuthenticator): SnelstartConnector  $connectorFactory
     */
    public function __construct(
        private readonly SnelstartCredentialResolver $resolver,
        private readonly TokenCacheStore $tokenCache,
        private readonly Closure $authenticatorFactory,
        private readonly Closure $connectorFactory,
    ) {
    }

    public function credentials(): SnelstartCredentials
    {
        return $this->resolver->resolve();
    }

    public function tokenCache(): TokenCacheStore
    {
        return $this->tokenCache;
    }

    /**
     * Build an authenticator for the current resolved credentials.
     */
    public function authenticator(): ClientKeyAuthenticator
    {
        return ($this->authenticatorFactory)($this->credentials());
    }

    /**
     * Build a Saloon Connector for the current resolved credentials. This is
     * the entry point for every resource-API call.
     */
    public function connector(): SnelstartConnector
    {
        return ($this->connectorFactory)($this->authenticator());
    }
}
