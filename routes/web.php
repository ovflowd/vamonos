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

// Event Routes
$router->group(['prefix' => 'event'], function () use ($router) {
    $router->get('start', 'EventController@start');

    $router->get('invite', 'EventController@invite');
});

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    // User API Routes
    $router->get('users', 'UserController@retrieve');

    // Event API Routes
    $router->get('events/users', 'EventUserController@retrieve');
    $router->get('events', 'EventController@retrieve');

    // Places API Routes
    $router->get('places', 'PlaceController@retrieve');
});