# <b>Alpa<span style="font-size: 45px; color: blue;">.</span></b>

<b>Automated List and Papperless Absent</b> | Build with Laravel framework

## Installation

Clone the repo
```
git clone https://github.com/fardhanardhi/alpa.git
```

Move to the newly created folder and install all dependencies:
```
cd alpa
composer install
```

Create a new database, for example with phpMyAdmin. Then open the .env.example file, edit it to match your database name, username and password and save it as .env file. 


Check your MySQL Version, if MySQL version < v5.7.7 follow [this instructions](https://gist.github.com/fardhanardhi/75294a0830d9601c20057a9463b5936d#file-laravel_specified_key_error-md)



Once done, build tables with the following command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Finally, generate the application key 
```
php artisan key:generate
```

Open your favorite browser and visit the newly created app.
```
php artisan serve
```

## Features
Coming soon!

## Screenshots
Coming soon!

## License
<img src="https://laravel.com/assets/img/components/logo-laravel.svg">

The Alpa Application is open-sourced project build with Laravel framework.

Please refer to the [Laravel licence](https://opensource.org/licenses/MIT)