#!/bin/sh
# SQLite veritabanı dosyasını oluştur (eğer yoksa)
touch /var/www/database/database.sqlite
chmod -R 777 /var/www/database

# Laravel optimizasyonları
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Nginx ve PHP-FPM'i başlat
php-fpm -D && nginx -g "daemon off;"
