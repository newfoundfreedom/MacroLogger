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

Route::get('/', 'PagesController@welcome');

Route::get('/meals', 'PagesController@meals');

//Route::get('/meals/create', 'PagesController@create');

Route::resource('meals', 'MealsController');

//Route::get('/hello', function () {
//    return 'Hello World';
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'HomeController@index')->name('welcome');
