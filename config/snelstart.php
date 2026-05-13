<?php

declare(strict_types=1);

/**
 * Configuratie voor emeq/snelstart-api.
 */
return [

    /*
     * Base URL of the Snelstart B2B REST API (no trailing slash).
     */
    'base_url' => env('SNELSTART_BASE_URL', 'https://b2bapi.snelstart.nl/v2'),

    /*
     * Base URL of the OAuth2 token endpoint. The token path "/b2b/token" is
     * appended by ClientKeyOAuthRequest; only override if Snelstart moves the
     * auth host.
     */
    'auth_base_url' => env('SNELSTART_AUTH_BASE_URL', 'https://auth.snelstart.nl'),

    'cache' => [
        /*
         * Laravel cache store to use for OAuth Bearer tokens. Null = default.
         */
        'store' => env('SNELSTART_CACHE_STORE'),

        'prefix' => 'snelstart_token_',

        /*
         * Refresh a cached token this many seconds before its real expiry to
         * avoid edge-of-window 401s when the API receives a request after the
         * token has just lapsed in flight.
         */
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
