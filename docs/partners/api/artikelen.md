---
source: openapi://snelstart-b2b-v2
tag: artikelen
operations: 8
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `artikelen` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `artikelen` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /artikelen`

_/v2/artikelen (GET) (OData)_

**operationId:** `v2-artikelen-GET-OData`
**Required scopes:** `artikelen:read`

Geeft alle beschikbare artikelen (ArtikelModel) terug uit een administratie. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `relatieId` (query, `string` (uuid)) — De (optionele) identifier van de relatie, waarvoor de prijsafspraak aan het op te halen artikel moet worden toegevoegd.
- `aantal` (query, `integer` (int32)) — Het (optioneel meegegeven) aantal van het artikel, waarvoor de prijsafspraak aan het op te halen artikel moet worden bepaald.
- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelQueryModelArray`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelquerymodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `POST /artikelen`

_/v2/artikelen (POST)_

**operationId:** `v2-artikelen-POST`
**Required scopes:** `artikelen:write`

Maakt een nieuw artikel aan.

**Request body:**

De nieuw aan te maken ArtikelModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelmodel)

Example:
```json
{
  "artikelcode": "string",
  "omschrijving": "string",
  "artikelOmzetgroep": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopprijs": 0,
  "inkoopprijs": 0,
  "eenheid": "string",
  "modifiedOn": "string",
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "isNonActief": true,
  "voorraadControle": true,
  "technischeVoorraad": 0,
  "vrijeVoorraad": 0,
  "extraVelden": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelmodel)

Example:
```json
{
  "artikelcode": "string",
  "omschrijving": "string",
  "artikelOmzetgroep": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopprijs": 0,
  "inkoopprijs": 0,
  "eenheid": "string",
  "modifiedOn": "string",
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "isNonActief": true,
  "voorraadControle": true,
  "technischeVoorraad": 0,
  "vrijeVoorraad": 0,
  "extraVelden": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **201** → [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelmodel) (`application/json`) — HTTP 201 Created
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `GET /artikelen/prijsafspraken`

_/v2/artikelen/prijsafspraken (GET) (OData)_

**operationId:** `v2-artikelen-prijsafspraken-GET-OData`
**Required scopes:** `artikelen:read`

Geeft alle beschikbare prijs afspraken (ArtikelPrijsAfsprakenModel) per artikel/klant. 
Op deze operatie is OData functionaliteit beschikbaar.

**Parameters:**

- `$skip` (query, `integer` (int32)) — Het aantal resultaten dat overgeslagen wordt.
- `$top` (query, `integer` (int32)) — Het maximum aantal resultaten.
- `$filter` (query, `string`) — OData filter, zie http://docs.oasis-open.org/odata/odata/v4.01/cs01/part2-url-conventions/odata-v4.01-cs01-part2-url-conventions.html#sec_SystemQueryOptionfilter

**Responses:**

- **200** → [`SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelPrijsAfsprakenModelArray`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelprijsafsprakenmodelarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `DELETE /artikelen/{id}`

_/v2/artikelen/{id} (DELETE)_

**operationId:** `v2-artikelen-id-DELETE`
**Required scopes:** `artikelen:write`

Verwijdert een actief artikel op basis van zijn {id}.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het ArtikelModel van het te verwijderen artikel.

**Responses:**

- **200** → [`ArtikelenIdDelete200ApplicationJsonResponse`](_schemas.md#artikeleniddelete200applicationjsonresponse) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /artikelen/{id}`

_/v2/artikelen/{id} (GET)_

**operationId:** `v2-artikelen-id-GET`
**Required scopes:** `artikelen:read`

Geeft een artikel terug op basis van zijn {id} en de (optioneel) opgegeven relatie.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het ArtikelModel van het op te halen artikel.
- `relatieId` (query, `string` (uuid)) — De (optionele) identifier van de relatie, waarvoor de prijsafspraak aan het op te halen artikel moet worden toegevoegd.
- `aantal` (query, `integer` (int32)) — Het (optioneel meegegeven) aantal van het artikel, waarvoor de prijsafspraak aan het op te halen artikel moet worden bepaald.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelQueryModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelquerymodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} of {relatieId} wordt meegegeven.

---

### `PUT /artikelen/{id}`

_/v2/artikelen/{id} (PUT)_

**operationId:** `v2-artikelen-id-PUT`
**Required scopes:** `artikelen:write`

Werkt een bestaand artikel bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het ArtikelModel van het te wijziging artikel.

**Request body:**

De bij te werken ArtikelModel.

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelmodel)

Example:
```json
{
  "artikelcode": "string",
  "omschrijving": "string",
  "artikelOmzetgroep": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopprijs": 0,
  "inkoopprijs": 0,
  "eenheid": "string",
  "modifiedOn": "string",
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "isNonActief": true,
  "voorraadControle": true,
  "technischeVoorraad": 0,
  "vrijeVoorraad": 0,
  "extraVelden": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelmodel)

Example:
```json
{
  "artikelcode": "string",
  "omschrijving": "string",
  "artikelOmzetgroep": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "verkoopprijs": 0,
  "inkoopprijs": 0,
  "eenheid": "string",
  "modifiedOn": "string",
  "relatie": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "isNonActief": true,
  "voorraadControle": true,
  "technischeVoorraad": 0,
  "vrijeVoorraad": 0,
  "extraVelden": [
    {
      "naam": "string",
      "waarde": "string"
    }
  ],
  "id": "00000000-0000-0000-0000-000000000000",
  "uri": "string"
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelmodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaande {id} wordt meegegeven.

---

### `GET /artikelen/{id}/customFields`

_/v2/artikelen/{id}/customFields (GET)_

**operationId:** `v2-artikelen-id-customFields-GET`
**Required scopes:** `artikelen:read`

Geeft alle beschikbare extra velden (CustomFieldModel) voor een artikel.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid van een ArtikelModel

**Responses:**

- **200** → [`SnelStart-Business-Interfaces-CustomFields-CustomFieldDtoArray`](_schemas.md#snelstart-business-interfaces-customfields-customfielddtoarray) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaand {id} wordt meegegeven.

---

### `PUT /artikelen/{id}/customFields`

_/v2/artikelen/{id}/customFields (PUT)_

**operationId:** `v2-artikelen-id-customFields-PUT`
**Required scopes:** `artikelen:write`

Werkt de extra velden van een bestaande relatie bij.

**Parameters:**

- `id` (path, `string` (uuid)) **required** — De identifier als System.Guid uit het ArtikelModel waarvan de extra velden worden bijgewerkt.

**Request body:**

De bij te werken extra velden UpdatedCustomFieldModel.

- Media: `application/json` — Schema: [`SnelStart-B2B-Api-V2-Models-CustomFields-UpdatedCustomFieldModelArray`](_schemas.md#snelstart-b2b-api-v2-models-customfields-updatedcustomfieldmodelarray)

Example:
```json
[
  {
    "name": "string",
    "value": {}
  }
]
```
- Media: `text/json` — Schema: [`SnelStart-B2B-Api-V2-Models-CustomFields-UpdatedCustomFieldModelArray`](_schemas.md#snelstart-b2b-api-v2-models-customfields-updatedcustomfieldmodelarray)

Example:
```json
[
  {
    "name": "string",
    "value": {}
  }
]
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart-Business-Interfaces-CustomFields-CustomFieldDtoArray-2`](_schemas.md#snelstart-business-interfaces-customfields-customfielddtoarray-2) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.
- **404** — HTTP 404 Not Found, wanneer een niet-bestaand {id} wordt meegegeven.

---
