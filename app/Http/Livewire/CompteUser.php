<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as ImageIntervention;

class CompteUser extends Component
{
    use WithFileUploads;
    public $data, $name, $email, $phone, $location, $about, $profile;
    public function mount()
    {

        $data = auth()->user();
        $this->name = $data->name;
        $this->email = $data->email;
        $this->location = $data->location;
        $this->about = $data->about;
        $this->phone = $data->phone;
    }

    public function render()
    {
        $this->data = auth()->user();
        return view('livewire.compte-user');
    }

    public function update()
    {
        $image = $this->profile;
        if (empty($image)) {
            $user = User::find(auth()->user()->id);
            $respons = $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'location' => $this->location,
                'about' => $this->about,
            ]);
            if ($respons) {
                session()->flash('message', 'Profil modifier avec succes.');
            } else {
                session()->flash("error", "Erreur! le profil na pas ete modifier");
            }
        } else {
            $img = ImageIntervention::make($image)->encode('jpg');
            $name = Str::random() . time() . '.jpg';
            $path = public_path() . "/app/users/";
            $img->save($path . $name);

            $user = User::find(auth()->user()->id);
            $respons = $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'location' => $this->location,
                'about' => $this->about,
                'profile' => $name,
            ]);
            if ($respons) {
                session()->flash('message', 'Profil modifier avec succes.');
            } else {
                session()->flash("error", "Erreur! le profil na pas ete modifier");
            }
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
