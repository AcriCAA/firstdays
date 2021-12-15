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

// Route::get('/', function () {
//     return view('posts.post');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PostController@index');
Route::get('/create', 'PostController@create');

Route::get('/counts', 'PostController@counts');

Route::post('/store', 'PostController@store');

Route::get('/{post}', 'PostController@show');

Route::patch('/{post}', 'PostController@update');

Route::get('/edit/{post}', 'PostController@edit');
