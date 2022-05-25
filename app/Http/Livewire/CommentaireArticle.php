<?php

namespace App\Http\Livewire;

use App\Models\commentaireArticle as ModelsCommentaireArticle;
use App\Models\reponseCommentaireArticle;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CommentaireArticle extends Component
{
    public ModelsCommentaireArticle $commentaire;
    public reponseCommentaireArticle $commentaireR;
    public $idA;
    public $idC;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $message;
    public $type='c';

    protected $rules=[
        'commentaire.nom'=>'',
        'commentaire.cweb'=>'',
        'commentaire.email'=>'',
        'commentaire.comment'=>'',

        'commentaireR.nom'=>'',
        'commentaireR.cweb'=>'',
        'commentaireR.email'=>'',
        'commentaireR.comment'=>'',
    ];

    public function mount($idA){
        $this->idA=$idA;
        $this->commentaire=ModelsCommentaireArticle::make();
        $this->commentaireR=reponseCommentaireArticle::make();
    }

    public function repondre($code){
        $this->type='r';
        $this->idC=$code;
        
    }

    public function getListCommentProperty(){
        return DB::table('commentaire_articles')
                        ->whereArticle($this->idA)
                        ->get();
    }

    public function getListRepCommentProperty(){
        return DB::table('reponse_commentaire_articles')
                        ->whereArticle($this->idA)
                        ->get();
    }

    public function save(){
       if ($this->type=='c') {
        try {
            $this->commentaire->article=$this->idA;
            $this->commentaire->save();
            $this->message='Commentaire enregistré avec succès';
            $this->showSuccesNotification=true;
            $this->showErrorNotification=false;
        } catch (\Throwable $th) {
            $this->message='Erreur lors de l\'enregistrement du commentaire';
            $this->showSuccesNotification=false;
            $this->showErrorNotification=true;
        }
       } else {
        try {
            $this->commentaireR->article=$this->idA;
            $this->commentaireR->commentaire=$this->idC;
            $this->commentaireR->save();
            $this->message='Reponse de commentaire enregistré avec succès';
            $this->showSuccesNotification=true;
            $this->showErrorNotification=false;
            $this->type='c';
        } catch (\Throwable $th) {
            $this->message=$th.'Erreur lors de l\'enregistrement de la reponse du commentaire';
            $this->showSuccesNotification=false;
            $this->showErrorNotification=true;
        }
       }
       $this->mount($this->idA);
        

    }

    public function render()
    {
        return view('livewire.commentaire-article');
    }
}
