FROM php:8.1-cli-alpine

RUN apk add --no-cache --update --virtual .deps $PHPIZE_DEPS \
    && pecl install xdebug-3.1.5 \
    && docker-php-ext-enable xdebug \
    && apk del --no-network .deps

WORKDIR /app/leetcode