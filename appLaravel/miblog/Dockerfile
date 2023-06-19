FROM php:8.1-apache

RUN apt-get update && \
    apt-get install -y libonig-dev libzip-dev zip unzip && \
    docker-php-ext-install pdo_mysql zip && \
    a2enmod rewrite

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

CMD php artisan serve --host=0.0.0.0 --port=8000
