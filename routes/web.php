<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
Route::get('/ver',[BusinessController::class, 'index'])->name('ver');

Route::get('/posts',[PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}',[PostController::class, 'show'])->name('post.show');

Route::get('/user/{user}',[UserController::class, 'show'])->name('User.show');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/laravel', function () {
    return view('welcome');
});
