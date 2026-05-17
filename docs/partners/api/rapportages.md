---
source: openapi://snelstart-b2b-v2
tag: rapportages
operations: 2
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `rapportages` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `rapportages` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /rapportages/kolommenbalans`

_/v2/rapportages/kolommenbalans (GET)_

**operationId:** `v2-rapportages-kolommenbalans-GET`
**Required scopes:** `rapportage`

Geeft een kolommenbalans (KolommenbalansRegelModel) terug uit een administratie.

**Parameters:**

- `start` (query, `string` (date-time)) **required** — Start datum
- `end` (query, `string` (date-time)) **required** — Eind datum

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Rapportage-KolommenbalansRegelModelArray`](_schemas.md#snelstart-b2b-api-v2-models-rapportage-kolommenbalansregelmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /rapportages/periodebalans`

_/v2/rapportages/periodebalans (GET)_

**operationId:** `v2-rapportages-periodebalans-GET`
**Required scopes:** `rapportage`

Geeft een periodebalans (PeriodebalansRegelModel) terug uit een administratie.

**Parameters:**

- `start` (query, `string` (date-time)) **required** — Start datum
- `end` (query, `string` (date-time)) **required** — Eind datum

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Rapportage-PeriodebalansRegelModelArray`](_schemas.md#snelstart-b2b-api-v2-models-rapportage-periodebalansregelmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---
