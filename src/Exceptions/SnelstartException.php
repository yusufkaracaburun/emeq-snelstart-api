<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

use RuntimeException;

/**
 * Base exception for every error raised by emeq/snelstart-api.
 *
 * Subclasses (added in later fases) map to specific failure modes:
 *  - AuthenticationException     — bad credentials / 401 on resource endpoints
 *  - RateLimitException          — 429
 *  - ValidationException         — 400 with Snelstart error code (ALG, ART, BOE, …)
 *  - NotFoundException           — 404
 *  - ServerException             — 5xx
 *  - MissingCredentialResolverException — host app forgot to bind the resolver
 */
class SnelstartException extends RuntimeException
{
}
