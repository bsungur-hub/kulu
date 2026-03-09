FROM php:8.3-apache

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

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader
RUN php artisan key:generate || true

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/database

EXPOSE 80
