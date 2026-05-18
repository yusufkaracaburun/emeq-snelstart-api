# Changelog

All notable changes to `emeq/snelstart-api` will be documented in this file.

## v0.2.0 - 2026-05-18

### Changed

- **Breaking:** bumped `saloonphp/saloon` from `^3.0` to `^4.0` and `saloonphp/laravel-plugin` from `^3.0` to `^4.0`. Saloon v4 removes `Connector::resolveRequestUrl()` and makes `resolveBaseUrl()` the single source of truth for URL resolution; the SDK's `SnelstartConnector` and `AuthConnector` already implement `resolveBaseUrl()` so consumers only need to bump their Composer constraint.
- Connector signatures and `getRequestException()` hook follow the Saloon v4 contract. The retry-hook in `SnelstartConnector` now catches `Saloon\Exceptions\Request\FatalRequestException` and `Saloon\Exceptions\Request\RequestException` directly.

### Security

- Closed three upstream Saloon advisories by requiring v4.0+. Reference: https://packagist.org/packages/saloonphp/saloon/advisories
  - `PKSA-xnj5-w74d-6wmz` — HIGH — Insecure Deserialization in `AccessTokenAuthenticator` (CVE-2026-33942 / GHSA-rf88-776r-rcq9).
  - `PKSA-5szq-gvrg-ttfq` — MEDIUM — SSRF and credential leakage via absolute URL in endpoint overriding the connector base URL (CVE-2026-33182 / GHSA-c83f-3xp6-hfcp).
  - `PKSA-rnpm-45mg-w6ht` — MEDIUM — Fixture Name Path Traversal in `MockClient` (CVE-2026-33183 / GHSA-f7xc-5852-fj99).

### Added

- `Emeq\SnelstartApi\Webhooks\SnelstartWebhookSignature` — HMAC verifier and signer for Snelstart-emitted webhook payloads (commit `e71a9bf`).
- `Emeq\SnelstartApi\Http\Middleware\VerifySnelstartSignature` — self-contained webhook-gate middleware that consumers can mount on their webhook routes (commit `f403fc6`).

### Notes

- Pest suite remains green after the upgrade: 122 tests passed / 211 assertions on the `master` tip.
