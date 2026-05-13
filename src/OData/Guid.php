<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\OData;

use InvalidArgumentException;

/**
 * Tagged GUID value-object so Filter can emit `guid'...'` instead of
 * a plain quoted string when comparing Id fields.
 *
 * Snelstart's API expects Id values in OData as `guid'xxxxxxxx-xxxx-…'`
 * rather than `'xxxxxxxx-…'`. Wrapping the raw UUID in this class makes
 * the intent explicit at the call site.
 */
final readonly class Guid
{
    public function __construct(public string $value)
    {
        if (1 !== preg_match('/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/', $value)) {
            throw new InvalidArgumentException('Guid: invalid UUID format: ' . $value);
        }
    }

    public static function from(string $value): self
    {
        return new self($value);
    }
}
