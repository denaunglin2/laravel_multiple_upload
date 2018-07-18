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

Route::get('/',[
    'uses'=>'WelcomeController@getWelcome',
    'as'=>'/'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload',[
    'uses'=>'HomeController@uploadPhoto',
    'as'=>'upload'
]);

Route::get('/remove',[
    'uses'=>'HomeController@remove',
    'as'=>'remove'
]);
