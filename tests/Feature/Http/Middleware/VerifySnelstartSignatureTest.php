<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Webhooks\SnelstartWebhookSignature;
use Illuminate\Support\Facades\Route;

const TEST_ROUTE       = '/__test/snelstart-webhook';
const PRIMARY_SECRET   = 'primary-shared-secret';
const SECONDARY_SECRET = 'rotating-in-secret-next';

beforeEach(function (): void {
    config([
        'snelstart.webhook.secret'           => PRIMARY_SECRET,
        'snelstart.webhook.secret_next'      => null,
        'snelstart.webhook.signature_header' => 'X-SnelStart-Signature',
        'snelstart.webhook.signature_algo'   => 'sha256',
    ]);

    Route::post(TEST_ROUTE, fn () => response('ok', 200))
        ->middleware('verify.snelstart.signature');
});

it('passes a valid signature through to the next handler', function (): void {
    $body      = '{"event":"Relatie.Created"}';
    $signature = SnelstartWebhookSignature::sign($body, PRIMARY_SECRET);

    $response = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_SNELSTART_SIGNATURE' => $signature, 'CONTENT_TYPE' => 'application/json'],
        content: $body,
    );

    $response->assertStatus(200);
    expect($response->getContent())->toBe('ok');
});

it('returns 401 with empty body on invalid signature', function (): void {
    $body           = '{"event":"Relatie.Created"}';
    $wrongSignature = SnelstartWebhookSignature::sign($body, 'wrong-secret');

    $response = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_SNELSTART_SIGNATURE' => $wrongSignature, 'CONTENT_TYPE' => 'application/json'],
        content: $body,
    );

    $response->assertStatus(401);
    expect($response->getContent())->toBe('');
});

it('returns 401 when the signature header is missing', function (): void {
    $response = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['CONTENT_TYPE' => 'application/json'],
        content: '{"event":"Relatie.Created"}',
    );

    $response->assertStatus(401);
    expect($response->getContent())->toBe('');
});

it('returns 500 when no webhook secret is configured', function (): void {
    config([
        'snelstart.webhook.secret'      => null,
        'snelstart.webhook.secret_next' => null,
    ]);

    $response = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_SNELSTART_SIGNATURE' => 'anything', 'CONTENT_TYPE' => 'application/json'],
        content: '{"event":"Relatie.Created"}',
    );

    $response->assertStatus(500);
});

it('accepts a signature signed with secret_next during a rotation window', function (): void {
    config([
        'snelstart.webhook.secret'      => PRIMARY_SECRET,
        'snelstart.webhook.secret_next' => SECONDARY_SECRET,
    ]);

    $body      = '{"event":"Verkoopfactuur.Created"}';
    $signature = SnelstartWebhookSignature::sign($body, SECONDARY_SECRET);

    $response = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_SNELSTART_SIGNATURE' => $signature, 'CONTENT_TYPE' => 'application/json'],
        content: $body,
    );

    $response->assertStatus(200);
});

it('reads the header name from config', function (): void {
    config(['snelstart.webhook.signature_header' => 'X-Custom-Sig']);

    $body      = '{"event":"Relatie.Created"}';
    $signature = SnelstartWebhookSignature::sign($body, PRIMARY_SECRET);

    $blocked = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_SNELSTART_SIGNATURE' => $signature, 'CONTENT_TYPE' => 'application/json'],
        content: $body,
    );
    $blocked->assertStatus(401);

    $allowed = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_CUSTOM_SIG' => $signature, 'CONTENT_TYPE' => 'application/json'],
        content: $body,
    );
    $allowed->assertStatus(200);
});

it('reads the algorithm from config and forwards it to the verifier', function (): void {
    config(['snelstart.webhook.signature_algo' => 'sha512']);

    $body      = '{"event":"Relatie.Created"}';
    $signature = SnelstartWebhookSignature::sign($body, PRIMARY_SECRET, 'sha512');

    $response = $this->call(
        method: 'POST',
        uri: TEST_ROUTE,
        server: ['HTTP_X_SNELSTART_SIGNATURE' => $signature, 'CONTENT_TYPE' => 'application/json'],
        content: $body,
    );

    $response->assertStatus(200);
});
