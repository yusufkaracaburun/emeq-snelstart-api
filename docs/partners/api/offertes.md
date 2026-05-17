---
source: openapi://snelstart-b2b-v2
tag: offertes
operations: 5
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `offertes` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `offertes` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /offertes`

_/v2/offertes (GET) (OData)_

**operationId:** `v2-offertes-GET-OData`
**Required scopes:** `orders:read`

Geeft alle offertes (OfferteModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Verkooporders-OfferteModelArray`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /offertes`

_/v2/offertes (POST)_

**operationId:** `v2-offertes-POST`
**Required scopes:** `orders:write`

Maakt een nieuwe offerte aan.

**Request body:**

De nieuw aan te maken OfferteModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel)

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
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "isOfferte": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel)

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
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "isOfferte": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /offertes/{id}`

_/v2/offertes/{id} (DELETE)_

**operationId:** `v2-offertes-id-DELETE`
**Required scopes:** `orders:write`

Verwijder een offerte.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — Het id van de te verwijderen OfferteModel.

**Responses:**

- **201** → [`OffertesIdDelete201ApplicationJsonResponse`](_schemas.md#offertesiddelete201applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /offertes/{id}`

_/v2/offertes/{id} (GET)_

**operationId:** `v2-offertes-id-GET`
**Required scopes:** `orders:read`

Geeft een offerte terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het OfferteModel van het op te halen offerte.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /offertes/{id}`

_/v2/offertes/{id} (PUT)_

**operationId:** `v2-offertes-id-PUT`
**Required scopes:** `orders:write`

Werkt een bestaande verkooporder bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het OfferteModel de te wijzigen verkooporder.

**Request body:**

De bijtewerken OfferteModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel)

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
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "isOfferte": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel)

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
  "totaalExclusiefBtw": 0,
  "totaalInclusiefBtw": 0,
  "isOfferte": true,
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-offertemodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande verkooporder wordt meegegeven.

---
