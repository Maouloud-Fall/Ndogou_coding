<?php
namespace App\Http\Controllers; // Déclaration de l'espace de noms

use Illuminate\Support\Facades\Route; // Importation de la classe Route pour définir des routes dans l'application.
use Illuminate\Support\Facades\Auth;  // Importation du module Auth pour gérer l'authentification.
use Illuminate\Http\Request;  // Importation de Request pour manipuler les données des requêtes HTTP.
use App\Http\Controllers\CourseController; // Importation du contrôleur CourseController pour gérer les cours.
use App\Http\Controllers\BlogController; // Importation du contrôleur BlogController pour gérer les blogs.

class HomeController extends HomeController
{
    public function index()
    {
        // Retourne la vue appelée "welcome"
        return view('welcome');
    }
}