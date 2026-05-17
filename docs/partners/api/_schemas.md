---
source: openapi://snelstart-b2b-v2
schemas: 237
fetched_at: 2026-05-13T16:34:48+00:00
---

# SnelStart B2B-Api v2 — Component Schemas

### `ArtikelenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `ArtikelenIdDelete200TextJsonResponse`

**Type:** `object`


### `BankboekingenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `BankboekingenIdDelete200TextJsonResponse`

**Type:** `object`


### `DocumentenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `DocumentenIdDelete200TextJsonResponse`

**Type:** `object`


### `EchoInputGet200ApplicationJsonResponse`

**Type:** `object`


### `EchoInputGet200TextJsonResponse`

**Type:** `object`


### `EchoInputGet204ApplicationJsonResponse`

**Type:** `object`


### `EchoInputGet204TextJsonResponse`

**Type:** `object`


### `InkoopboekingenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `InkoopboekingenIdDelete200TextJsonResponse`

**Type:** `object`


### `KasboekingenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `KasboekingenIdDelete200TextJsonResponse`

**Type:** `object`


### `KostenplaatsenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `KostenplaatsenIdDelete200TextJsonResponse`

**Type:** `object`


### `Microsoft.Data.Edm.Annotations.IEdmDirectValueAnnotationsManager`

**Type:** `object`


### `Microsoft.Data.Edm.Annotations.IEdmVocabularyAnnotation`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `qualifier` | `string` |  |  |
| `term` | [`Microsoft.Data.Edm.IEdmTerm`](_schemas.md#microsoft-data-edm-iedmterm) |  |  |
| `target` | [`Microsoft.Data.Edm.IEdmVocabularyAnnotatable`](_schemas.md#microsoft-data-edm-iedmvocabularyannotatable) |  |  |


### `Microsoft.Data.Edm.IEdmModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `schemaElements` | array of [`Microsoft.Data.Edm.IEdmSchemaElement`](_schemas.md#microsoft-data-edm-iedmschemaelement) |  |  |
| `vocabularyAnnotations` | array of [`Microsoft.Data.Edm.Annotations.IEdmVocabularyAnnotation`](_schemas.md#microsoft-data-edm-annotations-iedmvocabularyannotation) |  |  |
| `referencedModels` | array of [`Microsoft.Data.Edm.IEdmModel`](_schemas.md#microsoft-data-edm-iedmmodel) |  |  |
| `directValueAnnotationsManager` | [`Microsoft.Data.Edm.Annotations.IEdmDirectValueAnnotationsManager`](_schemas.md#microsoft-data-edm-annotations-iedmdirectvalueannotationsmanager) |  |  |


### `Microsoft.Data.Edm.IEdmSchemaElement`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `schemaElementKind` | `string` |  |  |
| `namespace` | `string` |  |  |
| `name` | `string` |  |  |


### `Microsoft.Data.Edm.IEdmTerm`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `termKind` | `string` |  |  |
| `schemaElementKind` | `string` |  |  |
| `namespace` | `string` |  |  |
| `name` | `string` |  |  |


### `Microsoft.Data.Edm.IEdmType`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `typeKind` | `string` |  |  |


### `Microsoft.Data.Edm.IEdmTypeReference`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `isNullable` | `boolean` |  |  |
| `definition` | [`Microsoft.Data.Edm.IEdmType`](_schemas.md#microsoft-data-edm-iedmtype) |  |  |


### `Microsoft.Data.Edm.IEdmVocabularyAnnotatable`

**Type:** `object`


### `Microsoft.Data.OData.Query.SemanticAst.FilterClause`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `expression` | [`Microsoft.Data.OData.Query.SemanticAst.SingleValueNode`](_schemas.md#microsoft-data-odata-query-semanticast-singlevaluenode) |  |  |
| `rangeVariable` | [`Microsoft.Data.OData.Query.SemanticAst.RangeVariable`](_schemas.md#microsoft-data-odata-query-semanticast-rangevariable) |  |  |
| `itemType` | [`Microsoft.Data.Edm.IEdmTypeReference`](_schemas.md#microsoft-data-edm-iedmtypereference) |  |  |


### `Microsoft.Data.OData.Query.SemanticAst.OrderByClause`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `thenBy` | [`Microsoft.Data.OData.Query.SemanticAst.OrderByClause`](_schemas.md#microsoft-data-odata-query-semanticast-orderbyclause) |  |  |
| `expression` | [`Microsoft.Data.OData.Query.SemanticAst.SingleValueNode`](_schemas.md#microsoft-data-odata-query-semanticast-singlevaluenode) |  |  |
| `direction` | `string` |  |  |
| `rangeVariable` | [`Microsoft.Data.OData.Query.SemanticAst.RangeVariable`](_schemas.md#microsoft-data-odata-query-semanticast-rangevariable) |  |  |
| `itemType` | [`Microsoft.Data.Edm.IEdmTypeReference`](_schemas.md#microsoft-data-edm-iedmtypereference) |  |  |


### `Microsoft.Data.OData.Query.SemanticAst.RangeVariable`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  |  |
| `typeReference` | [`Microsoft.Data.Edm.IEdmTypeReference`](_schemas.md#microsoft-data-edm-iedmtypereference) |  |  |
| `kind` | `integer` (int32) |  |  |


### `Microsoft.Data.OData.Query.SemanticAst.SelectExpandClause`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `selectedItems` | array of [`Microsoft.Data.OData.Query.SemanticAst.SelectItem`](_schemas.md#microsoft-data-odata-query-semanticast-selectitem) |  |  |
| `allSelected` | `boolean` |  |  |


### `Microsoft.Data.OData.Query.SemanticAst.SelectItem`

**Type:** `object`


### `Microsoft.Data.OData.Query.SemanticAst.SingleValueNode`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `typeReference` | [`Microsoft.Data.Edm.IEdmTypeReference`](_schemas.md#microsoft-data-edm-iedmtypereference) |  |  |
| `kind` | `string` |  |  |


### `Microsoft.Win32.SafeHandles.SafeWaitHandle`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `isInvalid` | `boolean` |  |  |
| `isClosed` | `boolean` |  |  |


### `OffertesIdDelete201ApplicationJsonResponse`

**Type:** `object`


### `OffertesIdDelete201TextJsonResponse`

**Type:** `object`


### `RelatiesIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `RelatiesIdDelete200TextJsonResponse`

**Type:** `object`


### `SnelStart-B2B-Api-V2-Models-Actieprijzen-ActieprijzenModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Actieprijzen-ActieprijzenModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelOmzetGroepModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelOmzetGroepModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelPrijsAfsprakenModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelPrijsAfsprakenModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelQueryModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Artikelen-ArtikelQueryModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BankafschriftBestandArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BankafschriftBestandResponseArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BankafschriftBestandResponseArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Bankboekingen-BankboekingModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Bankboekingen-BankboekingModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Bijlagen-VerkoopBoekingBijlageReferenceModelArra`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Bijlagen-VerkoopBoekingBijlageReferenceModelArra-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BtwAangiftes-BtwAangifteModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BtwAangiftes-BtwAangifteModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BtwTarieven-BtwTariefModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-BtwTarieven-BtwTariefModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-CustomFields-UpdatedCustomFieldModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Dagboeken-DagboekModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Dagboeken-DagboekModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-GrootboekMutaties-GrootboekMutatieModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-GrootboekMutaties-GrootboekMutatieModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Grootboeken-GrootboekModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Grootboeken-GrootboekModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Inkoopboekingen-InkoopboekingModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Inkoopboekingen-InkoopboekingModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Inkoopfacturen-InkoopfactuurModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Inkoopfacturen-InkoopfactuurModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Kasboekingen-KasboekingModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Kasboekingen-KasboekingModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Kostenplaatsen-KostenplaatsModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Kostenplaatsen-KostenplaatsModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Landen-LandModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Landen-LandModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Prijsafspraken-PrijsafspraakModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Prijsafspraken-PrijsafspraakModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Rapportage-KolommenbalansRegelModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Rapportage-KolommenbalansRegelModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Rapportage-PeriodebalansRegelModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Rapportage-PeriodebalansRegelModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Relaties-DoorlopendeIncassoMachtigingModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Relaties-DoorlopendeIncassoMachtigingModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Relaties-RelatieModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Relaties-RelatieModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-VatRates-VatRateDefinitionModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-VatRates-VatRateDefinitionModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-VatRates-VatRatesModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-VatRates-VatRatesModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-VerkoopBoekingen-VerkoopBoekingModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-VerkoopBoekingen-VerkoopBoekingModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkoopfacturen-VerkoopfactuurModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkoopfacturen-VerkoopfactuurModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkooporders-OfferteModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkooporders-OfferteModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkooporders-VerkoopOrderModelArray`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkooporders-VerkoopOrderModelArray-1`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkoopordersjablonen-VerkoopOrderSjabloonModelA`

**Type:** `array`


### `SnelStart-B2B-Api-V2-Models-Verkoopordersjablonen-VerkoopOrderSjabloonModelA-1`

**Type:** `array`


### `SnelStart-Business-Interfaces-CustomFields-CustomFieldDtoArray`

**Type:** `array`


### `SnelStart-Business-Interfaces-CustomFields-CustomFieldDtoArray-1`

**Type:** `array`


### `SnelStart-Business-Interfaces-CustomFields-CustomFieldDtoArray-2`

**Type:** `array`


### `SnelStart-Business-Interfaces-CustomFields-CustomFieldDtoArray-3`

**Type:** `array`


### `SnelStart.B2B.Api.V2.Models.Actieprijzen.ActieprijzenModel`

Een container voor actie prijzen

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` |  | De omschrijving van de actie prijs |
| `startdatum` | `string` (date-time) |  | De start datum van de actie prijs |
| `einddatum` | `string` (date-time) |  | De eind datum van de actie prijs |
| `status` | `string` |  | De status van de actie prijs ({SnelStart.B2B.Api.V2.Models.Actieprijzen.ActieprijsStatusModel}) |
| `artikelPrijzen` | array of [`SnelStart.B2B.Api.V2.Models.Actieprijzen.ArtikelPrijsModel`](_schemas.md#snelstart-b2b-api-v2-models-actieprijzen-artikelprijsmodel) |  | De lijst met artikel actie prijzen |


### `SnelStart.B2B.Api.V2.Models.Actieprijzen.ArtikelPrijsModel`

Een container voor actie artikel prijs informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `artikelcode` | `string` |  | Artikelcode |
| `artikelOmschrijving` | `string` |  | Artikel omschrijving |
| `prijsIngave` | `string` |  | Prijsingave soort ({SnelStart.B2B.Api.V2.Models.Actieprijzen.PrijsIngaveModel}) |
| `prijzen` | array of [`SnelStart.B2B.Api.V2.Models.Actieprijzen.PrijsModel`](_schemas.md#snelstart-b2b-api-v2-models-actieprijzen-prijsmodel) |  | Lijst met actie prijzen (PrijsModel) |


### `SnelStart.B2B.Api.V2.Models.Actieprijzen.PrijsModel`

Een container voor prijsingave informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `vanaf` | `number` (double) |  | Vanaf aantal |
| `korting` | `number` (double) |  | Korting percentage |
| `verkoopprijs` | `number` (double) |  | Verkoopprijs |
| `basisprijs` | `number` (double) |  | Basisprijs |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelIdentifierModel`

Een container voor artikel informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `artikelcode` | `string` |  |  |
| `omschrijving` | `string` |  |  |
| `artikelOmzetgroep` | [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelOmzetGroepIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelomzetgroepidentifiermodel) |  |  |
| `verkoopprijs` | `number` (decimal) |  |  |
| `inkoopprijs` | `number` (double) |  |  |
| `eenheid` | `string` |  |  |
| `modifiedOn` | `string` (date-time) |  |  |
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `isNonActief` | `boolean` |  | Een vlag dat aangeeft of een artikel niet meer actief is binnen de administratie. |
| `voorraadControle` | `boolean` |  | Een vlag dat aangeeft of voor een artikel wel of geen voorraad wordt bijgehouden. |
| `technischeVoorraad` | `number` (decimal) |  |  |
| `vrijeVoorraad` | `number` (decimal) |  |  |
| `extraVelden` | array of [`SnelStart.B2B.Api.V2.Models.Artikelen.ExtraVeldArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-extraveldartikelmodel) |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelOmzetGroepIdentifierModel`

Een container voor atrikel omzet groep informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelOmzetGroepModel`

ArtikelOmzetGroepModel

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `nummer` | `integer` (int32) |  | Omzetgroep nummer |
| `omschrijving` | `string` |  | Omschijving van de omzet groep |
| `verkoopGrootboekNederlandIdentifier` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `verkoopNederlandBtwSoort` | `string` |  | De verkoop btw soort van omzetgroep nederland |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelPrijsAfsprakenModel`

Een container for artikel prijsafspraken per klant

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `artikelCode` | `string` |  | De artikel code |
| `artikelOmschrijving` | `string` |  | De artikel omschrijving |
| `basisprijs` | `number` (double) |  | Basisprijs |
| `klantAfspraken` | array of [`SnelStart.B2B.Api.V2.Models.Artikelen.KlantAfsprakenModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-klantafsprakenmodel) |  | De lijst met klant afspraken (KlantAfsprakenModel) |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelQueryModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `isHoofdartikel` | `boolean` |  |  |
| `subartikelen` | array of [`SnelStart.B2B.Api.V2.Models.Artikelen.SubartikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-subartikelmodel) |  |  |
| `artikelcode` | `string` |  |  |
| `omschrijving` | `string` |  |  |
| `artikelOmzetgroep` | [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelOmzetGroepIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelomzetgroepidentifiermodel) |  |  |
| `verkoopprijs` | `number` (decimal) |  |  |
| `inkoopprijs` | `number` (double) |  |  |
| `eenheid` | `string` |  |  |
| `modifiedOn` | `string` (date-time) |  |  |
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `isNonActief` | `boolean` |  | Een vlag dat aangeeft of een artikel niet meer actief is binnen de administratie. |
| `voorraadControle` | `boolean` |  | Een vlag dat aangeeft of voor een artikel wel of geen voorraad wordt bijgehouden. |
| `technischeVoorraad` | `number` (decimal) |  |  |
| `vrijeVoorraad` | `number` (decimal) |  |  |
| `extraVelden` | array of [`SnelStart.B2B.Api.V2.Models.Artikelen.ExtraVeldArtikelModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-extraveldartikelmodel) |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Artikelen.ExtraVeldArtikelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `naam` | `string` |  |  |
| `waarde` | `string` |  |  |


### `SnelStart.B2B.Api.V2.Models.Artikelen.KlantAfsprakenModel`

Een container voor klant afspraken

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `relatiePublicIdentifier` | `string` (uuid) |  | De public identifier van de klant |
| `relatieCode` | `integer` (int32) |  | De klant code |
| `relatieNaam` | `string` |  | De klant naam |
| `startdatum` | `string` (date-time) |  | De start datum van de prijs afspraak |
| `einddatum` | `string` (date-time) |  | De eind datum van de prijs afspraak |
| `prijsIngave` | `string` |  | De prijsingave soort ({SnelStart.B2B.Api.V2.Models.Artikelen.PrijsIngaveModel}) |
| `status` | `string` |  | De status van de prijs afspraak ({SnelStart.B2B.Api.V2.Models.Artikelen.StatusModel}) |
| `prijsAfspraken` | array of [`SnelStart.B2B.Api.V2.Models.Artikelen.PrijsAfspraakModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-prijsafspraakmodel) |  | De lijst met prijs afspraken (PrijsAfspraakModel) |


### `SnelStart.B2B.Api.V2.Models.Artikelen.PrijsAfspraakModel`

Een container voor prijs afspraken

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `vanaf` | `number` (double) |  | Vanaf aantal |
| `korting` | `number` (double) |  | Korting percentage |
| `verkoopprijs` | `number` (double) |  | Verkoopprijs |


### `SnelStart.B2B.Api.V2.Models.Artikelen.SubartikelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `artikelcode` | `string` |  |  |
| `aantal` | `number` (double) |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Authorization.AdministrationAccessModel`

Een container voor Administratie toegang

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `hasAccess` | `boolean` |  | Geeft de toegang aan (false = geen toegang, true = wel toegang) |


### `SnelStart.B2B.Api.V2.Models.BankafschriftBestand`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` | yes | De naam van het bestand |
| `base64EncodedContent` | `string` | yes | Base 64 encoded inhoud van het bestand. De data die encoded wordt moet utf-8 zijn. Ondersteunde bestandsformaten zijn:  - Camt053  - Camt052  - MT940 structured |


### `SnelStart.B2B.Api.V2.Models.BankafschriftBestandResponse`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  | De naam van het bestand |
| `errors` | array of [`SnelStart.B2B.Api.V2.Models.BankafschriftBestandResponseError`](_schemas.md#snelstart-b2b-api-v2-models-bankafschriftbestandresponseerror) |  |  |
| `isSuccess` | `boolean` |  |  |


### `SnelStart.B2B.Api.V2.Models.BankafschriftBestandResponseError`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `description` | `string` |  |  |
| `details` | array of `string` |  |  |


### `SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel`

De gegevenscontainer voor een bankboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de bankboeking is aangemaakt of voor het laatst is gewijzigd |
| `datum` | `string` (date-time) | yes |  |
| `markering` | `boolean` |  | Deze bankboeking verdient speciale aandacht, in SnelStart wordt dit visueel benadrukt. |
| `boekstuk` | `string` |  | Het boekstuknummer van de bankboeking. |
| `gewijzigdDoorAccountant` | `boolean` |  | Geeft aan of deze bankboeking is aangepast door de accountant. |
| `omschrijving` | `string` |  |  |
| `grootboekBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.GrootboekBoekingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-grootboekboekingsregelmodel) |  |  |
| `inkoopboekingBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.InkoopBoekingVerantwoordingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-inkoopboekingverantwoordingsregelmodel) |  |  |
| `verkoopboekingBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.VerkoopBoekingVerantwoordingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-verkoopboekingverantwoordingsregelmodel) |  |  |
| `btwBoekingsregels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.BtwBoekingregelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-btwboekingregelmodel) |  |  |
| `bedragUitgegeven` | `number` (decimal) | yes |  |
| `bedragOntvangen` | `number` (decimal) | yes |  |
| `dagboek` | [`SnelStart.B2B.Api.V2.Models.Dagboeken.DagboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-dagboeken-dagboekidentifiermodel) | yes |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel`

De gegevenscontainer voor een memoriaalboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de memoriaalboeking is aangemaakt of voor het laatst is gewijzigd |
| `datum` | `string` (date-time) | yes |  |
| `markering` | `boolean` |  | Deze memoriaalboeking verdient speciale aandacht, in SnelStart wordt dit visueel benadrukt. |
| `boekstuk` | `string` |  | Het boekstuknummer van de memoriaalboeking. |
| `gewijzigdDoorAccountant` | `boolean` |  | Geeft aan of deze memoriaalboeking is aangepast door de accountant. |
| `omschrijving` | `string` |  |  |
| `memoriaalBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel.MemoriaalBoekingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel-memoriaalboekingsregelmodel) |  |  |
| `inkoopboekingBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel.InkoopBoekingVerantwoordingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel-inkoopboekingverantwoordingsregelmodel) |  |  |
| `verkoopboekingBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel.VerkoopBoekingVerantwoordingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-bankboekingen-memoriaalboekingmodel-verkoopboekingverantwoordingsregelmodel) |  |  |
| `dagboek` | [`SnelStart.B2B.Api.V2.Models.Dagboeken.DagboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-dagboeken-dagboekidentifiermodel) | yes |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel.InkoopBoekingVerantwoordingsRegelModel`

Container met gegevens voor een boekingsreegel met een inkoopboeking

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `boekingId` | [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingidentifiermodel) | yes |  |
| `omschrijving` | `string` | yes |  |
| `bedrag` | `number` (decimal) | yes |  |


### `SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel.MemoriaalBoekingsRegelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` | yes |  |
| `grootboek` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) | yes |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `debet` | `number` (decimal) |  |  |
| `credit` | `number` (decimal) |  |  |


### `SnelStart.B2B.Api.V2.Models.Bankboekingen.MemoriaalboekingModel.VerkoopBoekingVerantwoordingsRegelModel`

Container met gegevens voor een boekingsreegel met een inkoopboeking

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `boekingId` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopboekingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingidentifiermodel) | yes |  |
| `omschrijving` | `string` | yes |  |
| `bedrag` | `number` (decimal) | yes |  |


### `SnelStart.B2B.Api.V2.Models.Bijlagen.UblContentModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `fileName` | `string` |  | De naam van de factuur UBL. |
| `content` | `string` (byte) |  | De inhoud van de factuur UBL. |
| `pdfContent` | `string` (byte) |  | De inhoud van de factuur PDF. |
| `forcePersist` | `boolean` |  | Negeer validatie fouten |


### `SnelStart.B2B.Api.V2.Models.Bijlagen.VerkoopBoekingBijlageReferenceModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `verkoopBoekingId` | `string` (uuid) |  | De public identifier van de gekoppelde verkoopboeking. |
| `fileName` | `string` |  | De naam van de bijlage. |
| `readOnly` | `boolean` |  | De bijlage is alleen-lezen. |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.BtwAangiftes.BoekjaarModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `startDate` | `string` (date-time) |  |  |
| `endDate` | `string` (date-time) |  |  |


### `SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `boekjaar` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BoekjaarModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-boekjaarmodel) |  |  |
| `betalenVoor` | `string` (date-time) |  |  |
| `aangiftePeriodeBeginDatum` | `string` (date-time) |  |  |
| `btwAangiftePeriode` | `string` |  |  |
| `datumTijdBerekening` | `string` (date-time) |  |  |
| `datumTijdVerzending` | `string` (date-time) |  | Indien verzonden, het tijdstip van verzending |
| `isSuppletie` | `boolean` |  |  |
| `isAangifteGeschat` | `boolean` |  |  |
| `btwPercentageHoog` | `number` (double) |  |  |
| `btwPercentageLaag` | `number` (double) |  |  |
| `btwPercentageOverig` | `number` (double) |  |  |
| `betalingskenmerk` | `string` |  |  |
| `foutBericht` | `string` |  |  |
| `btwAangifteStatus` | `string` |  |  |
| `btwNummer` | `string` |  |  |
| `rubriek1A` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek1B` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek1C` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek1D` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek1E` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek2A` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek3A` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek3B` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek3C` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek4A` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek4B` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5A` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5B` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5C` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5D` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5E` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5F` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `rubriek5G` | [`SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`](_schemas.md#snelstart-b2b-api-v2-models-btwaangiftes-btwaangifterubriekmodel) |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteRubriekModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `btw` | `integer` (int32) |  |  |
| `omzet` | `integer` (int32) |  |  |
| `btwSchatting` | `integer` (int32) |  |  |
| `omzetSchatting` | `integer` (int32) |  |  |


### `SnelStart.B2B.Api.V2.Models.BtwAangiftes.UpdateBtwAangifteStatusModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `isExternAangegeven` | `boolean` |  |  |


### `SnelStart.B2B.Api.V2.Models.BtwTarieven.BtwTariefModel`

Een container voor btw-tarief informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `btwSoort` | `string` |  | Het btw soort ({SnelStart.B2B.Api.V2.Models.Boekingen.BtwSoortModel}) |
| `btwPercentage` | `number` (decimal) |  | Het btw percentage. |
| `datumVanaf` | `string` (date-time) |  | De datum vanaf wanneer het btw percentage geldig is. |
| `datumTotEnMet` | `string` (date-time) |  | De datum tot en met wanneer het btw percentage geldig is. |


### `SnelStart.B2B.Api.V2.Models.CompanyInfo.CompanyInfoModel`

Een container voor bedrijfsinformatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `administratieIdentifier` | `string` (uuid) |  |  |
| `administratieNaam` | `string` |  |  |
| `bedrijfsnaam` | `string` |  |  |
| `contactpersoon` | `string` |  |  |
| `adres` | `string` |  |  |
| `postcode` | `string` |  |  |
| `plaats` | `string` |  |  |
| `telefoon` | `string` |  |  |
| `mobieleTelefoon` | `string` |  |  |
| `fax` | `string` |  |  |
| `bankrekeningnummer` | `string` |  |  |
| `iban` | `string` |  |  |
| `bic` | `string` |  |  |
| `rechtsvorm` | `string` |  |  |
| `btwNummer` | `string` |  |  |
| `btwIdentificatieNummer` | `string` |  |  |
| `kvKNummer` | `string` |  |  |
| `email` | `string` |  |  |
| `website` | `string` |  |  |
| `vrijeTekst1` | `string` |  |  |
| `vrijeTekst2` | `string` |  |  |
| `vrijeTekst3` | `string` |  |  |
| `vrijeTekst4` | `string` |  |  |
| `huidigBoekjaar` | `integer` (int32) |  |  |
| `beginmaandFiscaleBoekjaar` | `integer` (int32) |  |  |
| `btwAangiftePeriodeSoort` | `string` |  |  |
| `icpAangiftePeriodeSoort` | `string` |  |  |
| `btwNummerFiscaleEenheid` | `string` |  |  |
| `tussentijdseSuppletiesBerekenen` | `boolean` |  |  |
| `mapUBLBestanden` | `string` |  |  |
| `btwPercentageAangifteKredietbeperking` | `number` (decimal) |  |  |
| `markeergedragInlezenBankafschriften` | `string` |  |  |
| `voorkeurenTijdensBoeken` | `boolean` |  |  |
| `aantalVoorloopnullenGrootboekrekeningen` | `integer` (int32) |  |  |
| `kleineOndernemersregeling` | [`SnelStart.B2B.Api.V2.Models.CompanyInfo.KleineOndernemersRegelingModel`](_schemas.md#snelstart-b2b-api-v2-models-companyinfo-kleineondernemersregelingmodel) |  |  |
| `volgendFactuurnummer` | `integer` (int32) |  |  |
| `volgendVerkoopordernummer` | `integer` (int32) |  |  |
| `volgendContantbonnummer` | `integer` (int32) |  |  |
| `volgendInkoopordernummer` | `integer` (int32) |  |  |
| `voorraadcontroleOrderinvoer` | `boolean` |  |  |
| `abonnementOvernemen` | `boolean` |  |  |
| `kolomGeleverdAutomatischVullen` | `boolean` |  |  |
| `voorraadkolommenTonenInInkoop` | `boolean` |  |  |
| `backorderGebruiken` | `boolean` |  |  |
| `deelleveringOrdersDefaultAan` | `boolean` |  |  |
| `factuurAlsBijlageVerkoopboeking` | `boolean` |  |  |
| `tekstregelsOvernemenNaarBackorder` | `string` |  |  |
| `regelkortingVerkooporder` | `string` |  |  |
| `drempelbedragVerkooporderbeheer` | `number` (decimal) |  |  |
| `drempelbedragVerkooporderbeheerMaxDagenUitstel` | `integer` (int32) |  |  |
| `verkoopprijsArtikelbestandExclusiefBtw` | `boolean` |  |  |
| `inkoopprijsArtikelbestandExclusiefBtw` | `boolean` |  |  |
| `artikelcodeSoort` | `string` |  |  |
| `artikelcodeMaxLengte` | `integer` (int32) |  |  |
| `begindatumVoorraadtelling` | `string` (date-time) |  |  |
| `voorraadTonenInZoekvenster` | `boolean` |  |  |
| `aantalDecimalenArtikelprijzen` | `integer` (int32) |  |  |
| `aantalDecimalenArtikelaantallen` | `integer` (int32) |  |  |
| `verkooporderVoorraadVanafNiveau` | `string` |  |  |
| `voorraadSysteem` | `string` |  |  |
| `momentVoorraadBijwerken` | `string` |  |  |
| `rekeningTeOntvangenInkoopfacturen` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `dagboekVoorraadverschillen` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `buitenlandseBtwGrootboek` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `factureerBuitenlandsBtw` | `boolean` |  |  |
| `factureerBuitenlandsBtwRanges` | array of [`SnelStart.B2B.Api.V2.Models.CompanyInfo.FactureerBuitenlandseBtwDateRangeModel`](_schemas.md#snelstart-b2b-api-v2-models-companyinfo-factureerbuitenlandsebtwdaterangemodel) |  |  |


### `SnelStart.B2B.Api.V2.Models.CompanyInfo.FactureerBuitenlandseBtwDateRangeModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `from` | `integer` (int64) |  |  |
| `to` | `integer` (int64) |  |  |


### `SnelStart.B2B.Api.V2.Models.CompanyInfo.KleineOndernemersRegelingModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `isKleineOndernemersRegelingActief` | `boolean` |  |  |
| `maximaalBedragVolledigeVerrekening` | `number` (decimal) |  |  |
| `maximaalBedragKleineOndernemersRegeling` | `number` (decimal) |  |  |


### `SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldDefinitionModel`

De container voor custom fields

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  | Naam van het custom field |
| `type` | `string` |  | Type van het custom field |
| `properties` | array of [`SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldDefinitionPropertyModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-customfielddefinitionpropertymodel) |  | Properties van het custom field |


### `SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldDefinitionPropertyModel`

Container voor gegevens van een property van een custom field

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  | Naam |
| `value` | `object` |  | Waarde |


### `SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldModel`

Container voor gegevens van een custom field

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `value` | `object` |  | Waarde |
| `definition` | [`SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldDefinitionModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-customfielddefinitionmodel) |  |  |


### `SnelStart.B2B.Api.V2.Models.CustomFields.RelatieCustomFieldsModel`

Container voor gegevens over de custom field van een relatie

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `klantCustomFields` | array of [`SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-customfieldmodel) |  |  |
| `leverancierCustomFields` | array of [`SnelStart.B2B.Api.V2.Models.CustomFields.CustomFieldModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-customfieldmodel) |  |  |


### `SnelStart.B2B.Api.V2.Models.CustomFields.RelatieUpdatedCustomFieldsModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `klantCustomFields` | array of [`SnelStart.B2B.Api.V2.Models.CustomFields.UpdatedCustomFieldModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-updatedcustomfieldmodel) |  |  |
| `leverancierCustomFields` | array of [`SnelStart.B2B.Api.V2.Models.CustomFields.UpdatedCustomFieldModel`](_schemas.md#snelstart-b2b-api-v2-models-customfields-updatedcustomfieldmodel) |  |  |


### `SnelStart.B2B.Api.V2.Models.CustomFields.UpdatedCustomFieldModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  |  |
| `value` | `object` |  |  |


### `SnelStart.B2B.Api.V2.Models.Dagboeken.DagboekIdentifierModel`

De gegevenscontainer voor een Dagboekreferentie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Dagboeken.DagboekModel`

De gegevenscontainer voor een dagboek.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` |  | De omschrijving van het dagboek. |
| `soort` | `string` |  | Het dagboek soort. |
| `nonactief` | `boolean` |  | Een vlag dat aangeeft of het dagboek niet meer actief is binnen de administratie. Indien , dan kan het dagboek als "verwijderd" worden beschouwd. |
| `nummer` | `integer` (int32) |  | Het nummer van het dagboek |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Documenten.DocumentContentModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `content` | `string` (byte) |  | De inhoud van het document. |
| `parentIdentifier` | `string` (uuid) |  | De public identifier van de gekoppelde parent. |
| `fileName` | `string` |  | Geeft de filename terug |
| `readOnly` | `boolean` |  | Document is alleen lezen |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Documenten.DocumentIdentifierModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Documenten.DocumentModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `parentIdentifier` | `string` (uuid) |  | De public identifier van de gekoppelde parent. |
| `fileName` | `string` |  | Geeft de filename terug |
| `readOnly` | `boolean` |  | Document is alleen lezen |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.GrootboekMutaties.GrootboekMutatieModel`

De gegevenscontainer voor een Grootboekmutatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `grootboek` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `datum` | `string` (date-time) |  | Datum |
| `modifiedOn` | `string` (date-time) |  | Datum aangemaakt of voor het laatst gewijzigd |
| `dagboek` | [`SnelStart.B2B.Api.V2.Models.Dagboeken.DagboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-dagboeken-dagboekidentifiermodel) |  |  |
| `omschrijving` | `string` |  | De omschrijving |
| `debet` | `number` (decimal) |  | Debet |
| `credit` | `number` (decimal) |  | Credit |
| `saldo` | `number` (decimal) |  | Waarde Debet - Credit |
| `documents` | array of [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentmodel) |  | De bijlagen van deze grootboekmutatie |
| `boekstuk` | `string` |  | Boekstuk |
| `factuurNummer` | `string` |  | FactuurNummer |
| `relatiePublicIdentifier` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`

De gegevenscontainer voor een grootboekreferentie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekModel`

De gegevenscontainer voor een grootboek.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop het grootboek is aangemaakt of voor het laatst is gewijzigd |
| `omschrijving` | `string` |  | De omschrijving van het grootboek. |
| `kostenplaatsVerplicht` | `boolean` |  | Kostenplaats wel of niet verplicht bij het boeken. |
| `rekeningCode` | `string` |  | Rekening code van het grootboek. |
| `nonactief` | `boolean` |  | Een vlag dat aangeeft of het grootboek niet meer actief is binnen de administratie. Indien , dan kan het grootboek als "verwijderd" worden beschouwd. |
| `nummer` | `integer` (int32) |  | Het nummer van het grootboek. |
| `grootboekfunctie` | `string` |  | De grootboekfunctie van het grootboek. |
| `grootboekRubriek` | `string` |  | De omschrijving van de grootboek rubriek. |
| `rgsCode` | array of [`SnelStart.B2B.Api.V2.Models.Grootboeken.RgsModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-rgsmodel) |  | RgsCodes |
| `btwSoort` | array of `string` |  | De Btw mogelijkheden voor dit grootboek. Dit veld is readonly |
| `vatRateCode` | `string` |  | Vat rate code. Deze code mapped naar een vat rate |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Grootboeken.RgsModel`

Rgs codes

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `versie` | `string` |  | Rgs versie |
| `rgsCode` | `string` |  | Rgs code |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.AttachmentModel`

Gebruikt om inkopen aan te maken

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `fileName` | `string` |  | Bestandsnaam van de bijlage |
| `content` | `string` (byte) |  | 64 bit encoded bijlage data |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.BtwBoekingModel`

De gegevenscontainer voor de btwboeking van een factuurboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `btwSoort` | `string` |  | De btw-soort waarop het btw-bedrag wordt geboekt. |
| `btwBedrag` | `number` (decimal) |  | Het btw-bedrag dat voor de gegeven btwsoort wordt geboekt. |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.CreateFromAttachmentModel`

Gebruikt om inkopen aan te maken

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `instanceId` | `string` |  | InstanceId waarmee de status van het aanmaken te volgen is |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.CreateFromAttachmentStatusModel`

Gebruikt om inkopen aan te maken

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `status` | `string` |  | Status van het aanmaken |
| `inkoopboekingId` | `string` (uuid) |  | Het id van de inkoopboeking als deze is aangemaakt |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingIdentifierModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingModel`

De gegevenscontainer voor een inkoopboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de inkoopboeking voor het laatst is gewijzigd. |
| `boekstuk` | `string` |  | Het boekstuknummer van de inkoopboeking. |
| `gewijzigdDoorAccountant` | `boolean` |  | Geeft aan of deze inkoopboeking is aangepast door de accountant. |
| `markering` | `boolean` |  | Deze inkoopboeking verdient speciale aandacht, in SnelStart wordt dit visueel benadrukt. |
| `factuurdatum` | `string` (date-time) | yes | De datum van de factuur, dit is ook de datum waarop de inkoopboeking wordt geboekt. |
| `factuurnummer` | `string` | yes | De factuurnummer van de inkoopboeking. |
| `leverancier` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) | yes |  |
| `omschrijving` | `string` |  | De omschrijving van de inkoopboeking. |
| `factuurbedrag` | `number` (decimal) |  | Het factuurbedrag van de inkoopboeking. |
| `boekingsregels` | array of [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingregelmodel) | yes | De omzetregels van de inkoopboeking. De btw-bedragen staan hier niet in, deze staan in de Btw-collectie. |
| `btw` | array of [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.BtwBoekingModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-btwboekingmodel) |  | De af te dragen btw van de inkoopboeking per btw-tarief |
| `documents` | array of [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentmodel) |  | Verwijzing naar de bijlagen van de inkoopboeking |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingRegelModel`

De gegevenscontainer voor een boekingsregel van een  (InkoopboekingModel)

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` |  | De omschrijving van de boekingsregel. |
| `grootboek` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) | yes |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `bedrag` | `number` (decimal) |  | Het omzetbedrag van de regel, exclusief btw. |
| `btwSoort` | `string` |  | Mag leeg worden gelaten of met de juiste waarde worden ingevuld behalve als de grootboek een  grootboekfunctie 30 (Inkopen kosten alle btwtarieven) of 34 (inkopen vraagposten) heeft. |


### `SnelStart.B2B.Api.V2.Models.Inkoopfacturen.InkoopfactuurModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de inkoopfactuur voor het laatst is gewijzigd. |
| `openstaandSaldo` | `number` (decimal) |  | Het openstaand saldo van de inkoopfactuur. Deze wordt alleen bij uitlezen gevuld |
| `factuurnummer` | `string` | yes | Het factuurnummer. |
| `vervalDatum` | `string` (date-time) |  | Het tijdstip waarop de factuur is of zal vervallen |
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `factuurDatum` | `string` (date-time) |  | De datum waarop de factuur is aangemaakt |
| `factuurBedrag` | `number` (decimal) |  | Het totaal bedrag van de factuur |
| `inkoopBoeking` | [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingidentifiermodel) |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Kasboekingen.BtwBoekingregelModel`

Container met gegeven voor een btw boekingsregel

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `debet` | `number` (decimal) |  |  |
| `credit` | `number` (decimal) |  |  |
| `type` | `string` | yes |  |
| `tarief` | `string` | yes |  |


### `SnelStart.B2B.Api.V2.Models.Kasboekingen.GrootboekBoekingsRegelModel`

Container voor gegevens van een boeking met een grootboek

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` | yes |  |
| `grootboek` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) | yes |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `debet` | `number` (decimal) |  |  |
| `credit` | `number` (decimal) |  |  |
| `btwSoort` | `string` |  |  |


### `SnelStart.B2B.Api.V2.Models.Kasboekingen.InkoopBoekingVerantwoordingsRegelModel`

Container met gegevens voor een boekingsreegel met een inkoopboeking

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `boekingId` | [`SnelStart.B2B.Api.V2.Models.Inkoopboekingen.InkoopboekingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-inkoopboekingen-inkoopboekingidentifiermodel) | yes |  |
| `omschrijving` | `string` |  |  |
| `debet` | `number` (decimal) |  |  |
| `credit` | `number` (decimal) |  |  |


### `SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel`

De gegevenscontainer voor een kasboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de kasboeking is aangemaakt of voor het laatst is gewijzigd |
| `datum` | `string` (date-time) | yes |  |
| `markering` | `boolean` |  | Deze kasboeking verdient speciale aandacht, in SnelStart wordt dit visueel benadrukt. |
| `boekstuk` | `string` |  | Het boekstuknummer van de kasboeking. |
| `gewijzigdDoorAccountant` | `boolean` |  | Geeft aan of deze kasboeking is aangepast door de accountant. |
| `omschrijving` | `string` |  |  |
| `grootboekBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.GrootboekBoekingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-grootboekboekingsregelmodel) |  |  |
| `inkoopboekingBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.InkoopBoekingVerantwoordingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-inkoopboekingverantwoordingsregelmodel) |  |  |
| `verkoopboekingBoekingsRegels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.VerkoopBoekingVerantwoordingsRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-verkoopboekingverantwoordingsregelmodel) |  |  |
| `btwBoekingsregels` | array of [`SnelStart.B2B.Api.V2.Models.Kasboekingen.BtwBoekingregelModel`](_schemas.md#snelstart-b2b-api-v2-models-kasboekingen-btwboekingregelmodel) |  |  |
| `bedragUitgegeven` | `number` (decimal) | yes |  |
| `bedragOntvangen` | `number` (decimal) | yes |  |
| `dagboek` | [`SnelStart.B2B.Api.V2.Models.Dagboeken.DagboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-dagboeken-dagboekidentifiermodel) | yes |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Kasboekingen.VerkoopBoekingVerantwoordingsRegelModel`

Container met gegevens voor een boekingsreegel met een inkoopboeking

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `boekingId` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopboekingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingidentifiermodel) |  |  |
| `omschrijving` | `string` |  |  |
| `debet` | `number` (decimal) |  |  |
| `credit` | `number` (decimal) |  |  |


### `SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`

De gegevenscontainer voor een kostenplaats referentie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsModel`

De gegevenscontainer voor een kostenplaats.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` |  | De omschrijving van de kostenplaats. |
| `nonactief` | `boolean` |  | Een vlag dat aangeeft of een kostenplaats niet meer actief is binnen de administratie. Indien , dan kan er niet geboekt worden op de kostenplaats. |
| `nummer` | `integer` (int32) |  | Het nummer van de kostenplaats. |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Landen.LandIdentifierModel`

Een container voor land informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Landen.LandModel`

Een container voor land informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `naam` | `string` |  | De naam van het land. |
| `landcodeISO` | `string` |  | De ISO code van het land. |
| `landcode` | `string` |  | De code van het land. |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Prijsafspraken.PrijsafspraakModel`

Het prijsafspraak model

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `artikel` | [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelidentifiermodel) |  |  |
| `datum` | `string` (date-time) |  | Een prijsafspraak kan afhankelijk zijn van een datum. Geef hier de datum op waarop de prijsafspraak moet gelden. Optioneel veld |
| `aantal` | `number` (decimal) |  | Het te leveren aantal. Dit veld is verplicht |
| `korting` | `number` (decimal) |  | Het kortingpercentage van deze prijsafspraak. Dit is een readonly veld |
| `verkoopprijs` | `number` (decimal) |  | De verkoopprijs van het artikel obv de geldende prijsafspraak. |
| `basisprijs` | `number` (decimal) |  | De basis verkoopprijs van het artikel zonder prijsafspraken. |
| `datumVanaf` | `string` (date-time) |  | De datum vanaf wanneer de huidig geldende prijsafspraak geldig is. Dit veld is leeg indien niet van toepassing. |
| `datumTotEnMet` | `string` (date-time) |  | De datum tot en met de huidig geldende prijsafspraak geldig is. Dit veld is leeg indien niet van toepassing. |
| `prijsBepalingSoort` | `string` |  | De prijsbepalingsoort van de huidig geldende prijsafspraak geldig is. |


### `SnelStart.B2B.Api.V2.Models.Rapportage.KolommenbalansRegelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `grootboekIdentifier` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `grootboekOmschrijving` | `string` |  | De omschrijving van het grootboek. |
| `grootboekNummer` | `integer` (int32) |  | Het nummer van het grootboek. |
| `verliesEnWinstDebet` | `number` (decimal) |  |  |
| `verliesEnWinstCredit` | `number` (decimal) |  |  |
| `balansDebet` | `number` (decimal) |  |  |
| `balansCredit` | `number` (decimal) |  |  |
| `rgsCode` | array of [`SnelStart.B2B.Api.V2.Models.Grootboeken.RgsModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-rgsmodel) |  | RgsCodes |


### `SnelStart.B2B.Api.V2.Models.Rapportage.PeriodebalansRegelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `grootboekIdentifier` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) |  |  |
| `grootboekOmschrijving` | `string` |  | De omschrijving van het grootboek. |
| `grootboekNummer` | `integer` (int32) |  | Het nummer van het grootboek. |
| `debet` | `number` (decimal) |  |  |
| `credit` | `number` (decimal) |  |  |
| `startSaldoPeriode` | `number` (decimal) |  |  |
| `eindSaldoPeriode` | `number` (decimal) |  |  |
| `startSaldoBoekjaar` | `number` (decimal) |  |  |
| `rgsCode` | array of [`SnelStart.B2B.Api.V2.Models.Grootboeken.RgsModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-rgsmodel) |  | RgsCodes |


### `SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`

Een container voor adres informatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `contactpersoon` | `string` |  | De volledige naam van de contactpersoon op dit adres. |
| `straat` | `string` |  | De straatnaam (inclusief huisnummer). |
| `postcode` | `string` |  | De postcode van het adres. |
| `plaats` | `string` |  | De plaatsnaam van het adres. |
| `land` | [`SnelStart.B2B.Api.V2.Models.Landen.LandIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-landen-landidentifiermodel) |  |  |


### `SnelStart.B2B.Api.V2.Models.Relaties.DoorlopendeIncassoMachtigingModel`

Een container voor een doorlopende incassomachtiging.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `kenmerk` | `string` |  | Het unieke kenmerk van de incassomachtiging. |
| `afsluitDatum` | `string` (date-time) |  | De datum waarop de machtiging is afgesloten. |
| `omschrijving` | `string` |  | De omschrijving van de incassomachtiging. |
| `klant` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `intrekkingsDatum` | `string` (date-time) |  | De datum waarop deze incassomachtiging is ingetrokken. |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`

Een container voor het versturen van emails.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `shouldSend` | `boolean` |  | Geeft aan (lezen/schrijven) of er email moet worden verstuurd. |
| `email` | `string` |  | Het email adres waarnaar email moeten worden verstuurd. |
| `ccEmail` | `string` |  | Het (optionele) email adres waarnaar email moeten worden ge-Cc-eed. |


### `SnelStart.B2B.Api.V2.Models.Relaties.ExtraVeldRelatieModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `naam` | `string` |  |  |
| `waarde` | `string` |  |  |


### `SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`

De gegevenscontainer voor een relatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Relaties.RelatieModel`

De gegevenscontainer voor een relatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `relatiesoort` | array of `string` |  | Geeft een instantie van een {SnelStart.B2B.Api.V2.Models.Relaties.RelatiesoortModel} terug. Toegestane waarden:     Klant     Leverancier |
| `modifiedOn` | `string` (date-time) |  | Datum waarop de gegevens van deze relatie zijn aangepast |
| `relatiecode` | `integer` (int32) |  | Het relatienummer |
| `naam` | `string` |  | De volledige naam van de relatie. |
| `vestigingsAdres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `correspondentieAdres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `telefoon` | `string` |  | Het telefoonnummer van de relatie. |
| `mobieleTelefoon` | `string` |  | Het mobiele nummer van de relatie. |
| `fax` | `string` |  | Het fax nummer van de relatie. |
| `email` | `string` |  | Het hoofd-emailadres van de relatie. |
| `btwNummer` | `string` |  | Het BTW-nummer van de relatie. |
| `factuurkorting` | `number` (double) |  | De standaard factuurkorting die aan deze relatie wordt gegeven (optioneel). |
| `krediettermijn` | `integer` (int32) |  | Het standaard aantal dagen krediettermijn van aan deze relatie wordt gegeven (optioneel). |
| `bankieren` | `boolean` |  | Geeft  terug als {SnelStart.B2B.Api.V2.Models.Relaties.RelatieModel.IncassoSoort}{SnelStart.B2B.Api.V2.Models.Relaties.IncassosoortModel.Core} of {SnelStart.B2B.Api.V2.Models.Relaties.IncassosoortModel.B2B} is. Dit veld komt overeen met het veld Betaalopdracht in SnelStart Desktop |
| `nonactief` | `boolean` |  | Een vlag dat aangeeft of een relatie niet meer actief is binnen de administratie. Indien , dan kan de relatie als "verwijderd" worden beschouwd. |
| `kredietLimiet` | `number` (double) |  | Het standaard kredietlimiet (in euro's) van aan deze relatie wordt gegeven (optioneel). |
| `memo` | `string` |  | Een optioneel tekstveld voor aanvullende informatie. |
| `kvkNummer` | `string` |  | Het nummer van de Kamer van Koophandel van de relatie. |
| `oin` | `string` |  | Organisatie-identificatienummer then behoeve van het identificeren van overheidsorganisaties |
| `websiteUrl` | `string` |  | De URL van de website van de relatie. |
| `aanmaningsoort` | `string` |  | Het soort aanmaning ({SnelStart.B2B.Api.V2.Models.Relaties.AanmaningsoortModel}) dat van toepassing is op de relatie (optioneel). |
| `offerteEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `bevestigingsEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `factuurEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `aanmaningEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `offerteAanvraagEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `bestellingEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `ublBestandAlsBijlage` | `boolean` |  | Een vlag dat aangeeft of een UBL-bestand als bijlage bij een email moet worden toegevoegd bij het versturen van facturen. |
| `iban` | `string` |  | Het IBAN-rekeningnummer van de relatie. |
| `bic` | `string` |  | De BIC-code van de bank van het {SnelStart.B2B.Api.V2.Models.Relaties.RelatieModel.Iban}-nummer. |
| `incassoSoort` | `string` |  | Het soort incasso ({SnelStart.B2B.Api.V2.Models.Relaties.IncassosoortModel}) dat van toepassing is op de relatie (optioneel). |
| `factuurRelatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `inkoopBoekingenUri` | `string` |  | Verwijzing naar de inkoopboekingen voor de relatie |
| `verkoopBoekingenUri` | `string` |  | Verwijzing naar de verkoopboekingen voor de relatie |
| `documents` | array of [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentmodel) |  | Verwijzing naar de documenten van de relatie |
| `id` | `string` (uuid) |  |  |
| `uri` | `string` |  |  |
| `extraVeldenKlant` | array of [`SnelStart.B2B.Api.V2.Models.Relaties.ExtraVeldRelatieModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-extraveldrelatiemodel) |  | De extra velden bij een klant. Dit veld is alleen te lezen. Updates kunnen met de realaties/{id}/CustomFields worden gemaakt. |


### `SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel`

De gegevenscontainer voor een relatie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `relatiesoort` | array of `string` |  | Geeft een instantie van een {SnelStart.B2B.Api.V2.Models.Relaties.RelatiesoortModel} terug. Toegestane waarden:     Klant     Leverancier |
| `modifiedOn` | `string` (date-time) |  | Datum waarop de gegevens van deze relatie zijn aangepast |
| `relatiecode` | `integer` (int32) |  | Het relatienummer |
| `naam` | `string` |  | De volledige naam van de relatie. |
| `vestigingsAdres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `correspondentieAdres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `telefoon` | `string` |  | Het telefoonnummer van de relatie. |
| `mobieleTelefoon` | `string` |  | Het mobiele nummer van de relatie. |
| `email` | `string` |  | Het hoofd-emailadres van de relatie. |
| `btwNummer` | `string` |  | Het BTW-nummer van de relatie. |
| `factuurkorting` | `number` (double) |  | De standaard factuurkorting die aan deze relatie wordt gegeven (optioneel). |
| `krediettermijn` | `integer` (int32) |  | Het standaard aantal dagen krediettermijn van aan deze relatie wordt gegeven (optioneel). |
| `bankieren` | `boolean` |  | Geeft  terug als {SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel.IncassoSoort}{SnelStart.B2B.Api.V2.Models.Relaties.IncassosoortModel.Core} of {SnelStart.B2B.Api.V2.Models.Relaties.IncassosoortModel.B2B} is. Dit veld komt overeen met het veld Betaalopdracht in SnelStart Desktop |
| `nonactief` | `boolean` |  | Een vlag dat aangeeft of een relatie niet meer actief is binnen de administratie. Indien , dan kan de relatie als "verwijderd" worden beschouwd. |
| `kredietLimiet` | `number` (double) |  | Het standaard kredietlimiet (in euro's) van aan deze relatie wordt gegeven (optioneel). |
| `memo` | `string` |  | Een optioneel tekstveld voor aanvullende informatie. |
| `kvkNummer` | `string` |  | Het nummer van de Kamer van Koophandel van de relatie. |
| `oin` | `string` |  | Organisatie-identificatienummer then behoeve van het identificeren van overheidsorganisaties |
| `websiteUrl` | `string` |  | De URL van de website van de relatie. |
| `aanmaningsoort` | `string` |  | Het soort aanmaning ({SnelStart.B2B.Api.V2.Models.Relaties.AanmaningsoortModel}) dat van toepassing is op de relatie (optioneel). |
| `offerteEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `bevestigingsEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `factuurEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `aanmaningEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `offerteAanvraagEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `bestellingEmailVersturen` | [`SnelStart.B2B.Api.V2.Models.Relaties.EmailVersturenModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-emailversturenmodel) |  |  |
| `ublBestandAlsBijlage` | `boolean` |  | Een vlag dat aangeeft of een UBL-bestand als bijlage bij een email moet worden toegevoegd bij het versturen van facturen. |
| `iban` | `string` |  | Het IBAN-rekeningnummer van de relatie. |
| `bic` | `string` |  | De BIC-code van de bank van het {SnelStart.B2B.Api.V2.Models.Relaties.RelatieWriteModel.Iban}-nummer. |
| `incassoSoort` | `string` |  | Het soort incasso ({SnelStart.B2B.Api.V2.Models.Relaties.IncassosoortModel}) dat van toepassing is op de relatie (optioneel). |
| `factuurRelatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `inkoopBoekingenUri` | `string` |  | Verwijzing naar de inkoopboekingen voor de relatie |
| `verkoopBoekingenUri` | `string` |  | Verwijzing naar de verkoopboekingen voor de relatie |
| `documents` | array of [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentmodel) |  | Verwijzing naar de documenten van de relatie |
| `id` | `string` (uuid) |  |  |
| `uri` | `string` |  |  |
| `extraVeldenKlant` | array of [`SnelStart.B2B.Api.V2.Models.Relaties.ExtraVeldRelatieModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-extraveldrelatiemodel) |  | De extra velden bij een klant. Dit veld is alleen te lezen. Updates kunnen met de realaties/{id}/CustomFields worden gemaakt. |


### `SnelStart.B2B.Api.V2.Models.VatRates.VatRateDefinitionModel`

Container die de verschillende vat rates bevat

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `rateCode` | `string` |  | De interne code van deze vat rate |
| `shortName` | `string` |  | De korte naam van deze vat rate |
| `name` | `string` |  | De naam van deze vat rate |


### `SnelStart.B2B.Api.V2.Models.VatRates.VatRateModel`

Een container voor vat rates voor een land

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `rateCode` | `string` |  | De interne code van de vat rate |
| `rate` | `number` (decimal) |  | Het vat percentage |
| `validFrom` | `string` (date-time) |  | Datum vannf dit percentage geldig is. Staat hier 2020-01-01 dan is dit percentage al op 1 januari geldig |


### `SnelStart.B2B.Api.V2.Models.VatRates.VatRatesModel`

Een container voor vat rates bij land

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `countryCode` | `string` |  | De driecijferige ISO landcode  NLD, DEU, FRA |
| `vatRates` | array of [`SnelStart.B2B.Api.V2.Models.VatRates.VatRateModel`](_schemas.md#snelstart-b2b-api-v2-models-vatrates-vatratemodel) |  | De vat percentages die gelden voor dit land |


### `SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.IncassoMachtigingIdentifierModel`

De gegevenscontainer voor een incassomachtiging.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingBtwRegelModel`

De gegevenscontainer voor de btwboeking van een factuurboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `btwSoort` | `string` |  | De btw-soort waarop het btw-bedrag wordt geboekt. |
| `btwBedrag` | `number` (decimal) |  | Het btw-bedrag dat voor de gegeven btwsoort wordt geboekt. |


### `SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingEenmaligeIncassoMachtigingModel`

De gegevenscontainer voor een incassomachtiging

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `kenmerk` | `string` |  | Het kenmerk van de incassomachtiging. |
| `omschrijving` | `string` | yes | De omschrijving van de incassomachtiging.  Deze is verplicht bij een eenmalige machtiging. |
| `datum` | `string` (date-time) | yes | De datum van de incassomachtiging Deze is verplicht bij een eenmalige machtiging. |


### `SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingModel`

De gegevenscontainer voor een verkoopboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de verkoopboeking voor het laatst is gewijzigd. |
| `boekstuk` | `string` |  | Het boekstuknummer van de verkoopboeking. |
| `gewijzigdDoorAccountant` | `boolean` |  | Geeft aan of deze verkoopboeking is aangepast door de accountant. |
| `markering` | `boolean` |  | Deze verkoopboeking verdient speciale aandacht, in SnelStart wordt dit visueel benadrukt. |
| `factuurdatum` | `string` (date-time) |  | De datum van de factuur, dit is ook de datum waarop de verkoopboeking wordt geboekt. |
| `factuurnummer` | `string` | yes | De factuurnummer van de verkoopboeking. |
| `klant` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) | yes |  |
| `omschrijving` | `string` |  | De omschrijving van de verkoopboeking. |
| `factuurbedrag` | `number` (decimal) |  | Het factuurbedrag van de verkoopboeking. |
| `betalingstermijn` | `integer` (int32) |  | De betalingstermijn (in dagen) van de verkoopboeking. |
| `eenmaligeIncassoMachtiging` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingEenmaligeIncassoMachtigingModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingeenmaligeincassomachtigingmodel) |  |  |
| `doorlopendeIncassoMachtiging` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.IncassoMachtigingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-incassomachtigingidentifiermodel) |  |  |
| `boekingsregels` | array of [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingregelmodel) | yes | De omzetregels van de verkoopboeking. De btw-bedragen staan hier niet in, deze staan in de Btw-collectie. |
| `btw` | array of [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingBtwRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingbtwregelmodel) |  | De af te dragen btw van de verkoopboeking per btw-tarief |
| `documents` | array of [`SnelStart.B2B.Api.V2.Models.Documenten.DocumentModel`](_schemas.md#snelstart-b2b-api-v2-models-documenten-documentmodel) |  | Verwijzing naar de bijlagen van de verkoopboeking |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopBoekingRegelModel`

De gegevenscontainer voor een boekingsregel van een  (VerkoopBoekingModel)

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` |  | De omschrijving van de boekingsregel. |
| `grootboek` | [`SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-grootboeken-grootboekidentifiermodel) | yes |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `bedrag` | `number` (decimal) |  | Het omzetbedrag van de regel, exclusief btw. |
| `btwSoort` | `string` |  | Mag leeg worden gelaten of met de juiste waarde worden ingevuld behalve als de grootboek een  grootboekfunctie 30 (Inkopen kosten alle btwtarieven) of 34 (inkopen vraagposten) heeft. |


### `SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopboekingIdentifierModel`

De gegevenscontainer voor een verwijzing naar een verkoopboeking.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkoopfacturen.VerkoopfactuurIdentifierModel`

Verkoopfactuur identifier

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkoopfacturen.VerkoopfactuurModel`

Verkoopfacturen

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `verkoopBoeking` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.VerkoopboekingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-verkoopboekingidentifiermodel) |  |  |
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de verkoopfactuur voor het laatst is gewijzigd. |
| `openstaandSaldo` | `number` (decimal) |  | Het openstaand saldo van de verkoopfactuur. Deze wordt alleen bij uitlezen gevuld |
| `factuurnummer` | `string` | yes | Het factuurnummer. |
| `vervalDatum` | `string` (date-time) |  | Het tijdstip waarop de factuur is of zal vervallen |
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) |  |  |
| `factuurDatum` | `string` (date-time) |  | De datum waarop de factuur is aangemaakt |
| `factuurBedrag` | `number` (decimal) |  | Het totaal bedrag van de factuur |
| `verkoopOrders` | array of [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkooporderidentifiermodel) |  | De verkooporders van de verkoopfactuur |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.IngaveGegevenModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `veldNummer` | `integer` (int32) |  | Het VeldNummer. |
| `omschrijving` | `string` |  | De Omschrijving van het veld. |
| `waarde` | `string` |  | De Waarde van het veld. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) | yes |  |
| `procesStatus` | `string` |  | Status van de order. Als deze niet is opgegeven wordt de default waarde order gebruikt. Contantbon en Factuur zijn niet beschikbaar |
| `nummer` | `integer` (int32) |  | Het ordernummer. |
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de offerte voor het laatst is gewijzigd. |
| `datum` | `string` (date-time) | yes | De orderdatum. |
| `krediettermijn` | `integer` (int32) |  | De krediettermijn (in dagen) van de offerte.  Indien dit veld leeg is dan wordt het krediettermijn van de klant gebruikt. |
| `omschrijving` | `string` |  | De omschrijving van de order. |
| `betalingskenmerk` | `string` |  | Het betalingskenmerk van de order. |
| `incassomachtiging` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.IncassoMachtigingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-incassomachtigingidentifiermodel) |  |  |
| `afleveradres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `factuuradres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `verkooporderBtwIngaveModel` | `string` |  |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `regels` | array of [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkooporderRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkooporderregelmodel) |  |  |
| `memo` | `string` |  |  |
| `orderreferentie` | `string` |  | De orderreferentie van een offerte. Deze wordt in de e-factuur en in de factuur als PDF opgenomen |
| `factuurkorting` | `number` (double) |  |  |
| `verkoopfactuur` | [`SnelStart.B2B.Api.V2.Models.Verkoopfacturen.VerkoopfactuurIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopfacturen-verkoopfactuuridentifiermodel) |  |  |
| `totaalExclusiefBtw` | `number` (decimal) |  |  |
| `totaalInclusiefBtw` | `number` (decimal) |  |  |
| `isOfferte` | `boolean` |  |  |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.RegelIngaveGegevenModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `veldNummer` | `integer` (int32) |  | Het VeldNummer. |
| `omschrijving` | `string` |  | De Omschrijving van het veld. |
| `waarde` | `string` |  | De Waarde van het veld. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderIdentifierModel`

De gegevenscontainer voor een verkooporderreferentie.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `relatie` | [`SnelStart.B2B.Api.V2.Models.Relaties.RelatieIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-relatieidentifiermodel) | yes |  |
| `procesStatus` | `string` |  | DocumentStatus van de order. Als deze niet is opgegeven wordt de default waarde Order gebruikt. Contantbon en Factuur zijn niet beschikbaar |
| `nummer` | `integer` (int32) |  | Het ordernummer. |
| `modifiedOn` | `string` (date-time) |  | Het tijdstip waarop de verkooporder voor het laatst is gewijzigd. |
| `datum` | `string` (date-time) | yes | De orderdatum. |
| `krediettermijn` | `integer` (int32) |  | De krediettermijn (in dagen) van de verkooporder.  Indien dit veld leeg is dan wordt het krediettermijn van de klant gebruikt. |
| `geblokkeerd` | `boolean` |  | Blokkade op VerkoopOrder Indien dit veld leeg is dan wordt de instelling van het sjabloon gebruikt. |
| `omschrijving` | `string` |  | De omschrijving van de order. |
| `betalingskenmerk` | `string` |  | Het betalingskenmerk van de order. |
| `incassomachtiging` | [`SnelStart.B2B.Api.V2.Models.VerkoopBoekingen.IncassoMachtigingIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopboekingen-incassomachtigingidentifiermodel) |  |  |
| `afleveradres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `factuuradres` | [`SnelStart.B2B.Api.V2.Models.Relaties.AdresModel`](_schemas.md#snelstart-b2b-api-v2-models-relaties-adresmodel) |  |  |
| `verkooporderBtwIngaveModel` | `string` |  |  |
| `kostenplaats` | [`SnelStart.B2B.Api.V2.Models.Kostenplaatsen.KostenplaatsIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-kostenplaatsen-kostenplaatsidentifiermodel) |  |  |
| `regels` | array of [`SnelStart.B2B.Api.V2.Models.Verkooporders.VerkooporderRegelModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-verkooporderregelmodel) |  |  |
| `memo` | `string` |  |  |
| `orderreferentie` | `string` |  | De orderreferentie van een verkooporder. Deze wordt in de e-factuur en in de factuur als PDF opgenomen |
| `factuurkorting` | `number` (double) |  |  |
| `verkoopfactuur` | [`SnelStart.B2B.Api.V2.Models.Verkoopfacturen.VerkoopfactuurIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopfacturen-verkoopfactuuridentifiermodel) |  |  |
| `verkoopordersjabloon` | [`SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.VerkoopordersjabloonIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopordersjablonen-verkoopordersjabloonidentifiermodel) |  |  |
| `verkoopOrderStatus` | `string` |  | Status van de order. Als deze niet is opgegeven wordt de default waarde InBehandeling gebruikt. |
| `totaalExclusiefBtw` | `number` (decimal) |  |  |
| `totaalInclusiefBtw` | `number` (decimal) |  |  |
| `extraHoofdVelden` | array of [`SnelStart.B2B.Api.V2.Models.Verkooporders.IngaveGegevenModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-ingavegegevenmodel) |  | Extra HoofdVelden [experimenteel] - zoals gedefinieerd bij het te gebruiken sjabloon. |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.VerkooporderRegelModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `artikel` | [`SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelIdentifierModel`](_schemas.md#snelstart-b2b-api-v2-models-artikelen-artikelidentifiermodel) |  |  |
| `omschrijving` | `string` |  | De omschrijving van de verkooporderregel. Indien dit veld leeg is dan wordt de omschrijving van het artikel in dit veld gezet. |
| `stuksprijs` | `number` (double) |  | Stuksprijs van het artikel. |
| `aantal` | `number` (decimal) |  |  |
| `kortingsPercentage` | `number` (decimal) |  |  |
| `totaal` | `number` (decimal) |  |  |
| `extraRegelVelden` | array of [`SnelStart.B2B.Api.V2.Models.Verkooporders.RegelIngaveGegevenModel`](_schemas.md#snelstart-b2b-api-v2-models-verkooporders-regelingavegegevenmodel) |  | Extra RegelVelden [experimenteel] - zoals gedefinieerd bij het te gebruiken sjabloon. |


### `SnelStart.B2B.Api.V2.Models.Verkooporders.VerkooporderUpdateProcesStatusModel`

De gegevenscontainer voor het bijwerken van de proces status van een verkooporder.

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) van de verkooporder. |
| `procesStatus` | `string` |  | DocumentStatus van de order. Als deze niet is opgegeven wordt de default waarde Order gebruikt. Contantbon en Factuur zijn niet beschikbaar. |


### `SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.IngaveGegevenSjabloonModel`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `veldNummer` | `integer` (int32) |  | Het VeldNummer |
| `omschrijving` | `string` |  | De Omschrijving |
| `ingaveMasker` | `string` |  | Het IngaveMasker |
| `soortVeld` | `string` |  | Het SoortVeld ({SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.IngaveGegevenSoortVeldModel}) |
| `maximumTekstLengte` | `integer` (int32) |  | De MaximumTekstLengte |


### `SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.VerkoopOrderSjabloonModel`

VerkoopOrderSjabloon

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `omschrijving` | `string` |  | De omschrijving van het sjabloon. |
| `nonactief` | `boolean` |  | Een vlag dat aangeeft of een sjabloon niet meer actief is binnen de administratie. Indien , dan kan het sjabloon als "verwijderd" worden beschouwd. |
| `prijsIngaveExclusiefBtw` | `boolean` |  | Exclusief btw: In dat geval worden de verkoopprijzen in het verkoopscherm van SnelStart 12 en op de factuur exclusief btw weergegeven; Inclusief btw: In dat geval worden de verkoopprijzen in het verkoopscherm van SnelStart 12 en op de factuur inclusief btw weergegeven |
| `nieuweOrdersBlokkeren` | `boolean` |  | Een vlag dat aangeeft of nieuwe orders automatisch geblokkeerd worden. |
| `extraHoofdVelden` | array of [`SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.IngaveGegevenSjabloonModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopordersjablonen-ingavegegevensjabloonmodel) |  | Extra HoofdVelden [experimenteel] - extra velden tijdens het maken van een factuur (IngaveGegevenSjabloonModel). |
| `extraRegelVelden` | array of [`SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.IngaveGegevenSjabloonModel`](_schemas.md#snelstart-b2b-api-v2-models-verkoopordersjablonen-ingavegegevensjabloonmodel) |  | Extra RegelVelden [experimenteel] - extra velden in de orderregel (IngaveGegevenSjabloonModel). |
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.B2B.Api.V2.Models.Verkoopordersjablonen.VerkoopordersjabloonIdentifierModel`

VerkoopOrderSjabloon identifier

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `id` | `string` (uuid) |  | De publieke sleutel (public identifier, als System.Guid) dat uniek een object identificeert. |
| `uri` | `string` |  | Geeft de relatieve Uri terug van het object waartoe de identifier behoort. |


### `SnelStart.Business.Interfaces.CustomFields.CustomFieldDefinitionDto`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  |  |
| `type` | `string` |  |  |
| `properties` | array of [`SnelStart.Business.Interfaces.CustomFields.CustomFieldDefinitionPropertyDto`](_schemas.md#snelstart-business-interfaces-customfields-customfielddefinitionpropertydto) |  |  |
| `yPosition` | `integer` (int32) |  |  |
| `xPosition` | `integer` (int32) |  |  |


### `SnelStart.Business.Interfaces.CustomFields.CustomFieldDefinitionPropertyDto`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `name` | `string` |  |  |
| `value` | `object` |  |  |


### `SnelStart.Business.Interfaces.CustomFields.CustomFieldDto`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `definition` | [`SnelStart.Business.Interfaces.CustomFields.CustomFieldDefinitionDto`](_schemas.md#snelstart-business-interfaces-customfields-customfielddefinitiondto) |  |  |
| `value` | `object` |  |  |


### `System.Threading.CancellationToken`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `isCancellationRequested` | `boolean` |  |  |
| `canBeCanceled` | `boolean` |  |  |
| `waitHandle` | [`System.Threading.WaitHandle`](_schemas.md#system-threading-waithandle) |  |  |


### `System.Threading.WaitHandle`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `handle` | `object` |  |  |
| `safeWaitHandle` | [`Microsoft.Win32.SafeHandles.SafeWaitHandle`](_schemas.md#microsoft-win32-safehandles-safewaithandle) |  |  |


### `System.Web.Http.OData.ODataQueryContext`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `model` | [`Microsoft.Data.Edm.IEdmModel`](_schemas.md#microsoft-data-edm-iedmmodel) |  |  |
| `elementType` | [`Microsoft.Data.Edm.IEdmType`](_schemas.md#microsoft-data-edm-iedmtype) |  |  |
| `elementClrType` | `string` |  |  |


### `System.Web.Http.OData.Query.FilterQueryOption`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.FilterQueryValidator`](_schemas.md#system-web-http-odata-query-validators-filterqueryvalidator) |  |  |
| `filterClause` | [`Microsoft.Data.OData.Query.SemanticAst.FilterClause`](_schemas.md#microsoft-data-odata-query-semanticast-filterclause) |  |  |
| `rawValue` | `string` |  |  |


### `System.Web.Http.OData.Query.InlineCountQueryOption`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `rawValue` | `string` |  |  |
| `value` | `string` |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Actieprijzen.ActieprijzenModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Artikelen.ArtikelQueryModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Bankboekingen.BankboekingModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.BtwAangiftes.BtwAangifteModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.GrootboekMutaties.GrootboekMutatieModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Grootboeken.GrootboekModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Inkoopfacturen.InkoopfactuurModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Kasboekingen.KasboekingModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Prijsafspraken.PrijsafspraakModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Relaties.RelatieModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.VatRates.VatRateDefinitionModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.VatRates.VatRatesModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Verkoopfacturen.VerkoopfactuurModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Verkooporders.OfferteModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataQueryOptions_SnelStart.B2B.Api.V2.Models.Verkooporders.VerkoopOrderModel_`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `ifMatch` | `object` |  |  |
| `ifNoneMatch` | `object` |  |  |
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `request` | `object` |  |  |
| `rawValues` | [`System.Web.Http.OData.Query.ODataRawQueryOptions`](_schemas.md#system-web-http-odata-query-odatarawqueryoptions) |  |  |
| `selectExpand` | [`System.Web.Http.OData.Query.SelectExpandQueryOption`](_schemas.md#system-web-http-odata-query-selectexpandqueryoption) |  |  |
| `filter` | [`System.Web.Http.OData.Query.FilterQueryOption`](_schemas.md#system-web-http-odata-query-filterqueryoption) |  |  |
| `orderBy` | [`System.Web.Http.OData.Query.OrderByQueryOption`](_schemas.md#system-web-http-odata-query-orderbyqueryoption) |  |  |
| `skip` | [`System.Web.Http.OData.Query.SkipQueryOption`](_schemas.md#system-web-http-odata-query-skipqueryoption) |  |  |
| `top` | [`System.Web.Http.OData.Query.TopQueryOption`](_schemas.md#system-web-http-odata-query-topqueryoption) |  |  |
| `inlineCount` | [`System.Web.Http.OData.Query.InlineCountQueryOption`](_schemas.md#system-web-http-odata-query-inlinecountqueryoption) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.ODataQueryValidator`](_schemas.md#system-web-http-odata-query-validators-odataqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.ODataRawQueryOptions`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `filter` | `string` |  |  |
| `orderBy` | `string` |  |  |
| `top` | `string` |  |  |
| `skip` | `string` |  |  |
| `select` | `string` |  |  |
| `expand` | `string` |  |  |
| `inlineCount` | `string` |  |  |
| `format` | `string` |  |  |
| `skipToken` | `string` |  |  |


### `System.Web.Http.OData.Query.OrderByNode`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `direction` | `string` |  |  |


### `System.Web.Http.OData.Query.OrderByQueryOption`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `orderByNodes` | array of [`System.Web.Http.OData.Query.OrderByNode`](_schemas.md#system-web-http-odata-query-orderbynode) |  |  |
| `rawValue` | `string` |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.OrderByQueryValidator`](_schemas.md#system-web-http-odata-query-validators-orderbyqueryvalidator) |  |  |
| `orderByClause` | [`Microsoft.Data.OData.Query.SemanticAst.OrderByClause`](_schemas.md#microsoft-data-odata-query-semanticast-orderbyclause) |  |  |


### `System.Web.Http.OData.Query.SelectExpandQueryOption`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `rawSelect` | `string` |  |  |
| `rawExpand` | `string` |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.SelectExpandQueryValidator`](_schemas.md#system-web-http-odata-query-validators-selectexpandqueryvalidator) |  |  |
| `selectExpandClause` | [`Microsoft.Data.OData.Query.SemanticAst.SelectExpandClause`](_schemas.md#microsoft-data-odata-query-semanticast-selectexpandclause) |  |  |


### `System.Web.Http.OData.Query.SkipQueryOption`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `rawValue` | `string` |  |  |
| `value` | `integer` (int32) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.SkipQueryValidator`](_schemas.md#system-web-http-odata-query-validators-skipqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.TopQueryOption`

**Type:** `object`

| Property | Type | Required | Description |
|---|---|---|---|
| `context` | [`System.Web.Http.OData.ODataQueryContext`](_schemas.md#system-web-http-odata-odataquerycontext) |  |  |
| `rawValue` | `string` |  |  |
| `value` | `integer` (int32) |  |  |
| `validator` | [`System.Web.Http.OData.Query.Validators.TopQueryValidator`](_schemas.md#system-web-http-odata-query-validators-topqueryvalidator) |  |  |


### `System.Web.Http.OData.Query.Validators.FilterQueryValidator`

**Type:** `object`


### `System.Web.Http.OData.Query.Validators.ODataQueryValidator`

**Type:** `object`


### `System.Web.Http.OData.Query.Validators.OrderByQueryValidator`

**Type:** `object`


### `System.Web.Http.OData.Query.Validators.SelectExpandQueryValidator`

**Type:** `object`


### `System.Web.Http.OData.Query.Validators.SkipQueryValidator`

**Type:** `object`


### `System.Web.Http.OData.Query.Validators.TopQueryValidator`

**Type:** `object`


### `VerkoopboekingenIdDelete200ApplicationJsonResponse`

**Type:** `object`


### `VerkoopboekingenIdDelete200TextJsonResponse`

**Type:** `object`


### `VerkoopfacturenIdUblGet200ApplicationJsonResponse`

**Type:** `array`


### `VerkoopfacturenIdUblGet200TextJsonResponse`

**Type:** `array`


### `VerkoopordersIdDelete201ApplicationJsonResponse`

**Type:** `object`


### `VerkoopordersIdDelete201TextJsonResponse`

**Type:** `object`


### `VerkoopordersIdProcesStatusPut200ApplicationJsonResponse`

**Type:** `object`


### `VerkoopordersIdProcesStatusPut200TextJsonResponse`

**Type:** `object`

