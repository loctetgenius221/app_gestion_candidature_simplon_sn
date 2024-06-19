<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardPersonnelController;

// Include all routes for admins as super admins should have those privileges too
require base_path('routes/web_admin.php');


Route::middleware(['auth', 'superAdmin'])->group(function () {
    //
});
