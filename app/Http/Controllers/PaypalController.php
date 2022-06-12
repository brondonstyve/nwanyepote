<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Models\commande;
use App\Models\panier;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;

class PaypalController extends Controller
{
    private $_api_context;
    
    public function __construct()
    {
            
        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    public function payWithPaypal()
    {
        return view('frontend.pages.caisse');
    }

    public function getResponse(Request $request){

        if ($request->code!=1) {
        $commande=DB::table('commandes')
        ->join('produits','produits.id','commandes.produit')
        ->whereCompteAndCodecom(auth()->user()->id,$request->code)
        ->select('commandes.montant','commandes.codeCom','commandes.created_at','produits.libelle','commandes.adresse','commandes.status','commandes.montant_total','commandes.quantite')
        ->orderBy('commandes.created_at','desc')
        ->get();

        return view('frontend.pages.paypal-response',compact('commande'));

        }else {
            return view('frontend.pages.paypal-response2');
        }
        
    }


    public function getPaymentStatus(Request $request)
    {        
        $payment_id = Session::get('paypal_payment_id');

        Session::forget('paypal_payment_id');
        if (empty($request->input('PayerID')) || empty($request->input('token'))) {
            \Session::put('error','Paiement échoué');
            return Redirect::route('paypalResponse',1);
        }
        $payment = Payment::get($payment_id, $this->_api_context);        
        $execution = new PaymentExecution();
        $execution->setPayerId($request->input('PayerID'));        
        $result = $payment->execute($execution, $this->_api_context);
        
        if ($result->getState() == 'approved') {   
            
        try {
            $session=$request->session()->all();

            $panier=panier::join('produits','produits.id','=','paniers.produit')
            ->select('produits.id as id_produit','paniers.id as id_panier','produits.libelle','produits.img_principale','paniers.quantite','produits.prix')
            ->whereCompte(auth()->user()->id)
            ->get();
            
            $codeCom='Com'.auth()->user()->id.'_'.now()->format('Y-m-d_H:i:s');
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
                    'devise'=>''
                ]);
            }

            panier::whereCompte(auth()->user()->id)->delete();
    
                \Session::put('success','Paiement éffectué avec succès !!');
                return Redirect::route('paypalResponse',$codeCom);
        } catch (\Throwable $th) {
            \Session::put('error','Erreur lors de la gestion de la commande !!');
                return Redirect::route('paypalResponse',1);
        }
        }

        \Session::put('error','érreur de paiement !!');
		return Redirect::route('paypalResponse',1);
    }
}
