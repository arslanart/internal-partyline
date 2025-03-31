<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified','check_user_type'
])->group(function () {
    Route::get('/dashboard', [LoginController::class, 'adminDashboard'])->name('dashboard'); // เส้นทาง Admin
    Route::get('/user-dashboard', [LoginController::class, 'userDashboard'])->name('user-dashboard'); // เส้นทาง User
});
