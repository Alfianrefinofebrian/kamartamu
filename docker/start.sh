#!/usr/bin/env bash
set -e

# Default PORT if not provided by platform
: "${PORT:=8080}"

# Ensure required Laravel cache/storage directories exist (handles fresh volumes)
mkdir -p \
  storage/framework/cache/data \
  storage/framework/sessions \
  storage/framework/views \
  bootstrap/cache

# Fix permissions (best-effort)
chown -R www-data:www-data storage bootstrap/cache || true
chmod -R ug+rwx storage bootstrap/cache || true

# Ensure storage symlink exists
if [ ! -L public/storage ]; then
  php artisan storage:link || true
fi

# Refresh caches (won't fail the container if artisan needs DB)
php artisan config:clear || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

exec php -S 0.0.0.0:${PORT} -t public
