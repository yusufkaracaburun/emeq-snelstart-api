---
url: https://b2bapi-developer.snelstart.nl/oAuth
title: oAuth Authenticatie - Microsoft Azure API Management - developer portal
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

oAuth Authenticatie voor productiekoppelingen
=============================================

Het gebruik van oAuth bij het initieren van de koppeling voorkomt dat de eindgebruikers handmatig sleutels hoeft aan te maken en uit te wisselen. Hiermee wordt het instellen van de koppeling voor gebruikers simpeler.

Partners die een productiekoppeling maken kunnen een activeringslink sturen in hun applicatie om te koppelen met SnelStart.

Om een oAuth koppeling tot stand te brengen dien je een WebhookURL met SnelStart te overleggen en van ons heb je de “AppShortName” nodig als onderdeel van de activeringslink. De Shortname wordt per mail verzonden in de aanmeldingsmail.

Werking oAuth
-------------

![](/content/werking%20oAuth.png)

### Activatielink

Via de onderstaande link kan de koppeling geïnitieerd worden. Je eigen {appShortName} heb je via SnelStart verkregen in de aanmeldingsmail.

```
https://web.snelstart.nl/couplings/activate/JouwappShortName
```

Roep je de link aan dan zie je, na inloggen, het volgende

![](/content/ontbrekende%20referencekey.png)

Zoals de melding aangeeft kan er geen koppeling gelegd worden zonder dat er een referencekey meegegeven wordt.

De volgende querystring parameters zijn mogelijk:

### referenceKey

Verplicht wanneer de app een webhook heeft.  
Bevat een waarde die met de webhook mee verstuurd wordt richting de partner zodat context bepaald kan worden. Hier kun je bijvoorbeeld klantnummers of andere herkenningswaardes in meegeven.

De referenceKey kan niet meer dan 500 tekens bevatten.

### successUrl

Optioneel  
Moet urlencoded zijn  
Wanneer het opzetten van de koppeling voltooid is wordt de gebruiker doorgestuurd naar deze url.

### Voorbeeld

https://web.snelstart.nl/couplings/activate/{JouwAppShortName}?referenceKey={JouwReferentieSleutel}&successUrl=https%3A%2F%2Fweb.snelstart.nl

Als er een referenceKey wordt meegegeven dan zie je, na het inloggen, stap 2 van het koppelen.

![](/content/Geslaagde%20redirect%20naar%20online%20tegel.png)

### Webhook

Het opgeven van je webhook is verplicht voor productiekoppelingen anders kan de koppeling niet tot stand komen en zal de koppeling niet gecertificeerd kunnen worden.

Nadat de SnelStart gebruiker bij stap 4 gekozen heeft voor de optie koppeling instellen dan zullen we een POST sturen daar de door de ontwikkelaar opgegeven webhookURL.

De request die naar de opgegeven webhook url verzonden wordt ziet er als volgt uit:

```
POST https://{PartnerWebhook}
```

met Json data in de body:

```
{ KoppelSleutel: string, ActionType: "Create"|"Regenerate"|"Delete", ReferenceKey: string }
```

Wanneer de url een statuscode van 200 t/m 299 teruggeeft wordt het request als succesvol beschouwt. Wanneer er een andere status terugkomt of de aanvraag mislukt wordt er op dit moment geen retry gedaan.

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
