<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;
    protected $fillable=[
        'codeCom','compte','nom','prenom','email','telephone','adresse','ville','pays','note','typePaiement','montant','montant_total','devise','quantite','produit'
    ];
}
