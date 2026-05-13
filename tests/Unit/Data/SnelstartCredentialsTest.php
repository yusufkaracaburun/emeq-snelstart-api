<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Data\SnelstartCredentials;

it('builds from an array', function (): void {
    $credentials = SnelstartCredentials::fromArray([
        'clientKey'       => 'ck',
        'subscriptionKey' => 'sk',
        'subscriptionId'  => 'sid',
    ]);

    expect($credentials->clientKey)->toBe('ck')
        ->and($credentials->subscriptionKey)->toBe('sk')
        ->and($credentials->subscriptionId)->toBe('sid');
});

it('treats subscriptionId as optional', function (): void {
    $credentials = SnelstartCredentials::fromArray([
        'clientKey'       => 'ck',
        'subscriptionKey' => 'sk',
    ]);

    expect($credentials->subscriptionId)->toBeNull();
});

it('rejects empty clientKey', function (): void {
    expect(fn () => new SnelstartCredentials(clientKey: '', subscriptionKey: 'sk'))
        ->toThrow(InvalidArgumentException::class, 'clientKey may not be empty');
});

it('rejects empty subscriptionKey', function (): void {
    expect(fn () => new SnelstartCredentials(clientKey: 'ck', subscriptionKey: ' '))
        ->toThrow(InvalidArgumentException::class, 'subscriptionKey may not be empty');
});

it('produces a stable, non-reversible fingerprint', function (): void {
    $first  = new SnelstartCredentials(clientKey: 'abc', subscriptionKey: 'sk');
    $second = new SnelstartCredentials(clientKey: 'abc', subscriptionKey: 'different');
    $third  = new SnelstartCredentials(clientKey: 'xyz', subscriptionKey: 'sk');

    expect($first->fingerprint())
        ->toBe($second->fingerprint())                // same clientKey ⇒ same fingerprint
        ->not->toContain('abc')                       // never leaks the raw clientKey
        ->toHaveLength(64)                            // sha256 hex
        ->and($third->fingerprint())->not->toBe($first->fingerprint());
});
