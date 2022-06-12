<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commentaireEventnps extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'event_id', 'email', 'swb', 'commentaire'
    ];

    public function evenementnp()
    {
        return $this->belongsTo('App\Models\NpEvenements');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
