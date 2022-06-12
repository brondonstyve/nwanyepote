<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infoEvenements extends Model
{
    use HasFactory;
    protected $fillable = [
        'grang_titre', 'libelet', 'titre1', 'libelet1', 'titre2', 'libelet2', 'titre3'
    ];
}
