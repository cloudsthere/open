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

// recharge
Route::group(['domain' => '{recharge}.'.env('ROOT_DOMAIN'), 'namespace' => 'Recharge'], function($router){
    config(['view.paths' => [realpath(base_path('resources/views')).'/recharge']]);
    Route::controller('index', 'IndexController');
});