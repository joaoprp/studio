<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});


$app->group(['prefix' => 'studios', 'namespace' => 'App\Http\Controllers'], function($app) {

    $app->get('/', [
        'as'   => 'studios.index',
        'uses' => 'StudiosController@index'
    ]);

    $app->get('{id}', [
        'as'   => 'studios.view',
        'uses' => 'StudiosController@view'
    ]);

    $app->post('add',[
        'as'   => 'studios.add',
        'uses' => 'StudiosController@create'
    ]);

    $app->post('update/{id}',[
        'as'   => 'studios.update',
        'uses' => 'StudiosController@update'
    ]);

});

$app->group(['prefix' => 'bands', 'namespace' => 'App\Http\Controllers'], function($app) {

    $app->get('/', [
        'as'   => 'bands.index',
        'uses' => 'BandsController@index'
    ]);

    $app->get('{id}', [
        'as'   => 'bands.view',
        'uses' => 'BandsController@view'
    ]);

    $app->post('add',[
        'as'   => 'bands.add',
        'uses' => 'BandsController@create'
    ]);

    $app->post('update/{id}',[
        'as'   => 'bands.update',
        'uses' => 'BandsController@update'
    ]);

});

$app->group(['prefix' => 'users', 'namespace' => 'App\Http\Controllers'], function($app) {

    $app->get('/', [
        'as'   => 'users.index',
        'uses' => 'UsersController@index'
    ]);

    $app->get('{id}', [
        'as'   => 'users.view',
        'uses' => 'UsersController@view'
    ]);

    $app->post('add',[
        'as'   => 'users.add',
        'uses' => 'UsersController@create'
    ]);

    $app->post('update/{id}',[
        'as'   => 'users.update',
        'uses' => 'UsersController@update'
    ]);

});

