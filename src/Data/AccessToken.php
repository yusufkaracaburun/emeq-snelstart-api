<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Data;

use DateTimeImmutable;
use InvalidArgumentException;

/**
 * OAuth2 Bearer access token issued by Snelstart's auth endpoint.
 *
 * Snelstart returns `{ access_token, token_type: "bearer", expires_in: 3599 }`.
 * We convert `expires_in` into an absolute UTC instant so cache stores can decide
 * whether a token is still usable without needing to track issue-time elsewhere.
 */
final readonly class AccessToken
{
    public function __construct(
        public string $accessToken,
        public DateTimeImmutable $expiresAt,
    ) {
        if ('' === mb_trim($this->accessToken)) {
            throw new InvalidArgumentException('AccessToken: accessToken may not be empty.');
        }
    }

    public static function fromExpiresIn(string $accessToken, int $expiresIn, ?DateTimeImmutable $now = null): self
    {
        $now ??= new DateTimeImmutable();

        return new self(
            accessToken: $accessToken,
            expiresAt: $now->modify('+' . $expiresIn . ' seconds'),
        );
    }

    /**
     * @param  array{accessToken: string, expiresAt: string}  $data
     */
    public static function fromArray(array $data): self
    {
        return new self(
            accessToken: $data['accessToken'],
            expiresAt: new DateTimeImmutable($data['expiresAt']),
        );
    }

    /**
     * @param  int  $safetyMarginSeconds  treat the token as expired this many seconds *before* its real expiry
     */
    public function isExpired(int $safetyMarginSeconds = 0, ?DateTimeImmutable $now = null): bool
    {
        $now ??= new DateTimeImmutable();
        $cutoff = $this->expiresAt->modify('-' . $safetyMarginSeconds . ' seconds');

        return $now >= $cutoff;
    }

    /**
     * @return array{accessToken: string, expiresAt: string}
     */
    public function toArray(): array
    {
        return [
            'accessToken' => $this->accessToken,
            'expiresAt'   => $this->expiresAt->format(DATE_ATOM),
        ];
    }
}
