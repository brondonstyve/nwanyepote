<?php

namespace App\Http\Livewire;

use App\Models\galeries;
use Livewire\Component;

class GalerieFiltre extends Component
{
    public $type = 'Tous';

    public function getGaleriesProperty()
    {
        //dd($this->tous);
        if ($this->type == 'Tous') {
            return  galeries::get();
        } else {
            return  galeries::whereType($this->type)
                ->get();
        }
    }

    public function render()
    {
        //$this->images = galeries::all()->take(3);
        return view('livewire.galerie-filtre');
    }
}
