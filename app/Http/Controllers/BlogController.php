<?php
// Dans BlogController.php
// Dans BlogController.php
namespace App\Http\Controllers;

use App\Models\Blog; // Importez le modèle Blog
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
{
    /*public function index()*/
    {
        // Récupérer tous les articles de la table blogs
        $blogs = Blog::all(); 
        
        // Passer la variable $blogs à la vue
        return view('blog', ['blogs' => $blogs]); 
    }
}
