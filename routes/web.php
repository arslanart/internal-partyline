<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('auth.login');
});

Route::post('/login', [LoginController::class, 'loginPost'])->name('login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'check_user_type'
])->group(function () {

    // หน้าแรกหลังล็อกอิน
    Route::get('/home', function () {
        return view('home'); // หน้า home.blade.php แสดง dashboard หรือ welcome
    })->name('home');

    // เมนูแยกต่างหาก
    Route::get('/group', function () {
        return view('group');
    })->name('group');

    Route::get('/inventory', function () {
        return view('inventory');
    })->name('inventory');

    Route::get('/alarm', function () {
        return view('alarm');
    })->name('alarm');

    Route::get('/administrator', function () {
        return view('administrator');
    })->name('administrator');

    // Optional: หากยังต้องการแยก Admin กับ User Dashboard เดิม
    // Route::get('/dashboard/admin', [UserController::class, 'adminDashboard'])->name('dashboard.admin');
    // Route::get('/dashboard/user', [UserController::class, 'userDashboard'])->name('dashboard.user');
});
