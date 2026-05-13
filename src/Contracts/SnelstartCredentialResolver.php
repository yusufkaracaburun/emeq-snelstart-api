<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Contracts;

use Emeq\SnelstartApi\Data\SnelstartCredentials;

/**
 * Strategy that produces the SnelstartCredentials for the *current* request /
 * job / console-command. The host app implements this and binds it in the
 * container — see README.md "Credentials wiring".
 *
 * Typical implementations:
 *  - read from `tenant()->settings()` (stancl/tenancy)
 *  - read from `Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection`
 *  - read from `auth()->user()->organisation->snelstart_credentials`
 *  - read from `config('services.snelstart')` for single-tenant apps
 */
interface SnelstartCredentialResolver
{
    public function resolve(): SnelstartCredentials;
}
