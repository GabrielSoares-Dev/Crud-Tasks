#!/bin/sh

cd /var/www/html/
php artisan migrate --force
php  -S lumen:8000 -t public


