#!/bin/bash;
echo "Begin Setup";

echo "Install project dependencies...";
composer install || {
    echo "Composer not found. Installing Composer...";
    php -r "readfile('https://getcomposer.org/installer');" | php;
    #mv composer.phar /usr/local/bin/composer -n;
    php composer.phar install;
}
echo "Create database";
touch database/database.sqlite;

echo "Migrate & Seed";
php artisan migrate;
php artisan db:seed;
php artisan serve --port=3000 --host localhost;