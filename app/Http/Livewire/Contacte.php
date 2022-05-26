<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\models\contacteMessage;
use App\models\contacteInfo;


class Contacte extends Component
{
    public $titre_page, $libelet_page, $titre_formulaire, $libelet_formulaire, $select_id;
    public $data;
    public $data2;

    public function mount()
    {
    }

    public function render()
    {
        $this->data = ContacteMessage::all();
        $this->data2 = ContacteInfo::all();
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

        $respons = ContacteInfo::create($validatedDate);

        if ($respons) {
            session()->flash('message', 'Vos information on ete envoyer avec succes.');
        } else {
            session()->flash("error", "Erreur! vos information n'on pas ete envoyer");
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

    public function destroy($id)
    {
        if ($id) {
            $record = ContacteMessage::where('id', $id);
            $record->delete();
            session()->flash('message', 'le message a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! votre message n'a pas ete supprimer");
        }
    }

    public function destroy2($id)
    {
        if ($id) {
            $record = ContacteInfo::where('id', $id);
            $record->delete();
            session()->flash('message', 'le message a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! votre message n'a pas ete supprimer");
        }
    }
}
