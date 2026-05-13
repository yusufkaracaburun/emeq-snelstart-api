<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Facades\Snelstart as SnelstartFacade;
use Emeq\SnelstartApi\Snelstart;
use Emeq\SnelstartApi\SnelstartServiceProvider;

it('registers the service provider', function () {
    $provider = app()->getProvider(SnelstartServiceProvider::class);

    expect($provider)->toBeInstanceOf(SnelstartServiceProvider::class);
});

it('publishes the snelstart config', function () {
    expect(config('snelstart.base_url'))->toBe('https://b2bapi.snelstart.nl/v2')
        ->and(config('snelstart.auth_url'))->toBe('https://auth.snelstart.nl/b2b/token');
});

it('exposes the main client class', function () {
    expect(class_exists(Snelstart::class))->toBeTrue();
});

it('exposes the snelstart facade', function () {
    expect(class_exists(SnelstartFacade::class))->toBeTrue();
});
