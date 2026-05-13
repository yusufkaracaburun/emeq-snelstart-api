<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

/**
 * Raised on HTTP 5xx. Snelstart's API sits behind Azure API Management, so
 * 502/503/504 are typically transient — the SnelstartConnector retries those
 * automatically before the exception surfaces.
 */
final class ServerException extends SnelstartException
{
    public static function fromResponse(int $status, string $body): self
    {
        return new self(sprintf(
            'Snelstart API returned HTTP %d. Body: %s',
            $status,
            self::truncate($body),
        ));
    }

    private static function truncate(string $body, int $max = 500): string
    {
        return mb_strlen($body) > $max ? mb_substr($body, 0, $max) . '…' : $body;
    }
}
