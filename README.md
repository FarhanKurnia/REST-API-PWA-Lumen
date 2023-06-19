# REST API with Lumen PHP Framework Documentation

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

This REST-API was built using Lumen Framework for suggestion tourist destination application. </br>
Feature:
- Register User
- Login User
- CRUD Destinasi
- CRUD Review

Relation:
- Users and Reviews (One to Many) 
- Destinasi and Reviews (One to Many) 

HTTP Header:
- token
------------------------------------------------------------------------
## Documentation API
API documentation can be accessed via https://documenter.getpostman.com/view/20083017/2s93sjVUjb


------------------------------------------------------------------------
## Implementations
1. Create MySQL database</br>

2. Clone Repository </br>
    ```
    git clone https://github.com/FarhanKurnia/REST-API-PWA-Lumen.git
    ```

3. Install Dependency </br>
    ```
    composer install
    ```

4. Copy and Set up environment</br>
    ```
    cp .env.example .env
    ```

5. Customize environment (.env) files with DB name that has been created.</br>

6. Migrate and seed table</br>
    ```
    php artisan migrate --seed
    ```

7. Run local server</br>
    ```
    php -S localhost:8000 -t public
    ```



------------------------------------------------------------------------