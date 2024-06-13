<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPersonnelController extends Controller
{
    public function dashboard()
    {
        $formations = Formation::all();
        $personnels = Personnel::all();

        $formationsTotal = Formation::count();
        $formationAVenir = Formation::where('statut', 'a venir')->count();

    
        return view('personnels.dashboard',[
            'formationsTotal' => $formationsTotal,
            'formationAVenir' => $formationAVenir,
        ], compact('formations', 'personnels'));
    }
    public function index(){
        $formations = Formation::all();
        $personnels = Personnel::all();
        return view('formations/show', compact('formations', 'personnels'));
    }

    
}
