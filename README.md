# Microservice Laravel + Vue Starter

Production-oriented starter scaffold for a microservice platform using Laravel services, Vue 3 frontend, API Gateway, Redis queue, and containerized local development.

## Repository Layout

- `services/` — Laravel microservices (auth, order starter included)
- `frontend/admin-web` — Vue 3 frontend starter modules
- `gateway/` — Nginx API gateway routing rules
- `docker/` — Local development Docker Compose
- `docs/` — Architecture and implementation documentation
- `.github/workflows/` — CI pipeline skeleton

## Quick Start

```bash
cp services/auth-service/.env.example services/auth-service/.env
cp services/order-service/.env.example services/order-service/.env
cp frontend/admin-web/.env.example frontend/admin-web/.env

docker compose -f docker/docker-compose.yml up --build
```

## Notes

This scaffold intentionally focuses on architecture and service boundaries. Each Laravel service should be bootstrapped with `laravel new` (or your internal template) and then mapped to this structure.
