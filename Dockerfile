FROM php:apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

COPY index.html /var/www/html
COPY action.php /var/www/html
COPY database.php /var/www/html

