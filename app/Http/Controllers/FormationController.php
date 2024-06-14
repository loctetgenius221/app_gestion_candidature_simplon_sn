<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Models\Personnel;
use App\Models\Formation;

class FormationController extends Controller
{
    public function index(){
        $formations = Formation::all();
        $personnels = Personnel::all();
        return view('formations/show', compact('formations', 'personnels'));
    }

    public function create(){
        $formations = Formation::all();
        $personnels = Personnel::all();

        return View('formations/create', compact('formations', 'personnels'));
    }

    public function store(Request $request){
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'debouches' => 'required',
            'date_de_debut' => 'required',
            'date_de_fin' => 'required','statut' => 'required',
            'critere_de_validation' => 'required',

        ]);

        Formation::create($request->all());

        return view ('formations/show')->with('success', 'La formation a bien été ajoutée.');
    }


    


    public function update(){

    }

    public function delete(){

    }
}