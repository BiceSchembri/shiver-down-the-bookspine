# PHP Laravel Project - Borrow a Shiver

Author: Beatrice Schembri

Created on: 04/2023

---

## Summary

<img width="678" alt="home" src="https://user-images.githubusercontent.com/103190920/235110535-804147b2-b475-4b7c-942c-0fc3ac754265.png">

The website provides a way to display, update and comment a collection of items - specifically, horror books, each with an author, a title, and a description. Registered users and admins can perform different actions.

It is written in PHP Laravel, HTML, and CSS, and it is connected to a MySQL database. For development, I used HeidiSQL database with the MariaDB database manager. My IDE was VisualStudioCode.

## Requirements and Installation

In order to run this project on your machine, you need to have PHP installed as well as a MySQL database. You will also have to configure your own database connection.

Check the official documentation on [how to install Laravel](https://laravel.com/docs/5.4/installation#installation).

Open your terminal and clone the repository, then open the repo folder.

Install **Composer** globally:
`composer install`

Copy the example **.env.example** to set the configuration and the database connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

Generate a new application key:
`php artisan key:generate`

Run the migrations to create the database tables:
`php artisan migrate`

Start the local development server:
`php artisan serve`

Open http://localhost:8000 in your browser.

## Using the website

The landing page offers a brief description of the website contents. The main navigation changes according to who is viewing the website: not logged in, logged in as user, logged in as admin.

<img width="566" alt="bookdetail" src="https://user-images.githubusercontent.com/103190920/235110526-b65b343f-a353-4dea-b380-4070cc880881.png">

<img width="589" alt="bookview" src="https://user-images.githubusercontent.com/103190920/235110532-ccb9802b-3772-4dd9-9a67-bb8d1fa85070.png">

<img width="581" alt="authorview" src="https://user-images.githubusercontent.com/103190920/235110525-d2d866ae-53bf-491b-876c-73339bb0a2b3.png">

<img width="572" alt="authordetail" src="https://user-images.githubusercontent.com/103190920/235110523-a5678b85-4359-42ea-809e-ed5cdedfcdbd.png">

-   Guests, or unregistered / not logged in visitors, can view the book index and book detail page, as well as the authors index and authors detail. Visitors can register via a form and be entered in the Users table. Once registered, they are also automatically logged in.

<img width="411" alt="signup" src="https://user-images.githubusercontent.com/103190920/235110540-5b2276ae-99bc-4d4e-baa9-92f09c2a305e.png">

-   Users that are logged in can also leave comments on the book detail pages.

<img width="679" alt="addbook" src="https://user-images.githubusercontent.com/103190920/235110517-e75b2340-63c5-46e5-b667-a41d165c4a6e.png">

-   Only the admin or admins can create, update, and delete books and authors.

-   Success and fail messages are returned after completing or attempting to perform certain operations, e.g. when a new book is added correctly to the database, or when an operation is not authorized (authors cannot be deleted if they have any book associated to them; instead, an error message will be returned and the user will be redirected to the authors list).

## Features

-   MVC pattern -> Models, Views, Controllers are created for each topic, as well as Requests for validation where needed.
-   CRUD flow: books and authors can be created (via a form), viewed (general list or detail page), updated (via a second form) and deleted
-   Soft delete: when a book or an author is deleted, they are not removed from the database. Instead, a timestamp is added in the column `deleted_at`, and the item is removed from the page view.
-   Eloquent relationships (`hasMany`, `belongsTo`)
-   User registration (with input validation on both frontend and backend)
-   login and logout
-   admin
-   hashing passwords
-   AlpineJS for flash messages
-   Migrations, factory, seeders
