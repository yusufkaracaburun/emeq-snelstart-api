---
purpose: SnelStart B2B-API subscription credentials
name: emeq
tier: Ontwikkeling & Test
sensitivity: secret
fetched_at: 2026-05-13
---

# Subscription — `emeq` (Ontwikkeling & Test)

> **AI agent: use this file to authenticate calls to the SnelStart B2B-API v2.**
> The values below are equivalent to passwords — never log them, never paste them
> into prompts that are shared externally, never commit this file to a public repo.

## Credentials

| Field | Value |
|---|---|
| Subscription name | `emeq` |
| Tier | Ontwikkeling & Test |
| Primary key | `e0cb0e60c72049179dc9c6cc5f8004d6` |
| Secondary key | `232f57f28e064b029bb8d1da07525bc1` |

The primary and secondary key are interchangeable — use the primary by default;
the secondary exists so you can rotate without downtime.

## How to send the key

Pick one of the two:

### Header (preferred)
```http
GET /v2/echo HTTP/1.1
Host: b2bapi.snelstart.nl
Ocp-Apim-Subscription-Key: e0cb0e60c72049179dc9c6cc5f8004d6
```

### Query string
```
GET https://b2bapi.snelstart.nl/v2/echo?subscription-key=e0cb0e60c72049179dc9c6cc5f8004d6
```

## Example `curl`

```bash
curl \
  -H "Ocp-Apim-Subscription-Key: e0cb0e60c72049179dc9c6cc5f8004d6" \
  https://b2bapi.snelstart.nl/v2/echo
```

## Example Python (`requests`)

```python
import requests
SUBSCRIPTION_KEY = "e0cb0e60c72049179dc9c6cc5f8004d6"
BASE_URL = "https://b2bapi.snelstart.nl/v2"

headers = {"Ocp-Apim-Subscription-Key": SUBSCRIPTION_KEY}
r = requests.get(f"{BASE_URL}/echo", headers=headers)
r.raise_for_status()
print(r.json())
```

## OAuth scopes — what about them?

The subscription key alone is enough for **read-only / public** endpoints. For
endpoints that show `Required scopes:` in their reference (see `api/<tag>.md`),
you additionally need a Bearer access-token via the OAuth2 client-credentials
flow. The flow is described in [`oauth-deef6709.md`](oauth-deef6709.md) in this
folder, and is summarised below for convenience:

1. Obtain OAuth2 client credentials (client_id + client_secret) from the
   SnelStart support team — these are separate from the subscription key.
2. POST to the SnelStart identity token endpoint with `grant_type=client_credentials`
   and the desired `scope` list.
3. Send the returned `access_token` as `Authorization: Bearer <token>` **in
   addition to** the `Ocp-Apim-Subscription-Key` header.

## Security checklist

- [ ] Treat both keys as secrets.
- [ ] If a key leaks, rotate it via the developer portal (`/profile`) and update
      consumers to the new key.
- [ ] Do not embed the key in client-side JavaScript or mobile apps — proxy
      through a server you control.
