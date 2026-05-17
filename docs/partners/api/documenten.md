---
source: openapi://snelstart-b2b-v2
tag: documenten
operations: 5
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `documenten` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `documenten` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `POST /documenten/{documenttype}`

_/v2/documenten/{documenttype} (POST)_

**operationId:** `v2-documenten-documenttype-POST`
**Required scopes:** `boekhouden:write`, `documenten:write`

Upload een document (DocumentContentModel) voor een documenttype in een administratie.

**Parameters:**

- `documenttype` (path, `string`) **required** — Het documenttype (mogelijke waarde: Inkoopboekingen, Verkoopboekingen of Relaties) van het op te halen document.

**Request body:**

Het te uploaden document als DocumentContentModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentContentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentcontentmodel)

Example:
```json
{
  "content": "string",
  "parentIdentifier": "00000000-0000-0000-0000-000000000000",
  "fileName": "string",
  "readOnly": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentContentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentcontentmodel)

Example:
```json
{
  "content": "string",
  "parentIdentifier": "00000000-0000-0000-0000-000000000000",
  "fileName": "string",
  "readOnly": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentidentifiermodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {document.ParentIdentifier.ParentIdentifier} wordt meegegeven.

---

### `GET /documenten/{documenttype}/{pid}`

_/v2/documenten/{documenttype}/{pid} (GET)_

**operationId:** `v2-documenten-documenttype-pid-GET`
**Required scopes:** `documenten:read`

Geeft alle bijlagen  voor het opgegeven documenttype terug uit een administratie.

**Parameters:**

- `documenttype` (path, `string`) **required** — Het documenttype (mogelijke waarde: Inkoopboekingen, Verkoopboekingen of Relaties), waarvan de documenten worden opgevraagd.
- `pid` (path, `string` (uuid)) **required** — De identifier als  uit het  van document van het opgegeven DocumentType/>.

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Bijlagen-VerkoopBoekingBijlageReferenceModelArra`](_schemas.md#snelstart-b2b-api-v2-models-bijlagen-verkoopboekingbijlagereferencemodelarra) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {pid} wordt meegegeven.

---

### `DELETE /documenten/{id}`

_/v2/documenten/{id} (DELETE)_

**operationId:** `v2-documenten-id-DELETE`
**Required scopes:** `boekhouden:write`, `documenten:write`

Verwijdert een document (DocumentContentModel) voor een verkoopboeking uit een administratie.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het DocumentIdentifierModel van het te verwijderen document.

**Responses:**

- **200** → [`DocumentenIdDelete200ApplicationJsonResponse`](_schemas.md#documenteniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /documenten/{id}`

_/v2/documenten/{id} (GET)_

**operationId:** `v2-documenten-id-GET`
**Required scopes:** `documenten:read`

Geeft een document terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het DocumentIdentifierModel van het op te halen document.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentContentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentcontentmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /documenten/{id}`

_/v2/documenten/{id} (PUT)_

**operationId:** `v2-documenten-id-PUT`
**Required scopes:** `boekhouden:write`, `documenten:write`

Wijzig een document (DocumentContentModel) voor een documenttype in de administratie.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier van het te wijzigen document.

**Request body:**

Het te wijzigen document als DocumentContentModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentContentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentcontentmodel)

Example:
```json
{
  "content": "string",
  "parentIdentifier": "00000000-0000-0000-0000-000000000000",
  "fileName": "string",
  "readOnly": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentContentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentcontentmodel)

Example:
```json
{
  "content": "string",
  "parentIdentifier": "00000000-0000-0000-0000-000000000000",
  "fileName": "string",
  "readOnly": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentidentifiermodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} of {document.ParentIdentifier.ParentIdentifier} wordt meegegeven.

---
