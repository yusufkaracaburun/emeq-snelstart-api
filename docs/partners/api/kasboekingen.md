---
source: openapi://snelstart-b2b-v2
tag: kasboekingen
operations: 5
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `kasboekingen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `kasboekingen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /kasboekingen`

_/v2/kasboekingen (GET) (OData)_

**operationId:** `v2-kasboekingen-GET-OData`
**Required scopes:** `kas:read`

Geeft alle beschikbare kasboekinen (KasboekingModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Kasboekingen-KasboekingModelArray`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /kasboekingen`

_/v2/kasboekingen (POST)_

**operationId:** `v2-kasboekingen-POST`
**Required scopes:** `kas:write`

Maakt een nieuwe Kasboeking aan.

**Request body:**

De nieuw aan te maken KasboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel)

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
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel)

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

- **201** → [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /kasboekingen/{id}`

_/v2/kasboekingen/{id} (DELETE)_

**operationId:** `v2-kasboekingen-id-DELETE`
**Required scopes:** `kas:write`

Verwijdert een actieve Kasboeking op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het KasboekingModel van de te verwijderen Kasboeking.

**Responses:**

- **200** → [`KasboekingenIdDelete200ApplicationJsonResponse`](_schemas.md#kasboekingeniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /kasboekingen/{id}`

_/v2/kasboekingen/{id} (GET)_

**operationId:** `v2-kasboekingen-id-GET`
**Required scopes:** `kas:read`

Geeft een Kasboeking terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het KasboekingModel van de op te halen Kasboeking.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /kasboekingen/{id}`

_/v2/kasboekingen/{id} (PUT)_

**operationId:** `v2-kasboekingen-id-PUT`
**Required scopes:** `kas:write`

Werkt een bestaande Kostenplaats bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het KasboekingModel van de te wijziging kostenplaats.

**Request body:**

De bijtewerken KasboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel)

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
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel)

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

- **200** → [`SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-kasboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
