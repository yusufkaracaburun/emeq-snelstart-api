---
url: https://b2bapi-developer.snelstart.nl/odata
title: Filters & Odata - Microsoft Azure API Management - developer portal
fetched_at: 2026-05-13T16:19:20+00:00
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

B2B-Api OData
=============

Op diverse GET operaties kun je met behulp van OData filteren en resultaten limiteren.  
Hieronder staat beschreven welke functionaliteiten van OData wij aanbieden.  
  
Wanneer voor een resource de OData functionaliteit beschikbaar is wordt dit met "OData" aangegeven. Bij OData functionaliteit worden er maximaal 500 items teruggegeven. Gebruik paging om alle resultaten op te vragen.  
  
Voor een overzicht van de resources kunt u bij API's kijken.

Filteren met $filter
--------------------

Het adresseren van properties is case-sensitive en in UpperCamelCase.  
Het adresseren van OData functionaliteit is ook case-sensitive maar in lowerCamelCase.  
**Let op:** Deze functionaliteit is niet beschikbaar voor "Uri" velden van een resource.

### Voorbeelden

#### Relatie voor emailadres ophalen

```
GET /relaties?$filter=Email eq 'bart@snelstart.nl'
```

#### Relatie voor id ophalen

```
GET /relaties?$filter=Id eq guid'75b4fe7b-062b-4ae1-bad1-5c5e3866a2ae'
```

#### Relaties die gewijzigd zijn sinds datum ophalen

```
GET /relaties?$filter=ModifiedOn gt datetime'2017-07-16T23:59:59.999'
```

#### Relaties die geen vestigingsAdres in land met id hebben ophalen

```
GET /relaties?$filter=VestigingsAdres/Land/Id ne guid'3098d822-6e46-4ebe-a84b-aaad352a70d2'
```

#### Relaties waarbij de IncassoSoort niet leeg is ophalen

```
GET /relaties?$filter=IncassoSoort ne null
```

#### Relaties met IncassoSoort Core ophalen

```
GET /relaties?$filter=IncassoSoort eq 'Core'
```

#### De eigen relatie ophalen

```
GET /relaties?$filter=Relatiesoort/any(r:r eq 'Eigen')
```

#### Bij prijsafspraken is een Artikel verplicht. Geeft u dit niet op in het filter, dan krijg u een foutmelding "Artikel/Id is verplicht"

```
GET prijsafspraken?$filter=Artikel/Id eq guid'b3e1e950-d3aa-4005-ac58-fe057c9dc624' and Relatie/Id eq guid' 75b4fe7b-062b-4ae1-bad1-5c5e3866a2ae' and Aantal eq 6 and Datum eq datetime'2021-01-01'
```

**Vanaf V2**

#### Het Id en Naam ophalen van de relaties die Test in de naam hebben

```
relaties?$filter=substringof('Test', Naam) eq true&$select=Id,Naam
```

**Vanaf V2**

#### Het Id en Naam ophalen van de relaties waarvan de Naam begint met Test

```
relaties?$filter=startswith(Naam,'Test') eq true&$select=Id,Naam
```

**Vanaf V2**

#### Het Id en Naam ophalen van de relaties waarvan de Naam begint met Test en ModifiedOn groter dan x

```
relaties?$filter=startswith(Naam,'Test') eq true and ModifiedOn gt datetime'2018-12-24T13:30:46'
```

Limiteren met $top
------------------

Maximale waarde voor $top is 500.

### Voorbeelden

#### Eerste 10 relaties ophalen

```
GET /relaties?$top=10
```

Overslaan met $skip
-------------------

### Voorbeelden

#### Eerste 10 relaties overslaan

```
GET /relaties?$skip=10
```

Paging met $skip en $top
------------------------

### Voorbeelden

#### Gepagineerd data ophalen

```
GET /relaties?$skip=0&$top=500
```

```
GET /relaties?$skip=500&$top=500
```

```
GET /relaties?$skip=1000&$top=500
```

### Opmerkingen

Omdat wij geen metadata met de response terugsturen is het het teruggeven van een nextpagelink niet mogelijk.  
Ons advies is om paging te realiseren met behulp van $skip en $top en daarbij de volgende pagina alleen op te vragen wanneer de huidige pagina volledig gevuld is.

Grootboekmutatie filters
========================

Op de grootboekmutatie operatie zijn extra filter en aggregatie mogelijkheden geimplementeerd. Deze filters worden uitgevoerd na de eerder beschreven filters. Hieronder vindt u diverse voorbeelden van deze uitbreidingen.

Aggregeren met $apply
---------------------

Syntax: $apply(**veld** with **operatie** as **naam**))  
Hierbij is:

* **veld** de naam van item dat geaggregeerd moet worden: Saldo, Debet of Credit
* **operatie** sum, min, max of average
* **naam** naam van het veld in het resultaat

### Voorbeelden

```
GET grootboekmutaties?$apply=aggregate(Saldo with sum as TotaalSaldo)
```

```
GET grootboekmutaties?$apply=aggregate(Debet with min as Minimaal)
```

```
GET grootboekmutaties?$apply=aggregate(Credit with average as Gemiddeld)
```

```
GET grootboekmutaties?$filter=Grootboek/Id eq (guid'57c8be02-4c81-4b81-99a0-192c6ee960e4')&$apply=aggregate(Debet with max as Maximaal)
```

Groeperen met $apply
--------------------

Syntax: $apply(groupby(**{groep(1..n)}**))  
Hierbij is:

* **groep** de naam van item waarop gegroepeerd moet worden. Er kan op 1 of meer velden gegroepeerd worden

### Voorbeelden

```
GET grootboekmutaties?$apply=groupby((Kostenplaats))
```

```
GET grootboekmutaties?$apply=groupby((Kostenplaats,Dagboek))
```

Combinatie groeperen en aggregeren met $apply
---------------------------------------------

Syntax: $apply(groupby(**{groep(1..n)}**), aggregate(**veld** with **operatie** as **naam**)))  
Hierbij is:

* **groep** de naam van item waarop gegroepeerd moet worden. Er kan op 1 of meer velden gegroepeerd worden
* **veld** de naam van item dat geaggregeerd moet worden: Saldo, Debet of Credit
* **operatie** sum, min, max of average
* **naam** naam van het veld in het resultaat

### Voorbeelden

```
GET grootboekmutaties?$apply=groupby((Grootboek),aggregate(Saldo with sum as Totaal))
```

```
GET grootboekmutaties?$apply=groupby((Grootboek),aggregate(Debet with sum as Totaal))
```

```
GET grootboekmutaties?$apply=groupby((Kostenplaats,Dagboek),aggregate(Debet with sum as Totaal))
```

Combinatie filteren, groeperen en aggregeren met $filter en $apply
------------------------------------------------------------------

### Voorbeelden

Het Saldo per grootboek in 2016 is op te halen door:

```
GET grootboekmutaties?$filter=year(Datum) eq 2016&$apply=groupby((Grootboek),aggregate(Saldo with sum as Totaal))
```

Het totaal debetsaldo per grootboek voor 1e kwartaal 2016 is op te halen door:

```
GET grootboekmutaties?$filter=Datum gt datetime'2015-12-31' and Datum lt datetime'2016-04-01'&$apply=groupby((Grootboek),aggregate(Debet with sum as Totaal))
```

Grootboeksaldi van een kostenplaats is op te halen door:

```
GET grootboekmutaties?$filter=Kostenplaats/Id eq (guid'57c8be02-4c81-4b81-99a0-192c6ee960e4')&$apply=aggregate(Saldo with sum as Totaal)
```

VRIJE VOORRAAD OPHALEN lager dan 0
----------------------------------

Middels onderstaande request kun je de artikelen ophalen die een vrije voorraad van onder de 0 hebben.

$"/artikelen?$skip={downloadpositie}&$top={SHIFT\_SIZE\_PAGING}&$filter=Voorraadcontrole eq true&$filter=IsNonActief eq false&$filter=VrijeVoorraad lt 0", Method.GET);

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
