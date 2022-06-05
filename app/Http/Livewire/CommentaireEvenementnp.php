<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\models\user;
use App\models\npEvenements;
use App\models\commentaireEventnps;
use Livewire\Component;

class CommentaireEvenementnp extends Component
{

    public $email, $swb, $commentaire;
    public $data, $data2, $comentnombers;
    public $idevent;

    public function mount()
    {
    }

    public function render()
    {
        $this->comentnombers = $this->data2 = commentaireEventnps::where('event_id', $this->idevent)->count();
        $this->data2 = commentaireEventnps::where('event_id', $this->idevent)->get();
        $this->data = commentaireEventnps::all();
        return view('livewire.commentaire-evenementnp');
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'email' => 'required',
            'swb' => 'required',
            'commentaire' => 'required',
        ]);

        $user = Auth::user();
        $respons = commentaireEventnps::create([
            'user_id' => $user->id,
            'event_id' => $this->idevent,
            'email' => $validatedDate['email'],
            'swb' => $validatedDate['swb'],
            'commentaire' => $validatedDate['commentaire'],
        ]);

        if ($respons) {
            session()->flash('message', 'comment succes.');
        } else {
            session()->flash("error", "Erreur! comment faild");
        }
    }
}
