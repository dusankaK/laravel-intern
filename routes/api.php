<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// In postman returns status code 200
// Route::get('/one', function () {
//     return response()->json(['message' => 'success'], 200);
// });
Route::post('/login', 'Auth\LoginController@authenticate'); 
Route::post('/open', 'DataController@open');

// Bez middleware vraća string iz json, a sa middleware vraća 401
Route::post('/close', 'DataController@close')->middleware('jwt');

