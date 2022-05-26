<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\contacteMessage;

class ContactMessage extends Component
{
    public $name, $last_name, $email, $phone, $message;
    public function render()
    {
        return view('livewire.contact-message');
    }
    /**
     * @var array $validatedDate
     * cette fonction permet denregister les messages envoyer par l'utilisateur sur la page contacte
     * 
     */
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $respons = ContacteMessage::create($validatedDate);

        $target = 'nwanyepote@gmail.com';
        $template = 'emails.contacte_message_email';
        $subject = 'message de visiteur';
        $data = array(
            'message' => $respons->message,
        );

        emailNotification($data, $template, $subject, $target);

        if ($respons) {
            session()->flash('message', 'Votre message a ete envoyer avec succes.');
        } else {
            session()->flash("error", "Erreur! votre message n'a pas ete envoyer");
        }

        //$this->resetInputFields();
    }
}
