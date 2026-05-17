---
url: https://b2bapi-developer.snelstart.nl/Certificering
title: Certificering - Microsoft Azure API Management - developer portal
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

Certificering
=============

Wanneer je als ontwikkelaar gereed bent om de gemaakte koppeling te laten certificeren dan zullen we hieronder aangeven hoe je dit het beste kunt doen. Ook beschrijven we voor de duidelijkheid wat ieder type koppeling inhoud zodat dit wellicht ook een beter beeld schept.

Ook is er een verschil aanwezig tussen een maatwerkkoppeling en een productiekoppeling qua het aanvragen van de certificering.

* Wanneer je als ontwikkelaar een Maatwerkkoppeling wil laten certificeren dan kan dit per mail aangevraagd worden door de onderstaande gegevens naar partner@snelstart.nl te sturen.

  + Het relatienummer van de SnelStart klant.
  + Het emailadres waarmee de ontwikkelaar inlogt in het B2B-API portaal. Hier zal namelijk de permanente sleutel onder toegevoegd worden.
  + Het emailadres waar we de certificeringskosten naartoe kunnen versturen.
* Bij een productiekoppeling kan het certificeringsformulier op <https://www.snelstart.nl/api> ingevuld worden. Op basis van dit formulier zal het certificeringsproces voor productiekoppelingen van start gaan. Vul het formulier zo duidelijk mogelijk in, deze informatie zal namelijk gebruikt worden om de partnerpagina aan te maken!

### Maatwerk

In geval van een maatwerkkoppeling zal het gebruik van de koppeling door de SnelStart worden getest gedurende een periode van minimaal een week. Na goedkeuring door SnelStart geven we een permanent active maatwerksleutel af en tot slot worden de certificeringskosten voor de sleutel inrekening gebracht.

* In geval van een maatwerkkoppeling (voor een enkele SnelStartklant)
* Voor een maatwerk oplossing is een SnelStart InZicht of InControle licentie vereist.
* Het certificeren van een maatwerkkoppeling kost eenmalig 250 euro per afgegeven maatwerksleutel.

Productie
---------

Bij een koppeling geschikt voor meerdere SnelStart klanten hebben wij aanvullende informatie nodig om de certificering te starten.

* Per productiekoppeling maken we met onze partner afspraken over de toelatings- en pakketeisen die nodig zijn om een koppeling tot stand te brengen. Dit is volledig afhankelijk van de endpoints die je als ontwikkelaar nodig hebt.
* Wanneer we op basis van het certificeringsformulier een preview voor de partnerpagina hebben dan zullen we deze naar de ontwikkelaar sturen voor feedback of akkoord.
* Ook is het gebruik van een webhookURL een vereiste om als productiekoppeling gecertificeerd te kunnen worden. Wanneer we deze ontvangen hebben dan stellen we hem op de aangemaakte tegel in zodat hij gebruikt kan worden.
* Nadat de productiekoppeling door het certificeringsproces heen en gecertificeerd is dan zullen we een permanente productiesleutel afgeven. hierna zullen we eenmalig 250 euro in rekening brengen per afgegeven sleutel.

### Publicatie productiekoppeling

Productie koppelingen ontvangen na de certificering een zichtbare tegel in onze webomgeving. Daarnaast is er de mogelijkheid om een vermelding te krijgen op onze website bij de Software Partners. Wij verwachten van onze partners dat zij hetzelfde verzorgen voor SnelStart binnen hun omgeving.

### Ratelimits

**Bron:** screenshot "B2B-API PARTNER KEY POLICIES PER PRODUCT" uit SnelStart developer portal (`Certificering`-pagina), getranscribeerd 2026-05-15.

| Tier | Gepubliceerd | Call rate / admin / minuut | Calls / admin / uur | Max. concurrent / admin |
|---|---|---|---|---|
| Ontwikkeling & Test | Ja | 100 | 1.000 | 5 |
| Maatwerk | Ja | 500 | 5.000 | 50 |
| Productie | Ja | 500 | 5.000 | 50 |

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
