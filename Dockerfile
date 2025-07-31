FROM php:8.2-apache

# Instalar extensiones necesarias (modifica si necesitas otras)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar todos los archivos de tu app al contenedor
COPY . /var/www/html/

# Habilitar mod_rewrite si usas Laravel o .htaccess
RUN a2enmod rewrite

# Cambiar permisos si es necesario
RUN chown -R www-data:www-data /var/www/html
