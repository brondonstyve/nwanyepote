<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function propos(){
        return view('frontend.pages.propos');
    }

    public function sport(){
        return view('frontend.pages.sport');
    }

    public function tourisme(){
        return view('frontend.pages.tourisme');
    }

    public function culture(){
        return view('frontend.pages.culture');
    }

    public function evenement(){
        return view('frontend.pages.evenement');
    }

    public function detailEvenement(){
        return view('frontend.pages.detailEvenement');
    }

    public function article(){
        return view('frontend.pages.article');
    }

    public function detailArticle(){
        return view('frontend.pages.detailArticle');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function ressource(){
        return view('frontend.pages.ressource');
    }

    public function galerie(){
        return view('frontend.pages.galerie');
    }

    public function faq(){
        return view('frontend.pages.faq');
    }

    public function boutique(){
        return view('frontend.pages.boutique');
    }

    public function panier(){
        return view('frontend.pages.panier');
    }

    public function caisse(){
        return view('frontend.pages.caisse');
    }

    public function compte(){
        return view('frontend.pages.compte');
    }

    public function login(){
        return view('frontend.pages.login');
    }

    public function signin(){
        return view('frontend.pages.signin');
    }

    public function resetPassword(){
        return view('frontend.pages.resetPassword');
    }

    public function politique(){
        return view('frontend.pages.politique');
    }
    
}
