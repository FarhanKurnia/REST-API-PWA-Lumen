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

#Random String
$router->get('/key', function(){
    return Str::random(32);
});

#Get Method
$router->get('/foo', function(){
    return "Method get";
});


#Post Method
$router->post('/bar', function(){
    return 'Method post';
});

#Endpoint
$router->get('/get', function(){
    return "get";
});

$router->post('/post', function(){
    return "post";
});

$router->put('/put', function(){
    return "put";
});

$router->patch('/patch', function(){
    return "patch";
});

$router->delete('/delete', function(){
    return "delete";
});

$router->options('/options', function(){
    return "options";
});

$router->get('/user/{id}', function($id){
    return 'User id = ' . $id;
});

#Example Middleware Request
$router->get('/admin/home', ['middleware'=>'age', function(){
    return "Old Enought";
}]);
#Example Middleware Redirect
$router->get('/fail', function(){
    return "Not mature enought";
});

#Example Controller
$router->get('/keycon','ExampleController@generateKey');
#Example Controller with Request
$router->get('/user/{id}','ExampleController@getUser');

$router->get('/profile',['as'=>'profile','uses'=>'ExampleController@getProfile']);

#Endpoint
$router->post('/api/register','UserController@register');
$router->post('/api/login','UserController@login');
$router->get('/api/User','ExampleController@index');
$router->get('/api/User/{id}','UserController@show');
$router->put('/api/User/{id}','UserController@update');

$router->post('/api/Destinasi','DestinasiController@store');
$router->put('/api/Destinasi/{id}','DestinasiController@update');
$router->delete('/api/Destinasi/{id}','DestinasiController@destroy');
$router->get('/api/Destinasi/{id}','DestinasiController@show');
$router->get('/api/Destinasi','DestinasiController@index');



$router->post('/api/Review','ReviewController@store');
$router->put('/api/Review/{id}','ReviewController@update');
$router->delete('/api/Review/{id}','ReviewController@destroy');
$router->get('/api/Review/{id}','ReviewController@show');
$router->get('/api/Review','ReviewController@index');
