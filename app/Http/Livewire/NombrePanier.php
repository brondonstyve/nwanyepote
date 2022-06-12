<?php

namespace App\Http\Livewire;

use App\Models\panier;
use Livewire\Component;

class NombrePanier extends Component
{
    protected $listeners = ['productAdded' => '$refresh'];

    public function getNombreProperty(){
        return panier::whereCompte(auth()->user()->id)->count();
    }

    public function render()
    {
        return view('livewire.nombre-panier');
    }
}
