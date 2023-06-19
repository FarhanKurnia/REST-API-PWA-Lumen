# Destination Review Apps

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

<p>This project is the development of a destination review and recommendation application built as the final project of a mobile web programming course from the university. Created using the Lumen framework by implementing the SDLC waterfall method, REST API architecture, MySQL for the database, Auth Token for the authentication function. The things that have been done during the application development period, including: collecting requirements, designing UML and tables, implementing the design (coding) and the result is an endpoint that is consumed by the front-end.</p>

Feature:
- Auth (Register, Login, Logout)
- User (Profile, Update)
- CRUD Destinasi
- CRUD Review

![Design Table](/Images/destination_review.png "Design Table")

Relation:
- Users and Reviews (One to Many) 
- Destinasi and Reviews (One to Many) 

HTTP Header (Auth):
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