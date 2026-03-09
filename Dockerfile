# Base image: PHP 8.3 + Apache
FROM php:8.3-apache

# Sistem bağımlılıkları ve PHP extension'ları
RUN apt-get update \
 && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libicu-dev \
    sqlite3 \
 && docker-php-ext-install zip pdo pdo_mysql pdo_sqlite intl \
 && a2enmod rewrite \
 && rm -rf /var/lib/apt/lists/*

# Composer kurulumu
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizini
WORKDIR /var/www/html

# Proje dosyalarını kopyala
COPY . .

# Laravel bağımlılıkları
RUN composer install --no-dev --optimize-autoloader --ignore-platform-req=ext-intl
# Laravel key generate
RUN php artisan key:generate || true

# Dosya izinleri (özellikle SQLite için)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/database

# Apache port
EXPOSE 80
