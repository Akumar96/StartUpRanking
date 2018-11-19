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

Route::view('/news', 'pages/news');
Route::view('/', 'app');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/alexa','AlexaController@index');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{id}','PageController@show');

