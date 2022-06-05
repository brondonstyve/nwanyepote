<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\models\infoEvenements;
use App\models\npEvenements;
use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class Evenement extends Component
{
    use WithFileUploads;
    public $grang_titre, $libelet, $titre1, $libelet1, $titre2, $libelet2, $titre3;
    public $imagenp, $image_principal, $titres, $edition, $titres1, $libelet1a, $libelet1b, $libelet1c, $personne_importantes, $titres2, $libelet2a, $libelet2b, $directeur_publication, $apropoDP, $imagedp;
    public $select_id;
    public $data, $data2;
    public function mount()
    {
    }

    public function render()
    {
        $this->data2 = npEvenements::all();
        $this->data = infoEvenements::all();
        return view('livewire.evenement');
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'grang_titre' => 'required',
            'libelet' => 'required',
            'titre1' => 'required',
            'libelet1' => 'required',
            'titre2' => 'required',
            'libelet2' => 'required',
            'titre3' => 'required',
        ]);


        $respons = infoEvenements::create($validatedDate);

        if ($respons) {
            session()->flash('message', " l'information a ete enregistrer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function store2()
    {
        $validatedDate = $this->validate([
            'imagenp.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_principal' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'titres' => 'required',
            'edition' => 'required',
            'titres1' => 'required',
            'libelet1a' => 'required',
            'libelet1b' => 'required',
            'libelet1c' => 'required',
            'personne_importantes' => 'required',
            'titres2' => 'required',
            'libelet2a' => 'required',
            'libelet2b' => 'required',
            'directeur_publication' => 'required',
            'apropoDP' => 'required',
            'imagedp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $validatedDate['imagenp'];
        $imagep = $validatedDate['image_principal'];
        $imagedpu = $validatedDate['imagedp'];
        $file = '';
        foreach ($image as $key => $value) {
            $img = ImageIntervention::make($image[$key])->encode('jpg');
            $name = Str::random() . time() . '.jpg';
            $path = public_path() . "/app/evenement/";
            $img->save($path . $name);
            $file = $file . '->' . $name;
        }

        $img1 = ImageIntervention::make($imagep)->encode('jpg');
        $name1 = Str::random() . time() . '.jpg';
        $path = public_path() . "/app/evenement/";
        $img1->save($path . $name1);


        $img2 = ImageIntervention::make($imagedpu)->encode('jpg');
        $name2 = Str::random() . time() . '.jpg';
        $path = public_path() . "/app/evenement/";
        $img2->save($path . $name2);

        $respons = npEvenements::create([
            'imagenp' => $file,
            'image_principal' => $name1,
            'titres' => $validatedDate['titres'],
            'edition' => $validatedDate['edition'],
            'titres1' => $validatedDate['titres1'],
            'libelet1a' => $validatedDate['libelet1a'],
            'libelet1b' => $validatedDate['libelet1b'],
            'libelet1c' => $validatedDate['libelet1c'],
            'personne_importantes' => $validatedDate['personne_importantes'],
            'titres2' => $validatedDate['titres2'],
            'libelet2a' => $validatedDate['libelet2a'],
            'libelet2b' => $validatedDate['libelet2b'],
            'directeur_publication' => $validatedDate['directeur_publication'],
            'apropoDP' => $validatedDate['apropoDP'],
            'imagedp' => $name2,
        ]);

        if ($respons) {
            session()->flash('message', " l'information a ete enregistrer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function edit($id)
    {
        $infoEdit = infoEvenements::where('id', $id)->first();
        $this->select_id = $id;
        $this->grang_titre = $infoEdit->grang_titre;
        $this->libelet = $infoEdit->libelet;
        $this->titre1 = $infoEdit->titre1;
        $this->libelet1 = $infoEdit->libelet1;
        $this->titre2 = $infoEdit->titre2;
        $this->libelet2 = $infoEdit->libelet2;
        $this->titre3 = $infoEdit->titre3;
    }

    public function edit2($id)
    {
        $eventfoEdit = npEvenements::where('id', $id)->first();
        $this->select_id = $id;
        $this->titres = $eventfoEdit->titres;
        $this->edition = $eventfoEdit->edition;
        $this->titres1 = $eventfoEdit->titres1;
        $this->libelet1a = $eventfoEdit->libelet1a;
        $this->libelet1b = $eventfoEdit->libelet1b;
        $this->libelet1c = $eventfoEdit->libelet1c;
        $this->personne_importantes = $eventfoEdit->personne_importantes;
        $this->titres2 = $eventfoEdit->titres2;
        $this->libelet2a = $eventfoEdit->libelet2a;
        $this->libelet2b = $eventfoEdit->libelet2b;
        $this->directeur_publication = $eventfoEdit->directeur_publication;
        $this->apropoDP = $eventfoEdit->apropoDP;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'grang_titre' => 'required',
            'libelet' => 'required',
            'titre1' => 'required',
            'libelet1' => 'required',
            'titre2' => 'required',
            'libelet2' => 'required',
            'titre3' => 'required',
        ]);

        if ($this->select_id) {
            $apropobId = infoEvenements::find($this->select_id);
            $apropobId->update([
                'grang_titre' => $this->grang_titre,
                'libelet' => $this->libelet,
                'titre1' => $this->titre1,
                'libelet1' => $this->libelet1,
                'titre2' => $this->titre2,
                'libelet2' => $this->libelet2,
                'titre3' => $this->titre3,
            ]);
            session()->flash('message', "l'information a ete modifier avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function update2()
    {
        $validatedDate = $this->validate([
            'titres' => 'required',
            'titres1' => 'required',
            'edition' => 'required',
            'libelet1a' => 'required',
            'libelet1b' => 'required',
            'libelet1c' => 'required',
            'personne_importantes' => 'required',
            'titres2' => 'required',
            'libelet2a' => 'required',
            'libelet2b' => 'required',
            'directeur_publication' => 'required',
            'apropoDP' => 'required',
        ]);

        if ($this->select_id) {
            $image = $this->imagenp;
            $image1 = $this->image_principal;
            $image2 = $this->imagedp;
            if (empty($image) && empty($image1) && empty($image2)) {
                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                ]);
            } else if (empty($image1) && empty($image2)) {
                $file = '';
                foreach ($image as $key => $value) {
                    $img = ImageIntervention::make($image[$key])->encode('jpg');
                    $name = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $img->save($path . $name);
                    $file = $file . '->' . $name;
                }
                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'imagenp' => $file,
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                ]);
            } else if (empty($image) && empty($image2)) {

                $img = ImageIntervention::make($image1)->encode('jpg');
                $name1 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name1);

                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'image_principal' => $name1,
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                ]);
            } else if (empty($image) && empty($image1)) {
                $img = ImageIntervention::make($image2)->encode('jpg');
                $name2 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name2);

                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                    'imagedp' => $name2,
                ]);
            } else if (empty($image)) {
                $img = ImageIntervention::make($image1)->encode('jpg');
                $name1 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name1);

                $img = ImageIntervention::make($image2)->encode('jpg');
                $name2 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name2);

                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'image_principal' => $name1,
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                    'imagedp' => $name2,
                ]);
            } else if (empty($image1)) {
                $file = '';
                foreach ($image as $key => $value) {
                    $img = ImageIntervention::make($image[$key])->encode('jpg');
                    $name = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $img->save($path . $name);
                    $file = $file . '->' . $name;
                }

                $img = ImageIntervention::make($image2)->encode('jpg');
                $name2 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name2);

                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'imagenp' => $file,
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                    'imagedp' => $name2,
                ]);
            } else if (empty($image2)) {
                $file = '';
                foreach ($image as $key => $value) {
                    $img = ImageIntervention::make($image[$key])->encode('jpg');
                    $name = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $img->save($path . $name);
                    $file = $file . '->' . $name;
                }

                $img = ImageIntervention::make($image1)->encode('jpg');
                $name1 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name1);

                $npEvenement = npEvenements::find($this->select_id);
                $npEvenement->update([
                    'imagenp' => $file,
                    'image_principal' => $name1,
                    'titres' => $this->titres,
                    'edition' => $this->edition,
                    'titres1' => $this->titres1,
                    'libelet1a' => $this->libelet1a,
                    'libelet1b' => $this->libelet1b,
                    'libelet1c' => $this->libelet1c,
                    'libelet2' => $this->libelet2,
                    'personne_importantes' => $this->personne_importantes,
                    'titres2' => $this->titres2,
                    'libelet2a' => $this->libelet2a,
                    'libelet2b' => $this->libelet2b,
                    'directeur_publication' => $this->directeur_publication,
                    'apropoDP' => $this->apropoDP,
                ]);
            }

            session()->flash('message', "l'information a ete modifier avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete modifier");
        }

        //$this->resetInputFields();
    }

    public function destroy($id)
    {
        if ($id) {
            $record = infoEvenements::where('id', $id);
            $record->delete();
            session()->flash('message', 'le bloc a propos a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! le bloc a propos n'a pas ete supprimer");
        }
    }

    public function destroy2($id)
    {
        if ($id) {
            $record = npEvenements::where('id', $id);
            $record->delete();
            session()->flash('message', 'le bloc a propos a ete supprimer avec succes.');
        } else {
            session()->flash("error", "Erreur! le bloc a propos n'a pas ete supprimer");
        }
    }
}
