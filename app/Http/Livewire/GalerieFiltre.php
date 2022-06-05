<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\galeries;
use Livewire\WithPagination;

class GalerieFiltre extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $type = 'Tous', $tous, $batie, $culturel, $traditionel, $sport;
    public function mount()
    {
        $this->tous = "Tous";
        $this->batie = "BATIE";
        $this->culturel = "CULTUREL";
        $this->traditionel = "TRADITIONEL";
        $this->sport = "SPORT";
    }

    public function getGaleriesProperty()
    {
        //dd($this->tous);
        if ($this->type == 'Tous') {
            return  galeries::all();
        } else if ($this->type == 'CULTUREL') {
            //dd($this->type);
            return galeries::where('type', $this->culturel)->get();
        } else if ($this->type == 'TRADITIONEL') {
            //dd($this->type);
            return galeries::where('type', $this->traditionel)->get();
        } else if ($this->type == 'SPORT') {
            //dd($this->type);
            return galeries::where('type', $this->sport)->get();
        } else if ($this->type == 'BATIE') {
            //dd($this->type);
            return galeries::where('type', $this->batie)->get();
        }
    }

    public function render()
    {
        //$this->images = galeries::all()->take(3);
        return view('livewire.galerie-filtre');
    }
}
