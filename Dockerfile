FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    libonig-dev \
    libzip-dev \
    cron \
    zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    npm install -g npm

RUN docker-php-ext-install pdo pdo_mysql zip

WORKDIR /var/www/html

COPY . .

RUN composer install

RUN php artisan config:clear \
    && php artisan config:cache

RUN npm install

COPY check_db.sh /check_db.sh

CMD ["/bin/sh", "-c", "/check_db.sh && php artisan migrate --force && php artisan db:seed"]
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=8000
