<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Http\Request;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Pass-through request for arbitrary Snelstart endpoints.
 *
 * Use this when you want to call a Snelstart endpoint without writing a
 * dedicated resource class — typically the gateway-app forwarding a
 * consumer's incoming HTTP request 1:1 to Snelstart, but also handy in
 * scripts and one-off integrations.
 *
 * ```php
 * $response = $snelstart->connector()->send(new RawSnelstartRequest(
 *     method: Method::GET,
 *     endpoint: '/relaties',
 *     query: ['$filter' => "Email eq 'a@b.nl'", '$top' => 5],
 * ));
 * ```
 *
 * The connector handles auth, retry, and error mapping automatically; this
 * class only carries the request shape. Property names are prefixed with
 * `rawX` because Saloon\Http\Request already declares non-readonly
 * `$headers`, `$query`, `$body`, `$config` properties that we can't
 * redeclare under a different mutability.
 */
class RawSnelstartRequest extends BaseRequest implements HasBody
{
    use HasJsonBody;

    protected Method $method;

    private readonly string $rawEndpoint;

    /** @var array<string, scalar|null> */
    private readonly array $rawQuery;

    /** @var array<string, mixed>|null */
    private readonly ?array $rawBody;

    /** @var array<string, string> */
    private readonly array $rawHeaders;

    /**
     * @param  array<string, scalar|null>  $query    OData / query parameters, sent as-is
     * @param  array<string, mixed>|null   $body     JSON body for POST/PUT/PATCH (null for GET/DELETE)
     * @param  array<string, string>       $headers  Extra headers (Authorization + Ocp-Apim are set by the connector)
     */
    public function __construct(
        Method $method,
        string $endpoint,
        array $query = [],
        ?array $body = null,
        array $headers = [],
    ) {
        $this->method      = $method;
        $this->rawEndpoint = $endpoint;
        $this->rawQuery    = $query;
        $this->rawBody     = $body;
        $this->rawHeaders  = $headers;
    }

    public function resolveEndpoint(): string
    {
        return $this->rawEndpoint;
    }

    /**
     * @return array<string, scalar|null>
     */
    protected function defaultQuery(): array
    {
        return $this->rawQuery;
    }

    /**
     * @return array<string, mixed>
     */
    protected function defaultBody(): array
    {
        return $this->rawBody ?? [];
    }

    /**
     * @return array<string, string>
     */
    protected function defaultHeaders(): array
    {
        return $this->rawHeaders;
    }
}
