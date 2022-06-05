<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class LoginUser extends Component
{

    public $email, $password;
    public $remember_me = false;
    //public $utilisateur = 'utilisateur';
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {

        /*if (auth()->user()) {
            redirect('/dashboard');
        }*/
        //$this->fill(['email' => 'admin@Nwanyepote.com', 'password' => 'secret']);
    }

    public function render()
    {
        return view('livewire.login-user');
    }

    public function login()
    {
        $credentials = $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], ['type' => 'utilisateur'], $this->remember_me)) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/mon-compte');
        } else {
            session()->flash("error", "Erreur! mot de passe ou email incorrecte");
        }
    }
}
