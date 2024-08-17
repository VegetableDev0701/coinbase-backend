# Use the official PHP image with Apache
FROM php:8.2-apache

# Copy the PHP source code to the /var/www/html/ directory in the container
COPY ./ /var/www/html/

# Expose port 80 to allow external access to the web server
EXPOSE 80

# Start Apache in the foreground (this is the default CMD for this image)
CMD ["apache2-foreground"]
