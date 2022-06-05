<?php

namespace App\Http\Controllers;

use App\models\infoEvenements;
use App\models\contacteInfo;
use App\models\infocontactes;
use App\models\galeries;
use App\Models\infoGaleries;
use App\models\apropoBaties;
use App\models\caracteristiques;
use App\models\objectifs;
use App\models\infoPageApropos;
use App\models\partenaires;
use App\models\npEvenements;
use App\models\commentaireEventnps;
use App\Models\accueil;
use App\Models\article;
use App\Models\commentaireArticle;
use App\Models\commentaireSite;
use App\Models\contenueressource;
use App\Models\culture;
use App\Models\faq;
use App\Models\pageArticle;
use App\Models\pageCulture;
use App\Models\pageFaq;
use App\Models\pageSport;
use App\Models\pageTourisme;
use App\Models\reponseCommentaireArticle;
use App\Models\ressource;
use App\Models\sport;
use App\Models\Tourisme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function index()
    {
        $infosPage = accueil::first();
        $commentaire = commentaireSite::get();
        return view('frontend.pages.index', compact('infosPage', 'commentaire'));
    }

    public function propos()
    {
        $partenaires = partenaires::all();
        $objectifs = objectifs::all();
        $caracteristiques = caracteristiques::all();
        $informations = infoPageApropos::all();
        $apropobs = apropoBaties::all();
        return view('frontend.pages.propos', compact('partenaires', 'objectifs', 'caracteristiques', 'informations', 'apropobs'));
    }

    public function sport()
    {
        $infosPage = pageSport::first();
        $contenuSport = sport::paginate(6);
        return view('frontend.pages.sport', compact('infosPage', 'contenuSport'));
    }

    public function tourisme()
    {
        $infosPage = pageTourisme::first();
        $contenuTourisme = Tourisme::paginate(6);
        return view('frontend.pages.tourisme', compact('infosPage', 'contenuTourisme'));
    }

    public function culture()
    {
        $infosPage = pageCulture::first();
        $contenuCulture = culture::paginate(6);
        return view('frontend.pages.culture', compact('infosPage', 'contenuCulture'));
    }

    public function evenement()
    {
        $lastid = npEvenements::latest('id')->first();
        $infoEvent = infoEvenements::all();
        $lastEvents = npEvenements::where('id', $lastid->id)->get();
        $npEvents = npEvenements::all();
        return view('frontend.pages.evenement', compact('infoEvent', 'lastEvents', 'npEvents'));
    }

    public function detailEvenement($id)
    {
        $nombcoment = commentaireEventnps::where('event_id', $id)->count();
        $detailEvents = npEvenements::where('id', $id)->get();
        return view('frontend.pages.detailEvenement', compact('detailEvents', 'nombcoment'));
    }

    public function article()
    {
        $infosPage = pageArticle::first();
        return view('frontend.pages.article', compact('infosPage'));
    }

    public function detailArticle(Request $request)
    {
        $infosPage = pageArticle::first();
        $article = article::find($request->id);
        $suivant = article::find(($request->id + 1));
        $precedent = article::find(($request->id - 1));
        $nbComment = commentaireArticle::count() + reponseCommentaireArticle::count();
        $aimer = DB::table('articles')
            ->limit(3)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('frontend.pages.detailArticle', compact('infosPage', 'article', 'suivant', 'precedent', 'aimer', 'nbComment'));
    }

    public function contact()
    {
        $infoplateformes = infocontactes::all();
        $infoContactes = contacteInfo::all();
        return view('frontend.pages.contact', compact('infoContactes', 'infoplateformes'));
    }

    public function ressource()
    {
        $infosPage = ressource::first();
        $ressources = contenueressource::get();
        return view('frontend.pages.ressource', compact('infosPage', 'ressources'));
    }

    public function galerie()
    {
        $galeries = galeries::all()->take(3);
        $infoGaleries = infoGaleries::all();
        return view('frontend.pages.galerie', compact('infoGaleries', 'galeries'));
    }

    public function faq()
    {
        $infosPage = pageFaq::first();
        $faq = faq::get();
        return view('frontend.pages.faq', compact('infosPage', 'faq'));
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
