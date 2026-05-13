<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Tests\Support;

use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use Emeq\SnelstartApi\Data\SnelstartCredentials;

final class FakeCredentialResolver implements SnelstartCredentialResolver
{
    public function __construct(
        private readonly SnelstartCredentials $credentials,
    ) {
    }

    public static function with(
        string $clientKey = 'test-client-key',
        string $subscriptionKey = 'test-subscription-key',
        ?string $subscriptionId = 'test-subscription-id',
    ): self {
        return new self(new SnelstartCredentials(
            clientKey: $clientKey,
            subscriptionKey: $subscriptionKey,
            subscriptionId: $subscriptionId,
        ));
    }

    public function resolve(): SnelstartCredentials
    {
        return $this->credentials;
    }
}
