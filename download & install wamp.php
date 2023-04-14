download & install wamp
download & install composer
locate www directory  in vscode
composer create-project --prefer-dist laravel/laravel ftcrm

CREATE DATABASE ftcrm DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
edit config/database.php 
    mysql>engine='InnoDB'

php artisan make:model Employee -m
php artisan make:model Post -m

php artisan make:controller EmployeeController
php artisan make:controller PostController
php artisan make:controller UserController

php artisan migrate:reset - undo migrate
php artisan migrate

setup bootstrap

composer require laravel/ui    
php artisan ui bootstrap  
php artisan ui bootstrap --auth
 composer require twbs/bootstrap-icons
npm install
npm run dev

add in sass
// Bootstrap
@import '~bootstrap/scss/bootstrap';

// Bootstrap-icons
@import '~bootstrap-icons/font/bootstrap-icons.css';

C:\wamp64\www\ftcrm>php artisan storage:link
The [C:\wamp64\www\ftcrm\public\storage] link has been connected to [C:\wamp64\www\ftcrm\storage\app/public].
The links have been created.
