<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login',[LoginController::class, 'loginPost'])->name('login'); // ส่งข้อมูลไปยัง LoginController

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','check_user_type'
])->group(function () {
    Route::get('/dashboard', [UserController::class, 'adminDashboard'])->name('dashboard'); // เส้นทาง Admin
    Route::get('/user-dashboard', [UserController::class, 'userDashboard'])->name('user-dashboard'); // เส้นทาง User
});
