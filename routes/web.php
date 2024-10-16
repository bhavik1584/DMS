<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,LoginController};

Route::get('/', function () {
    return view('auth.login');
});
Route::get('login', function () {
    return view('auth.login');
})->name('login');
Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::post('login',[LoginController::class,'login'])->name('auth.login');
Route::post('register',[LoginController::class,'register'])->name('auth.register');
Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::resource('user', UserController::class);
});
