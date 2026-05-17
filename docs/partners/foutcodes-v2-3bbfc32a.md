---
url: https://b2bapi-developer.snelstart.nl/foutcodes-v2
title: B2B API versie 2 foutcodes - Microsoft Azure API Management - developer portal
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

B2B API versie 2 foutcodes
==========================

Tijdens het ontwikkelen en gebruiken van de B2B-Api zullen hoe dan ook fouten optreden. Om zo goed als mogelijk te kunnen reageren op deze fouten, geeft de B2B-Api bij veel fouten een code terug. U kunt als ontwikkelaar van Software Partner apps in uw code anticiperen op deze foutcodes.

Deze foutcodes hebben betrekking op versie 2 van de SnelStart B2B API.

De opbouw van foutcodes
-----------------------

De code die met fouten wordt teruggestuurd bestaat uit:

```
{resource code}-{foutnummer}
```

**resource code**

Dit is een code die bestaat uit drie hoofdletters en geeft aan in welke resource de fout optrad.

**foutnummer**

Deze bestaat uit vier cijfers.

De ondersteunde resource codes zijn:

* ALG: Algemene (generieke) fouten
* ART: resource 'Artikelen'
* BLG: resource 'Bijlagen'
* BOE: resource 'Boekingen'
* BTW: resource 'Btw Aangifte'
* KPL: resource 'Kostenplaatsen'
* REL: resource 'Relaties'
* REF: resource 'Extra velden'
* VOR: resource 'Verkooporders'

Foutcode `ALG`
--------------

Code: `ALG-0100`

* Http status code: 400
* Melding: Het ID dient leeg te zijn

Code: `ALG-0101`

* Http status code: 400
* Melding: Het ID in het url en het ID van de data in het request komen niet overeen

Code: `ALG-0102`

* Http status code: 400
* Melding: Onbekende fout

Code: `ALG-0103`

* Http status code: 400
* Melding: Ongeldig ID

Code: `ALG-0105`

* Http status code: 400
* Melding: Het item is nonactief

Code: `ALG-0104`

* Http status code: 400
* Melding: Ongeldig OData filter

Code: `ALG-0106`

* Http status code: 400
* Melding: De data in het request is leeg

Foutcode `ART`
--------------

Code: `ART-0001`

* Http status code: 400
* Melding: Artikel bestaat niet.

Code: `ART-0002`

* Http status code: 400
* Melding: Artikelcode is verplicht.

Code: `ART-0003`

* Http status code: 400
* Melding: Artikelcode is geen nummer.

Code: `ART-0004`

* Http status code: 400
* Melding: Artikelcode is te lang.

Code: `ART-0005`

* Http status code: 400
* Melding: Artikelcode bestaat al.

Code: `ART-0006`

* Http status code: 400
* Melding: Omschrijving is verplicht.

Code: `ART-0007`

* Http status code: 400
* Melding: Omschrijving is te lang.

Code: `ART-0008`

* Http status code: 400
* Melding: Artikelomzetgroep is verplicht.

Code: `ART-0009`

* Http status code: 400
* Melding: Opgegeven artikelomzetgroep bestaat niet.

Code: `ART-0010`

* Http status code: 400
* Melding: Artikel heeft nog voorraad.

Code: `ART-0011`

* Http status code: 400
* Melding: Artikel wordt gebruikt in een openstaande order of factuur.

Code: `ART-0012`

* Http status code: 400
* Melding: Artikel is onderdeel van een recept.

Code: `ART-0013`

* Http status code: 400
* Melding: Artikel is ingesteld voor grossierkoppeling.

Code: `ART-0014`

* Http status code: 400
* Melding: De opgegeven klant kan niet worden gevonden.

Code: `ART-0015`

* Http status code: 400
* Melding: Artikel is ingesteld als Tekst Facturen Artikel en mag daarom niet verwijderd worden.

Code: `ART-0016`

* Http status code: 400
* Melding: De opgegeven leverancier kan niet worden gevonden.

Code: `ART-0017`

* Http status code: 400
* Melding: De opgegeven relatie is geen leverancier en niet de eigen relatie.

Code: `ART-0018`

* Http status code: 400
* Melding: De relatie is verwijderd en staat op nonactief

Foutcode `BLG`
--------------

Code: `BLG-0001`

* Http status code: 400
* Melding: Bijlage niet gevonden.

Code: `BLG-0002`

* Http status code: 400
* Melding: Dit publicIdentifier bestaat al.

Code: `BLG-0003`

* Http status code: 400
* Melding: Bijlage kan niet worden opgeslagen.

Code: `BLG-0004`

* Http status code: 400
* Melding: Inkoopboeking is alleen lezen.

Code: `BLG-0005`

* Http status code: 400
* Melding: Inkoopboeking niet gevonden.

Code: `BLG-0006`

* Http status code: 400
* Melding: Bestand is groter dan 10MB.

Code: `BLG-0007`

* Http status code: 400
* Melding: Geen bestandsnaam opgegeven.

Code: `BLG-0008`

* Http status code: 400
* Melding: Bijlage is leeg.

Code: `BLG-0009`

* Http status code: 400
* Melding: Aanvraag is leeg.

Code: `BLG-0010`

* Http status code: 400
* Melding: De aanvraag bevat geen bijlagen.

Code: `BLG-0011`

* Http status code: 400
* Melding: Content is leeg.

Code: `BLG-0012`

* Http status code: 400
* Melding: Thumbnail is leeg.

Code: `BLG-0013`

* Http status code: 400
* Melding: Content is groter dan 10MB.

Code: `BLG-0014`

* Http status code: 400
* Melding: Thumbnail is groter dan 10MB.

Code: `BLG-0015`

* Http status code: 400
* Melding: Upload van bijlage is gefaald.

Code: `BLG-0016`

* Http status code: 400
* Melding: Bestandsnaam bevat niet-toegestane karakters.

Code: `BLG-0017`

* Http status code: 400
* Melding: Bestandsnaam is te lang.

Foutcode `BOE`
--------------

Code: `BOE-0001`

* Http status code: 400
* Melding: Niet gevonden

Code: `BOE-0002`

* Http status code: 400
* Melding: Leverancier niet gevonden

Code: `BOE-0003`

* Http status code: 400
* Melding: Het Id is gevonden maar de relatie is geen leverancier

Code: `BOE-0008`

* Http status code: 400
* Melding: De grootboekrekening is verwijderd en staat op nonactief in de administratie

Code: `BOE-0009`

* Http status code: 400
* Melding: Het dagboek inkoop is verwijderd en staat op nonactief in de administratie

Code: `BOE-0010`

* Http status code: 400
* Melding: Het dagboek inkoop is niet gevonden

Code: `BOE-0019`

* Http status code: 400
* Melding: De kostenplaats is niet gevonden

Code: `BOE-0021`

* Http status code: 400
* Melding: Het factuurnummer bestaat al

Code: `BOE-0022`

* Http status code: 400
* Melding: Bij de opgegeven grootboekrekening is een kostenplaats is verplicht

Code: `BOE-0023`

* Http status code: 400
* Melding: Er zijn geen boekingsregels

Code: `BOE-0024`

* Http status code: 400
* Melding: Het dagboek kas is verwijderd en staat op nonactief in de administratie

Code: `BOE-0025`

* Http status code: 400
* Melding: Het dagboek kas is niet gevonden

Code: `BOE-0026`

* Http status code: 400
* Melding: De kostenplaats is verwijderd en staat op nonactief

Code: `BOE-0027`

* Http status code: 400
* Melding: Het afgedragen en ontvangen bedrag zijn beide ongelijk aan nul

Code: `BOE-0028`

* Http status code: 400
* Melding: Een regelbedrag is nul

Code: `BOE-0029`

* Http status code: 400
* Melding: Het formaat van de Ubl is niet geldig

Code: `BOE-0031`

* Http status code: 400
* Melding: De Ubl content mag niet leeg zijn

Code: `BOE-0032`

* Http status code: 400
* Melding: Ubl voldoet niet aan het schema

Code: `BOE-0033`

* Http status code: 400
* Melding: De boekdatum mag niet meer dan 5 jaar voor het huidig boekjaar liggen

Code: `BOE-0036`

* Http status code: 400
* Melding: Ongeldige munteenheid

Code: `BOE-0037`

* Http status code: 400
* Melding: Een grootboekrekening kon niet worden gevonden

Code: `BOE-0038`

* Http status code: 400
* Melding: De leverancier kon niet worden gevonden

Code: `BOE-0039`

* Http status code: 400
* Melding: De boeking is niet in balans

Code: `BOE-0042`

* Http status code: 400
* Melding: De boekdatum ligt in een geblokkeerde periode

Code: `BOE-0043`

* Http status code: 400
* Melding: Onbekende Ubl versie

Code: `BOE-0044`

* Http status code: 400
* Melding: De aangeboden Ubl is niet compleet

Code: `BOE-0045`

* Http status code: 400
* Melding: Onbekende fout bij het verwerken van de Ubl

Code: `BOE-0046`

* Http status code: 400
* Melding: De boeking is gekoppeld aan een Btw aangifte

Code: `BOE-0047`

* Http status code: 400
* Melding: De boeking is gekoppeld aan een verkoopfactuur

Code: `BOE-0048`

* Http status code: 400
* Melding: De boeking is gekoppeld aan een inkoopfactuur

Code: `BOE-0049`

* Http status code: 400
* Melding: De boeking is gekoppeld aan een geldlade

Code: `BOE-0050`

* Http status code: 400
* Melding: De boeking is gekoppeld aan een bankopdracht

Code: `BOE-0051`

* Http status code: 400
* Melding: De boeking valt in een periode die door uw accountant is geblokkeerd voor controle of reeds door uw accountant is gecontroleerd

Code: `BOE-0052`

* Http status code: 400
* Melding: Het Iban nummer van de klant is niet ingevuld, dit is verplicht bij een incasso.

Code: `BOE-0053`

* Http status code: 400
* Melding: Bij btwregel met te vorderen btw, is een inkoop boekingsregel verplicht

Code: `BOE-0054`

* Http status code: 400
* Melding: De relatie is verwijderd en staat op nonactief

Code: `BOE-0055`

* Http status code: 400
* Melding: Incasseren is niet toegestaan voor deze klant.

Code: `BOE-0056`

* Http status code: 400
* Melding: De omschrijving van de incassomachtiging mag maximaal 50 tekens lang zijn.

Code: `BOE-0057`

* Http status code: 400
* Melding: Het kenmerk van de incassomachtiging mag maximaal 50 tekens lang zijn.

Code: `BOE-0058`

* Http status code: 400
* Melding: Het factuurnummer is verplicht en mag maximaal 25 tekens bevatten.

Code: `BOE-0060`

* Http status code: 400
* Melding: De opgegeven relatie is geen klant.

Code: `BOE-0061`

* Http status code: 400
* Melding: Er is een niet toegestane grootboekrekening gebruikt.

Code: `BOE-0062`

* Http status code: 400
* Melding: Btwverlegd mag niet worden gecombineerd met andere btwsoorten.

Code: `BOE-0063`

* Http status code: 400
* Melding: Er is al een incassomachtiging met het opgegeven kenmerk.

Code: `BOE-0064`

* Http status code: 400
* Melding: Er is zowel een doorlopende- als een éénmalige incassomachtiging opgegeven.

Code: `BOE-0066`

* Http status code: 400
* Melding: De opgegeven doorlopende incassomachtiging behoort niet bij de opgegeven klant.

Code: `BOE-0067`

* Http status code: 400
* Melding: De opgegeven doorlopende incassomachtiging is een éénmalige incassomachtiging.

Code: `BOE-0068`

* Http status code: 400
* Melding: Het boekstuk mag maximaal 25 tekens lang zijn.

Code: `BOE-0069`

* Http status code: 400
* Melding: De opgegeven BTW is niet geldig

Code: `BOE-0070`

* Http status code: 400
* Melding: De opgegeven boekdatum is niet geldig

Code: `BOE-0071`

* Http status code: 400
* Melding: Een omschrijving mag maximaal 250 tekens lang zijn.

Code: `BOE-0075`

* Http status code: 400
* Melding: In de boekingsregels mag niet worden geboekt op memoriaal of een balans dagboek

Code: `BOE-0076`

* Http status code: 400
* Melding: Debet of Credit van een boekingsregel moet 0 zijn

Code: `BOE-0077`

* Http status code: 400
* Melding: Het dagboek van een boeking kan niet gewijzigd worden

Code: `BOE-0078`

* Http status code: 400
* Melding: De id kan niet gewijzigd worden

Code: `BOE-0079`

* Http status code: 400
* Melding: De opgegeven doorlopende incassomachtiging is ingetrokken.

Code: `BOE-0080`

* Http status code: 400
* Melding: Voor deze klant is boeken op een omzetrekening voor EU niet toegestaan.

Code: `BOE-0081`

* Http status code: 400
* Melding: Er is geen grootboekrekening aanwezig voor de volgende grootboekfuncties.

Code: `BOE-0082`

* Http status code: 400
* Melding: Een btw-soort ontbreekt, of komt niet overeen met de btwsoort van de grootboekrekening.

Code: `BOE-0083`

* Http status code: 400
* Melding: De factuur kan niet worden verwijderd omdat er betalingen zijn.

Code: `BOE-0084`

* Http status code: 400
* Melding: De omschrijving is verplicht.

Code: `BOE-0085`

* Http status code: 400
* Melding: De opgegeven grootboekfunctie is niet geldig.

Code: `BOE-0086`

* Http status code: 400
* Melding: Er is al een grootboek met het opgegeven nummer.

Code: `BOE-0087`

* Http status code: 400
* Melding: De opgegeven grootboekfunctie mag maar één keer voorkomen en is al door een ander grootboek in gebruik.

Code: `BOE-0088`

* Http status code: 400
* Melding: De omschrijving bij een grootboekrekening mag maximaal 50 tekens lang zijn.

Code: `BOE-0089`

* Http status code: 400
* Melding: Het grootboek is niet gevonden

Code: `BOE-0090`

* Http status code: 400
* Melding: De grootboekfunctie zit niet in de database.

Code: `BOE-0091`

* Http status code: 400
* Melding: Debet of Credit moet nul zijn

Code: `BOE-0092`

* Http status code: 400
* Melding: Ubl voldoet niet aan het SimplerInvoicing schema

Code: `BOE-0093`

* Http status code: 400
* Melding: De inkoopboeking bevat één of meerdere boekingsregels met een grootboek die een kostenplaatsregel bevat waarbij de instelling op 'Nee' staat

Code: `BOE-0094`

* Http status code: 400
* Melding: Een journaalpost moet minstens twee journaalpostregels bevatten

Code: `BOE-0095`

* Http status code: 400
* Melding: Het memoriaal dagboek is niet gevonden

Code: `BOE-0096`

* Http status code: 400
* Melding: Het dagboek is niet gevonden

Foutcode `BTW`
--------------

Code: `BTW-0001`

* Http status code: 400
* Melding: Aangifte is al geaccepteerd

Code: `BTW-0002`

* Http status code: 400
* Melding: Aangiftestatus heeft geen waarde

Foutcode `REF`
--------------

Code: `REF-0001`

* Http status code: 400
* Melding: Entiteit niet gevonden

Code: `REF-0002`

* Http status code: 400
* Melding: Eén van de te wijzigen velden van de entiteit is niet gevonden

Code: `REF-0003`

* Http status code: 400
* Melding: Eén van de te wijzigen velden van de entiteit komt meerdere keren voor in uw aanvraag

Code: `REF-0004`

* Http status code: 400
* Melding: Eén van de tekstvelden is te lang. Een tekstveld mag niet langer zijn dan de waarde van 'MaxLength'

Code: `REF-0005`

* Http status code: 400
* Melding: Eén van de enum velden is invalide. Een enum veld moet gekozen worden uit één van de waarden in 'PossibleValues'

Code: `REF-0007`

* Http status code: 400
* Melding: Eén van de waarden van een integer veld kon niet geconverteerd worden naar een integer, een integer is een geheel getal in het bereik [-2147483648, 2147483647]

Code: `REF-0008`

* Http status code: 400
* Melding: Eén van de waarden van een datetime veld kon niet geconverteerd worden naar een datetime. Het verwachte formaat is yyyy-MM-ddTHH:mm:ss, bijvoorbeeld 1986-05-07T15:32:11

Code: `REF-0009`

* Http status code: 400
* Melding: Eén van de waarden van een boolean veld kon niet geconverteerd worden naar een boolean

Code: `REF-0010`

* Http status code: 400
* Melding: Eén van de waarden van een money veld kon niet geconverteerd worden naar een decimal

Code: `REF-0011`

* Http status code: 400
* Melding: Eén van de waarden van een float veld kon niet geconverteerd worden naar een float, een float moet vallen binnen bereik [-1,79769313486232E+308, 1,79769313486232E+308]

Code: `REF-0012`

* Http status code: 400
* Melding: Eén van de waarden van een money veld valt buiten het bereik van [-100000000000, 100000000000]

Code: `REF-0013`

* Http status code: 400
* Melding: Eén van de waarden van een money veld bevat meer dan 4 decimalen.

Code: `REF-0014`

* Http status code: 400
* Melding: Eén van de waarden van een tekstveld bevat geen string.

Code: `REF-0015`

* Http status code: 400
* Melding: Eén van de waarden van een datetime veld valt buiten het toegestane bereik van 30-12-1899, 1-1-2401.

Code: `REF-0016`

* Http status code: 400
* Melding: De input is incompleet, of incorrect. Controleer of de json valide is en de juiste properties bevat

Foutcode `KPL`
--------------

Code: `KPL-0001`

* Http status code: 400
* Melding: Kostenplaats niet gevonden

Code: `KPL-0002`

* Http status code: 400
* Melding: Dit id bestaat al

Code: `KPL-0003`

* Http status code: 400
* Melding: Het id is verplicht

Code: `KPL-0004`

* Http status code: 400
* Melding: De omschrijving is verplicht

Code: `KPL-0005`

* Http status code: 400
* Melding: De omschrijving mag maximaal 50 karakters bevatten

Code: `KPL-0006`

* Http status code: 400
* Melding: Het nummer is verplicht

Code: `KPL-0007`

* Http status code: 400
* Melding: Het nummer moet tussen 1 en 999999999 liggen

Code: `KPL-0008`

* Http status code: 400
* Melding: Dit nummer bestaat al

Code: `KPL-0009`

* Http status code: 400
* Melding: Er kan geen nonactieve kostenplaats worden gemaakt

Foutcode `REF`
--------------

Code: `REF-0006`

* Http status code: 400
* Melding: Alleen de extra velden die horen bij de relatiesoort van de relatie kunnen worden aangepast

Foutcode `REL`
--------------

Code: `REL-0001`

* Http status code: 400
* Melding: RelatieSoort mag niet 'geen' zijn

Code: `REL-0002`

* Http status code: 400
* Melding: RelatieSoort dient klant te bevatten indien aanmanen aan staat

Code: `REL-0003`

* Http status code: 400
* Melding: Krediettermijn mag niet kleiner dan -365 of groter dan 1000 zijn

Code: `REL-0004`

* Http status code: 400
* Melding: RelatieSoort dient klant te bevatten indien Factuurkorting aan staat

Code: `REL-0005`

* Http status code: 400
* Melding: Relatie niet gevonden

Code: `REL-0006`

* Http status code: 400
* Melding: KvkNummer is ongeldig

Code: `REL-0007`

* Http status code: 400
* Melding: Naam moet gevuld zijn

Code: `REL-0008`

* Http status code: 400
* Melding: Relatiecode reeds in gebruik

Code: `REL-0009`

* Http status code: 400
* Melding: Iban mag niet leeg zijn wanneer bankieren aan staat of incassosoort is 'geen'

Code: `REL-0010`

* Http status code: 400
* Melding: Bic is ongeldig

Code: `REL-0011`

* Http status code: 400
* Melding: Iban is ongeldig

Code: `REL-0012`

* Http status code: 400
* Melding: MobieleTelefoon mag maximaal 25 karakters bevatten

Code: `REL-0013`

* Http status code: 400
* Melding: Telefoon mag maximaal 25 karakters bevatten

Code: `REL-0014`

* Http status code: 400
* Melding: Relatiesoort dient leverancier te bevatten indien bankieren aan staat

Code: `REL-0015`

* Http status code: 400
* Melding: WebSiteUrl dient een geldig URL te zijn

Code: `REL-0016`

* Http status code: 400
* Melding: RelatieSoort dient klant te bevatten indien IncassoSoort gevuld is

Code: `REL-0017`

* Http status code: 400
* Melding: Factuurrelatie bestaat niet

Code: `REL-0018`

* Http status code: 400
* Melding: Factuurrelatie is geen klant

Code: `REL-0020`

* Http status code: 400
* Melding: VestigingsAdres.Straat mag maximaal 50 karakters bevatten

Code: `REL-0021`

* Http status code: 400
* Melding: VestigingsAdres.Postcode mag maximaal 25 karakters bevatten

Code: `REL-0022`

* Http status code: 400
* Melding: VestigingsAdres.Plaats mag maximaal 50 karakters bevatten

Code: `REL-0023`

* Http status code: 400
* Melding: VestigingsAdres.Contactpersoon mag maximaal 50 karakters bevatten

Code: `REL-0025`

* Http status code: 400
* Melding: Correspondentie.Straat mag maximaal 50 karakters bevatten

Code: `REL-0026`

* Http status code: 400
* Melding: Correspondentie.Postcode mag maximaal 25 karakters bevatten

Code: `REL-0027`

* Http status code: 400
* Melding: Correspondentie.Plaats mag maximaal 50 karakters bevatten

Code: `REL-0028`

* Http status code: 400
* Melding: Correspondentie.Contactpersoon mag maximaal 50 karakters bevatten

Code: `REL-0029`

* Http status code: 400
* Melding: AanmaningEmailVersturen.Email dient gevuld te zijn indien AanmaningEmailVersturen.ShouldSend aan staat

Code: `REL-0030`

* Http status code: 400
* Melding: AanmaningEmailVersturen.Email dient een geldig emailadres te zijn

Code: `REL-0031`

* Http status code: 400
* Melding: AanmaningEmailVersturen.CcEmail dient een geldig emailadres te zijn

Code: `REL-0032`

* Http status code: 400
* Melding: FactuurEmailVersturen.Email dient gevuld te zijn indien FactuurEmailVersturen.ShouldSend aan staat

Code: `REL-0033`

* Http status code: 400
* Melding: FactuurEmailVersturen.Email dient een geldig emailadres te zijn

Code: `REL-0034`

* Http status code: 400
* Melding: FactuurEmailVersturen.CcEmail dient een geldig emailadres te zijn

Code: `REL-0038`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.Email dient gevuld te zijn indien BevestigingsEmailVersturen.ShouldSend aan staat

Code: `REL-0039`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.Email dient een geldig emailadres te zijn

Code: `REL-0040`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.CcEmail dient een geldig emailadres te zijn

Code: `REL-0044`

* Http status code: 400
* Melding: OfferteEmailVersturen.Email dient gevuld te zijn indien OfferteEmailVersturen.ShouldSend aan staat

Code: `REL-0045`

* Http status code: 400
* Melding: OfferteEmailVersturen.Email dient een geldig emailadres te zijn

Code: `REL-0046`

* Http status code: 400
* Melding: OfferteEmailVersturen.CcEmail dient een geldig emailadres te zijn

Code: `REL-0047`

* Http status code: 400
* Melding: Het ID in het url en het ID van de relatie in het request komen niet overeen

Code: `REL-0048`

* Http status code: 400
* Melding: RelatieSoort mag niet 'eigen' bevatten

Code: `REL-0049`

* Http status code: 400
* Melding: Klant heeft openstaande facturen

Code: `REL-0050`

* Http status code: 400
* Melding: Klant heeft openstaande verkooporders

Code: `REL-0051`

* Http status code: 400
* Melding: Klant is een factuurrelatie

Code: `REL-0052`

* Http status code: 400
* Melding: Klant wordt gebruikt voor inkooporders

Code: `REL-0053`

* Http status code: 400
* Melding: Leverancier heeft openstaande facturen

Code: `REL-0054`

* Http status code: 400
* Melding: Leverancier heeft openstaande inkooporders

Code: `REL-0055`

* Http status code: 400
* Melding: CorrespondentieAdres.LandId niet gevonden

Code: `REL-0056`

* Http status code: 400
* Melding: VestigingsAdres.LandId niet gevonden

Code: `REL-0057`

* Http status code: 400
* Melding: BtwNummer mag maximaal 50 karakters bevatten

Code: `REL-0058`

* Http status code: 400
* Melding: BtwNummer moet minimaal 2 karakters bevatten

Code: `REL-0059`

* Http status code: 400
* Melding: BtwNummer mag alleen cijfers en letters bevatten

Code: `REL-0060`

* Http status code: 400
* Melding: Indien een van de velden van VestigingsAdres gevuld is, meegegeven dienen alle velden gevuld zijn, uitgezonderd Contactpersoon

Code: `REL-0061`

* Http status code: 400
* Melding: Email dient een geldig emailadres te zijn.

Code: `REL-0062`

* Http status code: 400
* Melding: RelatieSoort dient klant te bevatten indien Kredietlimiet ingevuld is.

Code: `REL-0063`

* Http status code: 400
* Melding: Het ID dient leeg te zijn.

Code: `REL-0064`

* Http status code: 400
* Melding: RelatieSoort mag niet aangepast worden.

Code: `REL-0065`

* Http status code: 400
* Melding: RelatieSoort kan niet zowel 'klant' als 'leverancier' zijn.

Code: `REL-0066`

* Http status code: 400
* Melding: De input is incompleet of incorrect. Controleer of de json valide is en de juiste properties bevat.

Code: `REL-0067`

* Http status code: 400
* Melding: Deze leverancier kan niet worden verwijderd omdat deze intern door SnelStart wordt gebruikt.

Code: `REL-0068`

* Http status code: 400
* Melding: AanmaningEmailVersturen.Email bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0069`

* Http status code: 400
* Melding: AanmaningEmailVersturen.Email mag maximaal 250 karakters bevatten

Code: `REL-0070`

* Http status code: 400
* Melding: AanmaningEmailVersturen.CcEmail bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0071`

* Http status code: 400
* Melding: AanmaningEmailVersturen.CcEmail mag maximaal 250 karakters bevatten

Code: `REL-0072`

* Http status code: 400
* Melding: FactuurEmailVersturen.Email bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0073`

* Http status code: 400
* Melding: FactuurEmailVersturen.Email mag maximaal 250 karakters bevatten

Code: `REL-0074`

* Http status code: 400
* Melding: FactuurEmailVersturen.CcEmail bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0075`

* Http status code: 400
* Melding: FactuurEmailVersturen.CcEmail mag maximaal 250 karakters bevatten

Code: `REL-0076`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.Email bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0077`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.Email mag maximaal 250 karakters bevatten

Code: `REL-0078`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.CcEmail bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0079`

* Http status code: 400
* Melding: BevestigingsEmailVersturen.CcEmail mag maximaal 250 karakters bevatten

Code: `REL-0080`

* Http status code: 400
* Melding: OfferteEmailVersturen.Email bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0081`

* Http status code: 400
* Melding: OfferteEmailVersturen.Email mag maximaal 250 karakters bevatten

Code: `REL-0082`

* Http status code: 400
* Melding: OfferteEmailVersturen.CcEmail bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0083`

* Http status code: 400
* Melding: OfferteEmailVersturen.CcEmail mag maximaal 250 karakters bevatten

Code: `REL-0084`

* Http status code: 400
* Melding: Email bevat één of meerdere ongeldige emailadressen. U kunt meerdere emailadressen opgeven door ze te scheiden met een puntkomma(;).

Code: `REL-0085`

* Http status code: 400
* Melding: Email mag maximaal 250 karakters bevatten

Code: `REL-0086`

* Http status code: 400
* Melding: Oin moet exact 20 cijfers bevatten of null zijn

Code: `REL-0087`

* Http status code: 400
* Melding: De Btw landcode komt niet overeen met de landcode van het vestigingsadres

Code: `REL-0088`

* Http status code: 400
* Melding: Het opgegeven nummer is geen geldig btw-nummer

Code: `REL-0089`

* Http status code: 400
* Melding: E-mailadres voor Offerte-aanvragen moet ingevuld zijn als deze standaard gemaild moeten worden

Code: `REL-0090`

* Http status code: 400
* Melding: Het opgegeven e-mailadres voor Offerte-aanvragen is ongeldig

Code: `REL-0091`

* Http status code: 400
* Melding: E-mailadres voor Offerte-aanvragen dient te bestaan uit een puntkomma-gescheiden lijst van geldige e-mailadressen

Code: `REL-0092`

* Http status code: 400
* Melding: E-mailadres voor Offerte-aanvragen mag maximaal 250 karakters bevatten

Code: `REL-0093`

* Http status code: 400
* Melding: Het opgegeven CC-e-mailadres voor Offerte-aanvragen is ongeldig

Code: `REL-0094`

* Http status code: 400
* Melding: CC-e-mailadres voor Offerte-aanvragen dient te bestaan uit een puntkomma-gescheiden lijst van geldige e-mailadressen

Code: `REL-0095`

* Http status code: 400
* Melding: CC-e-mailadres voor Offerte-aanvragen mag maximaal 250 karakters bevatten

Code: `REL-0096`

* Http status code: 400
* Melding: E-mailadres voor Bestellingen moet ingevuld zijn als deze standaard gemaild moeten worden

Code: `REL-0097`

* Http status code: 400
* Melding: Het opgegeven e-mailadres voor Bestellingen is ongeldig

Code: `REL-0098`

* Http status code: 400
* Melding: E-mailadres voor Bestellingen dient te bestaan uit een puntkomma-gescheiden lijst van geldige e-mailadressen

Code: `REL-0099`

* Http status code: 400
* Melding: E-mailadres voor Bestellingen mag maximaal 250 karakters bevatten

Code: `REL-0100`

* Http status code: 400
* Melding: Het opgegeven CC-e-mailadres voor Bestellingen is ongeldig

Code: `REL-0101`

* Http status code: 400
* Melding: CC-e-mailadres voor Bestellingen dient te bestaan uit een puntkomma-gescheiden lijst van geldige e-mailadressen

Code: `REL-0102`

* Http status code: 400
* Melding: CC-e-mailadres voor Bestellingen mag maximaal 250 karakters bevatten

Code: `REL-0103`

* Http status code: 400
* Melding: Klant kan niet worden verwijderd omdat deze intern door SnelStart wordt gebruikt

Foutcode `VOR`
--------------

Code: `VOR-0001`

* Http status code: 400
* Melding: Verkooporder niet gevonden

Code: `VOR-0002`

* Http status code: 400
* Melding: De relatie is geen klant

Code: `VOR-0003`

* Http status code: 400
* Melding: De factuurrelatie is geen klant

Code: `VOR-0004`

* Http status code: 400
* Melding: De machtiging hoort niet bij deze klant

Code: `VOR-0005`

* Http status code: 400
* Melding: Bij een nieuwe verkooporder moet het veld ordernummer leeg zijn

Code: `VOR-0006`

* Http status code: 400
* Melding: Straat mag maximaal 50 karakters bevatten

Code: `VOR-0007`

* Http status code: 400
* Melding: Postcode mag maximaal 25 karakters bevatten

Code: `VOR-0008`

* Http status code: 400
* Melding: Plaats mag maximaal 50 karakters bevatten

Code: `VOR-0009`

* Http status code: 400
* Melding: Contactpersoon mag maximaal 50 karakters bevatten

Code: `VOR-0010`

* Http status code: 400
* Melding: LandId niet gevonden

Code: `VOR-0011`

* Http status code: 400
* Melding: Orderreferentie mag maximaal 50 karakters bevatten

Code: `VOR-0013`

* Http status code: 400
* Melding: Incassomachtiging niet gevonden

Code: `VOR-0014`

* Http status code: 400
* Melding: Verkooporder heeft nog gekoppelde inkooporders

Code: `VOR-0015`

* Http status code: 400
* Melding: Verkooporder is geen offerte en kan niet worden aangepast

Code: `VOR-0016`

* Http status code: 400
* Melding: Verkooporder extra ingave datum veld is ongeldig

Code: `VOR-0017`

* Http status code: 400
* Melding: Verkooporder extra ingave artikel veld is onbekend

Code: `VOR-0018`

* Http status code: 400
* Melding: Verkooporder extra ingave artikel veld is ongeldig

Code: `VOR-0019`

* Http status code: 400
* Melding: Verkooporder extra ingave artikel omzetgroep veld is onbekend

Code: `VOR-0020`

* Http status code: 400
* Melding: Verkooporder extra ingave artikel omzetgroep veld is ongeldig

Code: `VOR-0021`

* Http status code: 400
* Melding: Verkooporder extra ingave bedrag veld is ongeldig

Code: `VOR-0022`

* Http status code: 400
* Melding: Verkooporder extra ingave bedrag veld is ongeldig

Code: `VOR-0023`

* Http status code: 400
* Melding: Verkooporder extra ingave bedrag veld is ongeldig

Code: `VOR-0024`

* Http status code: 400
* Melding: Verkooporder extra ingave factuur veld is onbekend

Code: `VOR-0025`

* Http status code: 400
* Melding: Verkooporder extra ingave factuur veld is ongeldig

Code: `VOR-0026`

* Http status code: 400
* Melding: Verkooporder extra ingave grootboekrekening veld is onbekend

Code: `VOR-0027`

* Http status code: 400
* Melding: Verkooporder extra ingave grootboekrekening veld is ongeldig

Code: `VOR-0028`

* Http status code: 400
* Melding: Verkooporder extra ingave klant veld is onbekend

Code: `VOR-0029`

* Http status code: 400
* Melding: Verkooporder extra ingave klant veld is ongeldig

Code: `VOR-0030`

* Http status code: 400
* Melding: Verkooporder extra ingave leverancier veld is onbekend

Code: `VOR-0031`

* Http status code: 400
* Melding: Verkooporder extra ingave leverancier veld is ongeldig

Code: `VOR-0032`

* Http status code: 400
* Melding: Verkooporder extra ingave land veld is onbekend

Code: `VOR-0033`

* Http status code: 400
* Melding: Verkooporder extra ingave land veld is ongeldig

Code: `VOR-0034`

* Http status code: 400
* Melding: Verkooporder extra ingave geheel getal is ongeldig

Code: `VOR-0035`

* Http status code: 400
* Melding: Verkooporder extra ingave tekst is te lang

Code: `VOR-0036`

* Http status code: 400
* Melding: Verkooporder extra ingave veld nummer is ongeldig

SnelStart © 2021. All Rights Reserved   |   [disclaimer](https://www.snelstart.nl/disclaimer)|   [cookiebeleid](https://www.snelstart.nl/cookiebeleid)|   powered by [Microsoft Azure](https://azure.microsoft.com/nl-nl/)
