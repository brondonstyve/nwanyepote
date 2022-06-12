<?php

namespace App\Http\Livewire;

use App\Models\evenementparticipatif;
use App\Models\participant;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class AdminParticipant extends Component
{

    public $showSuccesNotification = false;
    public $showErrorNotification = false;
    public $messsage;
    public $code;


    public function mount(){
        $this->code=request('id');
    }
    public function getEvenementProperty(){
        return evenementparticipatif::find($this->code);
    }

    public function getParticipantInactifProperty(){
        return participant::where([
            ['participants.evenement',$this->code],
            ['participants.statut',false]
            ])
        ->join('users','participants.user','users.id')
        ->get();
    }

    public function getParticipantActifProperty(){
        return participant::where([
            ['participants.evenement',$this->code],
            ['participants.statut',true]
            ])
        ->join('users','participants.user','users.id')
        ->get();
    }

    public function valider($val){
        $user=User::find($val);
        try {
            participant::where([
                ['participants.user',$val],
                ])
            ->update([
                'statut'=>true
            ]);

            try {
                $email=$user->email;
                $details = [
                    'title' => "Participant d'événement chez Nwanyepote : ".$this->getEvenementProperty()->titre,
                    'id_event'=>$this->code,
                ];
                Mail::to($email)
                ->send(new \App\Mail\confirmationParticipant($details));
               
            } catch (\Throwable $th) {
                $this->message = 'erreur d\'envoi de mail.';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = true;
            }

    
            $this->message = 'Validation éffectuée avec success';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        } catch (\Throwable $th) {
            $this->message = 'Erreur lors de la validation';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
    }

    public function desactiver($val){
        try {
            participant::where([
                ['participants.user',$val],
                ])
            ->update([
                'statut'=>false
            ]);
    
            $this->message = 'Désactivation éffectuée avec success';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false;
        } catch (\Throwable $th) {
            $this->message = 'Erreur lors de la désactivation';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
    }

    public function annuler($val){
        try {
            participant::where([
                ['participants.user',$val]
                ])
            ->delete();
    
            $this->message = 'Participant rejetté avec success';
            $this->showSuccesNotification = true;
            $this->showErrorNotification = false; 
        } catch (\Throwable $th) {
            $this->message = 'Erreur lors du rejet du participant';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
        }
    }

    public function render() 
    {
        return view('livewire.admin-participant');
    }
}
