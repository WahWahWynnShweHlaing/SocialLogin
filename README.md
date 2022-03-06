# Laravel Social Login
A simple implementation of laravel 8 Social Login facebook and google

## Set up
To set up this project, first clone the repositiory
```bash
$ git clone https://github.com/WahWahWynnShweHlaing/SocialLogin.git
```

Change your working directory into the project directory
```bash
$ cd socialLogin
```

Then install dependencies using [Composer](https://getcomposer.org/doc/00-intro.md)
```bash
$ composer install
```

Copy `.env.example` to `.env`
```bash
$ cp .env.example .env
```
Create database and configure in .env file
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sociallogin
DB_USERNAME=root
DB_PASSWORD=
```

Run database migrations:
```bash
php artisan migrate
```

## Installation Package

```bash
composer require laravel/socialite
```

```bash
npm install
npm run dev
```

```bash
php artisan migrate:fresh
```

## Run
Run the application with the following command
```bash
$ php artisan serve
```

