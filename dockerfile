FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    curl\
    zip\
    unzip\
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*


RUN a2enmod rewrite

WORKDIR /var/www/html


RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN echo "Listen 80" > /etc/apache2/ports.conf


RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

COPY . /var/www/html/

EXPOSE 80