FROM php:8.2-apache

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git curl \
    libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Habilita mod_rewrite de Apache (Laravel lo necesita)
RUN a2enmod rewrite

# Copia archivos del proyecto al contenedor
COPY . /var/www/html

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Da permisos correctos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expone el puerto 80
EXPOSE 80
