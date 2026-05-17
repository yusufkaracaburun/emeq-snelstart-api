<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Http\Middleware;

use Closure;
use Emeq\SnelstartApi\Webhooks\SnelstartWebhookSignature;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Verifieert de HMAC-signature op een inbound Snelstart-webhook.
 *
 * Out-of-the-box gedrag (geen host-state vereist):
 *  - missing secret-config           → 500 + lege body
 *  - missing/invalid header          → 401 + lege body
 *  - mismatch op alle secrets        → 401 + lege body
 *  - match op één van de secrets     → $next($request)
 *
 * Host-apps die audit-rows op fail-paths willen schrijven, kunnen een eigen
 * middleware voor deze één plaatsen — deze middleware blijft Hub-agnostisch.
 *
 * Auto-geregistreerd onder alias `verify.snelstart.signature` via
 * SnelstartServiceProvider::packageBooted().
 */
final class VerifySnelstartSignature
{
    public function __construct(private readonly Repository $config)
    {
    }

    public function handle(Request $request, Closure $next): Response
    {
        $primary    = $this->config->get('snelstart.webhook.secret');
        $secondary  = $this->config->get('snelstart.webhook.secret_next');
        $headerName = (string) $this->config->get('snelstart.webhook.signature_header', 'X-SnelStart-Signature');
        $algo       = (string) $this->config->get('snelstart.webhook.signature_algo', 'sha256');

        $secrets = array_values(array_filter(
            [$primary, $secondary],
            static fn (?string $secret): bool => is_string($secret) && '' !== $secret,
        ));

        if ([] === $secrets) {
            return response('', 500);
        }

        $valid = SnelstartWebhookSignature::verify(
            rawBody: $request->getContent(),
            headerValue: $request->header($headerName),
            secrets: $secrets,
            algo: $algo,
        );

        return $valid ? $next($request) : response('', 401);
    }
}
