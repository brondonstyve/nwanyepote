<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\faq;
use App\Models\pageFaq as ModelsFaq;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminPageFaq extends Component
{

    use WithFileUploads;
    public ModelsFaq $faq;
    public faq $contenuFaq;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $showSuccesNotification1  = false;
    public $showErrorNotification1  = false;
    public $messsage;
    public $erreur=false;
    public $supp;
    public $modification;


    protected $rules = [
        'faq.titre1' => '',
        'faq.description1' => '',
        'faq.titre2' => '',
        'faq.description2' => '',

        'contenuFaq.question'=> '',
        'contenuFaq.reponse'=> '',

    ];

    public function mount()
    {
        $reponse = ModelsFaq::get();
        $this->contenuFaq = faq::make();
        if (sizeOf($reponse) != 0) {
            $this->faq = ModelsFaq::make();
            $this->faq = ModelsFaq::first();
        } else {
            $this->faq = ModelsFaq::make();
        }
    }


    public function save(){

            $reponse = ModelsFaq::count();
    
            if ($reponse == 0) {
    
    
                ModelsFaq::where([
                    ['id', '<>', 0]
                ])
                    ->delete();
                $this->faq->save();
                $this->message = 'Parramétrage  enregistré avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            } else {
    
                $this->faq->save();
                $this->message = 'Parramétrage mis à jour avec succès';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;
            }
    }


    // Contenu de 

    public function savefaq()
    {
        if (env('IS_DEMO')) {
            $this->showDemoNotification = true;
        } else {

            if ($this->modification == null) {

                try {
                    $this->validate(
                        [
                            'contenuFaq.question'=> '',
                            'contenuFaq.reponse'=> '',
                        ]
                    );
                    
                    $this->contenuFaq->save();
                    
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
                            'contenuFaq.question'=> '',
                            'contenuFaq.reponse'=> '',
                        ]
                    );

                    $this->contenuFaq->save();
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



    public function getfaqsProperty()
    {
        return faq::get();
    }

    public function delete($id)
    {

        $reponse = faq::find($id);

        try {
            $reponse = faq::destroy($id);
            faq::make();
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

        $this->contenuFaq = faq::find($id);
        $this->modification = 2;
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }




    public function annuler()
    {

        $this->modification = false;
        $this->contenuFaq = faq::make();
        $this->showSuccesNotification1 = false;
        $this->showErrorNotification1 = false;
        $this->message = null;
    }



    public function render()
    {
        return view('livewire.admin-page-faq');
    }
}
