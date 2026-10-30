#!/bin/sh
set -e

# Copy .env from .env.example if .env does not exist
if [ ! -f /var/www/html/.env ]; then
    echo "[Entrypoint] .env not found. Copying .env.example to .env..."
    cp /var/www/html/.env.example /var/www/html/.env
fi

# Ensure storage and bootstrap/cache directories exist
mkdir -p /var/www/html/storage/framework/sessions \
         /var/www/html/storage/framework/views \
         /var/www/html/storage/framework/cache \
         /var/www/html/storage/logs \
         /var/www/html/bootstrap/cache

# Fix permissions
chmod -R 777 /var/www/html/storage /var/www/html/bootstrap/cache 2>/dev/null || true
chmod -R 755 /var/www/html/public 2>/dev/null || true

# Remove stale Vite dev server hot file if present
rm -f /var/www/html/public/hot

# Install Composer dependencies if vendor directory is missing
if [ ! -d /var/www/html/vendor ]; then
    echo "[Entrypoint] Installing Composer dependencies..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
fi

# Generate application key if APP_KEY is empty
if ! grep -q "^APP_KEY=base64:" /var/www/html/.env; then
    echo "[Entrypoint] Generating application key..."
    php artisan key:generate --no-interaction --force
fi

echo "[Entrypoint] Application ready. Starting: $@"
exec "$@"

