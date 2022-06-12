<?php

namespace App\Http\Livewire;

use App\Models\commentairesProduit;
use App\Models\panier;
use App\Models\produit;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DetailProduit extends Component
{
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public commentairesProduit $commentaire;


    public $idProduct;
    public $qte = 1;

    protected $rules = [
        'commentaire.nom' => '',
        'commentaire.cweb' => '',
        'commentaire.email' => '',
        'commentaire.etoile' => '',
        'commentaire.comment' => '',
    ];

    public function mount($id)
    {
        $this->idProduct = decrypt($id);
        $this->commentaire = commentairesProduit::make();
    }

    public function getProduitProperty()
    {
        return produit::join('collections', 'collections.id', 'produits.collection')
            ->select('produits.libelle', 'produits.description', 'produits.etoile', 'produits.img_principale', 'produits.image', 'produits.prix', 'produits.id', 'collections.libelle as lib_collection', 'collections.id as id_collection')
            ->where([
                ['produits.id', $this->idProduct]
            ])
            ->first();
    }

    public function panier($idProduit)
    {

        if (auth()->guest()) {
            session()->flash('error_connexion', 'Veuillez vous connecter avant d\'enegistrer au panier. si vous n\'avez pas de compte, <a href="/creer-compte">cliquez ici pour créer un.</a>');
            return redirect('/connexion');
        } else {
            $reponse = panier::whereCompteAndProduit(auth()->user()->id, $idProduit)->get();
            if (sizeOf($reponse) >= 1) {
                $this->dispatchBrowserEvent(
                    'alert',
                    [
                        'type' => 'existe',
                        'message' =>  "Ce produit existe déja dans votre panier."
                    ]
                );
            } else {
                try {
                    $reponse = panier::create([
                        'compte' => auth()->user()->id,
                        'produit' => $idProduit,
                        'quantite' => $this->qte,
                    ]);
                    $reponse = panier::join('produits', 'produits.id', 'paniers.produit')
                        ->select('paniers.id', 'produits.libelle', 'produits.prix', 'paniers.quantite', 'produits.img_principale')
                        ->where([
                            ['paniers.produit', $idProduit]
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


    public function panier1($idProduit)
    {

        if (auth()->guest()) {
            session()->flash('error_connexion', 'Veuillez vous connecter avant d\'enegistrer au panier. si vous n\'avez pas de compte, <a href="/creer-compte">cliquez ici pour créer un.</a>');
            return redirect('/connexion');
        } else {
            $reponse = panier::whereCompteAndProduit(auth()->user()->id, $idProduit)->get();
            if (sizeOf($reponse) >= 1) {
                $this->dispatchBrowserEvent(
                    'alert',
                    [
                        'type' => 'existe',
                        'message' =>  "Ce produit existe déja dans votre panier."
                    ]
                );
            } else {
                try {
                    $reponse = panier::create([
                        'compte' => auth()->user()->id,
                        'produit' => $idProduit,
                        'quantite' => 1,
                    ]);
                    $reponse = panier::join('produits', 'produits.id', 'paniers.produit')
                        ->select('paniers.id', 'produits.libelle', 'produits.prix', 'paniers.quantite', 'produits.img_principale')
                        ->where([
                            ['paniers.produit', $idProduit]
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

    public function getProduitSimProperty()
    {
        return produit::join('collections', 'collections.id', 'produits.collection')
            ->select('produits.libelle', 'produits.description', 'produits.etoile', 'produits.img_principale', 'produits.image', 'produits.prix', 'produits.id', 'collections.libelle as lib_collection')
            ->where([
                ['produits.collection', $this->getProduitProperty()->id_collection]
            ])
            ->get();
    }


    public function save(){
         try {
             $this->commentaire->produit=$this->idProduct;
             $this->commentaire->save();
             $this->message='Commentaire et avis enregistré avec succès';
             $this->showSuccesNotification=true;
             $this->showErrorNotification=false;
             $this->commentaire = commentairesProduit::make();
         } catch (\Throwable $th) {
             $this->message=$th.'Erreur lors de l\'enregistrement du commentaire';
             $this->showSuccesNotification=false;
             $this->showErrorNotification=true;
         }
         
     }

     public function getListCommentProperty(){
        return DB::table('commentaires_produits')
                        ->whereProduit($this->idProduct)
                        ->get();
    }

    public function getMoyProperty(){
         return DB::table('commentaires_produits')
            ->select(DB::raw('avg(etoile) as moyenne'))
            ->where([
                ['produit',$this->idProduct]
            ])
            ->get();
    }


    public function render()
    {
        return view('livewire.detail-produit');
    }
}
