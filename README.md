# SCHICKEN

Web site to keep track and order expenses.
Developed with Laravel (PHP).

![image](https://user-images.githubusercontent.com/34236242/155512429-9e6c00e1-b692-4efc-b7b3-362a2f988ec2.png)

# Getting started

## Installation

Clone the repository

    git clone https://github.com/mikel-martin/Geld.git

Switch to the repo folder

    cd geld

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
