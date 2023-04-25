# PHP Laravel Project - Borrow a Shiver

---

## Summary

The project consists of a collection of horror books that can be viewed, commented on, and updated.

It is written in PHP Laravel, HTML, and CSS, and it is connected to a MySQL database.

## Requirements and Installation

In order to run this project on your machine, you need to have PHP installed as well as a MySQL database. You will also have to configure your own database connection.

Check the official documentation on [how to install Laravel](https://laravel.com/docs/5.4/installation#installation).

Open your terminal and clone the repository:

<!-- TODO: update project name -->

`git clone git@github.com:PATH/PROJECT NAME.git`

Open the repo folder:

<!-- TODO: update project name -->

`cd .........`

Install the dependencies using #composer#
`composer install`

Copy the example env file. Make the required configuration changes in the .env file. Set the database connection.

<!-- Examples -->

`cp .env.example .env`

Generate a new application key

<!-- Check -->

`php artisan key:generate`

Run the database migrations
`php artisan migrate`

Start the local development server
`php artisan serve`

You can now access the server at http://localhost:8000.

## Usage

The landing page offers a brief description of the website contents. The main navigation changes according to who is viewing the website: not logged in, logged in as user, logged in as admin.

-   Guests, or unregistered / not logged in visitors, can view the book index and book detail page, as well as the authors index and authors detail. Visitors can register via a form and be entered in the Users table. Once registered, they are also automatically logged in.

-   Users that are logged in can also leave comments on the book detail pages.

-   Only the admin or admins can create, update, and delete books and authors.

-   Success and fail messges are returned after completing operations, for example when a new book is created correctly or when an operation is not authorized. Authors cannot be deleted if thye have any book associated to them; instead, an error message will be returned.

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

Eloquent relationships
