---
source: openapi://snelstart-b2b-v2
tag: companyInfo
operations: 2
base_url: https://b2bapi.snelstart.nl/v2
auth_header: Ocp-Apim-Subscription-Key
fetched_at: 2026-05-13T16:34:48+00:00
---

# `companyInfo` — API reference

_SnelStart B2B-Api v2 v1.0_ — base URL: `https://b2bapi.snelstart.nl/v2`

> **AI context:** use this file as the authoritative reference when generating SnelStart B2B-API integration code for the `companyInfo` resource. Each operation below lists its HTTP method + path, required OAuth scopes (if any), request body schema, and response schemas (with links into `_schemas.md`).

**Auth (send on every request):** add header `Ocp-Apim-Subscription-Key: <YOUR_KEY>` (see [`../subscription.md`](../subscription.md) for the actual key). Alternative: pass `?subscription-key=<YOUR_KEY>` as query string.

**OAuth scopes:** scope-protected endpoints additionally require a Bearer access token obtained via the OAuth2 client-credentials flow against the SnelStart identity server — see the portal page `oauth-deef6709.md` (in this folder) for details.

---

### `GET /companyInfo`

_/v2/companyInfo (GET)_

**operationId:** `v2-companyInfo-GET`
**Required scopes:** `settings:read`

Geeft bedrijfsinformatie (CompanyInfoModel) terug voor een administratie.

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.CompanyInfo.CompanyInfoModel`](_schemas.md#snelstart-b2b-api-v2-models-companyinfo-companyinfomodel) (`application/json`) — HTTP 200 OK
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---

### `PUT /companyInfo`

_/v2/companyInfo (PUT)_

**operationId:** `v2-companyInfo-PUT`
**Required scopes:** `settings:write`

Updates bedrijfsinformatie (CompanyInfoModel) van een administratie.
            
Op dit moment wordt alleen het updaten van de setting FactureerBuitenlandsBtw ondersteund

**Request body:**

- Media: `application/json` — Schema: [`SnelStart.B2B.Api.V2.Models.CompanyInfo.CompanyInfoModel`](_schemas.md#snelstart-b2b-api-v2-models-companyinfo-companyinfomodel)

Example:
```json
{
  "administratieIdentifier": "00000000-0000-0000-0000-000000000000",
  "administratieNaam": "string",
  "bedrijfsnaam": "string",
  "contactpersoon": "string",
  "adres": "string",
  "postcode": "string",
  "plaats": "string",
  "telefoon": "string",
  "mobieleTelefoon": "string",
  "fax": "string",
  "bankrekeningnummer": "string",
  "iban": "string",
  "bic": "string",
  "rechtsvorm": "NotSet",
  "btwNummer": "string",
  "btwIdentificatieNummer": "string",
  "kvKNummer": "string",
  "email": "string",
  "website": "string",
  "vrijeTekst1": "string",
  "vrijeTekst2": "string",
  "vrijeTekst3": "string",
  "vrijeTekst4": "string",
  "huidigBoekjaar": 0,
  "beginmaandFiscaleBoekjaar": 0,
  "btwAangiftePeriodeSoort": "Maand",
  "icpAangiftePeriodeSoort": "Maand",
  "btwNummerFiscaleEenheid": "string",
  "tussentijdseSuppletiesBerekenen": true,
  "mapUBLBestanden": "string",
  "btwPercentageAangifteKredietbeperking": 0,
  "markeergedragInlezenBankafschriften": "AlleenBelangrijkste",
  "voorkeurenTijdensBoeken": true,
  "aantalVoorloopnullenGrootboekrekeningen": 0,
  "kleineOndernemersregeling": {
    "isKleineOndernemersRegelingActief": true,
    "maximaalBedragVolledigeVerrekening": 0,
    "maximaalBedragKleineOndernemersRegeling": 0
  },
  "volgendFactuurnummer": 0,
  "volgendVerkoopordernummer": 0,
  "volgendContantbonnummer": 0,
  "volgendInkoopordernummer": 0,
  "voorraadcontroleOrderinvoer": true,
  "abonnementOvernemen": true,
  "kolomGeleverdAutomatischVullen": true,
  "voorraadkolommenTonenInInkoop": true,
  "backorderGebruiken": true,
  "deelleveringOrdersDefaultAan": true,
  "factuurAlsBijlageVerkoopboeking": true,
  "tekstregelsOvernemenNaarBackorder": "Geen",
  "regelkortingVerkooporder": "BerekenenOverRegelBedrag",
  "drempelbedragVerkooporderbeheer": 0,
  "drempelbedragVerkooporderbeheerMaxDagenUitstel": 0,
  "verkoopprijsArtikelbestandExclusiefBtw": true,
  "inkoopprijsArtikelbestandExclusiefBtw": true,
  "artikelcodeSoort": "Numeriek",
  "artikelcodeMaxLengte": 0,
  "begindatumVoorraadtelling": "string",
  "voorraadTonenInZoekvenster": true,
  "aantalDecimalenArtikelprijzen": 0,
  "aantalDecimalenArtikelaantallen": 0,
  "verkooporderVoorraadVanafNiveau": "Alle",
  "voorraadSysteem": "Fifo",
  "momentVoorraadBijwerken": "BijBoekenOntvangst",
  "rekeningTeOntvangenInkoopfacturen": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "dagboekVoorraadverschillen": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "buitenlandseBtwGrootboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "factureerBuitenlandsBtw": true,
  "factureerBuitenlandsBtwRanges": [
    {
      "from": 0,
      "to": 0
    }
  ]
}
```
- Media: `text/json` — Schema: [`SnelStart.B2B.Api.V2.Models.CompanyInfo.CompanyInfoModel`](_schemas.md#snelstart-b2b-api-v2-models-companyinfo-companyinfomodel)

Example:
```json
{
  "administratieIdentifier": "00000000-0000-0000-0000-000000000000",
  "administratieNaam": "string",
  "bedrijfsnaam": "string",
  "contactpersoon": "string",
  "adres": "string",
  "postcode": "string",
  "plaats": "string",
  "telefoon": "string",
  "mobieleTelefoon": "string",
  "fax": "string",
  "bankrekeningnummer": "string",
  "iban": "string",
  "bic": "string",
  "rechtsvorm": "NotSet",
  "btwNummer": "string",
  "btwIdentificatieNummer": "string",
  "kvKNummer": "string",
  "email": "string",
  "website": "string",
  "vrijeTekst1": "string",
  "vrijeTekst2": "string",
  "vrijeTekst3": "string",
  "vrijeTekst4": "string",
  "huidigBoekjaar": 0,
  "beginmaandFiscaleBoekjaar": 0,
  "btwAangiftePeriodeSoort": "Maand",
  "icpAangiftePeriodeSoort": "Maand",
  "btwNummerFiscaleEenheid": "string",
  "tussentijdseSuppletiesBerekenen": true,
  "mapUBLBestanden": "string",
  "btwPercentageAangifteKredietbeperking": 0,
  "markeergedragInlezenBankafschriften": "AlleenBelangrijkste",
  "voorkeurenTijdensBoeken": true,
  "aantalVoorloopnullenGrootboekrekeningen": 0,
  "kleineOndernemersregeling": {
    "isKleineOndernemersRegelingActief": true,
    "maximaalBedragVolledigeVerrekening": 0,
    "maximaalBedragKleineOndernemersRegeling": 0
  },
  "volgendFactuurnummer": 0,
  "volgendVerkoopordernummer": 0,
  "volgendContantbonnummer": 0,
  "volgendInkoopordernummer": 0,
  "voorraadcontroleOrderinvoer": true,
  "abonnementOvernemen": true,
  "kolomGeleverdAutomatischVullen": true,
  "voorraadkolommenTonenInInkoop": true,
  "backorderGebruiken": true,
  "deelleveringOrdersDefaultAan": true,
  "factuurAlsBijlageVerkoopboeking": true,
  "tekstregelsOvernemenNaarBackorder": "Geen",
  "regelkortingVerkooporder": "BerekenenOverRegelBedrag",
  "drempelbedragVerkooporderbeheer": 0,
  "drempelbedragVerkooporderbeheerMaxDagenUitstel": 0,
  "verkoopprijsArtikelbestandExclusiefBtw": true,
  "inkoopprijsArtikelbestandExclusiefBtw": true,
  "artikelcodeSoort": "Numeriek",
  "artikelcodeMaxLengte": 0,
  "begindatumVoorraadtelling": "string",
  "voorraadTonenInZoekvenster": true,
  "aantalDecimalenArtikelprijzen": 0,
  "aantalDecimalenArtikelaantallen": 0,
  "verkooporderVoorraadVanafNiveau": "Alle",
  "voorraadSysteem": "Fifo",
  "momentVoorraadBijwerken": "BijBoekenOntvangst",
  "rekeningTeOntvangenInkoopfacturen": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "dagboekVoorraadverschillen": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "buitenlandseBtwGrootboek": {
    "id": "00000000-0000-0000-0000-000000000000",
    "uri": "string"
  },
  "factureerBuitenlandsBtw": true,
  "factureerBuitenlandsBtwRanges": [
    {
      "from": 0,
      "to": 0
    }
  ]
}
```
- Media: `application/x-www-form-urlencoded` — Schema: —

**Responses:**

- **200** → [`SnelStart.B2B.Api.V2.Models.CompanyInfo.CompanyInfoModel`](_schemas.md#snelstart-b2b-api-v2-models-companyinfo-companyinfomodel) (`application/json`) — HTTP 200 OK
- **400** — HTTP 400 Bad Request, wanneer een of meer validatie regels worden geschonden.
- **403** — Indien niet de juiste scopes in het token aanwezig zijn.

---
