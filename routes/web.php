<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginRegisterController::class, 'index'])->name('login');
Route::post('custom-login', [LoginRegisterController::class, 'customLogin'])->name('login.custom'); 
Route::get('register', [LoginRegisterController::class, 'register'])->name('register-user');
Route::post('custom-registration', [LoginRegisterController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [LoginRegisterController::class, 'signOut'])->name('signout');