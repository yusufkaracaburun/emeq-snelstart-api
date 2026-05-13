<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Exceptions\NotFoundException;
use Emeq\SnelstartApi\Exceptions\RateLimitException;
use Emeq\SnelstartApi\Exceptions\ServerException;
use Emeq\SnelstartApi\Exceptions\SnelstartException;

it('NotFoundException includes the URL', function (): void {
    $e = NotFoundException::forUrl('https://b2bapi.snelstart.nl/v2/relaties/abc');

    expect($e)->toBeInstanceOf(SnelstartException::class)
        ->and($e->getMessage())->toContain('/relaties/abc')
        ->and($e->getMessage())->toContain('404');
});

it('RateLimitException captures retry-after seconds', function (): void {
    $e = RateLimitException::fromBody('too many requests', 5);

    expect($e->retryAfterSeconds)->toBe(5)
        ->and($e->getMessage())->toContain('retry after 5s')
        ->and($e)->toBeInstanceOf(SnelstartException::class);
});

it('RateLimitException leaves retryAfter null when not provided', function (): void {
    $e = RateLimitException::fromBody('throttled', null);

    expect($e->retryAfterSeconds)->toBeNull()
        ->and($e->getMessage())->not->toContain('retry after');
});

it('ServerException reports the HTTP status', function (int $status): void {
    $e = ServerException::fromResponse($status, 'gateway timeout');

    expect($e->getMessage())->toContain("HTTP {$status}")
        ->and($e->getMessage())->toContain('gateway timeout')
        ->and($e)->toBeInstanceOf(SnelstartException::class);
})->with([500, 502, 503, 504]);

it('all exception bodies are truncated for runaway responses', function (): void {
    $huge = str_repeat('payload-', 200);  // 1600 chars

    $e = ServerException::fromResponse(503, $huge);

    expect(mb_strlen($e->getMessage()))->toBeLessThan(800)
        ->and($e->getMessage())->toContain('…');
});
