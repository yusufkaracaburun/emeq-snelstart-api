<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi;

use Emeq\SnelstartApi\Auth\LaravelTokenCache;
use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Exceptions\MissingCredentialResolverException;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SnelstartServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('snelstart-api')
            ->hasConfigFile('snelstart');
    }

    public function packageRegistered(): void
    {
        // Default TokenCacheStore implementation. Host apps can rebind this
        // contract to a custom store; the Snelstart::class singleton resolves
        // whatever is bound at the moment of first use.
        $this->app->singleton(TokenCacheStore::class, LaravelTokenCache::class);

        // The credential resolver is intentionally NOT bound here — the host
        // app must provide its own. Resolving Snelstart::class without a
        // resolver throws a helpful exception rather than Laravel's generic
        // BindingResolutionException.
        $this->app->singleton(Snelstart::class, function ($app) {
            if ( ! $app->bound(SnelstartCredentialResolver::class)) {
                throw MissingCredentialResolverException::notBound();
            }

            return new Snelstart(
                resolver: $app->make(SnelstartCredentialResolver::class),
                tokenCache: $app->make(TokenCacheStore::class),
            );
        });
    }
}
