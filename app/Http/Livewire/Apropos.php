<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\models\apropoBaties;
use App\models\caracteristiques;
use App\models\objectifs;
use App\models\infoPageApropos;
use App\models\partenaires;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

use function PHPUnit\Framework\isEmpty;

class Apropos extends Component
{
    use WithFileUploads;
    public $titreab, $text1ab, $text2ab, $imageab, $lireplusab, $select_id, $modal;
    public $titreC, $caract_num, $caract_intitule, $caract_libelet;
    public $titreOb, $objectif_num, $objectif_intitule, $objectif_libelet, $imageOb;
    public $logo, $nom_part, $services, $social_media1, $social_media2, $social_media3, $link1, $link2, $link3;
    public $imageIf, $grand_titre, $titre1, $titre2, $titre3;
    public $data, $data2, $data3, $data4;
    public function mount()
    {
    }

    public function render()
    {
        $this->data = ApropoBaties::all();
        $this->data2 = Caracteristiques::all();
        $this->data3 = Objectifs::all();
        $this->data4 = Partenaires::all();
        $this->data5 = InfoPageApropos::all();
        return view('livewire.apropos');
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'titreab' => 'required',
            'text1ab' => 'required',
            'text2ab' => 'required',
            'imageab.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'modal' => 'required',
        ]);

        $imageab = $validatedDate['imageab'];
        $file = '';
        foreach ($imageab as $key => $value) {
            $img = ImageIntervention::make($imageab[$key])->encode('jpg');
            $name = Str::random() . time() . '.jpg';
            $path = public_path() . "/app/apropos/";
            $img->save($path . $name);
            $file = $file . '->' . $name;
        }

        $respons = ApropoBaties::create([
            'titreab' => $validatedDate['titreab'],
            'text1ab' => $validatedDate['text1ab'],
            'text2ab' => $validatedDate['text2ab'],
            'imageab' => $file,
            'lireplusab' => $this->lireplusab,
            'modal' => $validatedDate['modal'],
        ]);

        if ($respons) {
            session()->flash('message', 'le bloc a propos a ete enregistrer avec succes.');
        } else {
            session()->flash("error", "Erreur! le bloc n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function store2()
    {
        $validatedDate = $this->validate([
            'caract_num' => 'required',
            'caract_intitule' => 'required',
            'caract_libelet' => 'required',
        ]);


        $respons = Caracteristiques::create([
            'titreC' => $this->titreC,
            'caract_num' => $validatedDate['caract_num'],
            'caract_intitule' => $validatedDate['caract_intitule'],
            'caract_libelet' => $validatedDate['caract_libelet'],
        ]);

        if ($respons) {
            session()->flash('message', 'la carcateristique a ete enregistrer avec succes.');
        } else {
            session()->flash("error", "Erreur! la caracteristique n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function store3()
    {
        $validatedDate = $this->validate([
            'objectif_num' => 'required',
            'objectif_intitule' => 'required',
            'objectif_libelet' => 'required',
        ]);

        if ($this->imageOb) {
            $image = $this->imageOb;

            $img = ImageIntervention::make($image)->encode('png');
            $name = Str::random() . time() . '.png';
            $path = public_path() . "/app/apropos/";
            $img->save($path . $name);
        } else {
            $name = '';
        }


        $respons = Objectifs::create([
            'titreOb' => $this->titreOb,
            'objectif_num' => $validatedDate['objectif_num'],
            'objectif_intitule' => $validatedDate['objectif_intitule'],
            'objectif_libelet' => $validatedDate['objectif_libelet'],
            'imageOb' => $name,
        ]);

        if ($respons) {
            session()->flash('message', " l'objectif a ete enregistrer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'objectif n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function store4()
    {
        $validatedDate = $this->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nom_part' => 'required',
            'services' => 'required',
        ]);

        $logo = $validatedDate['logo'];

        $img = ImageIntervention::make($logo)->encode('jpg');
        $name = Str::random() . time() . '.jpg';
        $path = public_path() . "/app/apropos/";
        $img->save($path . $name);
        //dd($this->lireplusab);

        $respons = Partenaires::create([
            'logo' => $name,
            'nom_part' => $validatedDate['nom_part'],
            'services' => $validatedDate['services'],
            'social_media1' => $this->social_media1,
            'social_media2' => $this->social_media2,
            'social_media3' => $this->social_media3,
            'link1' => $this->link1,
            'link2' => $this->link2,
            'link3' => $this->link3,
        ]);

        if ($respons) {
            session()->flash('message', 'Le partenaire a ete enregistrer avec succes.');
        } else {
            session()->flash("error", "Erreur! Le partenaire n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function store5()
    {
        $validatedDate = $this->validate([
            'imageIf' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'grand_titre' => 'required',
            'titre1' => 'required',
            'titre2' => 'required',
            'titre3' => 'required',
        ]);

        $imageIfo = $validatedDate['imageIf'];

        $img = ImageIntervention::make($imageIfo)->encode('jpg');
        $name = Str::random() . time() . '.jpg';
        $path = public_path() . "/app/apropos/";
        $img->save($path . $name);
        //dd($this->lireplusab);

        $respons = InfoPageApropos::create([
            'imageIf' => $name,
            'grand_titre' => $validatedDate['grand_titre'],
            'titre1' => $validatedDate['titre1'],
            'titre2' => $validatedDate['titre2'],
            'titre3' => $validatedDate['titre3'],
        ]);

        if ($respons) {
            session()->flash('message', "l'information a ete enregistrer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }


    public function edit($id)
    {
        $apoposEdit = ApropoBaties::where('id', $id)->first();
        $this->select_id = $id;
        $this->titreab = $apoposEdit->titreab;
        $this->text1ab = $apoposEdit->text1ab;
        $this->text2ab = $apoposEdit->text2ab;
        $this->lireplusab = $apoposEdit->lireplusab;
        $this->modal = $apoposEdit->modal;
    }

    public function edit2($id)
    {
        $caractEdit = Caracteristiques::where('id', $id)->first();
        $this->select_id = $id;
        $this->titreC = $caractEdit->titreC;
        $this->caract_num = $caractEdit->caract_num;
        $this->caract_intitule = $caractEdit->caract_intitule;
        $this->caract_libelet = $caractEdit->caract_libelet;
    }

    public function edit3($id)
    {
        $objectifEdit = Objectifs::where('id', $id)->first();
        $this->select_id = $id;
        $this->titreOb = $objectifEdit->titreOb;
        $this->objectif_num = $objectifEdit->objectif_num;
        $this->objectif_intitule = $objectifEdit->objectif_intitule;
        $this->objectif_libelet = $objectifEdit->objectif_libelet;
    }

    public function edit4($id)
    {
        $partenaireEdit = Partenaires::where('id', $id)->first();
        $this->select_id = $id;
        //$this->logo = $partenaireEdit->logo;
        $this->nom_part = $partenaireEdit->nom_part;
        $this->services = $partenaireEdit->services;
        $this->social_media1 = $partenaireEdit->social_media1;
        $this->social_media2 = $partenaireEdit->social_media2;
        $this->social_media3 = $partenaireEdit->social_media3;
        $this->link1 = $partenaireEdit->link1;
        $this->link2 = $partenaireEdit->link2;
        $this->link3 = $partenaireEdit->link3;
    }

    public function edit5($id)
    {
        $infoApEdit = InfoPageApropos::where('id', $id)->first();
        $this->select_id = $id;
        //$this->imageIf = $infoApEdit->imageIf;
        $this->grand_titre = $infoApEdit->grand_titre;
        $this->titre1 = $infoApEdit->titre1;
        $this->titre2 = $infoApEdit->titre2;
        $this->titre3 = $infoApEdit->titre3;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'titreab' => 'required',
            'text1ab' => 'required',
            'text2ab' => 'required',
            'modal' => 'required',
        ]);

        if ($this->select_id) {

            $imageab = $this->imageab;
            if (empty($imageab)) {
                $apropobId = ApropoBaties::find($this->select_id);
                $apropobId->update([
                    'titreab' => $this->titreab,
                    'text1ab' => $this->text1ab,
                    'text2ab' => $this->text2ab,
                    'lireplusab' => $this->lireplusab,
                    'modal' => $this->modal,
                ]);
                dd(explode('->', $apropobId->imageab));
            } else {
                $file = '';
                foreach ($imageab as $key => $value) {
                    $img = ImageIntervention::make($imageab[$key])->encode('jpg');
                    $name = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/apropos/";
                    $img->save($path . $name);
                    $file = $file . '->' . $name;
                }

                $apropobId = ApropoBaties::find($this->select_id);
                $apropobId->update([
                    'titreab' => $this->titreab,
                    'text1ab' => $this->text1ab,
                    'text2ab' => $this->text2ab,
                    'imageab' => $file,
                    'lireplusab' => $this->lireplusab,
                    'modal' => $this->modal,
                ]);
            }

            session()->flash('message', 'le bloc a propos a ete modifier avec succes.');
        } else {
            session()->flash("error", "Erreur! le bloc a propos n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update2()
    {
        $validatedDate = $this->validate([
            'caract_num' => 'required',
            'caract_intitule' => 'required',
            'caract_libelet' => 'required',
        ]);

        if ($this->select_id) {

            $carcatId = Caracteristiques::find($this->select_id);
            $carcatId->update([
                'titreC' => $this->titreC,
                'caract_num' => $this->caract_num,
                'caract_intitule' => $this->caract_intitule,
                'caract_libelet' => $this->caract_libelet,
            ]);
            session()->flash('message', 'la caracteristique a ete modifier avec succes.');
        } else {
            session()->flash("error", "Erreur! la caracteristique n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update3()
    {
        $validatedDate = $this->validate([
            'objectif_num' => 'required',
            'objectif_intitule' => 'required',
            'objectif_libelet' => 'required',
        ]);

        if ($this->select_id) {

            if ($this->imageOb) {
                $image = $this->imageOb;

                $img = ImageIntervention::make($image)->encode('png');
                $name = Str::random() . time() . '.png';
                $path = public_path() . "/app/apropos/";
                $img->save($path . $name);
            } else {
                $name = '';
            }

            $carcatId = Objectifs::find($this->select_id);
            $carcatId->update([
                'titreOb' => $this->titreOb,
                'objectif_num' => $this->objectif_num,
                'objectif_intitule' => $this->objectif_intitule,
                'objectif_libelet' => $this->objectif_libelet,
                'imageOb' => $name,
            ]);
            session()->flash('message', "l'objectif a ete modifier avec succes.");
        } else {
            session()->flash("error", "Erreur! l'objectif n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update4()
    {
        $validatedDate = $this->validate([
            'nom_part' => 'required',
            'services' => 'required',
        ]);

        if ($this->select_id) {
            $image = $this->logo;
            if (empty($image)) {
                $partenairId = Partenaires::find($this->select_id);
                $partenairId->update([
                    'nom_part' => $this->nom_part,
                    'services' => $this->services,
                ]);
                session()->flash('message', "l'objectif a ete modifier avec succes.");
            } else {
                $img = ImageIntervention::make($image)->encode('jpg');
                $name = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/apropos/";
                $img->save($path . $name);

                $partenairId = Partenaires::find($this->select_id);
                $partenairId->update([
                    'logo' => $name,
                    'nom_part' => $this->nom_part,
                    'services' => $this->services,
                    'social_media1' => $this->social_media1,
                    'social_media2' => $this->social_media2,
                    'social_media3' => $this->social_media3,
                    'link1' => $this->link1,
                    'link2' => $this->link2,
                    'link3' => $this->link3,
                ]);

                session()->flash('message', "l'objectif a ete modifier avec succes.");
            }
        } else {
            session()->flash("error", "Erreur! l'objectif n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update5()
    {
        $validatedDate = $this->validate([
            'grand_titre' => 'required',
            'titre1' => 'required',
            'titre2' => 'required',
            'titre3' => 'required',
        ]);

        if ($this->select_id) {
            $image = $this->imageIf;

            if (empty($image)) {

                $carcatId = InfoPageApropos::find($this->select_id);
                $carcatId->update([
                    'grand_titre' => $this->grand_titre,
                    'titre1' => $this->titre1,
                    'titre2' => $this->titre2,
                    'titre3' => $this->titre3,
                ]);
            } else {
                $img = ImageIntervention::make($image)->encode('jpg');
                $name = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/apropos/";
                $img->save($path . $name);

                $carcatId = InfoPageApropos::find($this->select_id);
                $carcatId->update([
                    'imageIf' => $name,
                    'grand_titre' => $this->grand_titre,
                    'titre1' => $this->titre1,
                    'titre2' => $this->titre2,
                    'titre3' => $this->titre3,
                ]);
            }

            session()->flash('message', "l'information modifier avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = ApropoBaties::where('id', $id);
            $record->delete();
            session()->flash('message', 'le bloc a propos a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! le bloc a propos n'a pas ete supprimer");
        }
    }

    public function destroy2($id)
    {
        if ($id) {
            $record = Caracteristiques::where('id', $id);
            $record->delete();
            session()->flash('message', 'la caracteristique a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! la caracteristique n'a pas ete supprimer");
        }
    }

    public function destroy3($id)
    {
        if ($id) {
            $record = Objectifs::where('id', $id);
            $record->delete();
            session()->flash('message', "l'objectif a ete supprimer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'objectif n'a pas ete supprimer");
        }
    }

    public function destroy4($id)
    {
        if ($id) {
            $record = Partenaires::where('id', $id);
            $record->delete();
            session()->flash('message', "l'objectif a ete supprimer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'objectif n'a pas ete supprimer");
        }
    }

    public function destroy5($id)
    {
        if ($id) {
            $record = InfoPageApropos::where('id', $id);
            $record->delete();
            session()->flash('message', "l'information a ete supprimer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete supprimer");
        }
    }
}