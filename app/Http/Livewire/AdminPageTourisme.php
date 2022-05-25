<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\Tourisme;
use App\Models\pageTourisme as ModelsTourisme;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageTourisme extends Component
{

    use WithFileUploads;
    public ModelsTourisme  $tourisme;
    public Tourisme $contenuTourisme;
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
        'tourisme.titre1' => '',
        'tourisme.description1' => '',

        'contenuTourisme.libelle'=> '',
        'contenuTourisme.description'=> '',
        'contenuTourisme.localisation'=> '',
        'contenuTourisme.image'=> '',

    ];

    public function mount()
    {
        $reponse = ModelsTourisme::get();
        $this->contenuTourisme = Tourisme::make();
        if (sizeOf($reponse) != 0) {
            $this->tourisme = ModelsTourisme::make();
            $this->tourisme = ModelsTourisme::first();
        } else {
            $this->tourisme = ModelsTourisme::make();
        }
    }

    public function updatedImage1()
    {
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function save(){

            $reponse = ModelsTourisme::count();
    
            if ($reponse == 0) {
    
    
                ModelsTourisme::where([
                    ['id', '<>', 0]
                ])
                    ->delete();
                $this->tourisme->save();
                $this->message = 'Parramétrage  enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            } else {
    
                $this->tourisme->save();
                $this->message = 'Parramétrage mis à jour avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            }
    }


    // Contenu de tourismes

    public function saveTourisme()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {

            ini_set('memory_limit', '-1');
    
            try {
                if ($this->image1) {
                    $this->contenuTourisme->image=null;
                        $this->contenuTourisme->image=Image::traitement($this->image1,'jpg','tourisme');
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
                            'contenuTourisme.libelle'=> '',
                            'contenuTourisme.description'=> '',
                            'contenuTourisme.localisation'=> '',
                            'contenuTourisme.image'=> '',
                        ]
                    );
                    
                    $this->contenuTourisme->save();
                    
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
                            'contenuTourisme.libelle'=> '',
                            'contenuTourisme.description'=> '',
                            'contenuTourisme.localisation'=> '',
                            'contenuTourisme.image'=> '',
                        ]
                    );

                    $this->contenuTourisme->save();
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



    public function getTourismesProperty()
    {
        return Tourisme::get();
    }

    public function delete($id)
    {

        $reponse = Tourisme::find($id);

        try {
            $reponse = Tourisme::destroy($id);
            Tourisme::make();
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

        $this->contenuTourisme = Tourisme::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->contenuTourisme = Tourisme::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.admin-page-tourisme');
    }
}
