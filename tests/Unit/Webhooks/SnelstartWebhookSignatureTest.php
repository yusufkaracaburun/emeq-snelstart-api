<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Webhooks\SnelstartWebhookSignature;

it('signs and verifies a payload roundtrip with a single secret', function (): void {
    $body   = '{"event":"Relatie.Created","administratieId":"00000000-0000-0000-0000-000000000001"}';
    $secret = 'shared-secret-from-snelstart-portal';

    $signature = SnelstartWebhookSignature::sign($body, $secret);

    expect(SnelstartWebhookSignature::verify($body, $signature, $secret))->toBeTrue();
});

it('returns false when signature does not match the body', function (): void {
    $body           = '{"event":"Relatie.Created"}';
    $secret         = 'correct-secret';
    $wrongSignature = SnelstartWebhookSignature::sign($body, 'attacker-guess');

    expect(SnelstartWebhookSignature::verify($body, $wrongSignature, $secret))->toBeFalse();
});

it('returns false when the header is null or empty', function (): void {
    $body   = 'doesnt-matter';
    $secret = 'any-secret';

    expect(SnelstartWebhookSignature::verify($body, null, $secret))->toBeFalse();
    expect(SnelstartWebhookSignature::verify($body, '', $secret))->toBeFalse();
});

it('accepts an array of secrets and matches any (rotation-window)', function (): void {
    $body    = '{"event":"Verkoopfactuur.Created"}';
    $secretA = 'primary-secret-active';
    $secretB = 'rotating-in-secret-next';

    $signedWithA = SnelstartWebhookSignature::sign($body, $secretA);
    $signedWithB = SnelstartWebhookSignature::sign($body, $secretB);

    expect(SnelstartWebhookSignature::verify($body, $signedWithA, [$secretA, $secretB]))->toBeTrue();
    expect(SnelstartWebhookSignature::verify($body, $signedWithA, [$secretB, $secretA]))->toBeTrue();
    expect(SnelstartWebhookSignature::verify($body, $signedWithB, [$secretA, $secretB]))->toBeTrue();
    expect(SnelstartWebhookSignature::verify($body, $signedWithB, [$secretB, $secretA]))->toBeTrue();
});

it('returns false when the secrets array is empty', function (): void {
    $body        = 'any-body';
    $validHeader = SnelstartWebhookSignature::sign($body, 'unrelated');

    expect(SnelstartWebhookSignature::verify($body, $validHeader, []))->toBeFalse();
});

it('supports a non-default algorithm', function (): void {
    $body   = '{"event":"Relatie.Updated"}';
    $secret = 'shared-secret';
    $sha512 = SnelstartWebhookSignature::sign($body, $secret, 'sha512');

    expect(SnelstartWebhookSignature::verify($body, $sha512, $secret, 'sha512'))->toBeTrue();
    expect(SnelstartWebhookSignature::verify($body, $sha512, $secret))->toBeFalse();
});

it('sanitizes null and empty entries in the secrets array', function (): void {
    $body      = '{"event":"Relatie.Created"}';
    $secret    = 'real-secret';
    $signature = SnelstartWebhookSignature::sign($body, $secret);

    expect(SnelstartWebhookSignature::verify($body, $signature, [null, '', $secret]))->toBeTrue();
});

it('sign() returns a lowercase hex string of the expected length', function (): void {
    $signature = SnelstartWebhookSignature::sign('payload', 'secret');

    expect($signature)->toMatch('/^[0-9a-f]{64}$/');
});
