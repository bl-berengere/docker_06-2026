FROM php:8.4-fpm-alpine3.23

RUN apk update \
    && apk add \
    bash \
    vim \
    zip \
    unzip \
    libzip-dev \
    curl \
    git \
    nodejs \
    npm \
    yarn \
    && apk add libpq-dev \
    && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer