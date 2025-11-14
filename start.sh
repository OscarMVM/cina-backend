#!/bin/bash

# Railway start script for Laravel
echo "Starting Laravel application on Railway..."

# Make sure we're in the right directory
cd /app

# Install dependencies if not present
if [ ! -d "vendor" ]; then
    composer install --optimize-autoloader --no-dev
fi

# Generate app key if not present
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Cache configuration
php artisan config:cache
php artisan route:cache

# Start the PHP server
exec php -S 0.0.0.0:$PORT -t public/