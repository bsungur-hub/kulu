FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev

RUN docker-php-ext-install zip pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN php artisan key:generate || true

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
