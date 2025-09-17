# Use an official Apache-PHP image from Docker Hub
FROM php:8.2-apache

# Enable the Apache rewrite module
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy all your project files into the container's web root
COPY . .
