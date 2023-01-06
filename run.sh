#!/bin/sh

cd /var/www/html/api-tasks
php artisan migrate --force
php  -S api-tasks:8005 -t public


