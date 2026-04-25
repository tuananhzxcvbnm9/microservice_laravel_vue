# Auth Service (Laravel)

## Intended structure

- `app/Domain` — user identity domain rules
- `app/Application` — auth use-cases (login, refresh, revoke)
- `app/Infrastructure` — repositories, providers, external adapters
- `app/Http/Controllers` — transport layer
- `app/Http/Requests` — validation
- `app/Http/Middleware` — authz and scopes
- `app/Events`, `app/Listeners`, `app/Jobs` — async processing

## API (starter)

- `POST /auth/register`
- `POST /auth/login`
- `POST /auth/refresh`
- `POST /auth/logout`
- `GET /auth/me`
