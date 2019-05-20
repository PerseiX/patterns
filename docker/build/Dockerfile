FROM php:7.1-fpm

RUN apt-get update && apt-get install -yq git zip unzip libpng-dev  libzip-dev libpq-dev mc && \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    docker-php-ext-install mysqli pdo pdo_mysql pdo_pgsql zip bcmath  && \
    echo "date.timezone = Europe/Warsaw" > /usr/local/etc/php/php.ini && \
    rm -rf /var/lib/apt/lists/* && \
    php -r "copy('https://getcomposer.org/installer', '/tmp/composer-setup.php');" && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm -rf /tmp/composer-setup.php && \
    pecl install xdebug && \
    docker-php-ext-enable xdebug

