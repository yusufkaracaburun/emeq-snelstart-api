<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi;

use Closure;
use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Data\SnelstartCredentials;

/**
 * Main client + facade target.
 *
 * Holds the wiring (resolver + cache + authenticator factory) that resource
 * accessors will use in Fase 4 (Saloon connector) and Fase 7 (resource
 * classes). For now exposes just enough surface for the ServiceProvider
 * smoke-tests and an authenticator() helper.
 */
class Snelstart
{
    /**
     * @param  Closure(SnelstartCredentials): ClientKeyAuthenticator  $authenticatorFactory
     */
    public function __construct(
        private readonly SnelstartCredentialResolver $resolver,
        private readonly TokenCacheStore $tokenCache,
        private readonly Closure $authenticatorFactory,
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
     * Build a ClientKeyAuthenticator for the *current* resolved credentials.
     * The Saloon connector built in Fase 4 will pull this on every request via
     * defaultAuth().
     */
    public function authenticator(): ClientKeyAuthenticator
    {
        return ($this->authenticatorFactory)($this->credentials());
    }
}
