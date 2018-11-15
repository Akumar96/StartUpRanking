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

Auth::routes();

Route::get('/', 'PageController@index');
Route::get('/news', 'PageController@news');

//Route::get('/home', 'HomeController@index')->name('home');


// @MS:
Route::get('/alexa', 'AlexaController@index');

Route::get('/reddit', 'RedditController@index');
Route::post('/reddit', 'RedditController@index');

Route::get('/youtube', 'YoutubeController@index');



