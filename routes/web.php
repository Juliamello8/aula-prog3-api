<?php

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

//quando parametro entre [] -> torna opcional
$router->get('/aula[/{id}]', 'AulaController@show');

$router->post('/aula', 'AulaController@create');

$router->put('/aula/{id}', 'AulaController@update');

$router->delete('/aula/{id}', 'AulaController@destroy');