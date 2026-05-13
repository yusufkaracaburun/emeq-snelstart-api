<?php

declare(strict_types=1);

namespace Emeq\SnelstartApi\Exceptions;

/**
 * Raised on HTTP 400. Snelstart's foutcodes have the form `{ABC}-{NNNN}`
 * (e.g. `ALG-0100`, `ART-0042`, `BOE-0001`) where the three-letter prefix
 * indicates the resource that detected the violation:
 *
 *   ALG = generic, ART = artikelen, BLG = bijlagen, BOE = boekingen,
 *   BTW = btw aangifte, KPL = kostenplaatsen, REL = relaties,
 *   REF = extra velden, VOR = verkooporders, …
 *
 * The OpenAPI spec doesn't define a structured body schema, so we surface
 * whatever code(s) we can find via regex and keep the full body too.
 */
final class ValidationException extends SnelstartException
{
    /**
     * @param  list<string>  $errorCodes  Snelstart resource codes detected in the body (e.g. ['ALG-0100'])
     */
    public function __construct(
        string $message,
        public readonly array $errorCodes = [],
        public readonly string $rawBody = '',
    ) {
        parent::__construct($message);
    }

    public static function fromBody(string $body): self
    {
        $codes = self::extractErrorCodes($body);

        $message = [] !== $codes
            ? 'Snelstart API rejected the request with code(s) [' . implode(', ', $codes) . ']. Body: ' . self::truncate($body)
            : 'Snelstart API returned HTTP 400. Body: ' . self::truncate($body);

        return new self($message, $codes, $body);
    }

    /**
     * @return list<string>
     */
    private static function extractErrorCodes(string $body): array
    {
        if (false === preg_match_all('/\b([A-Z]{3}-\d{4})\b/', $body, $matches)) {
            return [];
        }

        return array_values(array_unique($matches[1]));
    }

    private static function truncate(string $body, int $max = 500): string
    {
        return mb_strlen($body) > $max ? mb_substr($body, 0, $max) . '…' : $body;
    }
}
