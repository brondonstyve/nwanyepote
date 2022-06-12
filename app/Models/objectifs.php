<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objectifs extends Model
{
    use HasFactory;
    protected $fillable = [
        'titreOb', 'objectif_num', 'objectif_intitule', 'objectif_libelet', 'imageOb'
    ];
}
