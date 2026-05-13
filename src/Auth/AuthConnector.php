<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Auth;

use Saloon\Http\Connector;

/**
 * Dedicated Saloon connector for Snelstart's OAuth2 token endpoint.
 *
 * Kept separate from SnelstartConnector (Fase 4) because:
 *  - it hits a different host (auth.snelstart.nl vs b2bapi.snelstart.nl)
 *  - it carries no Bearer token / subscription-key headers
 *  - it should NOT participate in the resource-API retry / rate-limit middleware
 *
 * Bound as a singleton in SnelstartServiceProvider so MockClient::class fixtures
 * applied in tests reach this connector too.
 */
class AuthConnector extends Connector
{
    public function __construct(
        private readonly string $baseUrl,
        private readonly int $timeoutSeconds = 10,
    ) {
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
        ];
    }

    protected function defaultConfig(): array
    {
        return [
            'timeout' => $this->timeoutSeconds,
        ];
    }
}
