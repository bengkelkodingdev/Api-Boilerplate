# API Boilerplate
Built on Laravel 10, this boilerplate provide base skeleton for API Development using Laravel Framework.

## Key Features
1. API Authentication using JSON Web Token (JWT)
2. Role using Spatie Laravel Permission
3. Ready to custom base API skeleton

## Installation
1. Clone this repository `https://github.com/bengkelkoding/Api-Boilerplate.git`
2. Open the folder cloned from this repo
3. Run `composer install` to install any required dependencies, wait until done
4. Copy file `.env.example`, paste in the same folder and rename it to `.env`
5. Run command `php artisan key:generate` and `php artisan jwt:secret`
6. Edit the database configuration in `.env` file based on what you need on this segment
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_pass
```
7. Run the `php artisan migrate` to migrate the tables into your database. Make sure your MySQL instance is up and running.
8. Run `php artisan db:seed` to insert the existing dummy data
9. Run the program locally using `php artisan serve` command

