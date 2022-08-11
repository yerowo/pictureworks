## Pictureworks Laravel Coding Test

The project is the migration of a non-OO legacy application into the Laravel/Eloquent framework, This app is using sail a laravel package that helps to easily setup local enviroment.

## perquisite to run this application

you must have docker and composer on your local machine

## Install application on your local Machine

Clone the application and run composer install to install all the packages. Edit the .env file.

## Docker

cd into the root of the application and './vendor/bin/sail -up ' to run the aplication

## Run Migration

To run migrations, execute the migrate Artisan './vendor/bin/sail artisan migrate'

## Run Database: Seeding

You may execute the db:seed Artisan command to seed your database 'sail artisan db:seed' or you can target the class specificaly by running './vendor/bin/sail artisan db:seed --class=UserSeeder'

## Vite Dev Server Start

We need to start the dev server for vite, use the following command 'vendor/bin/sail npm run dev' and it will watch your resources/js/app.js file and resources/css/app.scss file.

## route

### return the existing styled HTML for some

Route::get('user/{id}', [UserController::class, 'show']);

### append the value of 'comments' to the existing comments of the user

Route::post('user/{id}', [UserController::class, 'store']);

## visit user

visit http://localhost/api/user/{id} where {id} is the id of the user. e.g http://localhost/api/user/1

## POST requests with form fields or JSON

POST requests with form fields or JSON using HTTP/API clients eg Insomnia or Postman this will accept id, static password and comment as params

## Command line executions

Command line excution with id and comments as params. To run this command ' './vendor/bin/sail CreateUserCommand:create {id} {comments}' you type in the id and the comments. eg ./vendor/bin/sail CreateUserCommand:create 1 'add another comments' . This will run the command and append it to user with id 1 comments.
