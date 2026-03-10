FROM php:8.3-fpm

# Sistem bağımlılıklarını güncelle ve gerekli kütüphaneleri yükle
# Filament için libicu-dev (intl) ve libzip-dev (zip) ekledik
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nginx \
    sqlite3 \
    libsqlite3-dev \
    libicu-dev \
    libzip-dev

# PHP eklentilerini kur
# intl ve zip eklentilerini buraya ekledik
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd pdo_sqlite intl zip

# Composer'ı kopyala
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Proje dosyalarını kopyala
COPY . .

# Composer bağımlılıklarını yükle
RUN composer install --no-dev --optimize-autoloader

# Klasör izinleri
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 80

CMD ["sh", "./deploy.sh"]
