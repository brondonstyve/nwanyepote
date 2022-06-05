<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {

        if (auth()->user()) {
            redirect('/dashboard');
        }
        //$this->fill(['email' => 'admin@Nwanyepote.com', 'password' => 'secret']);
    }

    public function login()
    {
        $credentials = $this->validate();
        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], ['type' => 'admin'], $this->remember_me)) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard');
        } else {
            return $this->addError('email', trans('Nom d\'utilisateur ou mot de passe incorrect.'));
        }
    }

    public function render()
    {
        /*User::create([
            'name'=>'Nwanyepote',
            'email'=>'brondonstyve@gmail.com',
            'password'=>bcrypt(123456),
        ]);*/
        return view('livewire.auth.login');
    }
}
