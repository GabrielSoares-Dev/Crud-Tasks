FROM php:7.4-fpm-alpine


RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html/

RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer


COPY . .

RUN composer install

RUN php artisan cache:clear


COPY ./run.sh /tmp
RUN chmod u+r+x ./run.sh


ENTRYPOINT ["sh", "/tmp/run.sh"]






