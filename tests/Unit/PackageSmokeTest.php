<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Auth\AuthConnector;
use Emeq\SnelstartApi\Auth\ClientKeyAuthenticator;
use Emeq\SnelstartApi\Auth\LaravelTokenCache;
use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Contracts\TokenCacheStore;
use Emeq\SnelstartApi\Exceptions\MissingCredentialResolverException;
use Emeq\SnelstartApi\Facades\Snelstart as SnelstartFacade;
use Emeq\SnelstartApi\Snelstart;
use Emeq\SnelstartApi\SnelstartServiceProvider;
use Emeq\SnelstartApi\Tests\Support\FakeCredentialResolver;

it('registers the service provider', function (): void {
    $provider = app()->getProvider(SnelstartServiceProvider::class);

    expect($provider)->toBeInstanceOf(SnelstartServiceProvider::class);
});

it('publishes the snelstart config', function (): void {
    expect(config('snelstart.base_url'))->toBe('https://b2bapi.snelstart.nl/v2')
        ->and(config('snelstart.auth_base_url'))->toBe('https://auth.snelstart.nl')
        ->and(config('snelstart.cache.prefix'))->toBe('snelstart_token_')
        ->and(config('snelstart.cache.ttl_safety_margin'))->toBe(60);
});

it('binds AuthConnector as a singleton at the configured auth_base_url', function (): void {
    $first  = app(AuthConnector::class);
    $second = app(AuthConnector::class);

    expect($first)->toBe($second)
        ->and($first->resolveBaseUrl())->toBe('https://auth.snelstart.nl');
});

it('binds the token cache contract to the laravel implementation', function (): void {
    expect(app(TokenCacheStore::class))->toBeInstanceOf(LaravelTokenCache::class);
});

it('throws a helpful exception when no credential resolver is bound', function (): void {
    expect(fn () => app(Snelstart::class))
        ->toThrow(
            MissingCredentialResolverException::class,
            'No ' . SnelstartCredentialResolver::class . ' binding found',
        );
});

it('resolves the main Snelstart client when a resolver is bound', function (): void {
    app()->bind(SnelstartCredentialResolver::class, fn () => FakeCredentialResolver::with());

    $snelstart = app(Snelstart::class);

    expect($snelstart)->toBeInstanceOf(Snelstart::class)
        ->and($snelstart->credentials()->clientKey)->toBe('test-client-key')
        ->and($snelstart->credentials()->subscriptionKey)->toBe('test-subscription-key')
        ->and($snelstart->tokenCache())->toBeInstanceOf(LaravelTokenCache::class)
        ->and($snelstart->authenticator())->toBeInstanceOf(ClientKeyAuthenticator::class);
});

it('resolves the Snelstart facade through the container', function (): void {
    app()->bind(SnelstartCredentialResolver::class, fn () => FakeCredentialResolver::with());

    expect(SnelstartFacade::getFacadeRoot())->toBeInstanceOf(Snelstart::class);
});
