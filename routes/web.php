<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,AuthController,DashbordController};

Route::get('/',[AuthController::class,'login']);
Route::get('login',[AuthController::class,'login'])->name('auth.login.get');
Route::get('register', [AuthController::class,'register'])->name('auth.register');
Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');

Route::post('login',[AuthController::class,'postLogin'])->name('auth.login.post');
Route::post('register',[AuthController::class,'postRegister'])->name('auth.register');

Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::resource('user', UserController::class);
    Route::get('/',DashbordController::class)->name('dashboard');
});
