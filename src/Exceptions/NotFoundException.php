<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

/**
 * Raised on HTTP 404. The most common cause is a stale Guid in a path
 * segment (e.g. /relaties/{deleted-id}).
 */
final class NotFoundException extends SnelstartException
{
    public static function forUrl(string $url): self
    {
        return new self('Snelstart API returned HTTP 404 for ' . $url);
    }
}
