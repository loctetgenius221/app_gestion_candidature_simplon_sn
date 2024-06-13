<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPersonnelController extends Controller
{
    public function dashboard()
    {
        $Formations = Formation::all();
        $FormationTotal = Formation::count();
        $formationEnCours = Formation::where('statut', 1)->count();
        $FormationsAvenir = Formation::where('statut', 0)->count();

        $user = Auth::user();
$personnel = $user->personnel; // Adjust this to fit your actual relationship

return view('personnels.dashboard', [
    'formation' => $Formations,
    'fortmationTotal' => $FormationTotal,
    'formationEnCours' => $formationEnCours,
    'formationsAvenir' => $FormationsAvenir,
    'personnel' => $personnel
]);
    }

    
}
