<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\pageSport as Modelssport;
use App\Models\sport as contenuesport;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageSport extends Component
{

    use WithFileUploads;
    public Modelssport  $sport;
    public contenuesport $contenuSport;
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
        'sport.titre1' => '',
        'sport.description1' => '',

        'contenuSport.libelle'=> '',
        'contenuSport.description'=> '',
        'contenuSport.auteur'=> '',
        'contenuSport.image'=> '',

    ];

    public function mount()
    {
        $reponse = Modelssport::get();
        $this->contenuSport = contenuesport::make();
        if (sizeOf($reponse) != 0) {
            $this->sport = Modelssport::make();
            $this->sport = Modelssport::first();
        } else {
            $this->sport = Modelssport::make();
        }
    }

    public function updatedImage1()
    {
        if (sizeOf($this->image1)>3) {
            $this->image1=null;
            $this->fill(['image1'=>null]);
            session()->flash('image1','Vous ne pouvez télécharger que 3 images maximun');
        }
    }

    public function save(){

            $reponse = Modelssport::count();
    
            if ($reponse == 0) {
    
    
                Modelssport::where([
                    ['id', '<>', 0]
                ])
                    ->delete();
                $this->sport->save();
                $this->message = 'Parramétrage  enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            } else {
    
                $this->sport->save();
                $this->message = 'Parramétrage mis à jour avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            }
    }


    // Contenu de sports

    public function saveSport()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {

            ini_set('memory_limit', '-1');
    
            try {
                if ($this->image1) {
                    $this->contenuSport->image=null;
                    foreach ($this->image1 as $key => $value) {
                        $this->contenuSport->image=$this->contenuSport->image.'<-->'.Image::traitement($value,'jpg','sport');
                    }
                    
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
                            'contenuSport.libelle'=> '',
                            'contenuSport.description'=> '',
                            'contenuSport.auteur'=> '',
                            'contenuSport.image'=> '',
                        ]
                    );
                    $this->contenuSport->save();
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
                            'contenuSport.libelle'=> '',
                            'contenuSport.description'=> '',
                            'contenuSport.auteur'=> '',
                            'contenuSport.image'=> '',
                        ]
                    );

                    $this->contenuSport->save();
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



    public function getsportsProperty()
    {
        return contenuesport::get();
    }

    public function delete($id)
    {

        $reponse = contenuesport::find($id);

        try {
            $reponse = contenuesport::destroy($id);
            contenuesport::make();
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

        $this->contenuSport = contenuesport::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->contenuSport = contenuesport::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.admin-page-sport');
    }
}
