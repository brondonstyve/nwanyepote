<?php

namespace App\Http\Controllers;

use App\models\infoEvenements;
use App\models\contacteInfo;
use App\models\galeries;
use App\Models\infoGaleries;
use App\models\apropoBaties;
use App\models\caracteristiques;
use App\models\objectifs;
use App\models\infoPageApropos;
use App\models\partenaires;
use App\models\npEvenements;
use App\models\commentaireEventnps;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function propos()
    {
        $partenaires = Partenaires::all();
        $objectifs = Objectifs::all();
        $caracteristiques = Caracteristiques::all();
        $informations = InfoPageApropos::all();
        $apropobs = ApropoBaties::all();
        return view('frontend.pages.propos', compact('partenaires', 'objectifs', 'caracteristiques', 'informations', 'apropobs'));
    }

    public function sport()
    {
        return view('frontend.pages.sport');
    }

    public function tourisme()
    {
        return view('frontend.pages.tourisme');
    }

    public function culture()
    {
        return view('frontend.pages.culture');
    }

    public function evenement()
    {
        $lastid = npEvenements::latest('id')->first();
        $infoEvent = InfoEvenements::all();
        $lastEvents = npEvenements::where('id', $lastid->id)->get();
        $npEvents = npEvenements::all();
        return view('frontend.pages.evenement', compact('infoEvent', 'lastEvents', 'npEvents'));
    }

    public function detailEvenement($id)
    {
        $nombcoment = CommentaireEventnps::where('event_id', $id)->count();
        $detailEvents = npEvenements::where('id', $id)->get();
        return view('frontend.pages.detailEvenement', compact('detailEvents', 'nombcoment'));
    }

    public function article()
    {
        return view('frontend.pages.article');
    }

    public function detailArticle()
    {
        return view('frontend.pages.detailArticle');
    }

    public function contact()
    {
        $infoContactes = ContacteInfo::all();
        return view('frontend.pages.contact', compact('infoContactes'));
    }

    public function ressource()
    {
        return view('frontend.pages.ressource');
    }

    public function galerie()
    {
        $galeries = Galeries::all();
        $infoGaleries = InfoGaleries::all();
        return view('frontend.pages.galerie', compact('infoGaleries', 'galeries'));
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function boutique()
    {
        return view('frontend.pages.boutique');
    }

    public function panier()
    {
        return view('frontend.pages.panier');
    }

    public function caisse()
    {
        return view('frontend.pages.caisse');
    }

    public function compte()
    {
        return view('frontend.pages.compte');
    }

    public function login()
    {
        return view('frontend.pages.login');
    }

    public function signin()
    {
        return view('frontend.pages.signin');
    }

    public function resetPassword()
    {
        return view('frontend.pages.resetPassword');
    }

    public function politique()
    {
        return view('frontend.pages.politique');
    }
}
