FROM php:fpm-alpine

#WORKDIR /var/www/html/

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql

#CMD ["php", "-S", "0.0.0.0:9000", "."]
