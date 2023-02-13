#!/bin/sh

cd /var/www/api-tasks
php artisan migrate --force
php-fpm


