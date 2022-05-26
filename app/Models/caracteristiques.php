<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caracteristiques extends Model
{
    use HasFactory;
    protected $fillable = [
        'titreC', 'caract_num', 'caract_intitule', 'caract_libelet'
    ];
}
