<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;


Route::get('login', [LoginRegisterController::class, 'index'])->name('login');
Route::post('post-login', [LoginRegisterController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [LoginRegisterController::class, 'registration'])->name('register');
Route::post('post-registration', [LoginRegisterController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [LoginRegisterController::class, 'dashboard']); 
Route::get('logout', [LoginRegisterController::class, 'logout'])->name('logout');