---
url: https://b2bapi-developer.snelstart.nl/Gebruikersbeleid
title: Gebruikersbeleid - Microsoft Azure API Management - developer portal
fetched_at: 2026-05-13T16:19:19+00:00
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

Gebruikersbeleid
================

### B2B Gebruikersaccount

Een gebruikersaccount zonder "product" (subscriptionsleutel) wordt automatisch na 1 dag verwijderd.

Er wordt een email verstuurd aan de gebruiker als het account verwijderd is.

### Producten (subscriptionsleutel)

![](/content/type%20koppeling.png)

### Email Notificaties

Your Snelstart B2B account is deleted  (Your Snelstart B2B account is deleted because there is no product subscription)

De bovenstaande email wordt verstuurd wanneer een b2b-API account geen subscriptionsleutel bevat langer dan een dag. Het account wordt als niet actief beschouwd en wordt daarom gewist.

Opnieuw inschrijven is toegestaan met uw eerder gebruikte emailadres. ([https://b2bapi-developer.snelstart.nl/signup](#)).

Let Op: Schrijf u in op een product (Test & Ontwikkeling is kosteloos), anders wordt het account weer na 1 dag gewist ([https://b2bapi-developer.snelstart.nl/products/ontwikkeling](#)).

Access denied due to invalid subscription key. Make sure to provide a valid key for an active subscription."

Deze email wordt verzonden als de gebruikte subscriptionkey niet meer aanwezig is onder het b2b-API account. Bijvoorbeeld omdat de Test & Ontwikkelingssleutel is verlopen (90 dagen geldig)

Een nieuwe Test & Ontwikkelsleutel kan aangemaakt worden via [https://b2bapi-developer.snelstart.nl/products/ontwikkeling](#) (90 dagen geldig)

Let Op: Maak de nieuwe Test & Ontwikkelingssleutel binnen 1 dag opnieuw aan anders wordt het account gewist.

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
