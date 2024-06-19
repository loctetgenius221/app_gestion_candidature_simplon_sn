<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotSuperAdmin
{
    public function handle($request, Closure $next, $guard = 'super_admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('/login/super_admin');
        }

        return $next($request);
    }
}
