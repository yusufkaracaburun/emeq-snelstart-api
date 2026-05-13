<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\OData;

use InvalidArgumentException;

/**
 * Fluent assembler for Snelstart OData query parameters.
 *
 * ```php
 * $query = (new QueryBuilder)
 *     ->where(Filter::eq('Email', 'a@b.nl'))
 *     ->orWhere(Filter::startsWith('Naam', 'Acme'))
 *     ->select('Id', 'Naam')
 *     ->top(50)
 *     ->skip(0)
 *     ->orderBy('Naam');
 *
 * $params = $query->toArray();
 * // ['$filter' => "(Email eq 'a@b.nl' or startswith(Naam,'Acme') eq true)",
 * //  '$select' => 'Id,Naam', '$top' => 50, '$skip' => 0, '$orderby' => 'Naam']
 * ```
 *
 * Pass the result to RawSnelstartRequest's `query` parameter, or attach
 * to a typed resource request via `->query()->merge(...)`.
 *
 * Snelstart caps `$top` at 500. We don't enforce that here — let the API
 * reject the request if you exceed it, so the user sees the actual error
 * code and the limit can change without us shipping a release.
 */
final class QueryBuilder
{
    /** @var list<Filter> */
    private array $filters = [];

    /** @var list<string> */
    private array $select = [];

    private ?string $orderBy = null;

    private bool $orderDescending = false;

    private ?int $top = null;

    private ?int $skip = null;

    private ?string $apply = null;

    /**
     * Add a filter combined with AND to existing filters.
     */
    public function where(Filter $filter): self
    {
        $this->filters[] = $filter;

        return $this;
    }

    /**
     * Replace the current filter chain with `(currentFilter OR newFilter)`.
     */
    public function orWhere(Filter $filter): self
    {
        if ([] === $this->filters) {
            $this->filters = [$filter];

            return $this;
        }

        $combined = Filter::or(
            1 === count($this->filters) ? $this->filters[0] : Filter::and(...$this->filters),
            $filter,
        );

        $this->filters = [$combined];

        return $this;
    }

    public function select(string ...$properties): self
    {
        $this->select = array_values($properties);

        return $this;
    }

    public function orderBy(string $property, bool $descending = false): self
    {
        $this->orderBy         = $property;
        $this->orderDescending = $descending;

        return $this;
    }

    public function top(int $count): self
    {
        if ($count < 0) {
            throw new InvalidArgumentException('QueryBuilder::top() expects a non-negative integer.');
        }

        $this->top = $count;

        return $this;
    }

    public function skip(int $count): self
    {
        if ($count < 0) {
            throw new InvalidArgumentException('QueryBuilder::skip() expects a non-negative integer.');
        }

        $this->skip = $count;

        return $this;
    }

    /**
     * Set a raw `$apply` expression. Useful for grootboekmutaties aggregations
     * (e.g. `groupby((Kostenplaats),aggregate(Saldo with sum as Totaal))`).
     */
    public function apply(string $expression): self
    {
        $this->apply = $expression;

        return $this;
    }

    /**
     * @return array<string, string|int>
     */
    public function toArray(): array
    {
        $params = [];

        if ([] !== $this->filters) {
            $params['$filter'] = 1 === count($this->filters)
                ? $this->filters[0]->expression
                : Filter::and(...$this->filters)->expression;
        }

        if ([] !== $this->select) {
            $params['$select'] = implode(',', $this->select);
        }

        if (null !== $this->orderBy) {
            $params['$orderby'] = $this->orderBy . ($this->orderDescending ? ' desc' : '');
        }

        if (null !== $this->top) {
            $params['$top'] = $this->top;
        }

        if (null !== $this->skip) {
            $params['$skip'] = $this->skip;
        }

        if (null !== $this->apply) {
            $params['$apply'] = $this->apply;
        }

        return $params;
    }
}
