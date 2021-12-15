<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);

Route::get('/counts', [PostController::class, 'counts']);

Route::post('/store', [PostController::class, 'store']);

Route::get('/{post}', [PostController::class, 'show']);

Route::patch('/{post}', [PostController::class, 'update']);

Route::get('/edit/{post}', [PostController::class, 'edit']);
