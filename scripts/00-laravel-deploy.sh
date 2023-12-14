#!/usr/bin/env bash
echo 'Running composer'

composer self-update --2

composer -v

sudo apt install php8.1-gd

composer install --working-dir=/var/www/html

echo 'Install npm package'
npm install

npm run dev
 
echo 'Caching config...'
php artisan config:cache
 
echo 'Caching routes...'
php artisan route:cache
 
echo 'Running migrations...'
php artisan migrate --force