<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partenaires extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo', 'nom_part', 'services', 'social_media1', 'social_media2', 'social_media3', 'link1', 'link2', 'link3'
    ];
}
