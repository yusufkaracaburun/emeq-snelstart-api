<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi;

use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Data\SnelstartCredentials;

/**
 * Main client + facade target.
 *
 * Holds the wiring (resolver + cache) that resource accessors will use in
 * Fase 4 (Saloon connector) and Fase 7 (resource classes). For now exposes
 * just enough surface for the ServiceProvider smoke-tests to pass.
 */
class Snelstart
{
    public function __construct(
        private readonly SnelstartCredentialResolver $resolver,
        private readonly TokenCacheStore $tokenCache,
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
}
