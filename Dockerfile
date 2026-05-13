# Use the official PHP image with Apache
FROM php:7.4-apache

# Enable Apache mod_rewrite (required for clean URLs)
RUN a2enmod rewrite

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the PHP files into the container
COPY . .

# Expose port 80 for Apache
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
