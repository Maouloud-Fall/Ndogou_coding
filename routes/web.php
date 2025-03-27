<?php

use Illuminate\Support\Facades\Route; // Importation de la classe Route pour définir des routes dans l'application.
use Illuminate\Support\Facades\Auth;  // Importation du module Auth pour gérer l'authentification.
use Illuminate\Http\Request;  // Importation de Request pour manipuler les données des requêtes HTTP.
use App\Http\Controllers\CourseController; // Importation du contrôleur CourseController pour gérer les cours.

// Route pour la page d'accueil par défaut.
Route::get('/', function () {
    return view('welcome'); // Charge et renvoie la vue "welcome".
});

// Route pour afficher le formulaire d'inscription.
Route::get('/inscription', function () {
    return view('inscription'); // Charge et renvoie la vue "inscription".
});

// Route pour gérer la soumission du formulaire d'inscription (méthode POST).
Route::post('/inscription', function (Request $request) {
    // Validation des données soumises par le formulaire.
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',  // Le champ "name" est obligatoire, de type string, et avec une longueur maximale de 255 caractères.
        'email' => 'required|email|unique:users', // Le champ "email" est obligatoire, doit être un email valide et unique dans la table "users".
        'password' => 'required|min:8' // Le champ "password" est obligatoire avec une longueur minimale de 8 caractères.
    ]);

    // Création d'un nouvel utilisateur dans la base de données.
    \App\Models\User::create([
        'name' => $validatedData['name'],         // Enregistre le nom validé.
        'email' => $validatedData['email'],       // Enregistre l'email validé.
        'password' => bcrypt($validatedData['password']), // Hache le mot de passe pour plus de sécurité.
    ]);

    // Redirige l'utilisateur vers la page de connexion avec un message de succès.
    return redirect('/login')->with('success', 'Inscription réussie ! Veuillez vous connecter.');
});

// Route pour afficher le formulaire de connexion.
Route::get('/login', function () {
    return view('login'); // Charge et renvoie la vue "login".
});

// Route pour gérer la soumission du formulaire de connexion.
Route::post('/login', function (Request $request) {
    // Validation des données soumises par le formulaire de connexion.
    $validated = $request->validate([
        'email' => 'required|email',    // Le champ "email" est obligatoire et doit contenir une adresse email valide.
        'password' => 'required|min:8' // Le champ "password" est obligatoire avec une longueur minimale de 8 caractères.
    ]);

    // Tente de connecter l'utilisateur avec les informations fournies.
    if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
        // Redirige vers la page d'accueil après une connexion réussie.
        return redirect('/accueil')->with('success', 'Connexion réussie !');
    }

    // Renvoie un message d'erreur en cas d'échec de connexion.
    return back()->withErrors(['email' => 'Identifiants incorrects.']);
});

// Route pour afficher la page d'accueil (accessible après connexion).
Route::get('/accueil', function () {
    return view('accueil'); // Charge et renvoie la vue "accueil".
});


// Route pour afficher la page À propos.
Route::get('/about', function () {
    return view('about'); // Charge et renvoie la vue "about".
});

// Route pour afficher la page de team.
Route::get('/team', function () {
    return view('team'); // Charge et renvoie la vue "team".
});


// Route pour afficher la page de contact.
Route::get('/contact', function () {
    return view('contact'); // Charge et renvoie la vue "contact".
});

// Route pour gérer la soumission du formulaire de contact (méthode POST).
// Route pour gérer la soumission du formulaire de contact (méthode POST).
Route::post('/contact', function (Request $request) {
    // Validation des données soumises dans le formulaire de contact.
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',  // Le champ "name" est obligatoire et doit être une chaîne de caractères.
        'email' => 'required|email',         // Le champ "email" est obligatoire et doit contenir une adresse email valide.
        'message' => 'required|string|max:2000' // Le champ "message" est obligatoire et doit avoir une longueur maximale de 2000 caractères.
    ]);

    // Insérer les données dans la table "contact".
    //\App\Models\Contact::create($validatedData);

    // Rediriger avec un message de succès.
    return back()->with('success', 'Merci de nous avoir contactés ! Votre message a bien été enregistré.');
});


// Route pour afficher la page de cours.
Route::get('/cours', function () {
    return view('cours'); // Charge et renvoie la vue "team".
});
