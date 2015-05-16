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


$app->group(['namespace' => 'App\Http\Controllers'], function($app) {

    $app->get('studios', [
        'as'   => 'studios.index',
        'uses' => 'StudiosController@index'
    ]);

    $app->get('studios/{id}', [
        'as'   => 'studios.view',
        'uses' => 'StudiosController@view'
    ]);

    $app->post('studios/add',[
        'as'   => 'studios.add',
        'uses' => 'StudiosController@create'
    ]);

    $app->post('studios/update/{id}',[
        'as'   => 'studios.update',
        'uses' => 'StudiosController@update'
    ]);

    $app->get('bands', [
        'as'   => 'bands.index',
        'uses' => 'BandsController@index'
    ]);

    $app->get('bands/{id}', [
        'as'   => 'bands.view',
        'uses' => 'BandsController@view'
    ]);

});

