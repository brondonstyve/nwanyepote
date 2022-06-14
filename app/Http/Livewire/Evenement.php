<?php

namespace App\Http\Livewire;

use App\Models\infoEvenements;
use App\Models\npEvenements;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class Evenement extends Component
{
    use WithFileUploads;
    public $grang_titre, $libelet, $titre1, $libelet1, $titre2, $libelet2, $titre3;
    public $imagenp,
        $video1,
        $image_principal,
        $titres,
        $titres1,
        $libelet1a,
        $libelet1b,
        $libelet1c,
        $directeur_publication,
        $apropoDP,
        $imagedp,
        //
        $imagenp2,
        $video2,
        $titres2,
        $libelet2a,
        $libelet2b,
        $libelet2c,
        //
        $imagenp3,
        $video3,
        $titres3,
        $libelet3a,
        $libelet3b,
        $libelet3c,
        //
        $imagenp4,
        $video4,
        $titres4,
        $libelet4a,
        $libelet4b,
        $libelet4c,
        //
        $imagenp5,
        $video5,
        $titres5,
        $libelet5a,
        $libelet5b,
        $libelet5c;

    public $select_id;
    public $data, $data2;
    public function mount()
    {
        $this->video1 = "";
        //$this->image_principal,
        $this->titres = "";
        $this->titres1 = "";
        $this->libelet1a = "";
        $this->libelet1b = "";
        $this->libelet1c = "";
        $this->directeur_publication = "";
        $this->apropoDP = "";
        //$this->imagedp,
        //$this->imagenp2 = "";
        $this->video2 = "";
        $this->titres2 = "";
        $this->libelet2a = "";
        $this->libelet2b = "";
        $this->libelet2c = "";
        //$this->imagenp3 = "";
        $this->video3 = "";
        $this->titres3 = "";
        $this->libelet3a = "";
        $this->libelet3b = "";
        $this->libelet3c = "";
        //$this->imagenp4 = "";
        $this->video4 = "";
        $this->titres4 = "";
        $this->libelet4a = "";
        $this->libelet4b = "";
        $this->libelet4c = "";
        //$this->imagenp5 = "";
        $this->video5 = "";
        $this->titres5 = "";
        $this->libelet5a = "";
        $this->libelet5b = "";
        $this->libelet5c = "";
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
            'titres1' => 'required',
            'libelet1a' => 'required',
            'libelet1b' => 'required',
            'libelet1c' => 'required',
            'directeur_publication' => 'required',
            'apropoDP' => 'required',
            'imagedp' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $validatedDate['imagenp'];
        $imagep = $validatedDate['image_principal'];
        $imagedpu = $validatedDate['imagedp'];
        $file = '';
        $image2 = $this->imagenp2;
        $file2 = '';
        $image3 = $this->imagenp3;
        $file3 = '';
        $image4 = $this->imagenp4;
        $file4 = '';
        $image5 = $this->imagenp5;
        $file5 = '';

        if (empty($image)) {
            $file = "";
        } else {
            foreach ($image as $key => $value) {
                $img = ImageIntervention::make($image[$key])->encode('jpg');
                $name = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img->save($path . $name);
                $file = $file . '->' . $name;
            }
        }

        if (empty($image2)) {
            $file2 = "";
        } else {
            foreach ($image2 as $key => $value) {
                $imgB = ImageIntervention::make($image2[$key])->encode('jpg');
                $nameB = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $imgB->save($path . $nameB);
                $file2 = $file2 . '->' . $nameB;
            }
        }

        if (empty($image3)) {
            $file3 = "";
        } else {
            foreach ($image3 as $key => $value) {
                $imgC = ImageIntervention::make($image3[$key])->encode('jpg');
                $nameC = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $imgC->save($path . $nameC);
                $file3 = $file3 . '->' . $nameC;
            }
        }

        if (empty($image4)) {
            $file4 = "";
        } else {
            foreach ($image4 as $key => $value) {
                $imgD = ImageIntervention::make($image4[$key])->encode('jpg');
                $nameD = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $imgD->save($path . $nameD);
                $file4 = $file4 . '->' . $nameD;
            }
        }

        if (empty($image5)) {
            $file5 = "";
        } else {
            foreach ($image5 as $key => $value) {
                $imgE = ImageIntervention::make($image5[$key])->encode('jpg');
                $nameE = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $imgE->save($path . $nameE);
                $file5 = $file5 . '->' . $nameE;
            }
        }

        if (empty($imagep)) {
            $name1 = "";
        } else {
            $img1 = ImageIntervention::make($imagep)->encode('jpg');
            $name1 = Str::random() . time() . '.jpg';
            $path = public_path() . "/app/evenement/";
            $img1->save($path . $name1);
        }

        if (empty($imagedpu)) {
            $name2 = "";
        } else {
            $img2 = ImageIntervention::make($imagedpu)->encode('jpg');
            $name2 = Str::random() . time() . '.jpg';
            $path = public_path() . "/app/evenement/";
            $img2->save($path . $name2);
        }

        $respons = npEvenements::create([
            'imagenp' => $file,
            'video1' => $this->video1,
            'image_principal' => $name1,
            'titres' => $validatedDate['titres'],
            'titres1' => $validatedDate['titres1'],
            'libelet1a' => $validatedDate['libelet1a'],
            'libelet1b' => $validatedDate['libelet1b'],
            'libelet1c' => $validatedDate['libelet1c'],
            'directeur_publication' => $validatedDate['directeur_publication'],
            'apropoDP' => $validatedDate['apropoDP'],
            'imagedp' => $name2,
            //
            'imagenp2' => $file2,
            'video2' => $this->video2,
            'titres2' => $this->titres2,
            'libelet2a' => $this->libelet2a,
            'libelet2b' => $this->libelet2b,
            'libelet2c' => $this->libelet2c,
            //
            'imagenp3' => $file3,
            'video3' => $this->video3,
            'titres3' => $this->titres3,
            'libelet3a' => $this->libelet3a,
            'libelet3b' => $this->libelet3b,
            'libelet3c' => $this->libelet3c,
            //
            'imagenp4' => $file4,
            'video4' => $this->video4,
            'titres4' => $this->titres4,
            'libelet4a' => $this->libelet4a,
            'libelet4b' => $this->libelet4b,
            'libelet4c' => $this->libelet4c,
            //
            'imagenp5' => $file5,
            'video5' => $this->video5,
            'titres5' => $this->titres5,
            'libelet5a' => $this->libelet5a,
            'libelet5b' => $this->libelet5b,
            'libelet5c' => $this->libelet5c,
        ]);

        $this->mount();

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
        $this->titres1 = $eventfoEdit->titres1;
        $this->libelet1a = $eventfoEdit->libelet1a;
        $this->libelet1b = $eventfoEdit->libelet1b;
        $this->libelet1c = $eventfoEdit->libelet1c;
        $this->directeur_publication = $eventfoEdit->directeur_publication;
        $this->apropoDP = $eventfoEdit->apropoDP;
        //bloc2
        $this->video2 = $eventfoEdit->video2;
        $this->titres2 = $eventfoEdit->titres2;
        $this->libelet2a = $eventfoEdit->libelet2a;
        $this->libelet2b = $eventfoEdit->libelet2b;
        $this->libelet2c = $eventfoEdit->libelet2c;
        //bloc3
        $this->video3 = $eventfoEdit->video3;
        $this->titres3 = $eventfoEdit->titres3;
        $this->libelet3a = $eventfoEdit->libelet3a;
        $this->libelet3b = $eventfoEdit->libelet3b;
        $this->libelet3c = $eventfoEdit->libelet3c;
        //bloc4
        $this->video4 = $eventfoEdit->video4;
        $this->titres4 = $eventfoEdit->titres4;
        $this->libelet4a = $eventfoEdit->libelet4a;
        $this->libelet4b = $eventfoEdit->libelet4b;
        $this->libelet4c = $eventfoEdit->libelet4c;
        //bloc5
        $this->video5 = $eventfoEdit->video5;
        $this->titres5 = $eventfoEdit->titres5;
        $this->libelet5a = $eventfoEdit->libelet5a;
        $this->libelet5b = $eventfoEdit->libelet5b;
        $this->libelet5c = $eventfoEdit->libelet5c;
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
            'libelet1a' => 'required',
            'libelet1b' => 'required',
            'libelet1c' => 'required',
            'directeur_publication' => 'required',
            'apropoDP' => 'required',
        ]);

        if ($this->select_id) {

            $npEvenemens = npEvenements::find($this->select_id);

            $image = $this->imagenp;
            $image1 = $this->image_principal;
            $imagedp2 = $this->imagedp;
            $file = '';
            $image2 = $this->imagenp2;
            $file2 = '';
            $image3 = $this->imagenp3;
            $file3 = '';
            $image4 = $this->imagenp4;
            $file4 = '';
            $image5 = $this->imagenp5;
            $file5 = '';

            if (empty($image)) {
                $file = $npEvenemens->imagenp;
            } else {
                foreach ($image as $key => $value) {
                    $img = ImageIntervention::make($image[$key])->encode('jpg');
                    $name = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $img->save($path . $name);
                    $file = $file . '->' . $name;
                }
            }

            if (empty($image2)) {
                $file2 = NULL;
            } else {
                foreach ($image2 as $key => $value) {
                    $imgB = ImageIntervention::make($image2[$key])->encode('jpg');
                    $nameB = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $imgB->save($path . $nameB);
                    $file2 = $file2 . '->' . $nameB;
                }
            }

            if (empty($image3)) {
                $file3 = NULL;
            } else {
                foreach ($image3 as $key => $value) {
                    $imgC = ImageIntervention::make($image3[$key])->encode('jpg');
                    $nameC = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $imgC->save($path . $nameC);
                    $file3 = $file3 . '->' . $nameC;
                }
            }

            if (empty($image4)) {
                $file4 = NULL;
            } else {
                foreach ($image4 as $key => $value) {
                    $imgD = ImageIntervention::make($image4[$key])->encode('jpg');
                    $nameD = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $imgD->save($path . $nameD);
                    $file4 = $file4 . '->' . $nameD;
                }
            }

            if (empty($image5)) {
                $file5 = NULL;
            } else {
                foreach ($image5 as $key => $value) {
                    $imgE = ImageIntervention::make($image5[$key])->encode('jpg');
                    $nameE = Str::random() . time() . '.jpg';
                    $path = public_path() . "/app/evenement/";
                    $imgE->save($path . $nameE);
                    $file5 = $file5 . '->' . $nameE;
                }
            }

            if (empty($image1)) {
                $name1 = $npEvenemens->image_principal;
            } else {
                $img1 = ImageIntervention::make($image1)->encode('jpg');
                $name1 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img1->save($path . $name1);
            }

            if (empty($imagedp2)) {
                $name2 = $npEvenemens->imagedp;
            } else {
                $img2 = ImageIntervention::make($imagedp2)->encode('jpg');
                $name2 = Str::random() . time() . '.jpg';
                $path = public_path() . "/app/evenement/";
                $img2->save($path . $name2);
            }

            $npEvenement = npEvenements::find($this->select_id);
            $npEvenement->update([
                'imagenp' => $file,
                'video1' => $this->video1,
                'image_principal' => $name1,
                'titres' => $this->titres,
                'titres1' => $this->titres1,
                'libelet1a' => $this->libelet1a,
                'libelet1b' => $this->libelet1b,
                'libelet1c' => $this->libelet1c,
                'directeur_publication' => $this->directeur_publication,
                'apropoDP' => $this->apropoDP,
                'imagedp' => $name2,
                //
                'imagenp2' => $file2,
                'video2' => $this->video2,
                'titres2' => $this->titres2,
                'libelet2a' => $this->libelet2a,
                'libelet2b' => $this->libelet2b,
                'libelet2c' => $this->libelet2c,
                //
                'imagenp3' => $file3,
                'video3' => $this->video3,
                'titres3' => $this->titres3,
                'libelet3a' => $this->libelet3a,
                'libelet3b' => $this->libelet3b,
                'libelet3c' => $this->libelet3c,
                //
                'imagenp4' => $file4,
                'video4' => $this->video4,
                'titres4' => $this->titres4,
                'libelet4a' => $this->libelet4a,
                'libelet4b' => $this->libelet4b,
                'libelet4c' => $this->libelet4c,
                //
                'imagenp5' => $file5,
                'video5' => $this->video5,
                'titres5' => $this->titres5,
                'libelet5a' => $this->libelet5a,
                'libelet5b' => $this->libelet5b,
                'libelet5c' => $this->libelet5c,
            ]);


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
