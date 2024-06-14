<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckPersonnelRole
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'personnel') {
            return $next($request);
        }
        return redirect()->route('dashboard'); // Utilisez la route de connexion pour le personnel
    }
}
