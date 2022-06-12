<?php

namespace App\Http\Livewire;

use App\Models\evenementparticipatif;
use App\Models\participant;
use App\Models\vote;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListeParticipantVote extends Component
{

    public $code;
    public $showSuccesNotification = false;
    public $showErrorNotification = false;
    public $messsage;
    public $user;
    public $nom;
    //protected $listeners = ['voteAdd' => '$refresh'];

    public function mount($id){
        $this->code=$id;
    }

    public function getParticipantProperty(){
        return participant::where([
            ['participants.evenement',$this->code],
            ['participants.statut',true]
            ])
        ->join('users','participants.user','users.id')
        ->select('participants.id','participants.voie','participants.evenement','participants.user','participants.image','participants.video','participants.apropos','users.name')
        ->orderBy('voie','desc')
        ->get();
    }

    public function getEvenementProperty(){
        return evenementparticipatif::find($this->code);
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
            
            if ($this->testVote($this->code,auth()->user()->id)==1) {
                $this->message = "Impossible d'éffectuer un nouveaux vote car vous l'avez déja fait. vous serez encore éligible qu'au prochain évènement.";
                $this->showSuccesNotification = false;
                $this->showErrorNotification = true;
    
            } else {
                try {
                    $reponse=DB::update('update participants set voie = voie + 1 where user = ? and evenement= ?',[$this->user,$this->code]);
        
                    vote::create([
                        'evenement'=>$this->code,
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
            if (vote::whereEvenementAndUser($this->code,auth()->user()->id)->first()){
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
        return view('livewire.liste-participant-vote');
    }
}
