<?php
#Package Random String
use Illuminate\Support\Str;


/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get('/', function () use ($router) {
    return $router->app->version();
});

#Endpoint USER
$router->post('/api/register','UserController@register');
$router->post('/api/login','UserController@login');
$router->get('/api/user','ExampleController@index');
$router->get('/api/profile','UserController@profile');
$router->put('/api/user','UserController@update');
$router->get('/api/logout','UserController@logout');

#Endpoint DESTINASI
$router->post('/api/destinasi','DestinasiController@store');
$router->put('/api/destinasi/{id}','DestinasiController@update');
$router->delete('/api/destinasi/{id}','DestinasiController@destroy');
$router->get('/api/destinasi/{id}','DestinasiController@show');
$router->get('/api/destinasi','DestinasiController@index');

#Endpoint REVIEW
$router->post('/api/review','ReviewController@store');
$router->put('/api/review/{id}','ReviewController@update');
$router->delete('/api/review/{id}','ReviewController@destroy');
$router->get('/api/review/{id}','ReviewController@show');
$router->get('/api/review','ReviewController@index');
