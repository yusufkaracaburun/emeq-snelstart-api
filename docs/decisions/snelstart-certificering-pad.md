# Snelstart certificeringspad — Productie-route + deliverables + webhook-architectuur

## Status

**Gekozen 2026-05-15. Nog niet aangevraagd.** Route = **Productie-certificering**, expliciet **niet** Maatwerk.

## Keuze

De Hub wordt via de **productie-route** bij SnelStart gecertificeerd. Een productiekoppeling is geschikt voor meerdere SnelStart-klanten (multi-tenant). De Hub bedient meerdere SaaS-apps van Emeq (Naschool, Planny, derde-partijen in v1.0+) — dat sluit één-klant-Maatwerk uit.

## Motivatie

| Argument | Bron |
|---|---|
| Maatwerk vereist SnelStart **InZicht of InControle** licentie per klant | `docs/partners/snelstart/certificering-d4b0407a.md` regel 49 |
| Maatwerk-sleutel is **per-klant**; N Consumers betekent N sleutels en N facturen à €250 | `docs/partners/snelstart/certificering-d4b0407a.md` regel 48 + 50 |
| Productie-sleutel is **multi-tenant** en wordt eenmalig gefactureerd à €250 | `docs/partners/snelstart/certificering-d4b0407a.md` regel 60 |
| Productie-koppelingen krijgen **publicatie**: zichtbare tegel + Software Partners-vermelding | `docs/partners/snelstart/certificering-d4b0407a.md` regel 64 |

Publicatie sluit aan bij Emeq's positionering richting derde-partij Consumers vanaf v1.0+.

## Deliverables

1. **(a) Webhook-handler `routes/webhooks.php` met `/webhooks/snelstart`** — productie-blocker volgens `docs/partners/snelstart/oauth-deef6709.md` regel 82-83 ("Het opgeven van je webhook is verplicht voor productiekoppelingen anders kan de koppeling niet tot stand komen"). Gekoppeld aan een toekomstige Snelstart-webhook-phase; nog **niet** in `.planning/ROADMAP.md` — **open punt**.
2. **(b) Partnerpagina-preview** — voorbeeld-Blade-view geleverd in deze quick-task op `resources/views/partners/snelstart/example.blade.php`. SnelStart gebruikt de informatie uit het certificeringsformulier om de partnerpagina aan te maken (bron: `docs/partners/snelstart/certificering-d4b0407a.md` regel 42 + 58).
3. **(c) Rate-limits productie-config** — per `administratie`-niveau throttling: **500 calls/minuut, 5.000 calls/uur, 50 concurrent** (bron: rate-limits-tabel in `docs/partners/snelstart/certificering-d4b0407a.md`, sectie `### Ratelimits`). Implementatie volgt bij Phase 5b of een dedicated rate-limit-phase; nu alleen vastgelegd.
4. **(d) Sleutel-lifecycle-tracking** — onze huidige `emeq`-subscription is een **Ontwikkeling & Test**-sleutel, 90 dagen geldig (bron: `docs/partners/snelstart/product-ontwikkeling-b171d212.md` regel 44). Fetched 2026-05-13 → vervalt rond **2026-08-11**. Tracken in `.planning/STATE.md`. Productie-sleutel komt pas na certificering en is permanent.
5. **(e) Certificeringsformulier-submit op <https://www.snelstart.nl/api>** — handmatig moment, kan pas zodra (a) webhook-handler draait en (b) partnerpagina-content (deze view + screenshots) gereed is. Bron: `docs/partners/snelstart/certificering-d4b0407a.md` regel 42.

## Webhook-architectuur

### Inkomende route

- Eén URL die we bij certificering registreren: `https://hub.emeq.test/webhooks/snelstart` (dev) — productie-equivalent komt na deploy.
- Payload-shape (bron: `docs/partners/snelstart/oauth-deef6709.md` regel 95-97):
  ```json
  { "KoppelSleutel": "string", "ActionType": "Create|Regenerate|Delete", "ReferenceKey": "string" }
  ```
- Hub moet HTTP 200-299 retourneren (bron: `docs/partners/snelstart/oauth-deef6709.md` regel 99), anders geen retry van SnelStart-zijde.

### Signature-verificatie

- HMAC-verificatie met een **globale** env-var `SNELSTART_WEBHOOK_SECRET`. SnelStart geeft één partner-secret af bij certificering (niet per-Connection zoals bij Mollie Connect).
- Géén raw secret in logs — fingerprint-only (sha256-prefix, zie `.ai/rules/global.md` security-sectie).
- **Open punt:** `docs/partners/snelstart/oauth-deef6709.md` documenteert wél de webhook-payload maar **niet** een expliciete HMAC-header. Bevestigen bij SnelStart partner-support vóór implementatie; tot dan blijft signature-verificatie een ontwerp-aanname.

### Tenant-resolutie

- Parse `ReferenceKey` (de querystring-parameter uit de activeringslink, bron: `docs/partners/snelstart/oauth-deef6709.md` regel 60-64) → lookup `Connection` waar de bij koppeling meegegeven `referenceKey` matcht.
- Exact veld op `connections`-tabel waarin we de `referenceKey` opslaan is **TBD** bij de toekomstige Snelstart-webhook-phase-planning. **Open punt.**

### Fan-out

- Inkomend via `spatie/laravel-webhook-client`; uitgaand naar Consumer-callback via `spatie/laravel-webhook-server`.
- Per-Connection `webhook_secret`-kolom voor HMAC richting de Consumer-callback (al voorzien in HUB-01 / Phase 3-schema).

### ASCII-diagram

```
+-------------+    POST /webhooks/snelstart    +------------------+
|  SnelStart  | -----------------------------> | Hub              |
|  (B2B-API)  | KoppelSleutel + ActionType +   | /webhooks/...    |
+-------------+ ReferenceKey + globale HMAC    +--------+---------+
                                                        |
                                              1) verify globale HMAC
                                              2) parse ReferenceKey
                                              3) resolve Connection
                                              4) audit-log (webhook_calls)
                                                        |
                                                        v
                                              +------------------+
                                              |  enqueue outbound|
                                              |  HMAC met per-   |
                                              |  Connection      |
                                              |  webhook_secret  |
                                              +--------+---------+
                                                        |
                                                        v
                                              +------------------+
                                              | Consumer-callback|
                                              | (Naschool, etc.) |
                                              +------------------+
```

## Bronnen

- `docs/partners/snelstart/certificering-d4b0407a.md` — Maatwerk vs Productie, rate-limits, publicatie
- `docs/partners/snelstart/oauth-deef6709.md` — webhook-verplichting + payload-shape + activeringslink + referenceKey
- `docs/partners/snelstart/product-ontwikkeling-b171d212.md` — ontwikkelsleutel 90 dagen geldig
- `docs/partners/snelstart/subscription.md` — huidige `emeq` Ontwikkeling & Test-credentials

## Wanneer herzien

- SnelStart introduceert een derde tier of wijzigt rate-limits → tabel + sectie (c) herzien.
- SnelStart documenteert alsnog een expliciete HMAC-header voor webhooks → signature-sectie scherpzetten.
- Hub wordt single-tenant (onwaarschijnlijk) → Maatwerk-route herevalueren.
- Productie-sleutel ontvangen → deliverable (d) sluiten, lifecycle-tracking aanpassen op permanente sleutel.
