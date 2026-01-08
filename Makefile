.PHONY: build run stop logs migrate

build:
docker compose build

run:
docker compose up -d

stop:
docker compose down

logs:
docker compose logs -f

migrate:
docker compose exec app php artisan migrate --force
