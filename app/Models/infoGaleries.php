<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoGaleries extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre', 'libelet', 'titreb1', 'libeletb1', 'texteb2', 'titreb2'
    ];
}
