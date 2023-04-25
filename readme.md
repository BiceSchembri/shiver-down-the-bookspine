# PHP Laravel Project - Borrow a Shiver

---

## Summary

The project consists of a collection of horror books that can be viewed, commented on, and updated.

It is written in PHP Laravel, HTML, and CSS, and it is connected to a MySQL database.

## Requirements and Installation

In order to run this project on your machine, you need to have PHP installed as well as a MySQL database. You will also have to configure your own database connection.

[How to install Laravel](https://laravel.com/docs/5.4/installation#installation)

Open your terminal and clone the repository:
'git clone git@github.com:gothinkster/laravel-realworld-example-app.git'

Open the repo folder:
'cd .........'

Install the dependencies using #composer#
'composer install'

Copy the example env file and make the required configuration changes in the .env file
'cp .env.example .env'

Generate a new application key
php artisan key:generate

<!-- Generate a new JWT authentication secret key
php artisan jwt:generate -->

Run the database migrations (Set the database connection in .env before migrating)
php artisan migrate

Start the local development server
php artisan serve

You can now access the server at http://localhost:8000

## Features

The landing page offers a brief description of the website contents. The main navigation changes according to who is viewing the website: not logged in, logged in as user, logged in as admin.

-   Guests, or unregistered / not logged in visitors, can view the book index and book detail page, as well as the authors index and authors detail. Visitors can register via a form and be entered in the Users table. Once registered, they are also automatically logged in.

-   Users that are logged in can also leave comments on the book detail pages.

-   Only the admin or admins can create, update, and delete books and authors.
