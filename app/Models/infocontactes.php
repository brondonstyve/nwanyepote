<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class infocontactes extends Model
{
    use HasFactory;
    protected $fillable = [
        'adresse1', 'adresse2', 'numero1', 'numero2', 'email1', 'email2', 'youtube', 'facebook', 'twiter', 'instagramme'
    ];
}
