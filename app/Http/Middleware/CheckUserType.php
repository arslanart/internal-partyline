<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $type
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin' && !$request->is('dashboard')) {
                return redirect()->route('dashboard');
            } elseif (Auth::user()->user_type == 'user' && !$request->is('user-dashboard')) {
                return redirect()->route('user-dashboard');
            }
        }

        return $next($request); // ดำเนินการต่อถ้าไม่ต้อง Redirect
    }
}
