<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    AuthController,
    DashbordController,
    RoleController,
    DmsController
};

Route::get('/',[AuthController::class,'login']);
Route::get('login',[AuthController::class,'login'])->name('auth.login.get');
Route::get('register', [AuthController::class,'register'])->name('auth.register');
Route::get('logout', [AuthController::class,'logout'])->name('auth.logout');

Route::post('login',[AuthController::class,'postLogin'])->name('auth.login.post');
Route::post('register',[AuthController::class,'postRegister'])->name('auth.register');

Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    //user
    Route::resource('user', UserController::class);
    //role
    Route::resource('role', RoleController::class);
    //dms
    Route::resource('dms',DmsController::class);
    Route::get('dms-folder',[DmsController::class,'showFolder'])->name('dms.showfolder');

    //dashboard
    Route::get('/',DashbordController::class)->name('dashboard');
});
