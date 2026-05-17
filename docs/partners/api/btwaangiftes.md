---
source: openapi://snelstart-b2b-v2
tag: btwaangiftes
operations: 3
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `btwaangiftes` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `btwaangiftes` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /btwaangiftes`

_/v2/btwaangiftes (GET) (OData)_

**operationId:** `v2-btwaangiftes-GET-OData`
**Required scopes:** `btwaangiftes:read`

Geeft alle btw aangiftes terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-BtwAangiftes-BtwAangifteModelArray`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangiftemodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /btwaangiftes/{id}`

_/v2/btwaangiftes/{id} (GET)_

**operationId:** `v2-btwaangiftes-id-GET`
**Required scopes:** `btwaangiftes:read`

Geeft een btw aangifte terug uit een administratie.
De identifier als System.Guid uit het BtwAangifteModel van het op te halen btw aangifte.Geeft een BtwAangifteModel terug.HTTP 200 OKHTTP 400 Bad Request, wanneer geen {id} wordt meegegeven.HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

**Parameters:**

- `id` (path, `string` (uuid)) **required**

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangiftemodel) (`application/json`) — OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `PUT /btwaangiftes/{id}/externAangeven`

_/v2/btwaangiftes/{id}/externAangeven (PUT)_

**operationId:** `v2-btwaangiftes-id-externAangeven-PUT`
**Required scopes:** `btwaangiftes:write`

Maakt het mogelijk om aan te geven dat een btw aangifte is aangegeven buiten SnelStart.
De identifier als System.Guid uit het BtwAangifteModel waarvan de status wordt bijgewerkt.De bij te werken status UpdateBtwAangifteStatusModel.HTTP 200 OKHTTP 400 Bad Request, wanneer er geen {id} of {aangifteStatus} wordt meegegeven.HTTP 404 Not Found, wanneer deze functionalitieit niet beschikbaar is

**Parameters:**

- `id` (path, `string` (uuid)) **required**

**Request body:**

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.UpdateBtwAangifteStatusModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-updatebtwaangiftestatusmodel)

Example:
```json
{
  "isExternAangegeven": true
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.UpdateBtwAangifteStatusModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-updatebtwaangiftestatusmodel)

Example:
```json
{
  "isExternAangegeven": true
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **204** — No Content
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---
