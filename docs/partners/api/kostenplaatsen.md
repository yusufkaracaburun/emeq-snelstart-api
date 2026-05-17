---
source: openapi://snelstart-b2b-v2
tag: kostenplaatsen
operations: 5
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `kostenplaatsen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `kostenplaatsen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /kostenplaatsen`

_/v2/kostenplaatsen (GET)_

**operationId:** `v2-kostenplaatsen-GET`
**Required scopes:** `settings:read`

Geeft alle beschikbare kostenplaatsen (KostenplaatsModel) terug uit een administratie.

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Kostenplaatsen-KostenplaatsModelArray`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /kostenplaatsen`

_/v2/kostenplaatsen (POST)_

**operationId:** `v2-kostenplaatsen-POST`
**Required scopes:** `settings:write`

Maakt een nieuwe kostenplaats aan.

**Request body:**

De nieuw aan te maken KostenplaatsModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel)

Example:
```json
{
  "omschrijving": "string",
  "nonactief": true,
  "nummer": 0,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel)

Example:
```json
{
  "omschrijving": "string",
  "nonactief": true,
  "nummer": 0,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /kostenplaatsen/{id}`

_/v2/kostenplaatsen/{id} (DELETE)_

**operationId:** `v2-kostenplaatsen-id-DELETE`
**Required scopes:** `settings:write`

Verwijdert een actieve kostenplaats op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het KostenplaatsModel van de te verwijderen kostenplaats.

**Responses:**

- **200** → [`KostenplaatsenIdDelete200ApplicationJsonResponse`](_schemas.md#kostenplaatseniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /kostenplaatsen/{id}`

_/v2/kostenplaatsen/{id} (GET)_

**operationId:** `v2-kostenplaatsen-id-GET`
**Required scopes:** `settings:read`

Geeft een kostenplaats terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het KostenplaatsModel van de op te halen kostenplaats.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /kostenplaatsen/{id}`

_/v2/kostenplaatsen/{id} (PUT)_

**operationId:** `v2-kostenplaatsen-id-PUT`
**Required scopes:** `settings:write`

Werkt een bestaande kostenplaats bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het KostenplaatsModel van de te wijziging kostenplaats.

**Request body:**

De bij te werken KostenplaatsModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel)

Example:
```json
{
  "omschrijving": "string",
  "nonactief": true,
  "nummer": 0,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel)

Example:
```json
{
  "omschrijving": "string",
  "nonactief": true,
  "nummer": 0,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
