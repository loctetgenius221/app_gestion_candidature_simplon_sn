<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
use App\Models\AppeleCandidature;
use Illuminate\Support\Facades\Auth;
use App\Mail\CandidatureSoumise;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


class CandidatController extends Controller
{
    public function afficher() {

        $formations = Formation::all();
        return view('candidats.formation', compact('formations'));
    }
    public function index() {

        $candidat = Auth::user();
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
        $candidat = Auth::user();
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
        $candidat = Auth::user();

        // Gestion de l'upload du fichier CV
        if ($request->hasFile('cv')) {
            // Stocker le fichier dans le dossier 'public/cvs'
            $cvPath = $request->file('cv')->store('cvs', 'public');

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

        // Envoi de l'e-mail de confirmation de soumission
        Mail::to($candidat->email)->send(new CandidatureSoumise($candidature));

        return redirect()->route('candidature_soumise')
                        ->with('success', 'Votre candidature a été soumise avec succès.');
    }

    public function listeCandidatures()
    {
        $candidat = Auth::user();

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

        $candidature = AppeleCandidature::with('candidat')->find($id);
        return view('candidats.candidature-detail', compact('candidature'));

    }


    public function afficherCV($id)
    {
        $candidat = Auth::user($id);

        if ($candidat->cv) {
            // Construire le chemin complet vers le fichier CV
            $cvPath = storage_path('app/public/' . $candidat->cv);

            // Vérifier si le fichier existe
            if (file_exists($cvPath)) {
                // Retourner le fichier en réponse
                return response()->file($cvPath);
            } else {
                // Si le fichier n'existe pas, retourner une erreur 404
                abort(404, 'CV non trouvé.');
            }
        } else {
            // Si aucun chemin de CV n'est défini pour ce candidat
            abort(404, 'CV non trouvé.');
        }
    }


}
