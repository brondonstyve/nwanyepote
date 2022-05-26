<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\accueil;
use App\Models\commentaireSite;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageAccueil extends Component
{
    use WithFileUploads;
    public Collection $textcli;
    public Collection $fa;
    public Collection $sousTitre;
    public Collection $sousDesc;
    public Collection $sousTexte;
    public Collection $sousLien;
    public Collection $sousTitreB3;
    public Collection $sousDescB3;
    public Collection $sousTexteB3;
    public Collection $sousLienB3;
    public Collection $sousTitreI;
    public Collection $sousTitreB4;
    public Collection $sousDescB4;
    public accueil $home;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $messsage;
    public $nbcli  = 1;
    public $image1;
    public $image2;
    public $image3;
    public $image4;
    public $image5;
    public $image6;
    public $image7;
    public $image8;
    public $image9;
    public $supp;
    public $modification;
    public $temoignage;
    public $erreur=false;
    
    protected $rules=[
            'temoignage.auteur' => '',
            'temoignage.pays' => '',
            'temoignage.commentaire' => 'required',

            'home.titre1'=>'',
            'home.description1'=>'',
            'home.texte_bouton1'=>'',
            'home.lien_bouton1'=>'',
            'home.image1'=>'',
            'home.image2'=>'',
            'home.lien_video'=>'',

            'home.titre2'=>'',
            'home.description2'=>'',

            'home.titre3'=>'',
            'home.description3'=>'',

            'home.titre4'=>'',
            'home.description4'=>'',

            'home.titre5'=>'',
            'home.description5'=>'',
            'home.texte_bouton5'=>'',
            'home.lien_bouton5'=>'',

            'home.titre6'=>'',
            'home.description6'=>'',
            'home.texte_bouton6'=>'',
            'home.lien_bouton6'=>'',

            'home.titre7'=>'',
            'home.description7'=>'',
            'home.texte_bouton7'=>'',
            'home.lien_bouton7'=>'',

            'home.titre8'=>'',
            'home.description8'=>'',
            'home.nb_avis_fb'=>'',
            'home.nb_avis_site'=>'',
            'home.nb_avis_autre'=>'',
            'home.libelle_avis_fb'=>'',
            'home.libelle_avis_site'=>'',
            'home.libelle_avis_autre'=>'',

            

            
        ];

    public function mount(){
        $reponse=accueil::get();
        $this->temoignage = commentaireSite::make();
        if (sizeOf($reponse)!=0) {
            $this->home=accueil::make();
            $this->home=accueil::first();
        } else {
            $this->home=accueil::make();

        }

        
        $this->fill([
            'textcli' => collect([['val' => '']]),
        ]);

        //chargement de champs clignotants
        if ($this->home->txt_cligontants) {
            foreach (explode('<->',$this->home->txt_cligontants) as $key => $value) {
                if($value){
                    $this->nbcli =$key;
                    $this->textcli->push(['val'=>$value]);
                }
    
            }
        }



        $this->fill([
            'fa'=>collect([['val'=>'']])
        ]);


        //chargement des champs fa
        if ($this->home->sous_bloc2_code_fa) {
            foreach (explode('<->',$this->home->sous_bloc2_code_fa) as $key => $value) {
                if($value){
                    $this->fa->push(['val'=>$value]);
                }
    
            }
        }
        
        $this->fill([
            'sousTitre'=>collect([['val'=>'']])
        ]);

        //chargement des champs sous titre
        if ($this->home->sous_bloc2_titres) {
            foreach (explode('<->',$this->home->sous_bloc2_titres) as $key => $value) {
                if($value){
                    $this->sousTitre->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousDesc'=>collect([['val'=>'']])
        ]);

        //chargement des champs sous descriptions
        if ($this->home->sous_bloc2_descriptions) {
            foreach (explode('<->',$this->home->sous_bloc2_descriptions) as $key => $value) {
                if($value){
                    $this->sousDesc->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousTexte'=>collect([['val'=>'']])
        ]);

        //chargement des champs des textes des boutons des sous liens
        if ($this->home->sous_bloc2_textes_boutons) {
            foreach (explode('<->',$this->home->sous_bloc2_textes_boutons) as $key => $value) {
                if($value){
                    $this->sousTexte->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousLien'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous liens
        if ($this->home->sous_bloc2_liens_boutons) {
            foreach (explode('<->',$this->home->sous_bloc2_liens_boutons) as $key => $value) {
                if($value){
                    $this->sousLien->push(['val'=>$value]);
                }
    
            }
        }
        

        $this->fill([
            'sousTitreB3'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous titre bloc 3
        if ($this->home->sous_bloc3_titres) {
            foreach (explode('<->',$this->home->sous_bloc3_titres) as $key => $value) {
                if($value){
                    $this->sousTitreB3->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousDescB3'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous description bloc 3
        if ($this->home->sous_bloc3_descriptions) {
            foreach (explode('<->',$this->home->sous_bloc3_descriptions) as $key => $value) {
                if($value){
                    $this->sousDescB3->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousTexteB3'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous texte de bouton bloc 3
        if ($this->home->sous_bloc3_textes_boutons) {
            foreach (explode('<->',$this->home->sous_bloc3_textes_boutons) as $key => $value) {
                if($value){
                    $this->sousTexteB3->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousLienB3'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous lien 3
        if ($this->home->sous_bloc3_liens_boutons) {
            foreach (explode('<->',$this->home->sous_bloc3_liens_boutons) as $key => $value) {
                if($value){
                    $this->sousLienB3->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousTitreB4'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous titre bloc 4
        if ($this->home->sous_bloc4_titres) {
            foreach (explode('<->',$this->home->sous_bloc4_titres) as $key => $value) {
                if($value){
                    $this->sousTitreB4->push(['val'=>$value]);
                }
    
            }
        }

        $this->fill([
            'sousDescB4'=>collect([['val'=>'']])
        ]);

        //chargement des champs des sous Description bloc 4
        if ($this->home->sous_bloc4_descriptions) {
            foreach (explode('<->',$this->home->sous_bloc4_descriptions) as $key => $value) {
                if($value){
                    $this->sousDescB4->push(['val'=>$value]);
                }
    
            }
        }


        $this->fill([
            'sousTitreI'=>collect([['val'=>'']])
        ]);

        //chargement des champs des titre d'image bloc 4
        if ($this->home->sous_bloc4_descriptions_images) {
            foreach (explode('<->',$this->home->sous_bloc4_descriptions_images) as $key => $value) {
                if($value){
                    $this->sousTitreI->push(['val'=>$value]);
                }
    
            }
        }
    }

    public function updatedImage1()
    {
        $this->validate([
            'image1' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage2()
    {
        $this->validate([
            'image2' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage3()
    {
        $this->validate([
            'image3' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage4()
    {
        $this->validate([
            'image4' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage5()
    {
        $this->validate([
            'image5' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage6()
    {
        $this->validate([
            'image6' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage7()
    {
        $this->validate([
            'image7' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage8()
    {
        $this->validate([
            'image8' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function updatedImage9()
    {
        $this->validate([
            'image9' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function save(){

            ini_set('memory_limit', '-1');
    
            try {
                if ($this->image1) {
                    $this->home->image1=Image::traitement($this->image1,'jpg','accueil');
                    
                }
    
                if ($this->image2) {
                    $this->home->image2=Image::traitement($this->image2,'jpg','accueil');
                    
    
                }
    
                if ($this->image3) {
                    $this->home->image3=Image::traitement($this->image3,'jpg','accueil');
    
                }
    
                if ($this->image4) {
                    $this->home->image4=Image::traitement($this->image4,'jpg','accueil');
    
                }
    
                if ($this->image5) {
                    $this->home->image5=Image::traitement($this->image5,'jpg','accueil');
                    
    
                }
    
                if ($this->image6) {
                    $this->home->image6=Image::traitement($this->image6,'jpg','accueil');
                    
    
                }
    
                if ($this->image7) {
                    $this->home->image7=Image::traitement($this->image7,'jpg','accueil');
                }
    
                if ($this->image8) {
                    $this->home->image8=Image::traitement($this->image8,'jpg','accueil');
                    
                }

                if ($this->image9) {
                    $this->home->image9=Image::traitement($this->image9,'jpg','accueil');
                    
                }
                
            } catch (\Throwable $th) {
                    $this->message='erreur lors du traitement des images.';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                    $this->erreur=true;
                    $this->mount();
            }
    
            if (!$this->erreur) {

                $this->home->txt_cligontants=null;
                for ($i=$this->nbcli+1; $i < 11 ; $i++) { 
                        $this->textcli->forget($i);
                }
            
            // enregistrement des textes clignotants 
            foreach ($this->textcli as $key=>$value) {
                    ($value['val'])? $this->home->txt_cligontants=$this->home->txt_cligontants.'<->'.$value['val']  : '';
            } 
            
            
            // enregistrement des textes de code fa 
            $this->home->sous_bloc2_code_fa=null;
            foreach ($this->fa as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc2_code_fa=$this->home->sous_bloc2_code_fa.'<->'.$value['val']  : '';
            } 


            // enregistrement des textes de sous titre
            $this->home->sous_bloc2_titres=null;

            foreach ($this->sousTitre as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc2_titres=$this->home->sous_bloc2_titres.'<->'.$value['val']  : '';
            } 


            // enregistrement des textes sous descriptions 
            $this->home->sous_bloc2_descriptions=null;
            foreach ($this->sousDesc as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc2_descriptions=$this->home->sous_bloc2_descriptions.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes pour textes de boutons 
            $this->home->sous_bloc2_textes_boutons=null;
            foreach ($this->sousTexte as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc2_textes_boutons=$this->home->sous_bloc2_textes_boutons.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes de liens de boutons 
            $this->home->sous_bloc2_liens_boutons=null;
            foreach ($this->sousLien as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc2_liens_boutons=$this->home->sous_bloc2_liens_boutons.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes de titre du bloc 3 
            $this->home->sous_bloc3_titres=null;
            foreach ($this->sousTitreB3 as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc3_titres=$this->home->sous_bloc3_titres.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes de description du bloc 3 
            $this->home->sous_bloc3_descriptions=null;
            foreach ($this->sousDescB3 as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc3_descriptions=$this->home->sous_bloc3_descriptions.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes pour textes de boutons du bloc 3 
            $this->home->sous_bloc3_textes_boutons=null;
            foreach ($this->sousTexteB3 as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc3_textes_boutons=$this->home->sous_bloc3_textes_boutons.'<->'.$value['val']  : '';
            } 

             // enregistrement des textes pour lien de boutons du bloc 3 
             $this->home->sous_bloc3_liens_boutons=null;
             foreach ($this->sousLienB3 as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc3_liens_boutons=$this->home->sous_bloc3_liens_boutons.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes de titre du bloc 4
            $this->home->sous_bloc4_titres=null;
            foreach ($this->sousTitreB4 as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc4_titres=$this->home->sous_bloc4_titres.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes de description du bloc 4
            $this->home->sous_bloc4_descriptions=null;
            foreach ($this->sousDescB4 as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc4_descriptions=$this->home->sous_bloc4_descriptions.'<->'.$value['val']  : '';
            } 

            // enregistrement des textes des titres des images bloc 4
            $this->home->sous_bloc4_descriptions_images=null;
            foreach ($this->sousTitreI as $key=>$value) {
                ($value['val'])? $this->home->sous_bloc4_descriptions_images=$this->home->sous_bloc4_descriptions_images.'<->'.$value['val']  : '';
            } 

                
                $reponse = accueil::count();
    
            if ($reponse == 0) {
    
    
                accueil::where([
                    ['id', '<>', 0]
                ])
                    ->delete();
                $this->home->save();
                $this->message = 'Parramétrage  enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
                $this->image2 = null;
                $this->image3 = null;
                $this->image4 = null;
                $this->image5 = null;
                $this->image6 = null;
                $this->image7 = null;
                $this->image8 = null;
                $this->image9 = null;
            } else {
    
                $this->home->save();
                $this->message = 'Parramétrage mis à jour avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
                $this->image2 = null;
                $this->image3 = null;
                $this->image4 = null;
                $this->image5 = null;
                $this->image6 = null;
                $this->image7 = null;
                $this->image8 = null;
                $this->image9 = null;
            }
            }
        
    }



    public function saveCom()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {


            if ($this->modification == null) {

                try {
                    $this->validate(
                        [
                            'temoignage.auteur' => '',
                            'temoignage.pays' => '',
                            'temoignage.commentaire' => 'required',
                        ]
                    );
                    $this->temoignage->save();
                    $this->mount();

                    $this->message = 'Enregistrement ajouté avec succès.';
                    $this->showSuccesNotification1 = true;
                    $this->showErrorNotification1 = false;
                    $this->modification = null;
                    $this->image = null;
                } catch (\Throwable $th) {
                    $this->showErrorNotification1 = true;
                    $this->showSuccesNotification1 = false;

                    $this->message = $th . 'Erreur lors de l\'enregistrement.Veuillez recommencer!';
                }
            } else {


                try {

                    $this->validate(
                        [
                            'temoignage.auteur' => '',
                            'temoignage.pays' => '',
                            'temoignage.commentaire' => 'required',
                        ]
                    );

                    $this->temoignage->save();
                    $this->mount();
                    $this->message = 'Enregistrement modifiée avec succès.';
                    $this->showSuccesNotification1 = true;
                    $this->showErrorNotification1 = false;
                    $this->modification = null;
                    $this->image = null;
                } catch (\Throwable $th) {
                    $this->showErrorNotification1 = true;
                    $this->showSuccesNotification1 = false;

                    $this->message = 'Erreur lors de la modification.Veuillez recommencer!';
                }
            }
        }
    }



    public function getTemoignagesProperty()
    {
        return commentaireSite::get();
    }

    public function delete($id)
    {

        $reponse = commentaireSite::find($id);

        try {
            $reponse = commentaireSite::destroy($id);
            commentaireSite::make();
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

        $this->temoignage = commentaireSite::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->temoignage = commentaireSite::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }

    public function render()
    {
        return view('livewire.admin-page-accueil');
    }
}
