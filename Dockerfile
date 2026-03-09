# Base image PHP 8.3 + Apache
FROM php:8.3-apache

# Sistem paketleri + PHP extension
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    sqlite3 \
    g++ \
    make \
    autoconf \
 && docker-php-ext-install zip pdo pdo_mysql pdo_sqlite intl \
 && a2enmod rewrite \
 && rm -rf /var/lib/apt/lists/*

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizini
WORKDIR /var/www/html

# Proje dosyaları
COPY . .

# Laravel bağımlılıkları
RUN composer install --no-dev --optimize-autoloader

# Laravel key generate
RUN php artisan key:generate || true

# Dosya izinleri (SQLite için)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/database

EXPOSE 80
