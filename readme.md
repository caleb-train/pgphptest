# PGPHPTEST

## Stack

-   Laravel
-   Postgres
-   blade templating engine

## Features

-   View all users
-   View single user
-   Update user comments through POST route - {host}/api/user
-   Update user comments using artisan command - php artisan update:comments ID COMMENTS

## How to get a local copy

-   Download and install postgres sql database
-   Create 'users' database in postgreSQL with super admin role
-   Copy repository link
-   git clone repository link.git _folder_name_
-   cd(change directory) into _folder_name_

#### run the commands:

-   composer install
-   php artisan migrate
-   php artisan db:seed
-   php artisan serve

**and navigate to http://127.0.0.1:8000 or your specified host port to check out the app**

## Test

-   install phpunit globally run phpunit in the app folder
-   or run vendor/bin/phpunit in your app folder

## Routes

-   GET http://localhost:8000/ - Welcome page
-   GET http://localhost:8000/user/:id - View user details
-   POST http://localhost:8000/api/user - Update user comments
