---
url: https://b2bapi-developer.snelstart.nl/versioneringsstrategie
title: B2B-Api versioneringsstrategie - Microsoft Azure API Management - developer portal
fetched_at: 2026-05-13T16:19:18+00:00
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

B2B-Api versioneringsstrategie
==============================

De wereld is aan verandering onderhevig. Dat valt niet te ontkennen. Zo zal ook de B2B-Api in de loop van tijd veranderen. Hieronder staat hoe we bij SnelStart om zullen gaan de de veranderingen in de B2B-Api.

De opbouw van de api-URL
------------------------

In de URL van de B2B-Api is de versie van de api terug te vinden. De URL van de api bestaat uit een aantal onderdelen, te weten:

```
{scheme}://{host}/{version}/{resource}[/{action}|?{parameters}]
```

**scheme**

Het communicatie protocol dat wordt gebruikt. Dit is altijd `https`

**host**

Dit is `b2bapi.snelstart.nl`

**version**

De versie van de B2B-Api. Deze begint met 'v' gevolgd door één of meer cijfers.

**resource**

Het object dat uit de administratie wordt ontsloten.

**action**

Optioneel: sommige 'resources' kennen extra acties.

**parameters**

Optioneel: sommige 'resources' kennen optionele querystring parameters.

De huidige versie van de B2B-Api is: v1.

Versioneringsstrategie
----------------------

SnelStart behoud zich het recht voor om de B2B-Api te wijzigen. Natuurlijk zullen wij bij wijzigingen zoveel als redelijkerwijs mogelijk is rekening proberen te houden met de gevolgen voor uw applicatie.

Welke wijzigingen hebben welke gevolgen? Hieronder staat wat u kunt en mag verwachten:

**Toevoegingen** van nieuwe resources of operaties aan de B2B-Api.  
Geen wijzingen in versie.

**Toevoegingen** van nieuwe optionele parameters aan bestaande resources of operaties van de B2B-Api.  
Geen wijzingen in versie.

**Toevoegingen** van nieuwe verplichte parameters aan resources of operaties van de B2B-Api.  
Het versienummer wordt verhoogd.

**Wijzigingen** van resourcenamen of operatienamen in de B2B-Api.  
Het versienummer wordt verhoogd.

**Wijzigingen** van het datatype in een resource of parameter van de B2B-Api.  
Het versienummer wordt verhoogd.

**Verwijderingen** van resources, operaties of parameters in de B2B-Api.  
Het versienummer wordt verhoogd.

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
