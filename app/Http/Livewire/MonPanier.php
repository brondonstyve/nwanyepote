<?php

namespace App\Http\Livewire;

use App\Models\panier;
use Illuminate\Support\Collection;
use Livewire\Component;

class MonPanier extends Component
{
    protected $listeners = ['productAdded' => '$refresh'];

    public Collection $qte;

    public function mount()
    {
        $this->fill([
            'qte' => collect([
                ['val' => '', 'id' => '']
            ])
        ]);

        foreach ($this->getPanierProperty() as $key => $value) {
            $this->qte->push(
                ['val' => $value->quantite . '-' . $value->id],
            );
        }
    }

    public function getPanierProperty()
    {
        return panier::join('produits', 'produits.id', 'paniers.produit')
            ->select('paniers.quantite', 'produits.libelle', 'produits.img_principale', 'produits.prix', 'paniers.id', 'produits.id as id_produit')
            ->whereCompte(auth()->user()->id)
            ->get();
    }

    public function remove($key)
    {
        panier::destroy($key);
        $this->emit('productAdded');
    }


    public function updatedQte($val){
        panier::whereId(explode('-',$val)[1])
        ->update([
            'quantite'=>explode('-',$val)[0]
        ]);

        $this->getPanierProperty();
        $this->emit('productAdded');
    }


    public function render()
    {
        return view('livewire.mon-panier');
    }
}
