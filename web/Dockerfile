FROM php:8.1-apache
RUN docker-php-ext-install mysqli && apt-get update && apt-get install -y git && git clone https://github.com/FaztWeb/php-mysql-crud.git /var/www/html
COPY db.php /var/www/html