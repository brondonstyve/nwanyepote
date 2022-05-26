<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacteInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre_page', 'libelet_page', 'titre_formulaire', 'libelet_formulaire'
    ];
}
