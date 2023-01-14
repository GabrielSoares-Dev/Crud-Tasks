FROM php:7.4-fpm-alpine


RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html/api-tasks

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer


COPY . .
RUN COMPOSER_VENDOR_DIR="/var/www/html/api-tasks/vendor"
RUN composer install

RUN php artisan cache:clear

RUN php artisan swagger-lume:generate
COPY ./run.sh /tmp
RUN chmod +x run.sh


ENTRYPOINT ["sh", "/tmp/run.sh"]






