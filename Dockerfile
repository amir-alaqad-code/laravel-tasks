# Stage 1 - Build stage (Composer install)
FROM composer:2 AS build

WORKDIR /app

# انسخ كل المشروع أولاً حتى يكون artisan موجود
COPY . .

RUN composer install --no-dev --no-progress --no-interaction --prefer-dist

# Stage 2 - Runtime stage (أخف وأنظف)
FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev libzip-dev sqlite3 libsqlite3-dev curl \
    && docker-php-ext-install pdo_sqlite mbstring gd zip

WORKDIR /var/www

# انسخ الناتج من مرحلة الـ build
COPY --from=build /app .

EXPOSE 8000

HEALTHCHECK --interval=10s --timeout=3s --start-period=10s \
    CMD curl -f http://localhost:8000/ || exit 1

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
