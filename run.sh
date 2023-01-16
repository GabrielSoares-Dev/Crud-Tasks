#!/bin/sh

cd /var/www/html/api-tasks
php artisan migrate --force
php  -S api-tasks-container:8005 public/index.php


