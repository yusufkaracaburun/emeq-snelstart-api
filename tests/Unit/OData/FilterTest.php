<?php

declare(strict_types=1);

use Emeq\SnelstartApi\OData\Filter;
use Emeq\SnelstartApi\OData\Guid;

it('builds eq with a quoted string', function (): void {
    expect(Filter::eq('Email', 'a@b.nl')->expression)->toBe("Email eq 'a@b.nl'");
});

it('escapes single quotes in string values', function (): void {
    expect(Filter::eq('Naam', "O'Brien")->expression)->toBe("Naam eq 'O''Brien'");
});

it('builds eq with a guid', function (): void {
    $guid = Guid::from('75b4fe7b-062b-4ae1-bad1-5c5e3866a2ae');

    expect(Filter::eq('Id', $guid)->expression)->toBe("Id eq guid'75b4fe7b-062b-4ae1-bad1-5c5e3866a2ae'");
});

it('rejects malformed GUIDs', function (): void {
    expect(fn () => Guid::from('not-a-guid'))->toThrow(InvalidArgumentException::class, 'invalid UUID format');
});

it('builds gt with a datetime including millisecond precision', function (): void {
    $when = new DateTimeImmutable('2017-07-16T23:59:59.999');

    expect(Filter::gt('ModifiedOn', $when)->expression)->toBe("ModifiedOn gt datetime'2017-07-16T23:59:59.999'");
});

it('emits null for null values without quotes', function (): void {
    expect(Filter::ne('IncassoSoort', null)->expression)->toBe('IncassoSoort ne null');
});

it('formats booleans and numbers as bare literals', function (): void {
    expect(Filter::eq('IsActive', true)->expression)->toBe('IsActive eq true')
        ->and(Filter::eq('Aantal', 6)->expression)->toBe('Aantal eq 6')
        ->and(Filter::eq('Prijs', 12.5)->expression)->toBe('Prijs eq 12.5');
});

it('builds startsWith', function (): void {
    expect(Filter::startsWith('Naam', 'Test')->expression)->toBe("startswith(Naam,'Test') eq true");
});

it('builds substringof with argument order needle, haystack', function (): void {
    expect(Filter::contains('Naam', 'Test')->expression)->toBe("substringof('Test', Naam) eq true");
});

it('combines filters with AND', function (): void {
    $combined = Filter::and(
        Filter::eq('Email', 'a@b.nl'),
        Filter::gt('ModifiedOn', new DateTimeImmutable('2020-01-01T00:00:00')),
    );

    expect($combined->expression)->toBe("(Email eq 'a@b.nl' and ModifiedOn gt datetime'2020-01-01T00:00:00.000')");
});

it('combines filters with OR', function (): void {
    $combined = Filter::or(
        Filter::eq('Status', 'Active'),
        Filter::eq('Status', 'Pending'),
    );

    expect($combined->expression)->toBe("(Status eq 'Active' or Status eq 'Pending')");
});

it('negates filters with NOT', function (): void {
    expect(Filter::not(Filter::eq('Email', 'a@b.nl'))->expression)
        ->toBe("not(Email eq 'a@b.nl')");
});

it('exposes a raw escape hatch for nested-property filters', function (): void {
    $raw = Filter::raw("VestigingsAdres/Land/Id eq guid'3098d822-6e46-4ebe-a84b-aaad352a70d2'");

    expect($raw->expression)->toBe("VestigingsAdres/Land/Id eq guid'3098d822-6e46-4ebe-a84b-aaad352a70d2'");
});

it('rejects values of unsupported types', function (): void {
    expect(fn () => Filter::eq('X', new stdClass()))->toThrow(InvalidArgumentException::class, 'unsupported type');
});
