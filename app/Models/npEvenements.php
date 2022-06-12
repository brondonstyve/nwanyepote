<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class npEvenements extends Model
{
    use HasFactory;
    protected $fillable = [
        'imagenp',
        'video1',
        'image_principal',
        'titres',
        'titres1',
        'libelet1a',
        'libelet1b',
        'libelet1c',
        'directeur_publication',
        'apropoDP',
        'imagedp',
        'imagenp2',
        'video2',
        'titres2',
        'libelet2a',
        'libelet2b',
        'libelet2c',
        'imagenp3',
        'video3',
        'titres3',
        'libelet3a',
        'libelet3b',
        'libelet3c',
        'imagenp4',
        'video4',
        'titres4',
        'libelet4a',
        'libelet4b',
        'libelet4c',
        'imagenp5',
        'video5',
        'titres5',
        'libelet5a',
        'libelet5b',
        'libelet5c',
    ];

    public function commentairenp()
    {
        return $this->hasMany(App\Model\CommentaireEventnps::class, 'foreign_key', 'local_key');
    }
}
