<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Http\Request;

use Saloon\Http\Request;

/**
 * Common base for every Snelstart resource-API request.
 *
 * Currently a marker class — concrete requests in Fase 7 set $method,
 * resolveEndpoint(), and (where applicable) defaultBody() / defaultQuery().
 * Keeping the indirection now means later we can add shared
 * authorisation-scope hints, telemetry, or response casts in one place.
 */
abstract class BaseRequest extends Request
{
}
