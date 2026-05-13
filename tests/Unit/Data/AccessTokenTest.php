<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Data\AccessToken;

it('builds from expires_in seconds', function (): void {
    $now = new DateTimeImmutable('2026-01-01T12:00:00Z');

    $token = AccessToken::fromExpiresIn(
        accessToken: 'eyJ...',
        expiresIn: 3599,
        now: $now,
    );

    expect($token->accessToken)->toBe('eyJ...')
        ->and($token->expiresAt->format('U'))->toBe((string) ($now->getTimestamp() + 3599));
});

it('roundtrips through toArray/fromArray', function (): void {
    $original = new AccessToken(
        accessToken: 'token-abc',
        expiresAt: new DateTimeImmutable('2026-05-13T18:00:00+00:00'),
    );

    $copy = AccessToken::fromArray($original->toArray());

    expect($copy->accessToken)->toBe($original->accessToken)
        ->and($copy->expiresAt->format(DATE_ATOM))->toBe($original->expiresAt->format(DATE_ATOM));
});

it('reports expired correctly without safety margin', function (): void {
    $token = new AccessToken('t', new DateTimeImmutable('2026-01-01T12:00:00Z'));

    expect($token->isExpired(now: new DateTimeImmutable('2026-01-01T11:59:59Z')))->toBeFalse()
        ->and($token->isExpired(now: new DateTimeImmutable('2026-01-01T12:00:00Z')))->toBeTrue()
        ->and($token->isExpired(now: new DateTimeImmutable('2026-01-01T12:00:01Z')))->toBeTrue();
});

it('applies the safety margin', function (): void {
    $token = new AccessToken('t', new DateTimeImmutable('2026-01-01T12:00:00Z'));

    // 60s margin means "treat as expired starting at 11:59:00"
    expect($token->isExpired(safetyMarginSeconds: 60, now: new DateTimeImmutable('2026-01-01T11:58:59Z')))->toBeFalse()
        ->and($token->isExpired(safetyMarginSeconds: 60, now: new DateTimeImmutable('2026-01-01T11:59:00Z')))->toBeTrue();
});

it('rejects empty access tokens', function (): void {
    expect(fn () => new AccessToken('', new DateTimeImmutable()))
        ->toThrow(InvalidArgumentException::class, 'accessToken may not be empty');
});
