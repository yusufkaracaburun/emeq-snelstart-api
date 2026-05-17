---
source: openapi://snelstart-b2b-v2
tag: inkoopboekingen
operations: 7
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `inkoopboekingen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `inkoopboekingen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `POST /inkoopboekingen`

_/v2/inkoopboekingen (POST)_

**operationId:** `v2-inkoopboekingen-POST`
**Required scopes:** `boekhouden:write`

Maakt een nieuwe inkoopboeking aan.

**Request body:**

De nieuw aan te maken InkoopboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "leverancier": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
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
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "leverancier": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
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

- **201** → [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /inkoopboekingen/CreateFromAttachment`

_/v2/inkoopboekingen/CreateFromAttachment (POST)_

**operationId:** `v2-inkoopboekingen-CreateFromAttachment-POST`
**Required scopes:** `boekhouden:write`

Start het aanmaken van een nieuwe inkoopboeking aan obv van een attachment.
Het attachment mag niet groter zijn dan 5 Mb,

**Request body:**

De nieuw aan te maken InkoopboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.AttachmentModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-attachmentmodel)

Example:
```json
{
  "fileName": "string",
  "content": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.AttachmentModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-attachmentmodel)

Example:
```json
{
  "fileName": "string",
  "content": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.CreateFromAttachmentModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-createfromattachmentmodel) (`application/json`) — HTTP 200 met de instanceId om de status op te halen
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /inkoopboekingen/GetCreateFromAttachmentStatus`

_/v2/inkoopboekingen/GetCreateFromAttachmentStatus (GET)_

**operationId:** `v2-inkoopboekingen-GetCreateFromAttachmentStatus-GET`
**Required scopes:** `boekhouden:write`

Haalt de status op van het aanmaken van een nieuwe inkoopboeking

**Parameters:**

- `instanceId` (query, `string`) **required**

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.CreateFromAttachmentStatusModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-createfromattachmentstatusmodel) (`application/json`) — OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /inkoopboekingen/ubl`

_/v2/inkoopboekingen/ubl (POST)_

**operationId:** `v2-inkoopboekingen-ubl-POST`
**Required scopes:** `boekhouden:write`, `orders:write`

Upload een inkoopboeking factuur (UblContentModel).

**Request body:**

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bijlagen.UblContentModel`](_schemas.md#snelstart-b2b-api-v2-models-bijlagen-ublcontentmodel)

Example:
```json
{
  "fileName": "string",
  "content": "string",
  "pdfContent": "string",
  "forcePersist": true
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Bijlagen.UblContentModel`](_schemas.md#snelstart-b2b-api-v2-models-bijlagen-ublcontentmodel)

Example:
```json
{
  "fileName": "string",
  "content": "string",
  "pdfContent": "string",
  "forcePersist": true
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /inkoopboekingen/{id}`

_/v2/inkoopboekingen/{id} (DELETE)_

**operationId:** `v2-inkoopboekingen-id-DELETE`
**Required scopes:** `boekhouden:write`

Verwijdert een actieve inkoopboeking op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het InkoopboekingModel van de te verwijderen inkoopboeking.

**Responses:**

- **200** → [`InkoopboekingenIdDelete200ApplicationJsonResponse`](_schemas.md#inkoopboekingeniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /inkoopboekingen/{id}`

_/v2/inkoopboekingen/{id} (GET)_

**operationId:** `v2-inkoopboekingen-id-GET`
**Required scopes:** `boekhouden:read`

Geeft een inkoopboeking terug op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het InkoopboekingModel van de op te halen inkoopboeking.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `PUT /inkoopboekingen/{id}`

_/v2/inkoopboekingen/{id} (PUT)_

**operationId:** `v2-inkoopboekingen-id-PUT`
**Required scopes:** `boekhouden:write`

Werkt een bestaande inkooppboeking bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het InkoopboekingModel van de te wijziging inkoopboeking.

**Request body:**

De bij te werken InkoopboekingModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "leverancier": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
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
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel)

Example:
```json
{
  "modifiedOn": "string",
  "boekstuk": "string",
  "gewijzigdDoorAccountant": true,
  "markering": true,
  "factuurdatum": "string",
  "factuurnummer": "string",
  "leverancier": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "omschrijving": "string",
  "factuurbedrag": 0,
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

- **200** → [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatieregels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---
