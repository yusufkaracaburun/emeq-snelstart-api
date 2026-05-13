<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;

/**
 * Thrown when the package is used but the host app never bound a
 * SnelstartCredentialResolver in the container.
 *
 * The package is intentionally tenant-agnostic — it does not assume any
 * particular multi-tenancy layer (stancl/tenancy, spatie/multitenancy,
 * custom), so the host app MUST tell it how to fetch credentials.
 */
final class MissingCredentialResolverException extends SnelstartException
{
    public static function notBound(): self
    {
        return new self(
            sprintf(
                'No %s binding found in the container. Bind your resolver in a ServiceProvider, e.g.: ' .
                "\$this->app->bind(%s::class, YourTenantResolver::class);",
                SnelstartCredentialResolver::class,
                SnelstartCredentialResolver::class,
            ),
        );
    }
}
