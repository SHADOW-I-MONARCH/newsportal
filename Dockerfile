# Use an official Apache-PHP image from Docker Hub
FROM php:8.2-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy all your project files into the container's web root
COPY . .

# (Optional) If you need common PHP extensions like mysqli or pdo_mysql for a database
# RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli pdo_mysql
