# Menggunakan official image  PHP 8.1.x + Web Server
FROM php:8.1-apache

# Atur direktori kerja
WORKDIR /var/www/html

# Copy file PHP ke direktori /var/www/html
COPY index.php /var/www/html

# Akses control list untuk kepemilikan ‘u’ dan ‘g’ sudah di set ke www-data
# Dan hilangkan permission ‘w’ and ‘x’ untuk others
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R o-rwx /var/www/html

# Install dan aktifkan ekstensi mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Buka port 80
EXPOSE 80

# Mulai Apache service
CMD ["apache2-foreground"]
