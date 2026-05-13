<?php

declare(strict_types=1);

use Emeq\SnelstartApi\Http\Request\RawSnelstartRequest;
use Saloon\Enums\Method;

it('exposes its method, endpoint, and query', function (): void {
    $request = new RawSnelstartRequest(
        method: Method::GET,
        endpoint: '/relaties',
        query: ['$filter' => "Email eq 'a@b.nl'", '$top' => 10],
    );

    expect($request->getMethod())->toBe(Method::GET)
        ->and($request->resolveEndpoint())->toBe('/relaties')
        ->and($request->query()->all())->toBe(['$filter' => "Email eq 'a@b.nl'", '$top' => 10]);
});

it('supports POST with a JSON body', function (): void {
    $request = new RawSnelstartRequest(
        method: Method::POST,
        endpoint: '/relaties',
        body: ['Naam' => 'Acme BV', 'Email' => 'info@acme.nl'],
    );

    expect($request->getMethod())->toBe(Method::POST)
        ->and($request->body()->all())->toBe(['Naam' => 'Acme BV', 'Email' => 'info@acme.nl']);
});

it('treats a null body as no body', function (): void {
    $request = new RawSnelstartRequest(method: Method::GET, endpoint: '/echo');

    expect($request->body()->all())->toBe([]);
});

it('passes extra headers through to the request', function (): void {
    $request = new RawSnelstartRequest(
        method: Method::GET,
        endpoint: '/relaties',
        headers: ['X-Correlation-Id' => 'abc-123'],
    );

    expect($request->headers()->get('X-Correlation-Id'))->toBe('abc-123');
});

it('supports every Snelstart HTTP method', function (Method $method): void {
    $request = new RawSnelstartRequest(method: $method, endpoint: '/test');

    expect($request->getMethod())->toBe($method);
})->with([
    Method::GET,
    Method::POST,
    Method::PUT,
    Method::PATCH,
    Method::DELETE,
]);
