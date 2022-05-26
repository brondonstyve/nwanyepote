<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class npEvenements extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagenp', 'image_principal', 'titres', 'edition', 'titres1', 'libelet1a', 'libelet1b', 'libelet1c', 'personne_importantes', 'titres2', 'libelet2a', 'libelet2b', 'directeur_publication', 'apropoDP', 'imagedp'
    ];

    public function commentairenp()
    {
        return $this->hasMany(App\Model\CommentaireEventnps::class, 'foreign_key', 'local_key');
    }
}
