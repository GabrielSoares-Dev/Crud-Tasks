#!/bin/sh

cd /var/www/html/api-tasks
php artisan migrate --force
php  -S crud-tasks:8005 public/index.php


