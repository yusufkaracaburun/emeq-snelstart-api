---
source: openapi://snelstart-b2b-v2
tag: memoriaalboekingen
operations: 4
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `memoriaalboekingen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `memoriaalboekingen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `POST /memoriaalboekingen`

_/v2/memoriaalboekingen (POST)_

**operationId:** `v2-memoriaalboekingen-POST`
**Required scopes:** `memoriaal:write`

Maakt een nieuwe memoriaalboeking aan.

**Request body:**

De nieuw aan te maken MemoriaalboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "memoriaalBoekingsRegels": [
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
      "credit": 0
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
  "dagboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "memoriaalBoekingsRegels": [
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
      "credit": 0
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
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

- **201** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /memoriaalboekingen/{id}`

_/v2/memoriaalboekingen/{id} (DELETE)_

**operationId:** `v2-memoriaalboekingen-id-DELETE`
**Required scopes:** `memoriaal:write`

Verwijdert een memoriaalboeking op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het MemoriaalboekingModel van de te verwijderen memoriaalboeking.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /memoriaalboekingen/{id}`

_/v2/memoriaalboekingen/{id} (GET)_

**operationId:** `v2-memoriaalboekingen-id-GET`
**Required scopes:** `memoriaal:read`

Geeft een memoriaalboeking terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het MemoriaalboekingModel van de op te halen memoriaalboeking.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /memoriaalboekingen/{id}`

_/v2/memoriaalboekingen/{id} (PUT)_

**operationId:** `v2-memoriaalboekingen-id-PUT`
**Required scopes:** `memoriaal:write`

Werkt een bestaande Kostenplaats bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het MemoriaalboekingModel van de te wijziging kostenplaats.

**Request body:**

De bijtewerken MemoriaalboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "memoriaalBoekingsRegels": [
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
      "credit": 0
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
  "dagboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "datum": "string",
  "markering": true,
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "omschrijving": "string",
  "memoriaalBoekingsRegels": [
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
      "credit": 0
    }
  ],
  "inkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
  "verkoopboekingBoekingsRegels": [
    {
      "boekingId": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "bedrag": 0
    }
  ],
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

- **200** → [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
