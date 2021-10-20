<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {return view('home');})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::post('/register', [RegisterController::class, 'create']);

Route::post('/logout', [LogoutController::class, 'index'])->name('logout');

Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::post('/posts/{id}/edit', [PostController::class, 'update'])->name('posts.update');
