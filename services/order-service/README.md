# Order Service (Laravel)

## Intended structure

- `app/Domain` — aggregate and state machine
- `app/Application` — use-case actions
- `app/Infrastructure` — persistence and messaging adapters
- `app/Http` — controllers/requests/middleware
- `app/Events` / `app/Jobs` — event-driven workflows

## API (starter)

- `POST /orders`
