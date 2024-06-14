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
        $formations = Formation::paginate(4);
        $personnels = Personnel::all();

        $formationsTotal = Formation::count();
        $formationAVenir = Formation::where('statut', 'a venir')->count();

        return view('personnels.dashboard', [
            'formationsTotal' => $formationsTotal,
            'formationAVenir' => $formationAVenir,
        ], compact('formations', 'personnels'));
    }
    public function gestionFomation()
    {
        $formations = Formation::latest()->paginate(4);
        $personnels = Personnel::all();

        $formationsTotal = Formation::count();
        $formationAVenir = Formation::where('statut', 'a venir')->count();

        return view('personnels.gestionFormation', [
            'formationsTotal' => $formationsTotal,
            'formationAVenir' => $formationAVenir,
        ], compact('formations', 'personnels'));
    }
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
            'statut' => 'required',
            'critere_de_validation' => 'required',
        ]);

        Formation::create($request->all());

        return view('personnels/gestionFormation')->with('success', 'La formation a bien été ajoutée.');
    }

    

    public function CreationFomation(){
        $formations = Formation::all();
        $personnels = Personnel::all();
        return View('personnels/CreationFomation', compact('formations', 'personnels'));
    }
   

    public function CreationFomationTraitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'debouches' => 'required',
            'statut' => 'required',
            'critere_de_validation' => 'required',

        ]);

        Formation::create($request->all());

        return view ('personnels/gestionFormation')->with('success', 'La formation a bien été ajoutée.');
    }
    public function listFomation(){
        $formations = Formation::all();

        return view('personnels.listeFormation', compact('formations'));
    }

    public function detailFomation(Formation $formation) {
        return view('personnels.detailFormation', compact('formation'));
    }


    public function modificationFormation(Formation $formation ) {
        $personnels = Personnel::all(); 

        return view('personnels.modificationFormation', compact('formation', 'personnels'));
    }
    
    public function modificationFormationTraitement(Request $request, Formation $formation) {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'debouches' => 'required',
            'statut' => 'required',
            'critere_de_validation' => 'required',
        ]);
    
        $formation->update($request->all());
    
        return redirect()->route('personnels.listFormation');
    }
    
    
}
