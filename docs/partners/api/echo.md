---
source: openapi://snelstart-b2b-v2
tag: echo
operations: 1
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `echo` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `echo` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /echo/{input}`

_/v2/echo/{input} (GET)_

**operationId:** `v2-echo-input-GET`

Test de SnelStart B2B Api door de {input} terug te geven.

**Parameters:**

- `input` (path, `string`) **required** — De terug te geven tekst (optioneel).

**Responses:**

- **200** → [`EchoInputGet200ApplicationJsonResponse`](_schemas.md#echoinputget200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **204** → [`EchoInputGet204ApplicationJsonResponse`](_schemas.md#echoinputget204applicationjsonresponse) (`application/json`) — HTTP 204 OK No Content, wanneer {input} leeg is.

---
