---
purpose: AI-agent reference for SnelStart B2B-API integration
api_title: SnelStart B2B-Api v2 v1.0
base_url: https://b2bapi.snelstart.nl/v2
fetched_at: 2026-05-13T16:34:48+00:00
---

# SnelStart B2B-API — AI integration context

This folder is the canonical knowledge base when an AI agent generates code that calls the SnelStart B2B-API. Everything here is self-contained: API spec, schemas, how-to pages from the developer portal, and the subscription key used to authenticate.

## Where things live

| File / folder | What it is |
|---|---|
| `api-definition.yaml` | Raw OpenAPI 3.0 spec (source of truth) |
| `api/_index.md` | Start here — API overview + base URL + auth + tag index |
| `api/_schemas.md` | All component schemas referenced by operations |
| `api/<tag>.md` | All operations grouped by resource tag |
| `subscription.md` | Your subscription credentials (private — do not share) |
| `gebruikers-voorwaarden.md` | SnelStart B2B-API gebruiksvoorwaarden (legal — Application key gebruik, support, beëindiging) |
| `_manifest.jsonl` | Index of every source file in this folder (URL → file mapping) |
| `apidocumentatie-3285ca90.md` | portal page |
| `apis-7c385276.md` | portal page |
| `authenticatie-ac80d051.md` | portal page |
| `certificering-d4b0407a.md` | portal page |
| `foutcodes-v2-3bbfc32a.md` | portal page |
| `gebruikersbeleid-344032eb.md` | portal page |
| `howto-8f1bfebf.md` | portal page |
| `index.md` | portal page |
| `oauth-deef6709.md` | portal page |
| `odata-3cc065de.md` | portal page |
| `oss-btw-57fb9f02.md` | portal page |
| `product-maatwerk-e094b76d.md` | portal page |
| `product-ontwikkeling-b171d212.md` | portal page |
| `product-productie-4a1ec13b.md` | portal page |
| `products-81f658c3.md` | portal page |
| `versioneringsstrategie-e97329c0.md` | portal page |
| `zoeken-extravelden-636f96eb.md` | portal page |

## Auth in one paragraph

Every call needs the subscription key as the header `Ocp-Apim-Subscription-Key: <PRIMARY_OR_SECONDARY_KEY>`. The key is in [`subscription.md`](subscription.md). Endpoints that mention `Required scopes:` additionally need a Bearer access-token (OAuth2 client-credentials) — see the portal How-To page `oauth-*.md` in this folder for the token endpoint and flow.

## How to use this folder

1. Read `api/_index.md` for the high-level shape of the API.
2. For a specific resource, open `api/<tag>.md` (e.g. `api/artikelen.md`).
3. Every operation lists method + path + scopes + request/response schemas.
4. Click through to `api/_schemas.md` for full schema definitions.
5. For overall portal docs (versioning, foutcodes, OData, certificering), see the `*.md` files at the root of this folder.

## Example call

```bash
curl -H 'Ocp-Apim-Subscription-Key: <KEY>' https://b2bapi.snelstart.nl/v2/echo
```
