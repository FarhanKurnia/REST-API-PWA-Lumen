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
$router->post('/api/Destinasi','DestinasiController@store');
$router->put('/api/Destinasi/{id}','DestinasiController@update');
$router->delete('/api/Destinasi/{id}','DestinasiController@destroy');
$router->get('/api/Destinasi/{id}','DestinasiController@show');
$router->get('/api/Destinasi','DestinasiController@index');

#Endpoint REVIEW
$router->post('/api/Review','ReviewController@store');
$router->put('/api/Review/{id}','ReviewController@update');
$router->delete('/api/Review/{id}','ReviewController@destroy');
$router->get('/api/Review/{id}','ReviewController@show');
$router->get('/api/Review','ReviewController@index');
