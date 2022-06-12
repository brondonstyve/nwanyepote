<?php

namespace App\Http\Livewire;

use App\Helpers\Image;
use App\Models\evenementparticipatif;
use App\Models\participant;
use App\Models\User;
use App\Notifications\voteNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class ParticipantFront extends Component
{
    use WithFileUploads;
    public participant $participant;
    public $code;
    public $image;
    public $erreur = false;
    public $showSuccesNotification  = false;
    public $showErrorNotification  = false;
    public $messsage;
    public $test=false;

    protected $rules = [
        'participant.pays' => '',
        'participant.ville' => '',
        'participant.naissance' => '',
        'participant.adresse' => '',
        'participant.video' => '',
        'participant.apropos' => '',
    ];

    public function mount($code)
    {
        $this->code = $code;
        $reponse = participant::where([
            ['user', auth()->user()->id],
            ['evenement', $this->code],
        ])->first();

        if ($reponse) {
            $this->participant = participant::where([
                ['user', auth()->user()->id],
                ['evenement', $this->code],
            ])->first();
            $this->test=true;
        } else {
            $this->participant = participant::make();
            
        }
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'image|max:100000', // 1MB Max
        ]);
    }

    public function getEvenementProperty()
    {
        return evenementparticipatif::find($this->code);
    }

    public function save()
    {
        $this->participant->evenement = $this->code;
        $this->participant->user = auth()->user()->id;

        ini_set('memory_limit', '-1');

        try {
            if ($this->image) {
                $this->participant->image = Image::traitement($this->image, 'jpg', 'participant');
            }
        } catch (\Throwable $th) {
            $this->message = 'erreur lors du traitement des images.';
            $this->showSuccesNotification = false;
            $this->showErrorNotification = true;
            $this->erreur = true;
            $this->mount($this->code);
        }

        if (!$this->erreur) {

            $reponse = participant::where([
                ['user', auth()->user()->id],
                ['evenement', $this->code],
            ])->first();

            if (!$reponse) {

                participant::where([
                    ['user', auth()->user()->id],
                    ['evenement', $this->code],
                ])
                    ->delete();

                $this->participant->save();
                $user=User::find($this->participant->user);

                try {
                    $details = [
                        'title' => "Participant d'événement chez Nwanyepote : ".$this->getEvenementProperty()->titre,
                        'id_event'=>$this->code,
                    ];
                   
                    Mail::to(env('MAIL_ADMIN'))
                    ->send(new \App\Mail\voteMail($details));
                    
                    Mail::to($user->email)
                    ->send(new \App\Mail\voteMailParticipant($details));
                   
                } catch (\Throwable $th) {
                    $this->message = 'erreur d\'envoi de mail.';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = true;
                }

                $this->message = 'participant  enregistré avec succès. un mail de confirmation d\'envoi de votre candidature vous a été envoyé';
                $this->showSuccesNotification = true;
                $this->showErrorNotification = false;
                $this->image1 = null;

            } else {

                if($reponse->statut){
                    $this->message = 'Votre condidature a déjà été validé.  Vous ne pouvez plus modifier les informations';
                    $this->showSuccesNotification = false;
                    $this->showErrorNotification = true;
                    $this->image1 = null;
                }else{
                    $this->participant->save();
                    $this->message = 'participant mis à jour avec succès';
                    $this->showSuccesNotification = true;
                    $this->showErrorNotification = false;
                    $this->image1 = null;
                }
                
            }
        }
    }

    public function getResteProperty(){
        return DB::table('evenementparticipatifs')
        ->select('evenementparticipatifs.nombre')
        ->where([
            ['evenementparticipatifs.id',$this->code]
        ])
        ->get()[0]->nombre 
        - 
        DB::table('participants')
        ->select(DB::raw('count(participants.id) as nombre'))
        ->where([
            ['participants.evenement',$this->code]
        ])
        ->get()[0]->nombre;
    }

    public function render()
    {
        return view('livewire.participant-front');
    }
}
