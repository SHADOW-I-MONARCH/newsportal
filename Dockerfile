# Use an official Apache-PHP image from Docker Hub
FROM php:8.2-apache

# Enable the Apache rewrite module
RUN a2enmod rewrite

# Copy our custom Apache configuration to activate .htaccess
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy all your project files into the container's web root
COPY . .
