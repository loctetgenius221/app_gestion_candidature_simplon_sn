<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function afficher() {

        $formation = Formation::all();
        return view('candidats.formation');
    }
}
