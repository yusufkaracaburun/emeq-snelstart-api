<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\OData;

use DateTimeInterface;
use InvalidArgumentException;

/**
 * Builds OData $filter expressions for Snelstart's B2B API v2.
 *
 * Snelstart property names are case-sensitive UpperCamelCase, OData
 * operators are case-sensitive lowerCamelCase. See:
 *   .docs/snelstart-api/odata-3cc065de.md
 *
 * Supports the operator subset Snelstart actually documents:
 *   eq, ne, gt, lt, ge, le, and, or, not, null, startswith(), substringof()
 *
 * Wraps values according to their PHP type:
 *   - string                 → 'value'
 *   - int|float|bool         → bare literal
 *   - null                   → null
 *   - DateTimeInterface      → datetime'YYYY-MM-DDTHH:MM:SS.fff'
 *   - Guid value object      → guid'...'
 *
 * Anything you can't express here — nested property paths like
 * `VestigingsAdres/Land/Id`, sub-queries inside `any()`, complex composites —
 * use `Filter::raw($expression)` and own the escaping yourself.
 */
final readonly class Filter
{
    private function __construct(public string $expression)
    {
    }

    public static function raw(string $expression): self
    {
        return new self($expression);
    }

    public static function eq(string $property, mixed $value): self
    {
        return self::comparison($property, 'eq', $value);
    }

    public static function ne(string $property, mixed $value): self
    {
        return self::comparison($property, 'ne', $value);
    }

    public static function gt(string $property, mixed $value): self
    {
        return self::comparison($property, 'gt', $value);
    }

    public static function lt(string $property, mixed $value): self
    {
        return self::comparison($property, 'lt', $value);
    }

    public static function ge(string $property, mixed $value): self
    {
        return self::comparison($property, 'ge', $value);
    }

    public static function le(string $property, mixed $value): self
    {
        return self::comparison($property, 'le', $value);
    }

    public static function startsWith(string $property, string $value): self
    {
        return new self(sprintf("startswith(%s,%s) eq true", $property, self::formatValue($value)));
    }

    public static function contains(string $property, string $value): self
    {
        // Snelstart uses substringof('needle', Haystack) eq true — note the argument order.
        return new self(sprintf("substringof(%s, %s) eq true", self::formatValue($value), $property));
    }

    public static function and(self ...$filters): self
    {
        return new self('(' . implode(' and ', array_map(static fn (self $f) => $f->expression, $filters)) . ')');
    }

    public static function or(self ...$filters): self
    {
        return new self('(' . implode(' or ', array_map(static fn (self $f) => $f->expression, $filters)) . ')');
    }

    public static function not(self $filter): self
    {
        return new self('not(' . $filter->expression . ')');
    }

    private static function comparison(string $property, string $operator, mixed $value): self
    {
        return new self(sprintf('%s %s %s', $property, $operator, self::formatValue($value)));
    }

    private static function formatValue(mixed $value): string
    {
        return match (true) {
            null === $value                     => 'null',
            is_bool($value)                     => $value ? 'true' : 'false',
            is_int($value), is_float($value)    => (string) $value,
            $value instanceof Guid              => sprintf("guid'%s'", $value->value),
            $value instanceof DateTimeInterface => sprintf("datetime'%s'", $value->format('Y-m-d\TH:i:s.v')),
            is_string($value)                   => sprintf("'%s'", str_replace("'", "''", $value)),
            default                             => throw new InvalidArgumentException('Filter value of unsupported type: ' . get_debug_type($value)),
        };
    }
}
