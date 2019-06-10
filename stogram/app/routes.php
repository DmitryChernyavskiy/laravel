<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showIndex'); 

Route::get('/auth/signup', 'AuthController@showSignupForm');
Route::post('/auth/signup', 'AuthController@postSignupForm');

Route::get('/auth/login', 'AuthController@showLoginForm');
Route::post('/auth/login', 'AuthController@postLoginForm');
Route::get('/auth/logout', 'AuthController@logout');
Route::post('/upload-image', 'HomeController@postImage');
Route::get('/image/{id}', 'HomeController@showImage');
Route::get('/image-file/{id}', 'HomeController@getImageFile');
Route::post('/comment/', 'HomeController@postComment');
