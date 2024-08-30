<?php

use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('register', [authController::class, 'register'])->name('user.register');
Route::post('storeregister', [authController::class, 'store'])->name('user.post.register');

Route::post('checklogin', [authController::class, 'login'])->name('check.login');
Route::get('logout', [authController::class, 'logout'])->name('user.logout');


Route::get('/login', function () {
    return view('login');
})->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
