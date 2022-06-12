<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminCollection extends Component
{


    use WithFileUploads;
    public collection $collection;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $messsage;
    public $erreur=false;
    public $image1;
    public $supp;
    public $modification;


    protected $rules = [
        'collection.libelle'=> '',
        'collection.description'=> '',
        'collection.image'=> '',

    ];

    public function mount()
    {
        $this->collection = collection::make();
    }

    public function updatedImage1()
    {
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }


    // Contenu de 

    public function save()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {

            ini_set('memory_limit', '-1');
    
            try {
                if ($this->image1) {
                    $this->collection->image=null;
                        $this->collection->image=Image::traitement($this->image1,'jpg','collection');
                }

            } catch (\Throwable $th) {
                $this->message='erreur lors du traitement des images.';
                $this->showSuccesNotification1 = false;
                $this->showErrorNotification1 = true;
                $this->erreur=true;
                $this->mount();
        }

        if(!$this->erreur){
            if ($this->modification == null) {

                try {
                    $this->validate(
                        [
                            'collection.libelle'=> '',
                            'collection.description'=> '',
                            'collection.image'=> '',
                        ]
                    );
                    
                    $this->collection->save();
                    
                    $this->mount();

                    $this->message = 'Enregistrement ajouté avec succès.';
                    $this->showSuccesNotification1 = true;
                    $this->showErrorNotification1 = false;
                    $this->modification = null;
                    $this->image1 = null;
                } catch (\Throwable $th) {
                    $this->showErrorNotification1 = true;
                    $this->showSuccesNotification1 = false;

                    $this->message = $th . 'Erreur lors de l\'enregistrement.Veuillez recommencer!';
                }
            } else {


                try {

                    $this->validate(
                        [
                            'collection.libelle'=> '',
                            'collection.description'=> '',
                            'collection.image'=> '',
                        ]
                    );

                    $this->collection->save();
                    $this->mount();
                    $this->message = 'Enregistrement modifiée avec succès.';
                    $this->showSuccesNotification1 = true;
                    $this->showErrorNotification1 = false;
                    $this->modification = null;
                    $this->image1 = null;
                } catch (\Throwable $th) {
                    $this->showErrorNotification1 = true;
                    $this->showSuccesNotification1 = false;

                    $this->message = 'Erreur lors de la modification.Veuillez recommencer!';
                }
            }
        }

        }
    }



    public function getCollectionsProperty()
    {
        return collection::get();
    }

    public function delete($id)
    {

        $reponse = collection::find($id);

        try {
            $reponse = collection::destroy($id);
            collection::make();
            $this->message = 'Enregistrement supprimée avec succès.';
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
        } catch (\Throwable $th) {
            $this->showErrorNotification1 = true;
            $this->showSuccesNotification1 = false;
            $this->message = 'Erreur lors de la suppression!';
        }
    }

    public function update($id)
    {

        $this->collection = collection::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->collection = collection::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }
    
    public function render()
    {
        return view('livewire.admin-collection');
    }
}
