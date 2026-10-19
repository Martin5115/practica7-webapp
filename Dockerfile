FROM php:8.3-apache

# Extensiones para conectar PHP con MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar el codigo fuente al directorio web de Apache
COPY src/ /var/www/html/

EXPOSE 80
