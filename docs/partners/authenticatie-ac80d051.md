---
url: https://b2bapi-developer.snelstart.nl/Authenticatie
title: Authenticatie - Microsoft Azure API Management - developer portal
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

Authenticatie
-------------

Voor communicatie met de api zijn een koppeling sleutel en subscription key nodig. Hieronder zal worden uitgelegd hoe een bearer token opgehaald kan worden van de OAuth server en hoe daarmee een request naar SnelStart gestuurd kan worden.

Koppeling sleutel
-----------------

Deze sleutel kunnen gebruikers van de partner applicatie beheren met SnelStart Web, deze geeft toegang tot de administratie waar deze sleutel bij hoort.  
De sleutels kunnen ook geautomatiseerd verkregen worden.

### Access token opvragen bij AuthServer

Het access token kan op twee manieren worden opgevraagd bij de auth server. De manier wordt gekozen door het grant\_type op te geven. De waarde van grant\_type kan zijn:

1. clientkey
2. password

De eenvoudigste manier is om het grant\_type op "clientkey" te zetten en de koppelingssleutel in het property clientkey mee te sturen. Hieronder volgt een voorbeeld van een request met grant\_type "clientkey".  
.  
**Let op:**het is belangrijk dat de credentials in de body worden gezet.

```
POST https://auth.snelstart.nl/b2b/token HTTP/1.1 Content-Type: application/x-www-form-urlencoded grant_type=clientkey&clientkey={sleutel}
```

Het acces\_token uit de response body is nodig voor communicatie met de api.

```
{ "access_token":"acces_token", "token_type":"bearer", "expires_in":3599 }
```

Subscription key
----------------

Deze sleutel kan een partner beheren bij het menuitem Producten en geeft toegang tot de api.

### Data opvragen bij de API

Voorbeeld request

```
GET https://b2bapi.snelstart.nl/v1/relaties?$top=1 HTTP/1.1 Authorization: Bearer {acces_token} Ocp-Apim-Subscription-Key: {subscription_key}
```

Voorbeeld code
--------------

In het volgende voorbeeld wordt een Bearer token opgehaald en wordt dit token gebruikt om de eigen relatie op te halen.

```
class Program
```

```
{ static void Main(string[] args)
```

```
{ var clientKey = ""; // Vul dit met de koppelingsleutel verkregen op https://web.snelstart.nl string subscriptionKey = ""; // Vul dit met uw eigen key verkregen op https://b2bapi-developer.snelstart.nl
```

```
if (string.IsNullOrEmpty(clientKey) || string.IsNullOrEmpty(subscriptionKey)) { Console.WriteLine("De variabelen apiKey en de clientkey moeten een waarde hebben"); }
```

```
else
```

```
{ var bearerToken = GetBearerToken(clientKey); GetEigenRelatie(subscriptionKey, bearerToken); } Console.ReadLine(); }
```

```
private static string GetBearerToken(string clientkey)
```

```
{ using (var httpClient = new HttpClient())
```

```
{ var requestBody = new Dictionary { { "grant_type", "clientkey" }, { "clientkey", clientkey } }; Uri requestUri = new Uri("https://auth.snelstart.nl/b2b/token"); var message = httpClient.PostAsync(requestUri, new FormUrlEncodedContent(requestBody)).Result; var json = message.Content.ReadAsStringAsync().Result; dynamic response = JObject.Parse(json); return response.access_token; } }
```

```
private static void GetEigenRelatie(string subscriptionKey, string bearerToken)
```

```
{ using (var httpClient = new HttpClient()) { httpClient.DefaultRequestHeaders.Add("Ocp-Apim-Subscription-Key", subscriptionKey); httpClient.DefaultRequestHeaders.Add("Authorization", $"Bearer {bearerToken}"); var result = httpClient.GetAsync(new Uri("https://b2bapi.snelstart.nl/v1/relaties?$filter=Relatiesoort/any(r:r eq 'Eigen')")).Result; var json = result.Content.ReadAsStringAsync().Result; dynamic response = JArray.Parse(json); Console.WriteLine(response[0].naam); } } }
```

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
