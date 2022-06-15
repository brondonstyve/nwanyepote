<?php

namespace App\Http\Controllers;

use App\Models\accueil;
use App\Models\apropoBaties;
use App\Models\article;
use App\Models\caracteristiques;

use App\Models\commande;
use App\Models\commentaireArticle;
use App\Models\commentaireEvenementParticipatif;
use App\Models\commentaireEventnps;
use App\Models\commentaireSite;
use App\Models\contacteInfo;
use App\Models\contenueressource;
use App\Models\culture;
use App\Models\evenementparticipatif;
use App\Models\faq;
use App\Models\galeries;
use App\Models\infocontactes;
use App\Models\infoEvenements;
use App\Models\infoGaleries;
use App\Models\infoPageApropos;
use App\Models\npEvenements;
use App\Models\objectifs;
use App\Models\pageArticle;
use App\Models\pageCulture;
use App\Models\pageFaq;
use App\Models\pageSport;
use App\Models\pageTourisme;
use App\Models\partenaires;
use App\Models\participant;
use App\Models\reponseCommentaireArticle;
use App\Models\reponseCommentaireEvenementParticipatif;
use App\Models\ressource;
use App\Models\sport;
use App\Models\Tourisme;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function index()
    {
        $infosPage = accueil::first();
        $commentaire = commentaireSite::get();
        $evenementParticipatif=evenementparticipatif::orderBy('created_at','desc')
        ->limit(3)
        ->get();

        $evenementNonParticipatif=npEvenements::orderBy('created_at','desc')
        ->limit(3)
        ->get();

        $article=article::orderBy('created_at','desc')
        ->limit(3)
        ->get();

        return view('frontend.pages.index', compact('infosPage', 'commentaire','evenementParticipatif','evenementNonParticipatif','article'));
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
        if ($lastid) {
            $nombcoment = commentaireEventnps::where('event_id', $lastid->id)->count();
            $diffyear = Carbon::createFromDate($lastid->created_at)->age;
            $date = Carbon::parse($lastid->created_at);
            $todayDate = Carbon::now();
            $diffd = $date->diffInDays($todayDate);
            $diffm = $date->diffInMonths($todayDate);
            $lastEvents = npEvenements::where('id', $lastid->id)->get();

        } else {
            $nombcoment =0;
            $diffyear = 0;
            $diffd = 0;
            $diffm = 0;
            $lastEvents = null;

        }
        
        
        //end last event time
        $infoEvent = infoEvenements::all();
        $npEvents = npEvenements::all();
        $evenementParticipatifRecent=null;
  
        $evenementParticipatif=evenementparticipatif::orderBy('created_at','desc')
        ->paginate(9);
        if (sizeOf($evenementParticipatif) > 0) {

            $evenementParticipatifRecent = evenementparticipatif::find($evenementParticipatif[0]->id);

            $participant = participant::join('users', 'users.id', 'participants.user')
                ->where([
                    ['participants.evenement', $evenementParticipatif[0]->id],
                ])
                ->orderBy('participants.voie', 'desc')
                ->limit(3)
                ->get();

            $total = DB::table('participants')
                ->whereEvenement($evenementParticipatif[0]->id)
                ->select(DB::raw('Sum(voie) as voie'))
                ->get('voie')[0]->voie;

            if ($total == 0) {
                $total = 1;
            }
            return view('frontend.pages.evenement', compact('evenementParticipatif', 'participant', 'total', 'evenementParticipatifRecent', 'infoEvent', 'lastEvents', 'npEvents', 'diffyear', 'diffm', 'diffd', 'nombcoment'));
        } else {
            return view('frontend.pages.evenement', compact('evenementParticipatif', 'infoEvent', 'lastEvents', 'npEvents', 'evenementParticipatifRecent', 'diffyear', 'diffm', 'diffd', 'nombcoment'));
        }
    }

    public function detailEvenement($id)
    {
        $nombcoment = commentaireEventnps::where('event_id', $id)->count();
        $detailEvents = npEvenements::where('id', $id)->get();
        $npEvents = npEvenements::all();
        return view('frontend.pages.detailEvenement', compact('detailEvents', 'nombcoment', 'npEvents'));
    }


    public function detailEvenementParticipatif(request $request)
    {
        $evenement = evenementparticipatif::find($request->id);
        $suivant = evenementparticipatif::find(($request->id + 1));
        $precedent = evenementparticipatif::find(($request->id - 1));
        $nbComment = commentaireEvenementParticipatif::whereEvenement($request->id)->count() + reponseCommentaireEvenementParticipatif::whereEvenement($request->id)->count();

        return view('frontend.pages.detailEvenementParticipatif', compact('evenement', 'suivant', 'precedent', 'nbComment'));
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
        $nbComment = commentaireArticle::whereArticle($request->id)->count() + reponseCommentaireArticle::whereArticle($request->id)->count();
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

    public function detailProduit(request $request)
    {
        $idProduct = $request->id;
        return view('frontend.pages.detailProduit', compact('idProduct'));
    }

    public function caisse()
    {

        return view('frontend.pages.caisse');
    }

    public function compte()
    {
        //where('user', auth()->user()->id);
        //$nomb_event = participant::with('evenementparticipatif')->where('evenementparticipatif.statut', true)->where('user', 'evenementparticipatif.id')->where('user', auth()->user()->id)->count();
        $nomb_event = participant::join('evenementparticipatifs', 'evenementparticipatifs.id', '=', 'participants.evenement')
            ->where('participants.user', auth()->user()->id)
            ->where('evenementparticipatifs.statut', true)
            ->count();
        $nomb_participation = participant::where('user', auth()->user()->id)->count();
        $nomb_commande = commande::where('compte', auth()->user()->id)->where('status', true)->count();
        $com_livrer = commande::where('compte', auth()->user()->id)->where('status', false)->count();
        return view('frontend.pages.compte', compact('nomb_participation', 'nomb_event', 'nomb_commande', 'com_livrer'));
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

    public function commande()
    {

        $commande = DB::table('commandes')
            ->join('produits', 'produits.id', 'commandes.produit')
            ->whereCompte(auth()->user()->id)
            ->select('commandes.montant', 'commandes.codeCom', 'commandes.created_at', 'produits.libelle', 'commandes.adresse', 'commandes.status', 'commandes.montant_total', 'commandes.quantite')
            ->orderBy('commandes.created_at', 'desc')
            ->get();

        return view('frontend.pages.commande', compact('commande'));
    }

    public function participer(request $request)
    {
        $code = $request->id;
        return view('frontend.pages.participer', compact('code'));
    }

    public function participant(request $request)
    {
        $code = $request->id;

        return view('frontend.pages.participant', compact('code'));
    }
}
