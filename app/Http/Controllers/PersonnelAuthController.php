<?php
namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonnelAuthController extends Controller
{
    // Méthode d'affichage du formulaire de connexion
    public function showLoginForm()
    {
        return view('personnels.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'e_mail' => 'required|email',
            'mot_de_passe' => 'required',
        ]);

        $personnel = Personnel::where('e_mail', $request->e_mail)->first();

        if ($personnel && Hash::check($request->mot_de_passe, $personnel->mot_de_passe)) {
            Auth::guard('web')->login($personnel);
            return redirect()->intended('dashboard-personnel');
        }

        return back()->withErrors([
            'e_mail' => 'Les informations d\'identification ne correspondent pas.',
        ]);
    }
    // Méthode de déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect('/candidat-login');
    }

    // Méthode d'affichage du formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('personnels.register');
    }

    // Méthode d'enregistrement de l'utilisateur sur la base de données
    public function register(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'e_mail' => 'required|string|email|max:255|unique:personnels',
            'telephone' => 'required|string|max:20',
            'mot_de_passe' => 'required|string|min:8|confirmed',
        ]);

        // Create new Personnel
        Personnel::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'e_mail' => $request->e_mail,
            'telephone' => $request->telephone,
            'mot_de_passe' => Hash::make($request->mot_de_passe),
        ]);

        return redirect()->route('dashboard');
    }
}
