FROM php:8.2-apache

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files to Apache root
COPY . /var/www/html/

# Fix file permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
