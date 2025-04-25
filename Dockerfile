FROM php:8.2-apache

# PostgreSQL için gerekli sistem paketleri
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# PHP dosyalarını Apache dizinine kopyala
COPY . /var/www/html/
