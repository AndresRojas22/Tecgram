<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImagenController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Principal');
})->name('index');

Route::get('/account',[RegisterController::class,'index'])->name('account.index');

Route::post('/account',[RegisterController::class,'store'])->name('account.store');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::post('/login',[LoginController::class,'store'])->name('login.store');

Route::post('/logout',[LogoutController::class,'store'])->name('logout.store');

Route::get('/{user:username}',[FeedController::class,'index'])->name('Feed.index');

Route::get('/Feed/create',[FeedController::class,'create'])->name('Feed.create');

Route::post('/Imagenes',[ImagenController::class,'store'])->name('Images.store');