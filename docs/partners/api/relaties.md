---
source: openapi://snelstart-b2b-v2
tag: relaties
operations: 10
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `relaties` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `relaties` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /relaties`

_/v2/relaties (GET) (OData)_

**operationId:** `v2-relaties-GET-OData`
**Required scopes:** `relaties:read`

Geeft alle beschikbare relaties (RelatieModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Relaties-RelatieModelArray`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiemodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /relaties`

_/v2/relaties (POST)_

**operationId:** `v2-relaties-POST`
**Required scopes:** `relaties:write`

Maakt een nieuwe relatie aan.

**Request body:**

De nieuw aan te maken RelatieWriteModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiewritemodel)

Example:
```json
{
  "relatiesoort": [
    "string"
  ],
  "modifiedOn": "string",
  "relatiecode": 0,
  "naam": "string",
  "vestigingsAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "correspondentieAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "telefoon": "string",
  "mobieleTelefoon": "string",
  "email": "string",
  "btwNummer": "string",
  "factuurkorting": 0,
  "krediettermijn": 0,
  "bankieren": true,
  "nonactief": true,
  "kredietLimiet": 0,
  "memo": "string",
  "kvkNummer": "string",
  "oin": "string",
  "websiteUrl": "string",
  "aanmaningsoort": "Nee",
  "offerteEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bevestigingsEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "factuurEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "aanmaningEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "offerteAanvraagEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bestellingEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "ublBestandAlsBijlage": true,
  "iban": "string",
  "bic": "string",
  "incassoSoort": "Geen",
  "factuurRelatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "inkoopBoekingenUri": "string",
  "verkoopBoekingenUri": "string",
  "documents": [
    {
      "parentIdentifier": "00000000-0000-0000-0000-000000000000",
      "fileName": "string",
      "readOnly": true,
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string",
  "extraVeldenKlant": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ]
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiewritemodel)

Example:
```json
{
  "relatiesoort": [
    "string"
  ],
  "modifiedOn": "string",
  "relatiecode": 0,
  "naam": "string",
  "vestigingsAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "correspondentieAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "telefoon": "string",
  "mobieleTelefoon": "string",
  "email": "string",
  "btwNummer": "string",
  "factuurkorting": 0,
  "krediettermijn": 0,
  "bankieren": true,
  "nonactief": true,
  "kredietLimiet": 0,
  "memo": "string",
  "kvkNummer": "string",
  "oin": "string",
  "websiteUrl": "string",
  "aanmaningsoort": "Nee",
  "offerteEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bevestigingsEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "factuurEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "aanmaningEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "offerteAanvraagEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bestellingEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "ublBestandAlsBijlage": true,
  "iban": "string",
  "bic": "string",
  "incassoSoort": "Geen",
  "factuurRelatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "inkoopBoekingenUri": "string",
  "verkoopBoekingenUri": "string",
  "documents": [
    {
      "parentIdentifier": "00000000-0000-0000-0000-000000000000",
      "fileName": "string",
      "readOnly": true,
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string",
  "extraVeldenKlant": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ]
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiewritemodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /relaties/{id}`

_/v2/relaties/{id} (DELETE)_

**operationId:** `v2-relaties-id-DELETE`
**Required scopes:** `relaties:write`

Verwijdert een actieve relatie op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het RelatieModel van de te verwijderen relatie.

**Responses:**

- **200** → [`RelatiesIdDelete200ApplicationJsonResponse`](_schemas.md#relatiesiddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /relaties/{id}`

_/v2/relaties/{id} (GET)_

**operationId:** `v2-relaties-id-GET`
**Required scopes:** `relaties:read`

Geeft een actieve relatie terug  op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het RelatieModel van de op te halen relatie.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiemodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /relaties/{id}`

_/v2/relaties/{id} (PUT)_

**operationId:** `v2-relaties-id-PUT`
**Required scopes:** `relaties:write`

Werkt een bestaande relatie bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het RelatieWriteModel van de te wijziging relatie.

**Request body:**

De bijtewerken RelatieWriteModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiewritemodel)

Example:
```json
{
  "relatiesoort": [
    "string"
  ],
  "modifiedOn": "string",
  "relatiecode": 0,
  "naam": "string",
  "vestigingsAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "correspondentieAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "telefoon": "string",
  "mobieleTelefoon": "string",
  "email": "string",
  "btwNummer": "string",
  "factuurkorting": 0,
  "krediettermijn": 0,
  "bankieren": true,
  "nonactief": true,
  "kredietLimiet": 0,
  "memo": "string",
  "kvkNummer": "string",
  "oin": "string",
  "websiteUrl": "string",
  "aanmaningsoort": "Nee",
  "offerteEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bevestigingsEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "factuurEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "aanmaningEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "offerteAanvraagEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bestellingEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "ublBestandAlsBijlage": true,
  "iban": "string",
  "bic": "string",
  "incassoSoort": "Geen",
  "factuurRelatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "inkoopBoekingenUri": "string",
  "verkoopBoekingenUri": "string",
  "documents": [
    {
      "parentIdentifier": "00000000-0000-0000-0000-000000000000",
      "fileName": "string",
      "readOnly": true,
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string",
  "extraVeldenKlant": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ]
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiewritemodel)

Example:
```json
{
  "relatiesoort": [
    "string"
  ],
  "modifiedOn": "string",
  "relatiecode": 0,
  "naam": "string",
  "vestigingsAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "correspondentieAdres": {
    "contactpersoon": "string",
    "straat": "string",
    "postcode": "string",
    "plaats": "string",
    "land": {
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  },
  "telefoon": "string",
  "mobieleTelefoon": "string",
  "email": "string",
  "btwNummer": "string",
  "factuurkorting": 0,
  "krediettermijn": 0,
  "bankieren": true,
  "nonactief": true,
  "kredietLimiet": 0,
  "memo": "string",
  "kvkNummer": "string",
  "oin": "string",
  "websiteUrl": "string",
  "aanmaningsoort": "Nee",
  "offerteEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bevestigingsEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "factuurEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "aanmaningEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "offerteAanvraagEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "bestellingEmailVersturen": {
    "shouldSend": true,
    "email": "string",
    "ccEmail": "string"
  },
  "ublBestandAlsBijlage": true,
  "iban": "string",
  "bic": "string",
  "incassoSoort": "Geen",
  "factuurRelatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "inkoopBoekingenUri": "string",
  "verkoopBoekingenUri": "string",
  "documents": [
    {
      "parentIdentifier": "00000000-0000-0000-0000-000000000000",
      "fileName": "string",
      "readOnly": true,
      "id": "00000000-0000-0000-0000-000000000000",
      "uri": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string",
  "extraVeldenKlant": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ]
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatiewritemodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /relaties/{id}/customFields`

_/v2/relaties/{id}/customFields (GET)_

**operationId:** `v2-relaties-id-customFields-GET`
**Required scopes:** `relaties:read`

Geeft alle beschikbare extra velden (RelatieCustomFieldsModel) voor een relatie.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid van een RelatieModel

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.CustomFields.RelatieCustomFieldsModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-relatiecustomfieldsmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /relaties/{id}/customFields`

_/v2/relaties/{id}/customFields (PUT)_

**operationId:** `v2-relaties-id-customFields-PUT`
**Required scopes:** `relaties:write`

Werkt de extra velden van een bestaande relatie bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het RelatieModel waarvan de extra velden worden bijgewerkt.

**Request body:**

De bij te werken extra velden RelatieCustomFieldsModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.CustomFields.RelatieUpdatedCustomFieldsModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-relatieupdatedcustomfieldsmodel)

Example:
```json
{
  "klantCustomFields": [
    {
      "name": "string",
      "value": {}
    }
  ],
  "leverancierCustomFields": [
    {
      "name": "string",
      "value": {}
    }
  ]
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.CustomFields.RelatieUpdatedCustomFieldsModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-relatieupdatedcustomfieldsmodel)

Example:
```json
{
  "klantCustomFields": [
    {
      "name": "string",
      "value": {}
    }
  ],
  "leverancierCustomFields": [
    {
      "name": "string",
      "value": {}
    }
  ]
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.CustomFields.RelatieCustomFieldsModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-relatiecustomfieldsmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /relaties/{id}/doorlopendeincassomachtigingen`

_/v2/relaties/{id}/doorlopendeincassomachtigingen (GET)_

**operationId:** `v2-relaties-id-doorlopendeincassomachtigingen-GET`
**Required scopes:** `relaties:read`

Geeft de doorlopende incassomachtigingen (DoorlopendeIncassoMachtigingModel) voor de opgegeven relatie terug uit een administratie.

**Parameters:**

- `id` (path, `string` (uuid)) **required**

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Relaties-DoorlopendeIncassoMachtigingModelArray`](_schemas.md#snelstart-b2b-api-v2-models-relaties-doorlopendeincassomachtigingmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /relaties/{id}/inkoopboekingen`

_/v2/relaties/{id}/inkoopboekingen (GET)_

**operationId:** `v2-relaties-id-inkoopboekingen-GET`
**Required scopes:** `relaties:read`, `boekhouden:read`

Geeft alle beschikbare inkoopboekingen (InkoopboekingModel) voor de actieve relatie terug uit een administratie.

**Parameters:**

- `id` (path, `string` (uuid)) **required**

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Inkoopboekingen-InkoopboekingModelArray`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /relaties/{id}/verkoopboekingen`

_/v2/relaties/{id}/verkoopboekingen (GET)_

**operationId:** `v2-relaties-id-verkoopboekingen-GET`
**Required scopes:** `relaties:read`, `boekhouden:read`

Geeft alle beschikbare verkoopboekingen (VerkoopBoekingModel) voor de actieve relatie terug uit een administratie.

**Parameters:**

- `id` (path, `string` (uuid)) **required**

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-VerkoopBoekingen-VerkoopBoekingModelArray`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---
