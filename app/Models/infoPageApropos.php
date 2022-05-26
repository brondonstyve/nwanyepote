<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoPageApropos extends Model
{
    use HasFactory;
    protected $fillable = [
        'imageIf', 'grand_titre', 'titre1', 'titre2', 'titre3'
    ];
}
