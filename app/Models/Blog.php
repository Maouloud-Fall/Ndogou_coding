<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Définir les attributs qui peuvent être assignés en masse
    protected $fillable = [
        'title',
        'content',
        'author_id',
    ];

    // Exemple de relation avec l'auteur
    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
