<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/butlleti', [
    'as' => 'butlleti',
    'uses' => 'ButlletiController@show'
    ]);

Route::get('/noticia/{id?}', [
    'as' => 'post',
    'uses' => 'PostController@show'
    ]);

Route::get('/activitat', [
    'as' => 'activities',
    'uses' => 'ActivitiesController@show'
    ]);

Route::get('/elcentre', [
    'as' => 'weare',
    'uses' => 'WeareController@show'
    ]);

Route::get('/show/{id?}', [
    'as' => 'billboard',
    'uses' => 'billboardController@show'
    ]);

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@show'
    ]);
