<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

/**
 * Raised on HTTP 429. Snelstart does not document its rate-limits, but the
 * Azure API Management layer in front of the API can throttle subscriptions.
 *
 * `retryAfterSeconds` is `null` when no `Retry-After` header is present.
 */
final class RateLimitException extends SnelstartException
{
    public function __construct(
        string $message,
        public readonly ?int $retryAfterSeconds = null,
    ) {
        parent::__construct($message);
    }

    public static function fromBody(string $body, ?int $retryAfterSeconds): self
    {
        return new self(
            message: 'Snelstart API returned HTTP 429 (rate limited)' . (null !== $retryAfterSeconds ? ', retry after ' . $retryAfterSeconds . 's' : '') . '. Body: ' . self::truncate($body),
            retryAfterSeconds: $retryAfterSeconds,
        );
    }

    private static function truncate(string $body, int $max = 500): string
    {
        return mb_strlen($body) > $max ? mb_substr($body, 0, $max) . '…' : $body;
    }
}
