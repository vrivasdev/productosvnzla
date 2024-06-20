# Proyecto Laravel con PostgreSQL

Este proyecto es una aplicación Laravel configurada para utilizar una base de datos PostgreSQL en un entorno Ubuntu.

## Requisitos

- PHP >= 7.3
- Composer
- PostgreSQL
- Extensiones de PHP: mbstring, xml, pgsql, zip

## Instalación


1. **Actualizar los paquetes del sistema:**
   sudo apt update
2. **Instalar PHP y las extensiones necesarias:**
   sudo apt install -y php php-mbstring php-xml php-pgsql php-zip unzip curl
3. **Instalar Composer:**
   curl -sS https://getcomposer.org/installer | php
   sudo mv composer.phar /usr/local/bin/composer
4. **Instalar PostgreSQL:**
   sudo apt install -y postgresql postgresql-contrib
5. **Crear la BD y usuario**
   sudo -i -u postgres
    psql
    CREATE DATABASE productosvnzla;
    CREATE USER victor WITH PASSWORD '123456';
    GRANT ALL PRIVILEGES ON DATABASE productosvnzla TO victor;
    \q
    exit

6. **Clave de APP**
    php artisan key:generate
7. **Ejecuta migración**
    php artisan migrate
