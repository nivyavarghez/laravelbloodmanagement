<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BloodBankController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginRegisterController;


Route::get('login', [LoginRegisterController::class, 'index'])->name('login');
Route::post('post-login', [LoginRegisterController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [LoginRegisterController::class, 'registration'])->name('auth.register');
Route::post('post-registration', [LoginRegisterController::class, 'postRegistration'])->name('auth.register.post');

Route::get('home', [LoginRegisterController::class, 'home']); 
Route::get('logout', [LoginRegisterController::class, 'logout'])->name('logout');


// Route::get('bloodbankreg',[BloodBankController::class, 'bloodbankindex']);


// Blood Bank Routes
Route::post('/bloodbank/register', [BloodBankController::class, 'showRegister']);
Route::get('/bloodbank/register', [BloodBankController::class, 'bloodbankindex'])->name('bloodbank.register');
// Route::get('/bloodbank', [BloodBankController::class, 'index'])->name('bloodbank.banklist');

// Donor Routes
Route::get('/donor/register', [DonorController::class, 'showRegister'])->name('donor.donorreg');
Route::post('/donor/register', [DonorController::class, 'register'])->name('donor.register');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/bloodbankadd', [DashboardController::class, 'bloodreg'])->name('admin.bloodbankadd');
Route::post('/admin/bloodbankadd', [DashboardController::class, 'bloodbankindex'])->name('bloodbankindex');
Route::get('/admin/bloodbanks',[BloodBankController::class, 'getindex'])->name('admin.bloodbanks');
Route::get('/admin/users',[LoginRegisterController::class, 'adminindex'])->name('admin.users');
// // Contact Route
// Route::get('contact', [ContactController::class, 'index']);
// Route::post('contact', [ContactController::class, 'submit']);