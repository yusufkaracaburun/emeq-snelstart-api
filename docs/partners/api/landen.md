---
source: openapi://snelstart-b2b-v2
tag: landen
operations: 2
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `landen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `landen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /landen`

_/v2/landen (GET)_

**operationId:** `v2-landen-GET`
**Required scopes:** `settings:read`

Geeft alle beschikbare landen (LandModel) terug uit een administratie.

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Landen-LandModelArray`](_schemas.md#snelstart-b2b-api-v2-models-landen-landmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /landen/{id}`

_/v2/landen/{id} (GET)_

**operationId:** `v2-landen-id-GET`
**Required scopes:** `settings:read`

Geeft een land terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het LandModel van de op te halen land.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Landen.LandModel`](_schemas.md#snelstart-b2b-api-v2-models-landen-landmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
