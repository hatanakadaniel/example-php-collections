FROM php:fpm

WORKDIR /var/php-fpm

RUN apt-get update && apt-get install -y \
    htop \
    vim \
    && pecl install ds \
    && docker-php-ext-enable ds