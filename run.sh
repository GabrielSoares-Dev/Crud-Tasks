#!/bin/sh

cd /var/www/html/lumen
php artisan migrate --force
php  -S lumen:8000 -t public


