<?php

namespace App\Http\Livewire;

use App\Models\galeries;
use App\Models\infoGaleries;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class Galerie extends Component
{

    use WithFileUploads;
    public $image, $libelet, $type, $select_id;
    public $titre, $titreb1, $libeletb1, $texteb2, $titreb2;
    public $data;
    public $data2;
    public function mount()
    {
    }

    public function render()
    {
        $this->data2 = infoGaleries::all();
        $this->data = galeries::all();
        return view('livewire.galerie');
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'libelet' => 'required',
            'type' => 'required',
        ]);

        $image = $validatedDate['image'];

        $img = ImageIntervention::make($image)->encode('jpg');
        $name = Str::random() . time() . '.jpg';
        $path = public_path() . "/app/galeries/";
        $img->save($path . $name);

        $respons = galeries::create([
            'image' => $name,
            'libelet' => $validatedDate['libelet'],
            'type' => $validatedDate['type'],
        ]);

        if ($respons) {
            session()->flash('message', 'limage a ete enregistrer avec succes.');
        } else {
            session()->flash("error", "Erreur! limage n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function store2()
    {
        $validatedDate = $this->validate([
            'titre' => 'required',
            'libelet' => 'required',
            'titreb1' => 'required',
            'libeletb1' => 'required',
            'texteb2' => 'required',
            'titreb2' => 'required',
        ]);

        $respons = infoGaleries::create($validatedDate);

        if ($respons) {
            session()->flash('message', 'les information on ete enregistrer avec succes.');
        } else {
            session()->flash("error", "Erreur! les information n'on pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function edit($id)
    {
        $imageEdit = galeries::where('id', $id)->first();
        $this->select_id = $id;
        //$this->image = $imageEdit->image;
        $this->libelet = $imageEdit->libelet;
        $this->type = $imageEdit->type;
    }

    public function edit2($id)
    {
        $infoEdit = infoGaleries::where('id', $id)->first();
        $this->select_id = $id;
        $this->titre = $infoEdit->titre;
        $this->libelet = $infoEdit->libelet;
        $this->titreb1 = $infoEdit->titreb1;
        $this->libeletb1 = $infoEdit->libeletb1;
        $this->texteb2 = $infoEdit->texteb2;
        $this->titreb2 = $infoEdit->titreb2;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'libelet' => 'required',
            'type' => 'required',
        ]);

        if ($this->select_id) {

            $image = $this->image;

            if (empty($image)) {
                $imageId = galeries::find($this->select_id);
                $imageId->update([
                    'libelet' => $this->libelet,
                    'type' => $this->type,
                ]);
                session()->flash('message', 'limage a ete modifier avec succes.');
            } else {
                $img = ImageIntervention::make($image)->encode('jpg');
                $name = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/galeries/";
                $img->save($path . $name);

                $imageId = galeries::find($this->select_id);
                $imageId->update([
                    'image' => $name,
                    'libelet' => $this->libelet,
                    'type' => $this->type,
                ]);
                session()->flash('message', 'limage a ete modifier avec succes.');
            }
        } else {
            session()->flash("error", "Erreur! limage n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update2()
    {
        $validatedDate = $this->validate([
            'titre' => 'required',
            'libelet' => 'required',
            'titreb1' => 'required',
            'libeletb1' => 'required',
            'texteb2' => 'required',
            'titreb2' => 'required',
        ]);

        if ($this->select_id) {

            $imageId = infoGaleries::find($this->select_id);
            $imageId->update([
                'titre' => $this->titre,
                'libelet' => $this->libelet,
                'titreb1' => $this->titreb1,
                'libeletb1' => $this->libeletb1,
                'texteb2' => $this->texteb2,
                'titreb2' => $this->titreb2,
            ]);
            session()->flash('message', 'les information on ete modifier avec succes.');
        } else {
            session()->flash("error", "Erreur! les information n'on pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = galeries::where('id', $id);
            $record->delete();
            session()->flash('message', 'limage a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! limage n'a pas ete supprimer");
        }
    }

    public function destroy2($id)
    {
        if ($id) {
            $record = infoGaleries::where('id', $id);
            $record->delete();
            session()->flash('message', 'les informations on ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! les information n'on pas ete supprimer");
        }
    }
}
