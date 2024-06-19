<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\AppeleCandidature;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class CandidatController extends Controller
{
    public function afficher() {

        $formations = Formation::all();
        return view('candidats.formation', compact('formations'));
    }
    public function index() {

        $candidat = Candidat::find(1);
        // Récupérer les candidatures liées à ce candidat
        $candidatures = AppeleCandidature::where('candidature_id', $candidat->id)->get();
        $formations = Formation::all();
        return view('candidats.index', compact('formations', 'candidatures'));
    }

    public function afficherDetail($id) {

        $formation = Formation::findOrFail($id);
        return view('candidats.detail', compact('formation'));
    }

    // public function postuler($id) {

    //     $formation = Formation::findOrFail($id);
    //     return view('candidats.postuler', compact('formation'));
    // }

    public function postuler($id)
    {
        $candidat = Candidat::find(1);
        $formation = Formation::findOrFail($id);
        return view('candidats.postuler', compact('formation', 'candidat'));
    }



    public function postulerTraitement(Request $request, $id)
    {
        $request->validate([
            'biographie' => 'required|string',
            'motivation' => 'required|string',
            'niveau_etude' => 'required|string|in:Bfem,Baccalauréat,Licence 1,Licence 2,Licence 3,Master',
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);
        // Commenter parce que un problème de middleware avec l'authentification
        // $candidat = Auth::user();
        $candidat = Candidat::find(1);

        // Gestion de l'upload du fichier CV
        if ($request->hasFile('cv')) {
            // Stocker le fichier dans le dossier 'public/cvs'
            $cvPath = $request->file('cv')->store('cvs', 'public');

            // Mettre à jour le chemin du CV dans la table 'candidats'
            $candidat->cv = $cvPath;
            $candidat->save();
        }
        $candidature = new AppeleCandidature();
        $candidature->biographie = $request->biographie;
        $candidature->motivation = $request->motivation;
        $candidature->niveau_etude = $request->niveau_etude;
        $candidature->formation_id = $id;
        $candidature->candidature_id = $candidat->id; // Utiliser l'ID du candidat connecté
        $candidature->save();

        return redirect()->route('candidature_soumise')
                        ->with('success', 'Votre candidature a été soumise avec succès.');
    }

    public function listeCandidatures()
    {
        $candidat = Candidat::find(1);

        // Vérifier si le candidat existe
        if (!$candidat) {
            return redirect()->back()->with('error', 'Candidat non trouvé.');
        }

        // Récupérer les candidatures liées à ce candidat, en incluant les informations de formation
        $candidatures = AppeleCandidature::where('candidature_id', $candidat->id)
                            ->with('formation')
                            ->get();

        return view('candidats.listeCandidatures', compact('candidatures'));
    }



    public function candidatureSoumise() {
        return View('candidats.candidature-soumise');
    }


    public function afficherDetailCandidature($id) {
        $candidature = AppeleCandidature::with('formation')->findOrFail($id);
        return view('candidats.candidature-detail', compact('candidature'));
    }


}
