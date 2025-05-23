<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     if (Auth::check()) {
    //         if (Auth::user()->user_type == 'user') {
    //             return redirect()->route('user-dashboard'); // ไปหน้า user-dashboard
    //         } else {
    //             return redirect()->route('dashboard'); // ไปหน้า admin-dashboard
    //         }
    //     }

    //     return redirect()->route('login'); // หากยังไม่ได้เข้าสู่ระบบ
    // }

    public function userDashboard()
    {
        return view('user-dashboard'); // แสดงหน้า user-dashboard
    }

    public function adminDashboard()
    {
        return view('dashboard'); // แสดงหน้า admin-dashboard
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
