# REST API with Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

This REST-API backend was built using Lumen Framework for suggestion tourist destination application. 

## Endpoints

Destination
get:http://localhost:8000/api/Destinasi
get:http://localhost:8000/api/Destinasi/{id}


User


## Implementations
1. Create MySQL database

2. Clone Repository with</br>
    ``$ git clone https://github.com/FarhanKurnia/REST-API-PWA-Lumen.git``

3. Install Dependency </br>
    ``$ composer install``

4. Set up environment</br>
    ``$ cp .env.example .env``

5. and customize environment (.env) files with DB name that has been created.

6. Migrate and seed table:</br>
    ``$  php artisan migrate --seed``

7. Run local server</br>
    ``$ php -S localhost:8000 -t public``




## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

