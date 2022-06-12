<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe;

class stripeController extends Controller
{
    public function stripe()
    {
        return view('frontend.pages.stripe');
    }

    public function stripePost(Request $request)
    {
        
        $data=$request->json()->all();

        $session=$request->session()->all();

        $panier=panier::join('produits','produits.id','=','paniers.produit')
        ->select('produits.id as id_produit','paniers.id as id_panier','produits.libelle','produits.img_principale','paniers.quantite','produits.prix')
        ->whereCompte(auth()->user()->id)
        ->get();
        
        $codeCom='Com'.auth()->user()->id.'_'.now()->format('Y-m-d_H:i:s');
        session([
            'codeCom' => $codeCom,
            ]);

        foreach ($panier as $key => $value) {
            $reponse=commande::create([
                    'codeCom'=>$codeCom,
                    'compte'=>auth()->user()->id,
                    'nom'=>$session['nom'],
                    'prenom'=>$session['prenom'],
                    'email'=>$session['email'],
                    'telephone'=>$session['telephone'],
                    'adresse'=>$session['adresse'],
                    'description'=>$session['description'],
                    'typePaiement'=>$session['paymentType'],
                    'montant'=> $value->prix,
                    'montant_total'=> $session['total'],
                    'quantite'=>$value->quantite,
                    'produit'=>$value->id_produit,
                    'devise'=>$data['paymentIntent']['currency'],
            ]);
        }

        panier::whereCompte(auth()->user()->id)->delete();
        // $reponse->email=env('MAIL_ADMIN');

        // try {
        //     $reponse->notify(new mailCommande);
        // } catch (\Throwable $th) {
        //     return $th;
        // }
        
        if ($reponse) {
            session([
                'nom'=>null,
                'prenom'=>null,
                'email'=>null,
                'adresse'=>null,
                'telephone'=>null,
                'note'=>null,
                'paymentType'=>null,
                'prix'=>null,
                'total'=>null,
                ]);

            return $data['paymentIntent'];

        } else {
            return response('error');
        }
 
    }

    public function reponseStripe(request $request){
        $commande=DB::table('commandes')
        ->join('produits','produits.id','commandes.produit')
        ->whereCompteAndCodecom(auth()->user()->id,session()->get('codeCom'))
        ->select('commandes.montant','commandes.codeCom','commandes.created_at','produits.libelle','commandes.adresse','commandes.status','commandes.montant_total','commandes.quantite')
        ->orderBy('commandes.created_at','desc')
        ->get();

        session([
            'codeCom'=>null
        ]);
        return view('frontend.pages.stripe-response-paiement',compact('commande'));
    }
}
