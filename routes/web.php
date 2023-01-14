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

$router->get('/health', function () use ($router) {
    return response()->json([
        'statusCode' => 200,
        'message' => 'Server is Running',
    ]);
});
$router->get('/', function () use ($router) {
    return response()->json('ok', 200);
});

$router->post('/create', 'TasksController@create');
$router->get('/read', 'TasksController@get');
$router->put('/update/{id}', 'TasksController@update');
$router->delete('/delete/{id}', 'TasksController@delete');
