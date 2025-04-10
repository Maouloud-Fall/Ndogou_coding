<?php
use Illuminate\Support\Facades\Route; // Importation de la classe Route pour définir des routes dans l'application.
use Illuminate\Support\Facades\Auth;  // Importation du module Auth pour gérer l'authentification.
use Illuminate\Http\Request;  // Importation de Request pour manipuler les données des requêtes HTTP.
use App\Http\Controllers\CourseController; // Importation du contrôleur CourseController pour gérer les cours.
use App\Http\Controllers\HomeController; // Importation du contrôleur HomeController pour gérer la page d'accueil.
use App\Http\Controllers\BlogController; // Importation du contrôleur BlogController pour gérer les blogs.
use App\Http\Controllers\ContactController; // Importation du contrôleur ContactController pour gérer les contacts.
use App\Http\Controllers\Controller; // Importation de la classe de base Controller.
use App\Models\Blog; // Importation du modèle Blog pour interagir avec la base de données des blogs.
use App\Models\User; // Importation du modèle User pour interagir avec la base de données des utilisateurs.
use App\Models\Course; // Importation du modèle Course pour interagir avec la base de données des cours.
use App\Models\Contact; // Importation du modèle Contact pour interagir avec la base de données des contacts.
use App\Models\Comment; // Importation du modèle Comment pour interagir avec la base de données des commentaires.
use App\Models\Like; // Importation du modèle Like pour interagir avec la base de données des likes.

