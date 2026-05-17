<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Webhooks;

/**
 * HMAC-verifier voor Snelstart-webhook-ingress.
 *
 * Snelstart tekent inbound webhook-payloads met HMAC over de raw request body,
 * hex-encoded. Header en algoritme zijn configureerbaar zodat een partner-respons
 * defaults kan wijzigen zonder code-deploy. Een rotation-window wordt
 * gemodelleerd via een array van secrets: verifier itereert tot één match.
 *
 * Match-pattern met `Emeq\MollieApi\Webhooks\MollieWebhookSignature`: pure
 * partner-protocol-laag, geen framework-state, callers passen ze in.
 */
final class SnelstartWebhookSignature
{
    /**
     * @param  string|string[]  $secrets  Eén secret of meerdere (rotation-window).
     * @return bool  true = signature matcht een van de secrets; false = geen match,
     *               geen header, of geen bruikbare secrets.
     */
    public static function verify(
        string $rawBody,
        ?string $headerValue,
        string|array $secrets,
        string $algo = 'sha256',
    ): bool {
        if (null === $headerValue || '' === $headerValue) {
            return false;
        }

        $candidates = is_array($secrets) ? $secrets : [$secrets];
        $candidates = array_values(array_filter(
            $candidates,
            static fn (?string $secret): bool => is_string($secret) && '' !== $secret,
        ));

        if ([] === $candidates) {
            return false;
        }

        foreach ($candidates as $secret) {
            $expected = hash_hmac($algo, $rawBody, $secret);

            if (hash_equals($expected, $headerValue)) {
                return true;
            }
        }

        return false;
    }

    public static function sign(string $payload, string $secret, string $algo = 'sha256'): string
    {
        return hash_hmac($algo, $payload, $secret);
    }
}
