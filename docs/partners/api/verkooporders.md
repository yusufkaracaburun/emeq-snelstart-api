---
source: openapi://snelstart-b2b-v2
tag: verkooporders
operations: 6
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `verkooporders` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `verkooporders` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /verkooporders`

_/v2/verkooporders (GET) (OData)_

**operationId:** `v2-verkooporders-GET-OData`
**Required scopes:** `orders:read`

Geeft alle verkooporders (VerkoopOrderModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Verkooporders-VerkoopOrderModelArray`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /verkooporders`

_/v2/verkooporders (POST)_

**operationId:** `v2-verkooporders-POST`
**Required scopes:** `orders:write`

Maakt een nieuwe verkooporder aan.

**Request body:**

De nieuw aan te maken VerkoopOrderModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel)

Example:
```json
{
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "procesStatus": "Order",
  "nummer": 0,
  "modifiedOn": "string",
  "datum": "string",
  "krediettermijn": 0,
  "geblokkeerd": true,
  "omschrijving": "string",
  "betalingskenmerk": "string",
  "incassomachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "afleveradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "factuuradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "verkooporderBtwIngaveModel": "Inclusief",
  "kostenplaats": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "regels": [
    {
      "artikel": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "stuksprijs": 0,
      "aantal": 0,
      "kortingsPercentage": 0,
      "totaal": 0,
      "extraRegelVelden": [
        {
          "veldNummer": 0,
          "omschrijving": "string",
          "waarde": "string"
        }
      ]
    }
  ],
  "memo": "string",
  "orderreferentie": "string",
  "factuurkorting": 0,
  "verkoopfactuur": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopordersjabloon": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopOrderStatus": "InBehandeling",
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "extraHoofdVelden": [
    {
      "veldNummer": 0,
      "omschrijving": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel)

Example:
```json
{
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "procesStatus": "Order",
  "nummer": 0,
  "modifiedOn": "string",
  "datum": "string",
  "krediettermijn": 0,
  "geblokkeerd": true,
  "omschrijving": "string",
  "betalingskenmerk": "string",
  "incassomachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "afleveradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "factuuradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "verkooporderBtwIngaveModel": "Inclusief",
  "kostenplaats": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "regels": [
    {
      "artikel": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "stuksprijs": 0,
      "aantal": 0,
      "kortingsPercentage": 0,
      "totaal": 0,
      "extraRegelVelden": [
        {
          "veldNummer": 0,
          "omschrijving": "string",
          "waarde": "string"
        }
      ]
    }
  ],
  "memo": "string",
  "orderreferentie": "string",
  "factuurkorting": 0,
  "verkoopfactuur": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopordersjabloon": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopOrderStatus": "InBehandeling",
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "extraHoofdVelden": [
    {
      "veldNummer": 0,
      "omschrijving": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /verkooporders/{id}`

_/v2/verkooporders/{id} (DELETE)_

**operationId:** `v2-verkooporders-id-DELETE`
**Required scopes:** `orders:write`

Verwijder een verkooporder.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — Het id van de te verwijderen VerkoopOrderModel.

**Responses:**

- **201** → [`VerkoopordersIdDelete201ApplicationJsonResponse`](_schemas.md#verkoopordersiddelete201applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /verkooporders/{id}`

_/v2/verkooporders/{id} (GET)_

**operationId:** `v2-verkooporders-id-GET`
**Required scopes:** `orders:read`

Geeft een verkooporder terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het VerkoopOrderModel van het op te halen verkooporder.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /verkooporders/{id}`

_/v2/verkooporders/{id} (PUT)_

**operationId:** `v2-verkooporders-id-PUT`
**Required scopes:** `orders:write`

Werkt een bestaande verkooporder bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het VerkoopOrderModel de te wijzigen verkooporder.

**Request body:**

De bijtewerken VerkoopOrderModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel)

Example:
```json
{
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "procesStatus": "Order",
  "nummer": 0,
  "modifiedOn": "string",
  "datum": "string",
  "krediettermijn": 0,
  "geblokkeerd": true,
  "omschrijving": "string",
  "betalingskenmerk": "string",
  "incassomachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "afleveradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "factuuradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "verkooporderBtwIngaveModel": "Inclusief",
  "kostenplaats": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "regels": [
    {
      "artikel": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "stuksprijs": 0,
      "aantal": 0,
      "kortingsPercentage": 0,
      "totaal": 0,
      "extraRegelVelden": [
        {
          "veldNummer": 0,
          "omschrijving": "string",
          "waarde": "string"
        }
      ]
    }
  ],
  "memo": "string",
  "orderreferentie": "string",
  "factuurkorting": 0,
  "verkoopfactuur": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopordersjabloon": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopOrderStatus": "InBehandeling",
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "extraHoofdVelden": [
    {
      "veldNummer": 0,
      "omschrijving": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel)

Example:
```json
{
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "procesStatus": "Order",
  "nummer": 0,
  "modifiedOn": "string",
  "datum": "string",
  "krediettermijn": 0,
  "geblokkeerd": true,
  "omschrijving": "string",
  "betalingskenmerk": "string",
  "incassomachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "afleveradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "factuuradres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "verkooporderBtwIngaveModel": "Inclusief",
  "kostenplaats": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "regels": [
    {
      "artikel": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "omschrijving": "string",
      "stuksprijs": 0,
      "aantal": 0,
      "kortingsPercentage": 0,
      "totaal": 0,
      "extraRegelVelden": [
        {
          "veldNummer": 0,
          "omschrijving": "string",
          "waarde": "string"
        }
      ]
    }
  ],
  "memo": "string",
  "orderreferentie": "string",
  "factuurkorting": 0,
  "verkoopfactuur": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopordersjabloon": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopOrderStatus": "InBehandeling",
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "extraHoofdVelden": [
    {
      "veldNummer": 0,
      "omschrijving": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkoopordermodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande verkooporder wordt meegegeven.

---

### `PUT /verkooporders/{id}/ProcesStatus`

_/v2/verkooporders/{id}/ProcesStatus (PUT)_

**operationId:** `v2-verkooporders-id-ProcesStatus-PUT`
**Required scopes:** `orders:write`

Werkt de proces status van een bestaande verkooporder bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het VerkoopOrderModel de te wijzigen verkooporder.

**Request body:**

De nieuwe VerkooporderUpdateProcesStatusModel

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkooporderUpdateProcesStatusModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkooporderupdateprocesstatusmodel)

Example:
```json
{
  "id": "00000000-0000-0000-0000-000000000000",
  "procesStatus": "Order"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkooporderUpdateProcesStatusModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkooporderupdateprocesstatusmodel)

Example:
```json
{
  "id": "00000000-0000-0000-0000-000000000000",
  "procesStatus": "Order"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`VerkoopordersIdProcesStatusPut200ApplicationJsonResponse`](_schemas.md#verkoopordersidprocesstatusput200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande verkooporder wordt meegegeven.

---
