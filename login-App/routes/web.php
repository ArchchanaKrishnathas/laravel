<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/post-login',[AuthController::class,'login'])->name('post.login');
Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/post-register',[AuthController::class,'storeRegistration'])->name('post.registration');

