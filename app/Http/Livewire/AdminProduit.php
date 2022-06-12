<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\collection;
use App\Models\produit;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AdminProduit extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme='bootstrap';
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public $messageMod;
    public $modification=false;
    public $liste=true;
    public produit $produit;
    public $image;
    public $supp=null;
    public $urlSeeImage;
    public $idVue;
    public $service;
    

    protected $rules=[
        'produit.collection'=>'required',
        'produit.libelle'=>'',
        'produit.marque'=>'',
        'produit.prix'=>'',
        'produit.etoile'=>'',
        'produit.quantite'=>'',
        'produit.image'=>'',
        'produit.couleur'=>'',
        'produit.description'=>'',
        'produit.titreSeo'=>'',
        'produit.descriptionSeo'=>'',
    ];

    public function mount(){

        $this->produit=produit::make();
        $this->produit->marque='Nwanyepote';
    }

    public function new(){
        $this->liste=false; 
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
    }

    public function updatedImage(){
        $this->validate([
            'image.*' => 'image|max:100000', // 1MB Max
        ]);
        if (!$this->modification) {
            
            if (sizeOf($this->image)>5) {
                $this->image=null;
                $this->fill(['image'=>null]);
                session()->flash('image','Vous ne pouvez télécharger que 5 images maximun');
            }
            
        }
        
        
    }

    public function getCollectionProperty(){
        return collection::select('id','libelle')
        ->get();
    }

    public function save(){

        ini_set('memory_limit', '-1');

        $name='';
        $principal='';
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;

        if ($this->modification) {
            //dd($this->produit->image);

            if ($this->image) {
                try {
                    foreach ($this->image as $key => $value) {
                    $name=$this->produit->image;
                    $name=$name.'->'.Image::traitement($this->image[$key],'png','produit');
                    
                   }
               } catch (\Throwable $th) {
                   $this->message='erreur lors de l\'enregistrement des images.';
                   $this->showSuccesNotification = false;
                   $this->showErrorNotification = true;
               }

               try {
                $this->produit->image=$name;
                $this->produit->save();
                $this->produit=produit::make();
    
                $this->message='produit Modifié avec succès.';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->modification=false;
                $this->image=null;
                $this->liste=true;
    
            } catch (\Throwable $th) {
                $this->message='erreur lors de la modification du produit.';
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
            }
    
            }else {
                try {
                    $this->produit->save();
                    $this->produit=produit::make();

        
                    $this->message='produit Modifié avec succès.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->modification=false;
                    $this->image=null;
                    $this->liste=true;
        
                } catch (\Throwable $th) {
                    $this->message='erreur lors de la modification du produit.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                }
            }
            

        } else {

        try {
            
             foreach ($this->image as $key => $value) {
                 
             $name=$name.'->'.Image::traitement($this->image[$key],'png','produit');
             if($key==0){
                $this->produit->img_principale=explode('->',$name)[1];
             }
            }
        } catch (\Throwable $th) {
            $this->message='erreur lors de l\'enregistrement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }


        

        try {

            $this->produit->image=$name;
            $this->produit->save();
            $this->produit=produit::make();

            $this->message='produit ajouté avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
            $this->modification=false;
            $this->image=null;
            $this->liste=true;

        } catch (\Throwable $th) {
            $this->message=$th.'erreur lors de l\'enregistrement du produit.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
        
        }

    }


    public function getListProjectProperty(){
        return produit::orderBy('id','desc')
        ->paginate(8);
    }

    public function delete($id){
       try {
            $reponse=produit::find($id);
            produit::destroy($id);

            $newProjectImages=explode('->',$reponse->image);
            
            foreach ($newProjectImages as $key => $value) {
                if ($key>0 && $value!=$id ) {
                    File::delete(public_path("/app/produit/$value"));
                }
            }

            

            $this->message='produit supprimé avec succès.';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
       } catch (\Throwable $th) {
            $this->message='erreur lors de la suppression du produit.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
       }
    }

    public function voir($id){
        $this->produit=produit::find($id);
        $this->liste=false;
        $this->modification=true;
    }

    public function annuler(){

        
        $this->produit=produit::make();
        $this->liste=true;
        $this->modification=false;
        $this->showSuccesNotification = false;
        $this->showErrorNotification = false;
        $this->image = null;

    }

    public function removeImg($id){


        $newProjectImages=explode('->',$this->produit->image);

        if ($this->produit->img_principale==$id) {
            $this->message='Erreur! Impossible de supprimer l\'image principale';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        } else {
            
        if (sizeOf($newProjectImages)==2) {
            $this->message='Erreur! Vous ne pouvez pas supprimer la dernière image';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }else {
            $name='';
        foreach ($newProjectImages as $key => $value) {
            if ($key>0 && $value!=$id ) {
                $name=$name.'->'.$value;

            }
        }

        File::delete(public_path("/app/produit/$id"));
        $this->produit->image=$name;
        $this->produit->save();
        }
        }

    }

    public function getCollectionsProperty(){
        return collection::select('id','libelle')
        ->get();
    }


    public function seeImage($id,$idP){
        $this->urlSeeImage=$id;
        $this->idVue=$idP;
       
    }

    public function definrP($id){
        $this->produit->img_principale=$id;
        $this->produit->save();
        $this->message='image principal modifié avec succès';
        $this->showSuccesNotification = true;
        $this->showErrorNotification = false;
    }

    public function maisonPrinc($id,$service){
        //flex
    }

    public function updateService($service){
        $this->resetPage();
        $this->service=$service;
    }

    public function render()
    {
        return view('livewire.admin-produit');
    }
}
