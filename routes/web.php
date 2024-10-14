<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('main');
});

Route::resource('user', UserController::class);

Route::get('login', function () {
    return view('auth.login');
});
