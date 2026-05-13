<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Exceptions\ValidationException;

it('extracts a single Snelstart error code from a body', function (): void {
    $e = ValidationException::fromBody('Het ID dient leeg te zijn. Foutcode: ALG-0100');

    expect($e->errorCodes)->toBe(['ALG-0100'])
        ->and($e->getMessage())->toContain('ALG-0100')
        ->and($e->rawBody)->toContain('ALG-0100');
});

it('extracts and deduplicates multiple error codes', function (): void {
    $e = ValidationException::fromBody(
        '{"errors":[{"code":"ART-0001"},{"code":"BOE-0042"},{"code":"ART-0001"}]}',
    );

    expect($e->errorCodes)->toBe(['ART-0001', 'BOE-0042']);
});

it('falls back to a plain HTTP 400 message when no code is found', function (): void {
    $e = ValidationException::fromBody('something went wrong but no code');

    expect($e->errorCodes)->toBe([])
        ->and($e->getMessage())->toContain('HTTP 400');
});

it('recognises all documented resource-code prefixes', function (string $code): void {
    $e = ValidationException::fromBody("error: {$code}");

    expect($e->errorCodes)->toBe([$code]);
})->with([
    'ALG-0100',  // algemeen
    'ART-0001',  // artikelen
    'BLG-0042',  // bijlagen
    'BOE-0007',  // boekingen
    'BTW-0099',  // btw aangifte
    'KPL-0011',  // kostenplaatsen
    'REL-0023',  // relaties
    'REF-0009',  // extra velden
    'VOR-0050',  // verkooporders
]);

it('rejects strings that look like codes but are not 3-letter-uppercase + 4-digit', function (): void {
    $e = ValidationException::fromBody('not-a-code abc-1234 AB-0001 ABCD-0001 ALG-12 ALG-12345');

    expect($e->errorCodes)->toBe([]);
});

it('truncates very long bodies in the message', function (): void {
    $longBody = str_repeat('x', 1000) . ' ALG-0100';

    $e = ValidationException::fromBody($longBody);

    expect(mb_strlen($e->getMessage()))->toBeLessThan(800)  // not the full 1000 chars
        ->and($e->getMessage())->toContain('…')             // truncation marker
        ->and($e->rawBody)->toBe($longBody);                // raw kept intact
});
