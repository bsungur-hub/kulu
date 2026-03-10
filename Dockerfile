FROM php:8.3-fpm

# Sistem bağımlılıkları + Node.js kurulumu
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip nginx sqlite3 libsqlite3-dev libicu-dev libzip-dev \
    && curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# PHP eklentileri
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd pdo_sqlite intl zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

# PHP bağımlılıkları
RUN composer install --no-dev --optimize-autoloader

# ÖNEMLİ: CSS ve JS dosyalarını derle (Vite Build)
RUN npm install
RUN npm run build

# Nginx ayarı
COPY nginx.conf /etc/nginx/sites-available/default

# İzinler
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80
CMD ["sh", "./deploy.sh"]
