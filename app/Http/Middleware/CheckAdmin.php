<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && (Auth::user()->role === 'admin' || Auth::user()->role === 'super_admin')) {
            return $next($request);
        }

        return redirect('/login/admin')->with('error', 'You do not have access to this section.');
    }
}
