# 1. Aşama: PHP 8.3 ve Gerekli Sistem Paketleri
FROM php:8.3-fpm

# Gerekli araçları ve SQLite kütüphanelerini yükle
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
    libsqlite3-dev

# PHP eklentilerini kur (SQLite dahil)
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd pdo_sqlite

# Composer'ı resmi imajdan kopyala
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Çalışma dizinini ayarla
WORKDIR /var/www

# Proje dosyalarını kopyala
COPY . .

# Composer bağımlılıklarını yükle (Production modu)
RUN composer install --no-dev --optimize-autoloader

# Klasör izinlerini ayarla (Laravel için kritik)
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Portu aç
EXPOSE 80

# Başlangıç komutu (Birazdan oluşturacağımız deploy scripti)
CMD ["sh", "./deploy.sh"]
