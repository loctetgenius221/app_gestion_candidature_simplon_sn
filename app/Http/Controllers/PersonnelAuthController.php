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
        return view('personnels/login');
    }

    // Méthode de connexion de l'utilisateur
    public function login(Request $request)
    {
        $credentials = $request->only('e_mail', 'mot_de_passe');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        return redirect('/')->withErrors('Identifiant ou mot de passe incorrect');
    }

    // Méthode de déconnexion de l'utilisateur
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Méthode d'affichage du formulaire
    public function showRegistrationForm()
    {
        return view('personnels.register');
    }

    // Méthode d'enregistrement de l'utilisateur sur la base de données
    public function register(Request $request)
    {


        // Handle file uploads
        $imagePath = $request->file('image')->store('images', 'public');

        // Create new Candidat
        Personnel::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'adresse' => $request->adresse,
            'e_mail' => $request->e_mail,
            'telephone' => $request->telephone,
            'image' => $imagePath,
            'mot_de_passe' => Hash::make($request->mot_de_passe),
        ]);

        return redirect('personnel-login');
    }
}
