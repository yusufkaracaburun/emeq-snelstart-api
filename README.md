# emeq/snelstart-api

[![Latest Version on Packagist](https://img.shields.io/packagist/v/emeq/snelstart-api.svg?style=flat-square)](https://packagist.org/packages/emeq/snelstart-api)
[![Total Downloads](https://img.shields.io/packagist/dt/emeq/snelstart-api.svg?style=flat-square)](https://packagist.org/packages/emeq/snelstart-api)

Modern Laravel SDK voor de Snelstart B2B API v2. Wrapt OAuth2 (`grant_type=clientkey`), de Ocp-Apim subscription-key header, OData query parameters en alle 32 resource-categorieën. Bouwt op:

- **Saloon v3** voor HTTP — connectors, requests, mock-fixtures, retry middleware.
- **Spatie laravel-data** voor typed DTOs (gegenereerd uit Snelstart's OpenAPI spec).
- **Spatie laravel-package-tools** voor de standaard package-DSL.

> **Status**: in actieve ontwikkeling. v1.0 wordt geleverd in fases — zie `CHANGELOG.md` voor scope.

## Installatie

In je host-app's `composer.json`:

```json
{
  "repositories": [
    { "type": "path", "url": "backend/packages/snelstart-api", "options": { "symlink": true } }
  ],
  "require": {
    "emeq/snelstart-api": "*"
  }
}
```

Daarna:

```bash
composer require emeq/snelstart-api
php artisan vendor:publish --tag="snelstart-api-config"
```

## Credentials wiring

De package weet niets van jouw multi-tenancy-laag. Bind een `SnelstartCredentialResolver` in `AppServiceProvider`:

```php
use Emeq\SnelstartApi\Contracts\SnelstartCredentialResolver;
use App\Services\Snelstart\TenantCredentialResolver;

$this->app->bind(SnelstartCredentialResolver::class, TenantCredentialResolver::class);
```

Een minimale resolver:

```php
class TenantCredentialResolver implements SnelstartCredentialResolver
{
    public function resolve(): SnelstartCredentials
    {
        $tenant = tenant();

        return new SnelstartCredentials(
            clientKey:       $tenant->settings()->get('snelstart_client_key'),
            subscriptionKey: $tenant->settings()->get('snelstart_subscription_key'),
            subscriptionId:  $tenant->settings()->get('snelstart_subscription_id'),
        );
    }
}
```

## Usage

```php
use Emeq\SnelstartApi\Facades\Snelstart;

// Smoke-test
Snelstart::echo()->ping();

// OData query
$relaties = Snelstart::relaties()
    ->query()
    ->where(Filter::eq('Email', 'klant@voorbeeld.nl'))
    ->take(20)
    ->get();

// Create
$factuur = Snelstart::verkoopfacturen()->create($factuurDto);
```

## Testing

```bash
composer test
```

## License

MIT — zie [LICENSE.md](LICENSE.md).
