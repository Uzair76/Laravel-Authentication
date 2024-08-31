<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
                return view('login');
            })->name('login');

Route::get('/innerpage', function () {
                return view('innerpage');
            })->name('innerpage');

Route::get('register', [authController::class, 'register'])->name('user.register');
Route::post('storeregister', [authController::class, 'store'])->name('user.post.register');

Route::post('checklogin', [authController::class, 'login'])->name('check.login');
Route::get('logout', [authController::class, 'logout'])->name('user.logout');
Route::get('dashboard', [authController::class, 'dashboard'])->name('dashboard');





