<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\evenementparticipatif as ModelsEvenementparticipatif;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminEvenementParticipatif extends Component
{

    use WithFileUploads;
    public ModelsEvenementparticipatif $evenementparticipatif;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $messsage;
    public $erreur = false;
    public $supp;
    public $modification;
    public $imageVue;
    public $collapse='collapse';
    public $image;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;


    protected $rules = [
        'evenementparticipatif.titre' => 'required',
        'evenementparticipatif.domaine' => 'required',
        'evenementparticipatif.auteur' => 'required',
        'evenementparticipatif.desc_auteur' => 'required',
        'evenementparticipatif.titre1' => '',
        'evenementparticipatif.article1' => '',
        'evenementparticipatif.video1' => '',
        'evenementparticipatif.titre2' => '',
        'evenementparticipatif.article2' => '',
        'evenementparticipatif.video2' => '',
        'evenementparticipatif.titre3' => '',
        'evenementparticipatif.article3' => '',
        'evenementparticipatif.video3' => '',
        'evenementparticipatif.titre4' => '',
        'evenementparticipatif.article4' => '',
        'evenementparticipatif.video4' => '',
        'evenementparticipatif.titre5' => '',
        'evenementparticipatif.article5' => '',
        'evenementparticipatif.video5' => '',
        'evenementparticipatif.titreSeo' => '',
        'evenementparticipatif.descriptionSeo' => '',
        'evenementparticipatif.debut' => 'date',
        'evenementparticipatif.fin' => 'date',
        'evenementparticipatif.nombre' => '',
        'evenementparticipatif.type' => '',
    ];
   

    public function mount()
    {

        $this->evenementparticipatif = ModelsEvenementparticipatif::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;

    }

   


    public function updatedevenementparticipatif(){
        $this->collapse="";
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
    }

    public function updatedImage1()
    {
        if (sizeOf($this->image1)>4) {
            $this->image1=null;
            $this->fill(['image1'=>null]);
            session()->flash('image1','Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse='';

        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);

        
    }

    public function updatedImage2()
    {
        if (sizeOf($this->image2)>4) {
            $this->image2=null;
            $this->fill(['image2'=>null]);
            session()->flash('image2','Vous ne pouvez télécharger que 4 images maximun');
        }
        $this->collapse='';
        $this->validate([
            'image2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage3()
    {
        if (sizeOf($this->image3)>4) {
            $this->image3=null;
            $this->fill(['image3'=>null]);
            session()->flash('image3','Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse='';
        $this->validate([
            'image3' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage4()
    {
        if (sizeOf($this->image4)>4) {
            $this->image4=null;
            $this->fill(['image4'=>null]);
            session()->flash('image4','Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse='';
        $this->validate([
            'image4' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage5()
    {
        if (sizeOf($this->image5)>4) {
            $this->image5=null;
            $this->fill(['image5'=>null]);
            session()->flash('image5','Vous ne pouvez télécharger que 4 images maximun');
        }

        $this->collapse='';
        $this->validate([
            'image5' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage(){
        $this->collapse='';
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
        
    }

    public function getEvenementparticipatifsProperty(){
        return ModelsEvenementparticipatif::orderBy('id','desc')->get();
    }

    public function saveArt(){
        ini_set('memory_limit', '-1');
        if(env('IS_DEMO')) { 
            $this->showDemoNotification1 = true;
         } else {

            try {
                if ($this->image) {
                    $this->evenementparticipatif->image=Image::traitement($this->image,'png','evenementparticipatif');
                }

                if ($this->image1) {
                    $this->evenementparticipatif->image1=null;
                    foreach ($this->image1 as $key => $value) {
                        $this->evenementparticipatif->image1=$this->evenementparticipatif->image1.'<-->'.Image::traitement($value,'png','evenementparticipatif');

                    }
                }

                if ($this->image2) {
                    $this->evenementparticipatif->image2=null;
                    foreach ($this->image2 as $key => $value) {
                        $this->evenementparticipatif->image2=$this->evenementparticipatif->image2.'<-->'.Image::traitement($value,'png','evenementparticipatif');

                    }

                }

                if ($this->image3) {
                    $this->evenementparticipatif->image3=null;
                    foreach ($this->image3 as $key => $value) {
                        $this->evenementparticipatif->image3=$this->evenementparticipatif->image3.'<-->'.Image::traitement($value,'png','evenementparticipatif');

                    }

                }

                if ($this->image4) {
                    $this->evenementparticipatif->image4=null;
                    foreach ($this->image4 as $key => $value) {
                        $this->evenementparticipatif->image4=$this->evenementparticipatif->image4.'<-->'.Image::traitement($value,'png','evenementparticipatif');

                    }
                }

                if ($this->image5) {
                    $this->evenementparticipatif->image5=null;
                    foreach ($this->image5 as $key => $value) {
                        $this->evenementparticipatif->image5=$this->evenementparticipatif->image5.'<-->'.Image::traitement($value,'png','evenementparticipatif');

                    }
                }
                
        } catch (\Throwable $th) {
            $this->message=$th.'erreur lors du traitement des images.';
            $this->showSuccesNotification1 = false;
            $this->showErrorNotification1 = true;
            $this->erreur=true;
        }
        
        if (!$this->erreur) {
            if ($this->modification==null) {
                
                try {
                    $this->validate();
                    $this->evenementparticipatif->save();
                    $this->evenementparticipatif=ModelsEvenementparticipatif::make();
                    $this->message='evenementparticipatif ajouté avec succès.';
                    $this->showSuccesNotification1 = true;
                    $this->showErrorNotification1 = false;
                    $this->modification=null;
                    $this->image1=null;
                    $this->image2=null;
                    $this->image3=null;
                    $this->image4=null;
                    $this->image5=null;
                    $this->image=null;
                    $this->collapse='collapse';


                } catch (\Throwable $th) {
                    $this->showErrorNotification1 = true;
                    $this->showSuccesNotification1 = false;

                    $this->message=$th.'Erreur lors de l\'enregistrement de l\'evenementparticipatif.Veuillez recommencer!';
                }
                
            } else {
                
                
                    try {
                        $this->validate();
                        $this->evenementparticipatif->save();
                        $this->evenementparticipatif=ModelsEvenementparticipatif::make();
                        $this->message='evenementparticipatif modifiée avec succès.';
                        $this->showSuccesNotification1 = true;
                        $this->showErrorNotification1 = false;
                        $this->modification=null;
                        $this->image=null;
                        $this->image1=null;
                        $this->image2=null;
                        $this->image3=null;
                        $this->image4=null;
                        $this->image5=null;
                        $this->collapse='collapse';


                    } catch (\Throwable $th) {
                        $this->showErrorNotification1 = true;
                        $this->showSuccesNotification1 = false;
    
                        $this->message='Erreur lors de la modification de l\'evenementparticipatif.Veuillez recommencer!';
                    }

            }
        }
            
         }
    }


    public function delete($id){

        $reponse=ModelsEvenementparticipatif::find($id);
        for ($i=1; $i<6 ; $i++) { 
            File::delete(public_path("/app/evenementparticipatif/image$i"));
        }

        try {
            $reponse=ModelsEvenementparticipatif::destroy($id);
            ModelsEvenementparticipatif::make();
            $this->message='evenementparticipatif supprimé avec succès.';
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
        } catch (\Throwable $th) {
            $this->showErrorNotification1 = true;
            $this->showSuccesNotification1 = false;
            $this->message='Erreur lors de la suppression!';
        }
        
    }

    public function update($id){
        $this->imageVue=null;
        $this->image=null;
        $this->image1=null;
        $this->image2=null;
        $this->image3=null;
        $this->image4=null;
        $this->image5=null;
        $this->evenementparticipatif=ModelsEvenementparticipatif::find($id);
        $this->modification=2;
        $this->imageVue=$this->evenementparticipatif->image;
        $this->imageVue1=$this->evenementparticipatif->image1;
        $this->imageVue2=$this->evenementparticipatif->image2;
        $this->imageVue3=$this->evenementparticipatif->image3;
        $this->imageVue4=$this->evenementparticipatif->image4;
        $this->imageVue5=$this->evenementparticipatif->image5;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->collapse="";
        
    }

    public function annuler(){
        
        $this->message = null;
        $this->collapse='collapse';
        $this->modification=false;
        $this->evenementparticipatif=ModelsEvenementparticipatif::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
    }


    public function removeImage($libelle,$keyRemove,$item){
        $reset=collect(explode('<-->',$this->evenementparticipatif->$libelle));
        $reset=$reset->forget($keyRemove);
        File::delete(public_path("/app/evenementparticipatif/$item"));
        $this->evenementparticipatif->$libelle=null;
        foreach ($reset as $key => $value) {
            $this->evenementparticipatif->$libelle=$this->evenementparticipatif->$libelle.'<-->'.$value;
        }
        $this->evenementparticipatif->save();
    }
    
    public function cloturer($id){

        try {
            ModelsEvenementparticipatif::find($id)->update([
                'statut'=>false,
            ]);

            $this->message =  "Evènement de vote cloturé avec succès.";
            $this->showSuccesNotification1 = true;
            $this->showErrorNotification1 = false;
        } catch (\Throwable $th) {
            $this->message ="Erreur lors de la cloture du vote! Veuillez recommencer..";
            $this->showSuccesNotification1 = false;
            $this->showErrorNotification1 = true;
        }
        
    }

    public function render()
    {
        return view('livewire.admin-evenement-participatif');
    }
}
