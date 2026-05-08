# 1. Menggunakan sistem operasi Linux dasar yang sudah terpasang PHP 8.2 dan Web Server Apache
FROM php:8.2-apache

# 2. Menginstal komponen sistem dan ekstensi PHP yang dibutuhkan Laravel (seperti PDO MySQL untuk database)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# 3. Mengaktifkan fitur rewrite Apache agar link/routing Laravel berfungsi normal
RUN a2enmod rewrite

# 4. Mengubah folder utama Apache langsung mengarah ke folder 'public' milik Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 5. Menentukan lokasi kerja di dalam container
WORKDIR /var/www/html

# 6. Mengambil Composer (Aplikasi pengelola paket PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 7. Memasukkan seluruh file proyek TaniDesa dari komputermu ke dalam container
COPY . .

# 8. Menginstal semua paket Laravel yang dibutuhkan
RUN composer install --optimize-autoloader --no-dev

# 9. Memberikan izin akses pada folder yang butuh ditulis oleh sistem Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache