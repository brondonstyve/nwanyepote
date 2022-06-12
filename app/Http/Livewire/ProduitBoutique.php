<?php

namespace App\Http\Livewire;

use App\Models\collection;
use App\Models\panier;
use App\Models\produit;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class ProduitBoutique extends Component
{

    public $collection = "Tout";
    public $etoile;
    public $prix = false;
    public $prix1;
    public $prix2;
    public $message;

    public function getCollectionsProperty()
    {
        return collection::select('id', 'libelle')
            ->get();
    }

    public function getCollectTypeProperty()
    {
        return DB::table('produits')
            ->join('collections', 'collections.id', 'produits.collection')
            ->select(DB::raw('count(produits.collection) as nombre'), 'produits.collection', 'collections.libelle')
            ->groupBy('produits.collection', 'collections.libelle')
            ->get();
    }

    public function updatedEtoile()
    {
        $this->collection = "Tout";
        $this->prix = false;
    }

    public function updatedCollection()
    {
        $this->etoile = null;
        $this->prix = false;
    }

    public function withPrice($prix1, $prix2)
    {
        $this->prix = true;
        $this->prix1 = $prix1;
        $this->prix2 = $prix2;
    }

    public function updatedPrix2()
    {
        if ($this->prix1 <= $this->prix2) {
            $this->message =null;
            return produit::join('collections', 'collections.id', 'produits.collection')
                ->whereBetween('produits.prix', [$this->prix1, $this->prix2])
                ->select('produits.id', 'produits.libelle', 'produits.prix', 'produits.img_principale', 'collections.libelle as libelle_collection', 'produits.etoile')
                ->paginate(12);
        } else {
            $this->message = 'Le prix 1 doit être inférieur au prix 2';
        }
    }

    public function getProduitsProperty()
    {

        if ($this->prix == true) {

            return produit::join('collections', 'collections.id', 'produits.collection')
                ->whereBetween('produits.prix', [$this->prix1, $this->prix2])
                ->select('produits.id', 'produits.libelle', 'produits.prix', 'produits.img_principale', 'collections.libelle as libelle_collection', 'produits.etoile')
                ->paginate(12);
        } else {
            if ($this->etoile == null) {
                if ($this->collection === "Tout") {
                    return produit::join('collections', 'collections.id', 'produits.collection')
                        ->select('produits.id', 'produits.libelle', 'produits.prix', 'produits.img_principale', 'collections.libelle as libelle_collection', 'produits.etoile')
                        ->paginate(12);
                } else {
                    return produit::join('collections', 'collections.id', 'produits.collection')
                        ->where([
                            ['produits.collection', $this->collection]
                        ])
                        ->select('produits.id', 'produits.libelle', 'produits.prix', 'produits.img_principale', 'collections.libelle as libelle_collection', 'produits.etoile')
                        ->paginate(12);
                }
            } else {
                if ($this->collection === "Tout") {
                    return produit::join('collections', 'collections.id', 'produits.collection')
                        ->where([
                            ['produits.etoile', $this->etoile]
                        ])
                        ->select('produits.id', 'produits.libelle', 'produits.prix', 'produits.img_principale', 'collections.libelle as libelle_collection', 'produits.etoile')
                        ->paginate(12);
                }
            }
        }
    }

    public function panier($idProduit){
        
        if (auth()->guest()) {
            session()->flash('error_connexion','Veuillez vous connecter avant d\'enegistrer au panier. si vous n\'avez pas de compte, <a href="/creer-compte">cliquez ici pour créer un.</a>');
            return redirect('/connexion');
        } else {
            $reponse=panier::whereCompteAndProduit(auth()->user()->id,$idProduit)->get();
           if (sizeOf($reponse)>=1) {
            $this->dispatchBrowserEvent(
                'alert',
                [
                'type' => 'existe',  
                'message' =>  "Ce produit existe déja dans votre panier."
                ]
            );
            
           } else {
               try {
                $reponse=panier::create([
                    'compte'=>auth()->user()->id,
                    'produit'=>$idProduit,
                    'quantite'=>1,
                ]);
                $reponse=panier::join('produits','produits.id','paniers.produit')
                ->select('paniers.id','produits.libelle','produits.prix','paniers.quantite','produits.img_principale')
                ->where([
                    ['paniers.produit',$idProduit]
                ])
                ->first();
                
                $this->dispatchBrowserEvent(
                    'alert',
                    [
                    'type' => 'success',  
                    'message' => $reponse->libelle,
                    ]
                );
                $this->emit('productAdded');
               } catch (\Throwable $th) {
                $this->dispatchBrowserEvent(
                    'alert',
                    [
                    'type' => 'danger',  
                    'message' =>  "$th.Erreur lors de l'enregistrement du produit."
                    ]
                );
               }
            

           }
    }
}



    public function render()
    {
        return view('livewire.produit-boutique');
    }
}
