<?php

namespace App\Http\Livewire;

use App\Models\evenementparticipatif;
use App\Models\participant;
use App\Models\vote;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ParticipantUnique extends Component
{

    public $code;
    public $code_eve;

    public $showSuccesNotification = false;
    public $showErrorNotification = false;
    public $messsage;
    public $user;
    public $nom;

    public function mount($code){
        $this->code=$code;
        $this->code_eve=$this->getParticipantProperty()->evenement;
    }

    public function getParticipantProperty(){
        
        return (participant::join('evenementparticipatifs','evenementparticipatifs.id','participants.evenement')
        ->join('users','users.id','participants.user')
        ->where([
            ['participants.id',$this->code]
        ])
        ->first());
    }

    public function getEvenementProperty(){
        return evenementparticipatif::find($this->code_eve);
    }

    public function voter(){
        if ($this->getEvenementProperty()->statut==0) {
            $this->message = 'Evènement de vote déjà cloturé.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }else{
            if (auth()->guest()) {
                session()->flash('error','Votre session a expirée! veuillez vous connecter.');
                return redirect()->route('login');
            }
            
            if ($this->testVote($this->code_eve,auth()->user()->id)==1) {
                $this->message = "Impossible d'éffectuer un nouveaux vote car vous l'avez déja fait. vous serez encore éligible qu'au prochain évènement.";
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
    
            } else {
                try {
                    $reponse=DB::update('update participants set voie = voie + 1 where user = ? and evenement= ?',[$this->user,$this->code_eve]);
        
                    vote::create([
                        'evenement'=>$this->code_eve,
                        'user'=>auth()->user()->id,
                        'user_vote'=>$this->user
                    ]);

            } catch (\Throwable $th) {
                $this->message = "erreur lors du vote veuillez recommencer.";
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
        
            }
            }
        }
    }


    public function testVote($event,$user){
        if (vote::whereEvenementAndUser($event,$user)->first()) {
            return 1;
        } else {
            return 0;
        }
        
    }

    public function getAsTuVoterProperty(){
        if (!auth()->guest()) {
            if (vote::whereEvenementAndUser($this->code_eve,auth()->user()->id)->first()){
                return true;
            } else {
                return false;
            }
        }
        
        
    }

    public function preparerVote($user,$nom){
        if (auth()->guest()) {
            session()->flash('error','Votre session a expirée! veuillez vous connecter.');
            return redirect()->route('login');
        }
        $this->user=$user;
        $this->nom=$nom;
    }

    public function render()
    {
        return view('livewire.participant-unique');
    }
}
