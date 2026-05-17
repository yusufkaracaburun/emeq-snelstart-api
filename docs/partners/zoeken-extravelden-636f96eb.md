---
url: https://b2bapi-developer.snelstart.nl/Zoeken-extravelden
title: Zoeken op extra velden - Microsoft Azure API Management - developer portal
fetched_at: 2026-05-13T16:19:21+00:00
---

[![Picture](/content/MicrosoftTeams-image%20(4).png)](/)

* [Home](/)

* [API DOCUMENTATIE](/apidocumentatie)

  + [APIs](/apis)
  + [B2B-API versie 2 foutcodes](/foutcodes-v2)
  + [B2B-Api versioneringsstrategie](/versioneringsstrategie)
  + [Gebruikersbeleid](/Gebruikersbeleid)
* [Products](/products)
* [How To](/HowTo)

  + [Authenticatie](/Authenticatie)
  + [oAuth Authenticatie](/oAuth)
  + [Filters & Odata](/odata)
  + [Factureren met buitenlandse BTW (OSS)](/oss-btw)
  + [Zoeken op extra velden](/Zoeken-extravelden)
* [Certificering](/Certificering)
* [Reports](/reports)
* [Profile](/profile)
* [Sign out](#signout)

Zoeken op Extra Velden
----------------------

Vanaf [SnelStart inBalans](#) kunt u extra gegevens velden aanmaken, waarin u aanvullende informatie kunt zetten. U kunt extra velden aanmaken bij:

* Artikelen
* Klanten
* Grootboekrekeningen

Op deze extra velden kan een filter gebruikt worden.

Op diverse GET operaties kun je met behulp van OData filteren en resultaten limiteren.

### Filteren met $filter

Het adresseren van properties is case-sensitive en in UpperCamelCase.

Het adresseren van OData functionaliteit is ook case-sensitive maar in lowerCamelCase.

Let op: Deze functionaliteit is niet beschikbaar voor "Uri" velden van een resource.

### Voorbeeld 1 (klanten)

#### Optie 1

Zoek alle klanten waarbij lidmaatschapnummer = 5299

relaties?$filter=ExtraVeldenKlant/any(e:e/Waarde eq '5299' and e/Naam eq 'lidmaatschapnummer')

#### Optie 2

Zoek in extra velden alle klanten waar 5299 in voorkomt

relaties?$filter=ExtraVeldenKlant/any(e:e/Waarde eq '5299')

### Voorbeeld 2 (artikelen)

#### Optie 1

Zoek alle artikelen die als kleur = rood

artikelen?$filter=ExtraVelden/any(e:e/Waarde eq 'rood' and e/Naam eq 'kleur')

#### Optie 2

Zoek in extra velden alle artikelen waar "rood" voorkomt

artikelen?$filter=ExtraVelden/any(e:e/Waarde eq 'rood')

### Voorbeeld 3 (grootboekrekeningen)

### Optie 1

Zoek alle grootboekrekeningen die als land= duitsland

grootboekrekeningen?$filter=ExtraVelden/any(e:e/Waarde eq 'duitsland' and e/Naam eq 'land')

#### Optie 2

Zoek in extra velden alle grootboekrekeningen waar "duitsland" voorkomt

grootboekrekeningen?$filter=ExtraVelden/any(e:e/Waarde eq 'duitsland')

###

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
