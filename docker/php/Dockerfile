FROM php:8.1-apache

ARG TIMEZONE

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite


RUN apt-get update && \
    apt-get install \
    libzip-dev \
    wget \
    git \
    unzip \
    -y  nodejs npm

# Install PHP Extensions
RUN docker-php-ext-install zip pdo_mysql

WORKDIR /var/www

RUN usermod -u 1000 www-data

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Start Apache in foreground
CMD ["apache2-foreground"]
