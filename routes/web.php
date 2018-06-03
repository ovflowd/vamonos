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

    $router->get('wait', 'EventController@wait');
});

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    // User API Routes
    $router->get('users', 'UserController@retrieve');
    $router->post('users','UserController@store');
    $router->delete('place/{id}','PlaceController@delete');

    // Event API Routes
    $router->get('events/users', 'EventUserController@retrieve');
    $router->get('events', 'EventController@retrieve');
    $router->post('event','EventController@store');
    $router->delete('event/{id}','EventController@delete');

    // Places API Routes
    $router->get('places', 'PlaceController@retrieve');
    $router->post('place','PlaceController@store');
    $router->delete('place/{id}','PlaceController@delete');

    // UserEvents API Routes
    $router->post('users/events/','UserEventsController@store');
    $router->put('users/events/{idUser}/{idEvent}','UserEventsController@update');
});