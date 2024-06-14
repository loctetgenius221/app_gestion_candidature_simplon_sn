<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if ($guard == 'personnel') {
                    return redirect('/dashboardl');
                } else if ($guard == 'candidat') {
                    return redirect('/dashboard-candidat');
                }
            }
        }

        return $next($request);
    }
}
