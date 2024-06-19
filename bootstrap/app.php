<?php

use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\IsAdmin;
use Illuminate\Foundation\Application;
use App\Http\Middleware\CheckPersonnelRole;
use App\Http\Middleware\RedirectIfNotAdmin;
use App\Http\Middleware\CheckAdminOrSuperAdmin;
use App\Http\Middleware\RedirectIfNotSuperAdmin;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'checkPersonnelRole' => CheckPersonnelRole::class,
            'redirectIfAuthenticated' => RedirectIfAuthenticated::class,
            'RedirectIfNotAdmin' => RedirectIfNotAdmin::class,
            'RedirectIfNotSuperAdmin' => RedirectIfNotSuperAdmin::class,
            'IsAdmin' => IsAdmin::class,
            'checkAdmin' => CheckAdmin::class,
        ]);
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

    