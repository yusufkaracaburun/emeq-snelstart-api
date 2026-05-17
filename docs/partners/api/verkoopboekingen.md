---
source: openapi://snelstart-b2b-v2
tag: verkoopboekingen
operations: 4
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `verkoopboekingen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `verkoopboekingen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `POST /verkoopboekingen`

_/v2/verkoopboekingen (POST)_

**operationId:** `v2-verkoopboekingen-POST`
**Required scopes:** `boekhouden:write`

Maakt een nieuwe verkoopboeking aan.

**Request body:**

De nieuw aan te maken VerkoopBoekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "klant": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
  "betalingstermijn": 0,
  "eenmaligeIncassoMachtiging": {
    "kenmerk": "string",
    "omschrijving": "string",
    "datum": "string"
  },
  "doorlopendeIncassoMachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "boekingsregels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "bedrag": 0,
      "btwSoort": "Geen"
    }
  ],
  "btw": [
    {
      "btwSoort": "Geen",
      "btwBedrag": 0
    }
  ],
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
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "klant": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
  "betalingstermijn": 0,
  "eenmaligeIncassoMachtiging": {
    "kenmerk": "string",
    "omschrijving": "string",
    "datum": "string"
  },
  "doorlopendeIncassoMachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "boekingsregels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "bedrag": 0,
      "btwSoort": "Geen"
    }
  ],
  "btw": [
    {
      "btwSoort": "Geen",
      "btwBedrag": 0
    }
  ],
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
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /verkoopboekingen/{id}`

_/v2/verkoopboekingen/{id} (DELETE)_

**operationId:** `v2-verkoopboekingen-id-DELETE`
**Required scopes:** `boekhouden:write`

Verwijdert een verkoopboeking p basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — Het id uit het VerkoopBoekingModel van de te verwijderen verkoopboeking.

**Responses:**

- **200** → [`VerkoopboekingenIdDelete200ApplicationJsonResponse`](_schemas.md#verkoopboekingeniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaand {id} wordt meegegeven.

---

### `GET /verkoopboekingen/{id}`

_/v2/verkoopboekingen/{id} (GET)_

**operationId:** `v2-verkoopboekingen-id-GET`
**Required scopes:** `boekhouden:read`

Geeft een verkoopboeking terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — Het id uit het VerkoopBoekingModel van de op te halen verkoopboeking.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaand {id} wordt meegegeven.

---

### `PUT /verkoopboekingen/{id}`

_/v2/verkoopboekingen/{id} (PUT)_

**operationId:** `v2-verkoopboekingen-id-PUT`
**Required scopes:** `boekhouden:write`

Werkt een bestaande verkoopboeking bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het VerkoopBoekingModel van de te wijziging verkoopboeking.

**Request body:**

De bij te werken VerkoopBoekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "klant": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
  "betalingstermijn": 0,
  "eenmaligeIncassoMachtiging": {
    "kenmerk": "string",
    "omschrijving": "string",
    "datum": "string"
  },
  "doorlopendeIncassoMachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "boekingsregels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "bedrag": 0,
      "btwSoort": "Geen"
    }
  ],
  "btw": [
    {
      "btwSoort": "Geen",
      "btwBedrag": 0
    }
  ],
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
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "klant": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
  "betalingstermijn": 0,
  "eenmaligeIncassoMachtiging": {
    "kenmerk": "string",
    "omschrijving": "string",
    "datum": "string"
  },
  "doorlopendeIncassoMachtiging": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "boekingsregels": [
    {
      "omschrijving": "string",
      "grootboek": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "kostenplaats": {
        "id": "00000000-0000-0000-0000-000000000000",
        "uri": "string"
      },
      "bedrag": 0,
      "btwSoort": "Geen"
    }
  ],
  "btw": [
    {
      "btwSoort": "Geen",
      "btwBedrag": 0
    }
  ],
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
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
