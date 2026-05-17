---
url: https://b2bapi-developer.snelstart.nl/oss-btw
title: Factureren met buitenlandse BTW (OSS) - Microsoft Azure API Management - developer portal
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

Factureren met buitenlandse BTW (OSS)
=====================================

Vanaf 1 juli 2021 kan een ondernemer de in andere EU-landen verschuldigde btw via de OSS-portal van de Nederlandse Belastingdienst aangeven. Dit doe je met een aanmelding voor de 'Unieregeling'. Je hebt dan geen btw-registratie in andere EU-landen nodig. Voor meer informatie zie informatie van [de Belastingdienst.](#)

### Instelling in Desktop SnelStart 12 applicatie

Hiervoor dient de klant een instelling te zetten in Desktop (SnelStart 12).

Wanner deze instelling is gezet komt er een VAT model beschikbaar naast het bestaande Nederlandse btw model van SnelStart.

Om gebruik te maken van het VAT model dient de gebruiker bij grootboekrekeningen met functie 84 een VAT tarief te kiezen.  
Vervolgens is het aan de gebruiker om deze grootboekrekeningen te koppelen aan de juiste artikelomzetgroep, zodat het juiste VAT percentage wordt berekend voor het artikel op de order, adhv het afleveradres van de klant.

Voor testdoeleinden hebben we de volgende aanpassingen gedaan:

Het is mogelijk om een PUT te doen op Companyinfo waarmee “factureerBuitenlandsBtw" op true kan worden gezet.

Hiervoor dienen er geen grootboekrekeningen te zijn met een functie: ‘InstallatieTeleverkoopBinnenEUgeen’ omdat icm "factureerBuitenlandsBtw" er een Vattarief verplicht is op deze grootboekrekening.

Dit kun je aanpassen door eerst de grootboeken te verwijderen via desktop.

Vervolgens het vinkje te zetten en grootboekrekeningen aanmaken met functie ‘InstallatieTeleverkoopBinnenEUgeen’.

Dan kan er een boeking of order worden ingeschoten voor een klant binnen EU zonder btw nummer met datum op of na 01-07-2021 of vanaf datum dat vinkje is gezet na 01-07-2021.

Deze boeking zal geboekt worden met VAT ipv btw.

Het is mogelijk om de vat-tarieven op te halen dmv /v2/vatrates, zie b2b developerportal.

#### Stappenplan setting en grootboekrekeningen

Stap 1:

Voer de volgende odata query uit om alle grootboeken met functie 'InstallatieTeleverkoopBinnenEUgeen' te krijgen die geen VatRateCode hebben:

GET /grootboeken?$select=Nummer, Omschrijving&$filter=Grootboekfunctie eq 'InstallatieTeleverkoopBinnenEUgeen' and VatRateCode eq null

Stap 2:

Verwijder in SnelStart Desktop alle grootboeken uit Stap 1 of geef de grootboeken een andere functie

Stap 3:

Controleer of er geen grootboeken meer zijn met de functie 'InstallatieTeleverkoopBinnenEUgeen' zonder VatRateCode. De volgende odata query zal dan een leeg resultaat geven

GET /grootboeken?$select=Nummer, Omschrijving&$filter=Grootboekfunctie eq 'InstallatieTeleverkoopBinnenEUgeen' and VatRateCode eq null

Stap 4:

Geef aan dat je buitenlandse btw wilt facturen:

PUT /CompanyInfo

{

    "factureerBuitenlandsBtw": true

}

Stap 5:

Maak nieuwe grootboeken met functie 'InstallatieTeleverkoopBinnenEUgeen' en een VatRateCode. De VatRateCode mag 1 van de volgende waarden zijn (SR, RRH, RRL, PR, SRR)

POST /grootboeken

{

                               "omschrijving": "Grootboek met Standard Rate",

                               "kostenplaatsVerplicht": false,

                               "rekeningCode": "WinstEnVerlies",

                               "nonactief": false,

                               "nummer": 8077,

                               "grootboekfunctie": "InstallatieTeleverkoopBinnenEUgeen",

                               "vatRateCode" : "SR"

}

### Wat houdt dit in voor jouw koppeling:

Op verkoopboekingen zijn drie condities toegevoegd:

1. Indien vinkje actief en klant is een EU particulier dan geen btw op de verkoopboeking accepteren indien datum op/na 1-7-2021 valt
2. Indien vinkje actief en klant is een EU particulier dan alle grootboeken die meegegeven worden in de boeking hebben een functie ‘InstallatieTeleverkoopBinnenEUgeen’ op een grootboek of het grootboek is het BuitenlandseBTWboeking (op te halen in de companysettings)
3. Het totaal bedrag aan BuitenlandseBTWboeking is gelijk aan de som van de te betalen btw van de grootboeken met functies ‘InstallatieTeleverkoopBinnenEUgeen’

               - om afrondingsverschillen te voorkomen is een het totaal +- 1 cent per regel

Een klant is een particulier als er geen btw nummer op de klantkaart staat.

Om een verkoopboeking te kunnen maken dien je het volgende te doen:

De CompanySettings uitlezen om te bepalen of buitenlandse Btw geboekt moet worden of dat er ‘normale btw’ geboekt mag worden (factureerBuitenlandsBtw). Bij deze company settings staat ook het grootboek waar de Btw op geboekt moet worden (buitenlandseBtwGrootboek)

Voorbeeld:

Call: /companyInfo

Response body:

……..

"buitenlandseBtwGrootboek": {

               "id": "5ef514fe-eff0-4549-973f-2ce331b935c0",

                "uri": "/grootboeken/5ef514fe-eff0-4549-973f-2ce331b935c0"

    },

    "factureerBuitenlandsBtw": true

De verkoopboeking kan nu als volgt worden ingeschoten:

Voorbeeld:

Post /verkoopboekingen met btw

{

    "boekstuk": "",

    "factuurdatum": "2021-07-29T00:00:00",

    "factuurnummer": "100008",

    "klant": {

        "id": "5830cec3-8929-4703-80b4-bd695402a7b0",

        "uri": "/relaties/5830cec3-8929-4703-80b4-bd695402a7b0"

    },

    "omschrijving": "duits",

    "factuurbedrag": 81.46,

    "betalingstermijn": 0,

    "eenmaligeIncassoMachtiging": **null**,

    "doorlopendeIncassoMachtiging": **null**,

    "boekingsregels": [

        {

            "omschrijving": "De OSS grootboekrekening met functie 84verlaagd btw laag",

            "grootboek": {

                "id": "08e306ca-97bb-4ef0-badf-693a0cd1b11b",

                "uri": "/grootboeken/08e306ca-97bb-4ef0-badf-693a0cd1b11b"

            },

            "kostenplaats": **null**,

            "bedrag": 67.9,

            "btwSoort": "Geen"

        },

        {

            "omschrijving": "De OSS grootboekrekening met functie 84verlaagd btw hoog",

            "grootboek": {

                "id": "bc9c3ab2-7f8f-449f-99ac-7e83baaed935",

                "uri": "/grootboeken/bc9c3ab2-7f8f-449f-99ac-7e83baaed935"

            },

            "kostenplaats": **null**,

            "bedrag": 7.40,

            "btwSoort": "Geen"

        },

        {

            "omschrijving": "De btw rekening uit de bedrijfsinstellingen laag",

            "grootboek": {

                "id": "5ef514fe-eff0-4549-973f-2ce331b935c0",

                "uri": "/grootboeken/5ef514fe-eff0-4549-973f-2ce331b935c0"

            },

            "kostenplaats": **null**,

            "bedrag": 4.75,

            "btwSoort": "Geen"

        },

        {

            "omschrijving": "De btw rekening uit de bedrijfsinstellingen hoog",

            "grootboek": {

                "id": "5ef514fe-eff0-4549-973f-2ce331b935c0",

                "uri": "/grootboeken/5ef514fe-eff0-4549-973f-2ce331b935c0"

            },

            "kostenplaats": **null**,

            "bedrag": 1.41,

            "btwSoort": "Geen"

        }

    ],

    "btw": []

}

Post /verkoopboekingen zonder btw

{

    "boekstuk": "",

    "factuurdatum": "2021-07-29T00:00:00",

    "factuurnummer": "100008",

    "klant": {

        "id": "1fa7bcae-02d4-4cdd-8a01-4414bf45abef",

        "uri": "/relaties/1fa7bcae-02d4-4cdd-8a01-4414bf45abef"

    },

    "omschrijving": "frans",

    "factuurbedrag": 5505.8000,

    "betalingstermijn": 0,

    "eenmaligeIncassoMachtiging": **null**,

    "doorlopendeIncassoMachtiging": **null**,

    "boekingsregels": [

        {

            "omschrijving": "De OSS grootboekrekening met functie 84",

            "grootboek": {

                "id": "54a74c2b-fef1-4785-b056-8bb65622e4ae",

                "uri": "/grootboeken/54a74c2b-fef1-4785-b056-8bb65622e4ae"

            },

            "kostenplaats": **null**,

            "bedrag": 4588.1700,

            "btwSoort": "Geen"

        },

        {

            "omschrijving": "de OSS btw rekening uit de company info/instellingen",

            "grootboek": {

                "id": "45d53513-042e-4c9c-b444-0e3a5280406c",

                "uri": "/grootboeken/45d53513-042e-4c9c-b444-0e3a5280406c"

            },

            "kostenplaats": **null**,

            "bedrag": 917.6300,

            "btwSoort": "Geen"

        }

    ],

    "btw": []

}

In de verkooporders is niets gewijzigd, SnelStart rekent de te betalen VAT uit en boekt op grootboekrekening gekoppeld aan de artikelomzetgroep

{

                "relatie": {

                               "id": "96588D87-DE68-4345-A999-F7F4ED07A9DC",

                               "uri": "/relaties/96588D87-DE68-4345-A999-F7F4ED07A9DC"

                },

                "procesStatus": "Pakbon",

                "datum": "2022-01-01T00:00:00",

                "krediettermijn": 0,

                "omschrijving": "POST regel ex btw",

                "betalingskenmerk": "Nieuw 16",

                "incassomachtiging": null,

                "verkooporderBtwIngaveModel": "Exclusief",

                "kostenplaats": null,

                "verkoopordersjabloon": {

        "id": "00000000-0000-0000-0000-000000000000",

        "uri": "/verkoopordersjablonen/00000000-0000-0000-0000-000000000000"

    },

                "regels": [

                               {

                               "artikel": {

                "id": "36cda20f-3b9b-4abe-8764-d0ec4b869707",

                "uri": "/artikelen/36cda20f-3b9b-4abe-8764-d0ec4b869707"

            },

            "omschrijving": "Artikel 9000135 BTW Overig",

            "stuksprijs": 35.00,

            "aantal": 100,

            "kortingsPercentage": 10,

            "extraRegelVelden": []

                               }

                ],

}

Het aantal en de stuksprijs maakt het totaal. Tijdens het factureren wordt de Vat berekend aan de hand van hoe de order is ingeschoten (Inclusief/ Exclusief)

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
