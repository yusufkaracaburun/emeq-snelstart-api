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

    'webhook' => [
        /*
         * Primary HMAC-signing secret. Snelstart stuurt webhooks naar één
         * partner-URL en signeert iedere payload met deze secret.
         */
        'secret' => env('SNELSTART_WEBHOOK_SECRET'),

        /*
         * Secondary secret tijdens een rotation-window. De middleware
         * accepteert een signature die met óf `secret` óf `secret_next`
         * gegenereerd is, zodat een Snelstart-portal-rotatie geen downtime
         * vereist.
         */
        'secret_next' => env('SNELSTART_WEBHOOK_SECRET_NEXT'),

        /*
         * HTTP header die de HMAC-signature vervoert. Snelstart-respons
         * 2026-05-17 bevestigde `X-SnelStart-Signature`. Env-overridable
         * zodat een partner-protocol-wijziging géén code-deploy vereist.
         */
        'signature_header' => env('SNELSTART_WEBHOOK_SIGNATURE_HEADER', 'X-SnelStart-Signature'),

        /*
         * Hash-algoritme voor `hash_hmac`. Snelstart-respons 2026-05-17
         * bevestigde HMAC-SHA256, hex-encoded over de raw request body.
         */
        'signature_algo' => env('SNELSTART_WEBHOOK_SIGNATURE_ALGO', 'sha256'),

        /*
         * Payload-key die het event-id draagt. Wordt door host-app gebruikt
         * voor idempotency-tracking (unique-index op `(provider, event_id)`).
         * Default is afgeleid uit Snelstart's OData-camelCase-conventie.
         */
        'event_id_key' => env('SNELSTART_WEBHOOK_EVENT_ID_KEY', 'eventId'),
    ],

];
