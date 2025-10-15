FROM php:8.3-fpm

# تثبيت الإضافات المطلوبة للـ Laravel + Filament
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install intl zip exif gd pdo pdo_mysql

# تثبيت Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
