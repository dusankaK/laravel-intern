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

// Route::get('/', 'HomeController@index');
// Route::get('/greeting', 'HomeController@greeting');
// Route::get('/{age?}', 'HomeController@age')->middleware('checkAge');
// Route::get('/users/create', 'HomeController@create');
// Route::post('/user', 'HomeController@store');
// Route::put('/users/{id}', 'HomeController@update');
// Route::patch('/users/{id}', 'HomeController@update');
// Route::delete('/users/{id}', 'HomeController@destroy');
// Route::get('/users/{id}/user', 'HomeController@edit');

/* PhotoController - kreiran ranije, koršćen za ovu vežbu
Route::resource('photo', 'PhotoController');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
