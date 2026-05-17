---
source: openapi://snelstart-b2b-v2
tag: artikelomzetgroepen
operations: 2
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `artikelomzetgroepen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `artikelomzetgroepen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /artikelomzetgroepen`

_/v2/artikelomzetgroepen (GET)_

**operationId:** `v2-artikelomzetgroepen-GET`
**Required scopes:** `artikelen:read`

Geeft alle beschikbare artikel omzet groepen (ArtikelOmzetGroepModel) terug uit een administratie.

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelOmzetGroepModelArray`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelomzetgroepmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /artikelomzetgroepen/{id}`

_/v2/artikelomzetgroepen/{id} (GET)_

**operationId:** `v2-artikelomzetgroepen-id-GET`
**Required scopes:** `artikelen:read`

Geeft een artikel omzet groep terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het ArtikelOmzetGroepModel van de het te halen artikel omzet groep.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelOmzetGroepModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelomzetgroepmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
