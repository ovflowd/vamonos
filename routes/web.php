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

use Illuminate\Support\Facades\DB;

// Home Route
$router->get('/', 'HomeController@index');

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', function(){
        $users = DB::table('users')->get();
        return $users;
    });
});

