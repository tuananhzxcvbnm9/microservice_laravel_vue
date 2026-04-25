# Production Microservice Architecture

## Services

1. Auth Service
2. User Service
3. Catalog Service
4. Order Service
5. Payment Service
6. Notification Service
7. Report Service

## Communication

- REST via API Gateway for synchronous request/response flows.
- Event-driven async integration via queue/event bus for cross-service side effects.

## Eventing Standards

- Outbox pattern per service
- Event envelope: `event_type`, `event_version`, `occurred_at`, `trace_id`, `payload`
- Idempotency key required for consumers
- Retry with exponential backoff and dead-letter queue

## Security Standards

- OAuth2/Passport for user authentication and token lifecycle
- Service-to-service signed token or mTLS
- RBAC enforced in policy layer and gateway claim checks

## Operational Standards

- Structured JSON logging
- OpenTelemetry tracing
- Metrics for queue depth, API latency, error rate
- Health probes: `/health/live`, `/health/ready`
