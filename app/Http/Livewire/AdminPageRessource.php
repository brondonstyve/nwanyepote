<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\contenueressource;
use App\Models\ressource as ModelsRessource;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageRessource extends Component
{

    use WithFileUploads;
    public ModelsRessource $ressource;
    public contenueressource $contenuRessource;
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
        'ressource.titre1' => '',
        'ressource.description1' => '',
        'ressource.titre2' => '',
        'ressource.description2' => '',
        'ressource.question1' => '',
        'ressource.reponse1' => '',
        'ressource.question2' => '',
        'ressource.reponse2' => '',
        'ressource.question3' => '',
        'ressource.reponse3' => '',
        'ressource.description3' => '',

        'contenuRessource.libelle'=> '',
        'contenuRessource.description'=> '',
        'contenuRessource.lien'=> '',

    ];

    public function mount()
    {
        $reponse = ModelsRessource::get();
        $this->contenuRessource = contenueressource::make();
        if (sizeOf($reponse) != 0) {
            $this->ressource = ModelsRessource::make();
            $this->ressource = ModelsRessource::first();
        } else {
            $this->ressource = ModelsRessource::make();
        }
    }

    public function updatedImage1()
    {
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function save(){

        ini_set('memory_limit', '-1');
    
            try {
                if ($this->image1) {
                    $this->ressource->image1=Image::traitement($this->image1,'jpg','ressources');
                    
                }
            } catch (\Throwable $th) {
                $this->message='erreur lors du traitement des images.';
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
                $this->erreur=true;
                $this->mount();
        }

        if (!$this->erreur) {
            $reponse = ModelsRessource::count();
    
            if ($reponse == 0) {
    
    
                ModelsRessource::where([
                    ['id', '<>', 0]
                ])
                    ->delete();
                $this->ressource->save();
                $this->message = 'Parramétrage  enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            } else {
    
                $this->ressource->save();
                $this->message = 'Parramétrage mis à jour avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            }
        }
    }


    // Contenu de ressources

    public function saveRes()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {


            if ($this->modification == null) {

                try {
                    $this->validate(
                        [
                            'contenuRessource.libelle'=> '',
                            'contenuRessource.description'=> '',
                            'contenuRessource.lien'=> '',
                        ]
                    );
                    $this->contenuRessource->save();
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
                            'contenuRessource.libelle'=> '',
                            'contenuRessource.description'=> '',
                            'contenuRessource.lien'=> '',
                        ]
                    );

                    $this->contenuRessource->save();
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



    public function getRessourcesProperty()
    {
        return contenueressource::get();
    }

    public function delete($id)
    {

        $reponse = contenueressource::find($id);

        try {
            $reponse = contenueressource::destroy($id);
            contenueressource::make();
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

        $this->contenuRessource = contenueressource::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->contenuRessource = contenueressource::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.admin-page-ressource');
    }
}
