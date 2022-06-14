<?php

namespace App\Http\Livewire;

use App\Models\contacteInfo;
use App\Models\contacteMessage;
use App\Models\infocontactes;
use Livewire\Component;


class Contacte extends Component
{
    public $titre_page, $libelet_page, $titre_formulaire, $libelet_formulaire, $select_id;
    public $adresse1, $adresse2, $numero1, $numero2, $email1, $email2, $youtube, $facebook, $twiter, $instagramme;
    public $data;
    public $data2, $data3;

    public function mount()
    {
        $this->adresse1 = "";
        $this->adresse2 = "";
        $this->numero1 = "";
        $this->numero2 = "";
        $this->email1 = "";
        $this->email2 = "";
        $this->youtube = "";
        $this->facebook = "";
        $this->twiter = "";
        $this->instagramme = "";
        $this->titre_page = "";
        $this->libelet_page = "";
        $this->titre_formulaire = "";
        $this->libelet_formulaire = "";
    }

    public function render()
    {
        $this->data = contacteMessage::all();
        $this->data2 = contacteInfo::all();
        $this->data3 = infocontactes::all();
        return view('livewire.contacte');
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'titre_page' => 'required',
            'libelet_page' => 'required',
            'titre_formulaire' => 'required',
            'libelet_formulaire' => 'required',
        ]);

        $respons = contacteInfo::create($validatedDate);
        $this->mount();
        if ($respons) {
            session()->flash('message', 'Vos information on ete envoyer avec succes.');
        } else {
            session()->flash("error", "Erreur! vos information n'on pas ete envoyer");
        }

        //$this->resetInputFields();
    }

    public function store2()
    {
        $validatedDate = $this->validate([
            'adresse1' => 'required',
            'adresse2' => 'required',
            'numero1' => 'required',
            'email1' => 'required',
        ]);

        $respons = infocontactes::create([
            'adresse1' => $validatedDate['adresse1'],
            'adresse2' => $validatedDate['adresse2'],
            'numero1' => $validatedDate['numero1'],
            'numero2' => $this->numero2,
            'email1' => $validatedDate['email1'],
            'email2' => $this->email2,
            'youtube' => $this->youtube,
            'facebook' => $this->facebook,
            'twiter' => $this->twiter,
            'instagramme' => $this->instagramme,
        ]);
        $this->mount();
        if ($respons) {
            session()->flash('message', 'Vos information on ete enregistrer avec succes.');
        } else {
            session()->flash("error", "Erreur! vos information n'on pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function edit($id)
    {
        $infoEdit = contacteInfo::where('id', $id)->first();
        $this->select_id = $id;
        $this->titre_page = $infoEdit->titre_page;
        $this->libelet_page = $infoEdit->libelet_page;
        $this->titre_formulaire = $infoEdit->titre_formulaire;
        $this->libelet_formulaire = $infoEdit->libelet_formulaire;
    }

    public function edit2($id)
    {
        $infocontactEdit = infocontactes::where('id', $id)->first();
        $this->select_id = $id;
        $this->adresse1 = $infocontactEdit->adresse1;
        $this->adresse2 = $infocontactEdit->adresse2;
        $this->numero1 = $infocontactEdit->numero1;
        $this->numero2 = $infocontactEdit->numero2;
        $this->email1 = $infocontactEdit->email1;
        $this->email2 = $infocontactEdit->email2;
        $this->youtube = $infocontactEdit->youtube;
        $this->facebook = $infocontactEdit->facebook;
        $this->twiter = $infocontactEdit->twiter;
        $this->instagramme = $infocontactEdit->instagramme;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'titre_page' => 'required',
            'libelet_page' => 'required',
            'titre_formulaire' => 'required',
            'libelet_formulaire' => 'required',
        ]);

        if ($this->select_id) {
            $info = contacteInfo::find($this->select_id);
            $info->update([
                'titre_page' => $this->titre_page,
                'libelet_page' => $this->libelet_page,
                'titre_formulaire' => $this->titre_formulaire,
                'libelet_formulaire' => $this->libelet_formulaire,
            ]);
            session()->flash('message', 'Vos information on ete modifier avec succes.');
        } else {
            session()->flash("error", "Erreur! vos information n'on pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update2()
    {
        $validatedDate = $this->validate([
            'adresse1' => 'required',
            'adresse2' => 'required',
            'numero1' => 'required',
            'email1' => 'required',
        ]);

        if ($this->select_id) {
            $info = infocontactes::find($this->select_id);
            $info->update([
                'adresse1' => $this->adresse1,
                'adresse2' => $this->adresse2,
                'numero1' => $this->numero1,
                'numero2' => $this->numero2,
                'email1' => $this->email1,
                'email2' => $this->email2,
                'youtube' => $this->youtube,
                'facebook' => $this->facebook,
                'twiter' => $this->twiter,
                'instagramme' => $this->instagramme,
            ]);
            session()->flash('message', 'Vos information on ete modifier avec succes.');
        } else {
            session()->flash("error", "Erreur! vos information n'on pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = contacteMessage::where('id', $id);
            $record->delete();
            session()->flash('message', 'le message a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! votre message n'a pas ete supprimer");
        }
    }

    public function destroy2($id)
    {
        if ($id) {
            $record = contacteInfo::where('id', $id);
            $record->delete();
            session()->flash('message', 'le message a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! votre message n'a pas ete supprimer");
        }
    }

    public function destroy3($id)
    {
        if ($id) {
            $record = infocontactes::where('id', $id);
            $record->delete();
            session()->flash('message', " l'information a ete supprimer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete supprimer");
        }
    }
}
