<?php
namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthCandidatController extends Controller
{
    // Méthode d'affichage du formulaire de connexion
    public function showLoginForm()
    {
        return view('candidats/auth/login');
    }

    // Méthode de connexion de l'utilisateur
    public function login(Request $request)
{
    // Récupérer les identifiants depuis la requête
    $credentials = $request->only('email', 'mot_de_passe');
    
    // Essayer de connecter l'utilisateur avec les identifiants fournis
    if (Auth::attempt($credentials)) {
        // Récupérer l'utilisateur authentifié
        $user = Auth::user();

        // Stocker des informations dans la session
        Session::put('user_id', $user->id);
        Session::put('user_email', $user->email);

        // Rediriger vers le tableau de bord
        return redirect()->intended('dashboard');
    }

    // Si l'authentification échoue, rediriger vers le tableau de bord candidat avec un message d'erreur
    return redirect('dashboard_candidat')->withErrors('Identifiant ou mot de passe incorrect');
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

        return view('candidats/auth/register');

    }

    // Méthode d'enregistrement de l'utilisateur sur la base de données
    public function register(Request $request)
    {
       

        // Handle file uploads
        $imagePath = $request->file('image')->store('images', 'public');
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // Create new Candidat
        Candidat::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'date_de_naissance' => $request->date_de_naissance,
            'lieu_de_naissance' => $request->lieu_de_naissance,
            'adresse' => $request->adresse,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'image' => $imagePath,
            'cv' => $cvPath,
            'mot_de_passe' => Hash::make($request->mot_de_passe),
        ]);

        return redirect('candidat-login');
main
    }
}
