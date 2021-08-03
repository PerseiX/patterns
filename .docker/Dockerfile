FROM scratch AS project
COPY . /build

FROM composer AS composer

COPY --from=project /build /var/app
WORKDIR /var/app
RUN composer update


FROM php:7.4-fpm as php
RUN apt-get update && apt-get install

WORKDIR /var/app
COPY --from=composer /var/app /var/app
