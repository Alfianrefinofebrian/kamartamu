# Multi-stage build: build assets then package PHP app with required extensions

# 1) Build frontend assets with Vite (optional; safe if no assets)
FROM node:20-alpine AS nodebuild
WORKDIR /app
COPY package*.json ./
# Try ci first, fallback to install for lockfile-less envs
RUN npm ci || npm install
COPY . .
# Build assets if script exists; don't fail the build if it doesn't
RUN npm run build || echo "Skip Vite build (no build script)"

# 2) PHP app image with required extensions (intl, zip, pdo_mysql)
FROM php:8.2-cli-bullseye

# Install system dependencies and PHP extensions
RUN apt-get update \
  && apt-get install -y --no-install-recommends \
    git \
    unzip \
    zlib1g-dev \
    libzip-dev \
    libicu-dev \
  && docker-php-ext-configure intl \
  && docker-php-ext-install -j"$(nproc)" pdo_mysql zip intl \
  && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Copy built assets if present
COPY --from=nodebuild /app/public/build /app/public/build

# Prepare Laravel (no migrations here; DB not available at build time)
RUN if [ ! -f .env ]; then cp .env.example .env; fi \
  && composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist \
  && php artisan key:generate --force || true \
  && php artisan config:cache \
  && php artisan route:cache \
  && php artisan view:cache \
  && php artisan storage:link || true \
  && chown -R www-data:www-data storage bootstrap/cache \
  && chmod -R ug+rwx storage bootstrap/cache

ENV PORT=8080
EXPOSE 8080

# Start script ensures cache/storage paths exist at runtime (esp. with volumes)
COPY docker/start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

CMD ["/usr/local/bin/start.sh"]
