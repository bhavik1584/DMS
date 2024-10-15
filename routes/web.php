<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,LoginController};

Route::get('/', function () {
    return view('auth.login');
});
Route::get('login', function () {
    return view('auth.login');
});
Route::post('login',[LoginController::class,'login'])->name('auth.login');
Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::resource('user', UserController::class);
});
