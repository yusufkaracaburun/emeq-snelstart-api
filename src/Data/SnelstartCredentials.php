<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Data;

use InvalidArgumentException;

/**
 * Per-tenant Snelstart B2B API credentials.
 *
 * The host app builds one of these (typically in a SnelstartCredentialResolver
 * implementation that reads from its tenant settings) and the package uses it
 * to authenticate against https://b2bapi.snelstart.nl/v2.
 *
 * - clientKey       — opaque token issued by Snelstart (used as `grant_type=clientkey`
 *                     OAuth2 body parameter when fetching a Bearer access token).
 * - subscriptionKey — Azure API Management subscription key, sent on every request
 *                     as the `Ocp-Apim-Subscription-Key` header.
 * - subscriptionId  — identifies which Snelstart subscription is being targeted
 *                     (optional in some flows; surfaced here for logging/debugging).
 */
final readonly class SnelstartCredentials
{
    public function __construct(
        public string $clientKey,
        public string $subscriptionKey,
        public ?string $subscriptionId = null,
    ) {
        if ('' === mb_trim($this->clientKey)) {
            throw new InvalidArgumentException('SnelstartCredentials: clientKey may not be empty.');
        }

        if ('' === mb_trim($this->subscriptionKey)) {
            throw new InvalidArgumentException('SnelstartCredentials: subscriptionKey may not be empty.');
        }
    }

    /**
     * @param  array{clientKey: string, subscriptionKey: string, subscriptionId?: ?string}  $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            clientKey: $data['clientKey'],
            subscriptionKey: $data['subscriptionKey'],
            subscriptionId: $data['subscriptionId'] ?? null,
        );
    }

    /**
     * Stable, non-reversible identifier for cache-key derivation — does not leak the
     * raw clientKey into cache backends, logs or error messages.
     */
    public function fingerprint(): string
    {
        return hash('sha256', $this->clientKey);
    }
}
