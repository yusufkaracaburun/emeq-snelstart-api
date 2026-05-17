---
source: openapi://snelstart-b2b-v2
tag: grootboeken
operations: 3
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `grootboeken` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `grootboeken` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /grootboeken`

_/v2/grootboeken (GET) (OData)_

**operationId:** `v2-grootboeken-GET-OData`
**Required scopes:** `boekhouden:read`

Geeft alle beschikbare grootboeken (GrootboekModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Grootboeken-GrootboekModelArray`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /grootboeken`

_/v2/grootboeken (POST)_

**operationId:** `v2-grootboeken-POST`
**Required scopes:** `boekhouden:write`

Maakt een nieuw grootboek aan.

**Request body:**

De nieuw aan te maken GrootboekModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekmodel)

Example:
```json
{
  "modifiedOn": "string",
  "omschrijving": "string",
  "kostenplaatsVerplicht": true,
  "rekeningCode": "Balans",
  "nonactief": true,
  "nummer": 0,
  "grootboekfunctie": "Diversen",
  "grootboekRubriek": "string",
  "rgsCode": [
    {
      "versie": "string",
      "rgsCode": "string"
    }
  ],
  "btwSoort": [
    "Geen"
  ],
  "vatRateCode": "string",
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekmodel)

Example:
```json
{
  "modifiedOn": "string",
  "omschrijving": "string",
  "kostenplaatsVerplicht": true,
  "rekeningCode": "Balans",
  "nonactief": true,
  "nummer": 0,
  "grootboekfunctie": "Diversen",
  "grootboekRubriek": "string",
  "rgsCode": [
    {
      "versie": "string",
      "rgsCode": "string"
    }
  ],
  "btwSoort": [
    "Geen"
  ],
  "vatRateCode": "string",
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /grootboeken/{id}`

_/v2/grootboeken/{id} (GET)_

**operationId:** `v2-grootboeken-id-GET`
**Required scopes:** `boekhouden:read`

Geeft een grootboek terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het GrootboekModel van het op te halen grootboek.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
