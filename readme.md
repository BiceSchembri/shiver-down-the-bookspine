# PHP Laravel Project - Borrow a Shiver

Author: Beatrice Schembri

Created on: 04/2023

Find me on [GitHub](...)

---

## Summary

The project consists of a collection of horror books (with author, title, description) that can be viewed, commented on, and updated.

It is written in PHP Laravel, HTML, and CSS, and it is connected to a MySQL database. For development, I used HeidiSQL database with the MariaDB database manager. My IDE was VisualStudioCode.

## Requirements and Installation

In order to run this project on your machine, you need to have PHP installed as well as a MySQL database. You will also have to configure your own database connection.

Check the official documentation on [how to install Laravel](https://laravel.com/docs/5.4/installation#installation).

Open your terminal and clone the repository:

<!-- TODO: update project name -->

`git clone git@github.com:PATH/PROJECT NAME.git`

Open the repo folder:

<!-- TODO: update project name -->

`cd .........`

Install **Composer** globally:
`composer install`

Copy the example **.env.example** to set the configuration and the database connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Generate a new application key

<!-- Check -->

`php artisan key:generate`

Run the migrations to create the database tables:
`php artisan migrate`

Start the local development server:
`php artisan serve`

Open http://localhost:8000 in your browser.

NOTE:

<!-- Seeders can't be used in production, but maybe for running local test??? -->

## Using the website

The landing page offers a brief description of the website contents. The main navigation changes according to who is viewing the website: not logged in, logged in as user, logged in as admin.

-   Guests, or unregistered / not logged in visitors, can view the book index and book detail page, as well as the authors index and authors detail. Visitors can register via a form and be entered in the Users table. Once registered, they are also automatically logged in.

-   Users that are logged in can also leave comments on the book detail pages.

-   Only the admin or admins can create, update, and delete books and authors.

-   Success and fail messages are returned after completing or attempting to perform certain operations, e.g. when a new book is added correctly to the database, or when an operation is not authorized (authors cannot be deleted if they have any book associated to them; instead, an error message will be returned and the user will be redirected to the authors list).

## Features

-   MVC pattern -> Models, Views, Controllers are created for each topic, as well as Requests for validation where needed
-   CRUD flow: books and authors can be created (via a form), viewed (general list or detail page), updated (via a second form) and deleted
-   Sof delete: when a book or an author is deleted, they are not removed from the database. Instead, the value of the column .......... is updated and the item is removed from the page view.
-   Eloquent relationships (hasMany, belongsTo)
-   User registration (with input validation on both frontend and backend)
-   login and logout
-   admin
-   hashing passwords
-   AlpineJS for flash messages
-   Migrations, factory, seeders

## Description

Controllers
Models
Requests
Middleware
update to Kernel
update to config
Routes in web.php
Migrations
Factories
Seeders
.gitignore
.env configuration

Database: created with HeidiSQL
Tables and foreign ids
