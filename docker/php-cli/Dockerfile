FROM php:8.2-cli-alpine

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN install-php-extensions \
    @composer-2 

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_MEMORY_LIMIT -1

COPY ./conf.d /usr/local/etc/php/conf.d

RUN apk add bash

WORKDIR /app
