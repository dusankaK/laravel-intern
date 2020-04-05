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
    $name = 'Dusanka';
    $age = 26;
    return view('welcome', compact('name', 'age'));
});

// Route::post('user/dashboard', function () {
//     return 'Welcome to dashboard';
// })->name('dashboard');

// Route::put('user/add', function () {
//     return 'Make some changes';
// })->name('add');

// Route::patch('user/bla', function () {
//     return 'Blabla';
// })->name('bla');

// Route::delete('post/example', function () {
//     return 'Delete this post';
// })->name('post.example');

Route::resource('photo', 'PhotoController');