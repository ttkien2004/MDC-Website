FROM php:8.2-apache

# Cài mysqli và các extension khác (nếu cần)
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli


COPY apache.conf /etc/apache2/sites-available/000-default.conf
# Cấp quyền truy cập
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
