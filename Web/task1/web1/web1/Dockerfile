# Build a PHP-Apache image with PDO MySQL
FROM php:8.2-apache

# Install PDO MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules you might need (rewrite if you add pretty URLs later)
RUN a2enmod rewrite

# Copy (optional) a custom vhost if you have one; by default we mount the code as a volume.
# COPY vhost.conf /etc/apache2/sites-available/000-default.conf
