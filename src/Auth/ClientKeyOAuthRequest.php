<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Auth;

use Emeq\SnelstartApi\Data\SnelstartCredentials;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasFormBody;

/**
 * POST {auth_base_url}/b2b/token
 *
 * Body (application/x-www-form-urlencoded):
 *   grant_type=clientkey
 *   clientkey={credentials->clientKey}
 *
 * Response (200):
 *   { "access_token": "...", "token_type": "bearer", "expires_in": 3599 }
 *
 * Snelstart explicitly notes "het is belangrijk dat de credentials in de body
 * worden gezet" — never as query-string or basic-auth header.
 */
final class ClientKeyOAuthRequest extends Request implements HasBody
{
    use HasFormBody;

    protected Method $method = Method::POST;

    public function __construct(
        private readonly SnelstartCredentials $credentials,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return '/b2b/token';
    }

    /**
     * @return array{grant_type: string, clientkey: string}
     */
    protected function defaultBody(): array
    {
        return [
            'grant_type' => 'clientkey',
            'clientkey'  => $this->credentials->clientKey,
        ];
    }
}
