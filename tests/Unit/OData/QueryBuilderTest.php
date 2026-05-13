<?php

declare(strict_types=1);

use Emeq\SnelstartApi\OData\Filter;
use Emeq\SnelstartApi\OData\QueryBuilder;

it('returns an empty array when nothing is set', function (): void {
    expect((new QueryBuilder())->toArray())->toBe([]);
});

it('renders a single filter as $filter', function (): void {
    $params = (new QueryBuilder())
        ->where(Filter::eq('Email', 'a@b.nl'))
        ->toArray();

    expect($params)->toBe(['$filter' => "Email eq 'a@b.nl'"]);
});

it('combines multiple where() calls with AND', function (): void {
    $params = (new QueryBuilder())
        ->where(Filter::eq('Email', 'a@b.nl'))
        ->where(Filter::gt('ModifiedOn', new DateTimeImmutable('2020-01-01T00:00:00')))
        ->toArray();

    expect($params['$filter'])->toBe("(Email eq 'a@b.nl' and ModifiedOn gt datetime'2020-01-01T00:00:00.000')");
});

it('renders orWhere() on top of an existing filter', function (): void {
    $params = (new QueryBuilder())
        ->where(Filter::eq('Status', 'Active'))
        ->orWhere(Filter::eq('Status', 'Pending'))
        ->toArray();

    expect($params['$filter'])->toBe("(Status eq 'Active' or Status eq 'Pending')");
});

it('combines where()->where()->orWhere() correctly', function (): void {
    $params = (new QueryBuilder())
        ->where(Filter::eq('Email', 'a@b.nl'))
        ->where(Filter::eq('Type', 'Klant'))
        ->orWhere(Filter::eq('Status', 'Archived'))
        ->toArray();

    expect($params['$filter'])->toBe("((Email eq 'a@b.nl' and Type eq 'Klant') or Status eq 'Archived')");
});

it('renders select as a comma-separated property list', function (): void {
    $params = (new QueryBuilder())->select('Id', 'Naam', 'Email')->toArray();

    expect($params)->toBe(['$select' => 'Id,Naam,Email']);
});

it('renders top and skip as integers', function (): void {
    $params = (new QueryBuilder())->top(50)->skip(100)->toArray();

    expect($params)->toBe(['$top' => 50, '$skip' => 100]);
});

it('rejects negative top/skip', function (): void {
    expect(fn () => (new QueryBuilder())->top(-1))->toThrow(InvalidArgumentException::class)
        ->and(fn () => (new QueryBuilder())->skip(-1))->toThrow(InvalidArgumentException::class);
});

it('renders orderBy ascending and descending', function (): void {
    expect((new QueryBuilder())->orderBy('Naam')->toArray())->toBe(['$orderby' => 'Naam'])
        ->and((new QueryBuilder())->orderBy('Naam', descending: true)->toArray())->toBe(['$orderby' => 'Naam desc']);
});

it('renders apply() expressions verbatim for grootboekmutaties aggregations', function (): void {
    $params = (new QueryBuilder())
        ->apply('groupby((Kostenplaats),aggregate(Saldo with sum as Totaal))')
        ->toArray();

    expect($params)->toBe(['$apply' => 'groupby((Kostenplaats),aggregate(Saldo with sum as Totaal))']);
});

it('produces the canonical paging example from the OData docs', function (): void {
    $params = (new QueryBuilder())->skip(500)->top(500)->toArray();

    // Order is whatever QueryBuilder emits; what matters is the values.
    expect($params)
        ->toHaveCount(2)
        ->toHaveKey('$top', 500)
        ->toHaveKey('$skip', 500);
});

it('assembles every parameter together', function (): void {
    $params = (new QueryBuilder())
        ->where(Filter::startsWith('Naam', 'Test'))
        ->select('Id', 'Naam')
        ->orderBy('Naam')
        ->top(10)
        ->skip(0)
        ->toArray();

    expect($params)->toBe([
        '$filter'  => "startswith(Naam,'Test') eq true",
        '$select'  => 'Id,Naam',
        '$orderby' => 'Naam',
        '$top'     => 10,
        '$skip'    => 0,
    ]);
});
