<?php

declare(strict_types=1);

/**
 * Configuratie voor emeq/snelstart-api.
 *
 * Real defaults worden in Fase 2 (config + ServiceProvider) ingevuld.
 */
return [

    'base_url' => env('SNELSTART_BASE_URL', 'https://b2bapi.snelstart.nl/v2'),

    'auth_url' => env('SNELSTART_AUTH_URL', 'https://auth.snelstart.nl/b2b/token'),

    'cache' => [
        'store' => env('SNELSTART_CACHE_STORE'),
        'prefix' => 'snelstart_token_',
        'ttl_safety_margin' => 60,
    ],

    'http' => [
        'timeout' => 30,
        'retry' => [
            'times' => 3,
            'sleep' => 1000,
            'on' => [429, 500, 502, 503, 504],
        ],
    ],

    'webhooks' => [
        'route_prefix' => 'snelstart',
        'middleware' => ['api'],
    ],

];
