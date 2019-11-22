# PGPHPTEST

## Stack

-   Laravel
-   Postgres
-   blade templating engine

## Features

-   View single user
-   Update user comments

## How to get a local copy

-   Download and install postgres sql database
-   Create 'users' database in postgreSQL with super admin role
-   Copy repository link
-   Create a folder location in your computer eg my/path/
-   cd my/path/
-   git clone repository link.git
-   cd pgphptest
-   run the commands:
-   composer install
-   php artisan migrate
-   php artisan db:seed
-   php artisan serve
-   navigate to http://127.0.0.1:8000 or your specified port to check out the app

## Test

-   install phpunit globally
-   and run phpunit in the app folder or run vendor/bin/phpunit

## Routes

-   GET http://localhost:8000/ - Welcome page
-   GET http://localhost:8000/user/:id - View user details
-   POST http://localhost:8000/api/user - Update user comments
