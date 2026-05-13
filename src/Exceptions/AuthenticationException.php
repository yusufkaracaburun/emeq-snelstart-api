<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

/**
 * Raised when Snelstart's OAuth2 token endpoint rejects the clientKey, or
 * when an API endpoint replies 401/403 (token expired or scope mismatch).
 *
 * The clientKey is intentionally never embedded in the message — keep
 * fingerprints, not raw secrets, in logs.
 */
final class AuthenticationException extends SnelstartException
{
    public static function tokenFetchFailed(int $status, string $body, string $credentialFingerprint): self
    {
        return new self(sprintf(
            'Snelstart token endpoint returned HTTP %d for credentials (fp:%s). Body: %s',
            $status,
            mb_substr($credentialFingerprint, 0, 12),
            self::truncate($body),
        ));
    }

    public static function malformedTokenResponse(string $body): self
    {
        return new self('Snelstart token endpoint returned a response without access_token / expires_in. Body: ' . self::truncate($body));
    }

    private static function truncate(string $body, int $max = 500): string
    {
        return mb_strlen($body) > $max ? mb_substr($body, 0, $max) . '…' : $body;
    }
}
