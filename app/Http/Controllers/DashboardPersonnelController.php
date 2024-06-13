<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPersonnelController extends Controller
{
    public function dashboard()
    {
        $formations = formation::all();


        return view('dashboard', [
            'formations' => $formations,
           
            'user' => Auth::personnel()
        ]);
    }

    public function create()
    {
        return view('create_formation');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'description' => 'required',
            'statut' => 'required|boolean',
            'adresse' => 'required',
            'image' => 'required|url',
        ]);

        $formation = new formation;
        $formation->nom = $request->input('nom');
        $formation->categorie = $request->input('categorie');
        $formation->statut = $request->input('statut');
        $formation->description = $request->input('description');
        $formation->adresse = $request->input('adresse');
        $formation->image = $request->input('image');
        $formation->save();

        return redirect('/dashboard')->with('status', 'formation ajouté avec succès!');
    }

    public function edit($id)
    {
        $formation = formation::findOrFail($id);
        return view('edit_formation', compact('formation'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'description' => 'required',
            'statut' => 'required|boolean',
            'adresse' => 'required',
            'image' => 'required|url',
        ]);

        $formation = Formation::findOrFail($id);
        $formation->nom = $request->input('nom');
        $formation->categorie = $request->input('categorie');
        $formation->description = $request->input('description');
        $formation->adresse = $request->input('adresse');
        $formation->statut = $request->input('statut');
        $formation->image = $request->input('image');
        $formation->save();

        return redirect('/dashboard')->with('status', 'formation modifié avec succès!');
    }

    public function delete($id)
    {
        $formation = formation::findOrFail($id);
        $formation->delete();
        return redirect()->route('dashboard')->with('status', 'formation supprimé avec succès!');
    }
}
