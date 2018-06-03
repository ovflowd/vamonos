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

/** @var \Laravel\Lumen\Routing\Router $router */

// Home Route
$router->get('/', 'HomeController@index');

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController@retrieve');
});


/**
 * Routes for resource user-controller
 */
$app->get('user-controller', 'UserControllersController@all');
$app->get('user-controller/{id}', 'UserControllersController@get');
$app->post('user-controller', 'UserControllersController@add');
$app->put('user-controller/{id}', 'UserControllersController@put');
$app->delete('user-controller/{id}', 'UserControllersController@remove');
