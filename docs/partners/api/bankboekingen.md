---
source: openapi://snelstart-b2b-v2
tag: bankboekingen
operations: 5
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `bankboekingen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `bankboekingen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /bankboekingen`

_/v2/bankboekingen (GET) (OData)_

**operationId:** `v2-bankboekingen-GET-OData`
**Required scopes:** `bankieren:read`

Geeft alle beschikbare bankboekinen (BankboekingModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Bankboekingen-BankboekingModelArray`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /bankboekingen`

_/v2/bankboekingen (POST)_

**operationId:** `v2-bankboekingen-POST`
**Required scopes:** `bankieren:write`

Maakt een nieuwe Bankboeking aan.

**Request body:**

De nieuw aan te maken BankboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "grootboekBoekingsRegels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "debet": 0,
      "credit": 0,
      "btwSoort": "Geen"
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "btwBoekingsregels": [
    {
      "debet": 0,
      "credit": 0,
      "type": "TeVorderenBtwType",
      "tarief": "Hoog"
    }
  ],
  "bedragUitgegeven": 0,
  "bedragOntvangen": 0,
  "dagboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "grootboekBoekingsRegels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "debet": 0,
      "credit": 0,
      "btwSoort": "Geen"
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "btwBoekingsregels": [
    {
      "debet": 0,
      "credit": 0,
      "type": "TeVorderenBtwType",
      "tarief": "Hoog"
    }
  ],
  "bedragUitgegeven": 0,
  "bedragOntvangen": 0,
  "dagboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /bankboekingen/{id}`

_/v2/bankboekingen/{id} (DELETE)_

**operationId:** `v2-bankboekingen-id-DELETE`
**Required scopes:** `bankieren:write`

Verwijdert een actieve Bankboeking op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het BankboekingModel van de te verwijderen Bankboeking.

**Responses:**

- **200** → [`BankboekingenIdDelete200ApplicationJsonResponse`](_schemas.md#bankboekingeniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /bankboekingen/{id}`

_/v2/bankboekingen/{id} (GET)_

**operationId:** `v2-bankboekingen-id-GET`
**Required scopes:** `bankieren:read`

Geeft een Bankboeking terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het BankboekingModel van de op te halen Bankboeking.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /bankboekingen/{id}`

_/v2/bankboekingen/{id} (PUT)_

**operationId:** `v2-bankboekingen-id-PUT`
**Required scopes:** `bankieren:write`

Werkt een bestaande bankboeking bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het BankboekingModel van de te wijziging kostenplaats.

**Request body:**

De bij te werken BankboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "grootboekBoekingsRegels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "debet": 0,
      "credit": 0,
      "btwSoort": "Geen"
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "btwBoekingsregels": [
    {
      "debet": 0,
      "credit": 0,
      "type": "TeVorderenBtwType",
      "tarief": "Hoog"
    }
  ],
  "bedragUitgegeven": 0,
  "bedragOntvangen": 0,
  "dagboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "grootboekBoekingsRegels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "debet": 0,
      "credit": 0,
      "btwSoort": "Geen"
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "debet": 0,
      "credit": 0
    }
  ],
  "btwBoekingsregels": [
    {
      "debet": 0,
      "credit": 0,
      "type": "TeVorderenBtwType",
      "tarief": "Hoog"
    }
  ],
  "bedragUitgegeven": 0,
  "bedragOntvangen": 0,
  "dagboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-bankboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
