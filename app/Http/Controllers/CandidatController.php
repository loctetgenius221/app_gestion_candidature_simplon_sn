<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function afficher() {

        $formations = Formation::all();
        return view('candidats.formation', compact('formations'));
    }
    public function index() {

        return view('candidats.index');
    }

    public function afficherDetail($id) {

        $formation = Formation::findOrFail($id);
        return view('candidats.detail', compact('formation'));
    }

    public function postuler($id) {

        $formation = Formation::findOrFail($id);
        return view('candidats.postuler', compact('formation'));
    }

    public function postulerTraitement(Request $request, $id) {

    }

    // public function candidatureDetail($id) {

    //     $candidature = Candidature::all();
    //     return view('candidats.candidature-detail');
    // }


}
