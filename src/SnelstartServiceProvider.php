<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi;

use Emeq\SnelstartApi\Auth\AuthConnector;
use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Auth\LaravelTokenCache;
use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Exceptions\MissingCredentialResolverException;
use Emeq\SnelstartApi\Http\Middleware\VerifySnelstartSignature;
use Emeq\SnelstartApi\Http\SnelstartConnector;
use Illuminate\Routing\Router;
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

    public function packageBooted(): void
    {
        /** @var Router $router */
        $router = $this->app->make(Router::class);
        $router->aliasMiddleware('verify.snelstart.signature', VerifySnelstartSignature::class);
    }

    public function packageRegistered(): void
    {
        // Default TokenCacheStore implementation. Host apps can rebind this
        // contract to a custom store; the Snelstart::class singleton resolves
        // whatever is bound at the moment of first use.
        $this->app->singleton(TokenCacheStore::class, LaravelTokenCache::class);

        // Singleton AuthConnector so MockClient fixtures applied in tests
        // (and the future per-tenant token cache) hit the same instance.
        $this->app->singleton(AuthConnector::class, function ($app) {
            /** @var \Illuminate\Contracts\Config\Repository $config */
            $config = $app->make('config');

            return new AuthConnector(
                baseUrl: (string) $config->get('snelstart.auth_base_url', 'https://auth.snelstart.nl'),
                timeoutSeconds: (int) $config->get('snelstart.http.timeout', 30),
            );
        });

        // Factory for ClientKeyAuthenticator — accepts per-tenant credentials
        // because the same package instance serves many tenants. Each call
        // returns a fresh authenticator that shares the singleton AuthConnector
        // and TokenCacheStore (the cache is keyed by credential fingerprint, so
        // sharing is safe).
        $this->app->bind('snelstart.authenticator-factory', function ($app) {
            return function (Data\SnelstartCredentials $credentials) use ($app): ClientKeyAuthenticator {
                /** @var \Illuminate\Contracts\Config\Repository $config */
                $config = $app->make('config');

                return new ClientKeyAuthenticator(
                    credentials: $credentials,
                    tokenCache: $app->make(TokenCacheStore::class),
                    authConnector: $app->make(AuthConnector::class),
                    safetyMarginSeconds: (int) $config->get('snelstart.cache.ttl_safety_margin', 60),
                );
            };
        });

        // Factory for SnelstartConnector — reads config (base URL, timeout,
        // retry) and accepts the per-tenant authenticator. Returns a fresh
        // connector on each call; the underlying token cache + auth connector
        // are singletons so cross-tenant state is hash-isolated, not
        // object-isolated.
        $this->app->bind('snelstart.connector-factory', function ($app) {
            return function (ClientKeyAuthenticator $authenticator) use ($app): SnelstartConnector {
                /** @var \Illuminate\Contracts\Config\Repository $config */
                $config = $app->make('config');

                /** @var array{times: int, sleep: int, on: list<int>} $retry */
                $retry = (array) $config->get('snelstart.http.retry', ['times' => 3, 'sleep' => 1000, 'on' => [429, 500, 502, 503, 504]]);

                return new SnelstartConnector(
                    baseUrl: (string) $config->get('snelstart.base_url', 'https://b2bapi.snelstart.nl/v2'),
                    authenticator: $authenticator,
                    timeoutSeconds: (int) $config->get('snelstart.http.timeout', 30),
                    tries: (int) $retry['times'],
                    retryInterval: (int) $retry['sleep'],
                    retryOnStatuses: array_map('intval', $retry['on']),
                );
            };
        });

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
                authenticatorFactory: $app->make('snelstart.authenticator-factory'),
                connectorFactory: $app->make('snelstart.connector-factory'),
            );
        });
    }
}
