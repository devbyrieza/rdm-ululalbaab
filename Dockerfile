FROM php:7.2-apache

# Install dependencies for PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libcurl4-openssl-dev \
    pkg-config \
    libssl-dev \
    unzip \
    wget \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd mysqli zip curl

# Download and Install Ioncube Loader 7.2
RUN wget https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar -xzf ioncube_loaders_lin_x86-64.tar.gz \
    && cp ioncube/ioncube_loader_lin_7.2.so $(php -r "echo ini_get('extension_dir');") \
    && echo "zend_extension=ioncube_loader_lin_7.2.so" > /usr/local/etc/php/conf.d/00-ioncube.ini \
    && rm -rf ioncube ioncube_loaders_lin_x86-64.tar.gz

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy custom php.ini (will be created in next step)
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Copy application source
COPY src/ /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

EXPOSE 80
