<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Cache;
use App\models\user;
use Carbon\Carbon;
use Livewire\Component;

class CreeComptes extends Component
{
    public $email, $password, $confirmPass, $name;
    public $otpCode;

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.cree-comptes');
    }

    private function generateOTP()
    {
        $otpCode = mt_rand(100000, 999999);
        return $otpCode;
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'confirmPass' => 'required|min:7|same:password',
        ]);

        $otp = $this->generateOTP();

        $respons = User::create([
            'name' => $validatedDate['name'],
            'email' => $validatedDate['email'],
            'password' => bcrypt($validatedDate['password']),
        ]);

        Cache::put([$validatedDate['email'] => $otp], now()->addMinutes(15));

        $target = $validatedDate['email'];
        $template = 'emails.email_verification';
        $subject = "verification d'email";
        $data = array(
            'otp' => $otp,
        );

        emailNotification($data, $template, $subject, $target);

        if ($respons) {
            session()->flash('message', " l'information a ete enregistrer avec succes.");
        } else {
            session()->flash("error", "Erreur! l'information n'a pas ete enregistrer");
        }

        //$this->resetInputFields();
    }

    public function verifyOtp()
    {
        $validatedDate = $this->validate([
            'otpCode' => 'required|min:4',
            'email' => 'required|email|exists:users,email',
        ]);

        if ($validatedDate['otpCode'] == Cache::get($validatedDate['email'])) {
            Cache::forget($validatedDate['email']);
            $userActiv = User::where('email', $validatedDate['email'])->first();
            $userActiv->update([
                'email_verified_at' => Carbon::now()->addHours(1)->format('H:i:m'),
            ]);
            session()->flash('message', "Votre compte a ete activer avec succes.");
        } else {
            session()->flash("error", "Erreur! code OTP incorrecte");
        }

        //$this->resetInputFields();
    }
}
