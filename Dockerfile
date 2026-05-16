FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli pdo pdo_mysql

RUN a2enmod rewrite

COPY . /var/www/html/

WORKDIR /var/www/html

RUN chmod -R 777 /var/www/html

RUN echo "<Directory /var/www/html>\nAllowOverride All\nRequire all granted\n</Directory>" > /etc/apache2/conf-available/custom.conf

RUN a2enconf custom

EXPOSE 80