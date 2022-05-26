<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\culture;
use App\Models\pageCulture as ModelsCulture;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageCulture extends Component
{

    use WithFileUploads;
    public ModelsCulture  $culture;
    public culture $contenuCulture;
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
        'culture.titre1' => '',
        'culture.description1' => '',

        'contenuCulture.libelle'=> '',
        'contenuCulture.description'=> '',
        'contenuCulture.image'=> '',

    ];

    public function mount()
    {
        $reponse = ModelsCulture::get();
        $this->contenuCulture = culture::make();
        if (sizeOf($reponse) != 0) {
            $this->culture = ModelsCulture::make();
            $this->culture = ModelsCulture::first();
        } else {
            $this->culture = ModelsCulture::make();
        }
    }

    public function updatedImage1()
    {
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function save(){

            $reponse = ModelsCulture::count();
    
            if ($reponse == 0) {
    
    
                ModelsCulture::where([
                    ['id', '<>', 0]
                ])
                    ->delete();
                $this->culture->save();
                $this->message = 'Parramétrage  enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            } else {
    
                $this->culture->save();
                $this->message = 'Parramétrage mis à jour avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            }
    }


    // Contenu de 

    public function saveCulture()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {

            ini_set('memory_limit', '-1');
    
            try {
                if ($this->image1) {
                    $this->contenuCulture->image=null;
                        $this->contenuCulture->image=Image::traitement($this->image1,'jpg','culture');
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
                            'contenuCulture.libelle'=> '',
                            'contenuCulture.description'=> '',
                            'contenuCulture.image'=> '',
                        ]
                    );
                    
                    $this->contenuCulture->save();
                    
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
                            'contenuCulture.libelle'=> '',
                            'contenuCulture.description'=> '',
                            'contenuCulture.image'=> '',
                        ]
                    );

                    $this->contenuCulture->save();
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



    public function getCulturesProperty()
    {
        return culture::get();
    }

    public function delete($id)
    {

        $reponse = culture::find($id);

        try {
            $reponse = culture::destroy($id);
            culture::make();
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

        $this->contenuCulture = culture::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->contenuCulture = culture::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.admin-page-culture');
    }
}
