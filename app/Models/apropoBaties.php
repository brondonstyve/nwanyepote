<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apropoBaties extends Model
{
    use HasFactory;
    protected $fillable = [
        'titreab', 'text1ab', 'text2ab', 'imageab', 'lireplusab', 'modal'
    ];
}
