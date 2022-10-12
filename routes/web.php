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
Route::get('businesses',[BusinessController::class, 'index'])->name('business.index');
Route::post('businesses',[BusinessController::class, 'store'])->name('business.store');


Route::get('/posts',[PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post}',[PostController::class, 'show'])->name('post.show');

Route::get('/user/{user}',[UserController::class, 'show'])->name('User.show');

Route::get('/usuario', function () {
    return view('usuarios/usuario');
})->name('usuarios.usuario');


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/laravel', function () {
    return view('welcome');
});
