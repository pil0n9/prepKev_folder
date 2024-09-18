<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [FirstController::class, 'dashboard']);
Route::get('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/user', [FirstController::class,'index'])->name('index');
Route::get('/register', [FirstController::class,'register'])->name('user.register');
Route::post('/store', [FirstController::class,'store'])->name('user.store');
Route::get('/login',  [LoginController::class,'index'])->name('login');