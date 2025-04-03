<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('auth.login');

});

Route::post('/login', [LoginController::class, 'loginPost'])->name('login'); // ส่งข้อมูลไปยัง LoginController

Route::middleware([
    'auth:sanctum',
    config(key: 'jetstream.auth_session'),
    'verified',
    'check_user_type'
])->group(function () {
    Route::get('/home', [UserController::class, 'adminDashboard'])->name('home'); // เส้นทาง Admin
    Route::get('/home-user', [UserController::class, 'userDashboard'])->name('home-user'); // เส้นทาง User

});

