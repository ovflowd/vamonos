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

// User Routes (Authentication)
$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('facebook', 'UserController@facebook');

    $router->get('facebook/callback', 'UserController@facebookCallback');
});

// Event Routes
$router->group(['prefix' => 'event'], function () use ($router) {
    $router->get('start/{startCode}', 'EventController@start');

    $router->get('invite', 'EventController@invite');

    $router->get('wait', 'EventController@wait');

    $router->get('results', 'EventController@results');
});

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    // User API Routes
    $router->get('users', 'UserController@retrieve');
    $router->get('users/{id}', 'UserController@getOne');
    $router->post('users','UserController@store');

    // User Friends API Routes
    $router->get('friends', 'UserController@friends');

    // Event API Routes
    $router->get('events/users', 'EventUserController@retrieve');
    $router->get('events', 'EventController@retrieve');
    $router->post('events','EventController@store');
    $router->delete('events/{id}','EventController@delete');

    // Places API Routes
    $router->get('placess', 'PlaceController@retrieve');
    $router->post('places','PlaceController@store');
    $router->delete('places/{id}','PlaceController@delete');

    // UserEvents API Routes
    $router->post('users/events','UserEventsController@store');
    $router->put('users/events/{idUser}/{idEvent}','UserEventsController@update');

    // CalculaLocal
    $router->get('calculate/{id}', 'EventController@calculateBestPlace');

    // Maps
    $router->get('places/{fts}', 'PlaceController@search');
});