<?php

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('hello', 'MainController@helloWorld');
    $router->get('countries', 'MainController@countries');
    $router->post('countries', 'MainController@store');
    $router->get('/country/{country}', 'MainController@show');
    $router->get('/', 'MainController@index');
});
