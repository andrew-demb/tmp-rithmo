# ./docker/php/Dockerfile
FROM php:8.2-fpm

# Add a non-root user to prevent files being created with root permissions on host machine.
ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

RUN docker-php-ext-install pdo_mysql

RUN pecl install apcu

RUN apt-get update && \
apt-get install -y \
zlib1g-dev

RUN apt-get -y update
RUN apt-get -y upgrade
RUN apt-get install -y unzip
RUN docker-php-ext-enable apcu
RUN apt-get install iputils-ping -y
RUN apt-get install -y libzip-dev zip && docker-php-ext-install zip

RUN apt-get update
RUN apt-get -y upgrade
RUN apt-get install -y libxml2-dev
RUN apt-get install -y pkg-config
RUN apt-get install -y gawk
RUN docker-php-ext-install xml
RUN rm -rf /var/lib/apt/lists/*

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --filename=composer
RUN php -r "unlink('composer-setup.php');"
RUN mv composer /usr/local/bin/composer

RUN yes | pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request=trigger" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_host=localhost" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.log=/tmp/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.log_level=7" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.discover_client_host=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_port=9000" >> /usr/local/etc/php/conf.d/xdebug.ini

COPY docker/php/php.ini-development /usr/local/etc/php/
COPY docker/php/php.ini-production /usr/local/etc/php/

WORKDIR /app
COPY app /app