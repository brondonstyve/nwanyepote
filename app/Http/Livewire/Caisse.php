<?php

namespace App\Http\Livewire;

use AmrShawky\LaravelCurrency\Facade\Currency;
use App\Models\panier;
use Illuminate\Support\Collection;
use Livewire\Component;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use URL;
use Session;
use Redirect;
use PayPal\Api\Amount;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class Caisse extends Component
{
    private $_api_context;

    public Collection $typePaiement;
    public $conserveInfos;
    public $type;
    public $nom;
    public $prenom;
    public $email;
    public  $adresse;
    public $telephone;
    public $description;
    public $paymentType;
    public $total;


    public function __construct()
    {

        $paypal_configuration = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_configuration['client_id'], $paypal_configuration['secret']));
        $this->_api_context->setConfig($paypal_configuration['settings']);
    }

    public function mount()
    {
        $this->total = DB::table('paniers')
            ->join('produits', 'produits.id', 'paniers.produit')
            ->select(DB::raw("SUM(" . DB::raw('paniers.quantite * produits.prix') . ") as total"))
            ->whereCompte(auth()->user()->id)
            ->get()[0]->total + 1000;



        $this->fill([
            'typePaiement' => collect([
                ['val' => '']
            ])
        ]);
    }

    public function getPanierProperty()
    {
        return panier::join('produits', 'produits.id', 'paniers.produit')
            ->select('paniers.quantite', 'produits.libelle', 'produits.img_principale', 'produits.prix', 'paniers.id', 'produits.id as id_produit')
            ->whereCompte(auth()->user()->id)
            ->get();
    }

    public function postPaymentWithpaypal()
    {
        $montantTotal=Currency::convert()
        ->from('XAF')
        ->to('EUR')
        ->amount($this->total)
        ->get();


        if ($this->type == 'pp') {
            try {
                $payer = new Payer();
                $payer->setPaymentMethod('paypal');

                $item_1 = new Item();

                $item_1->setName('Product 1')
                    ->setCurrency('EUR')
                    ->setQuantity(1)
                    ->setPrice($montantTotal);

                $item_list = new ItemList();
                $item_list->setItems(array($item_1));

                $amount = new Amount();
                $amount->setCurrency('EUR')
                    ->setTotal($montantTotal);

                $transaction = new Transaction();
                $transaction->setAmount($amount)
                    ->setItemList($item_list)
                    ->setDescription('Entrer la description de la transaction');

                $redirect_urls = new RedirectUrls();
                $redirect_urls->setReturnUrl(URL::route('status'))
                    ->setCancelUrl(URL::route('status'));

                $payment = new Payment();
                $payment->setIntent('Sale')
                    ->setPayer($payer)
                    ->setRedirectUrls($redirect_urls)
                    ->setTransactions(array($transaction));
                try {
                    $payment->create($this->_api_context);
                } catch (\PayPal\Exception\PPConnectionException $ex) {
                    if (\Config::get('app.debug')) {
                        \Session::put('error', 'Temps d\'attente dépassé');
                        return Redirect::route('paywithpaypal');
                    } else {
                        \Session::put('error', 'Une erreur s\'est produite, désolé pour la gêne occasionnée');
                        return Redirect::route('paywithpaypal');
                    }
                }

                foreach ($payment->getLinks() as $link) {
                    if ($link->getRel() == 'approval_url') {
                        $redirect_url = $link->getHref();
                        break;
                    }
                }

                Session::put('paypal_payment_id', $payment->getId());

                if (isset($redirect_url)) {
                    session([
                        'nom' => $this->nom,
                        'prenom' => $this->prenom,
                        'email' => $this->email,
                        'adresse' => $this->adresse,
                        'telephone' => $this->telephone,
                        'description' => $this->description,
                        'paymentType' => $this->type,
                        'conserver' => $this->conserveInfos,
                        'total' => $this->total
                    ]);

                    return Redirect::away($redirect_url);
                }

                \Session::put('error', 'Une erreur inconnue s\'est produite');
                return Redirect::route('paywithpaypal');
            } catch (\Throwable $th) {
                \Session::put('error', 'Une erreur inconnue s\'est produite. veuiller vérifier votre connection internet');
                return redirect('caisse');
            }
        }

        if ($this->type == 'cc') {

            try {
                Stripe::setApiKey(env('STRIPE_KEY'));
                
                $montant = $this->total;
                
                $intent = PaymentIntent::create([
                    'amount' => $montant,
                    'currency' => 'XAF',
                ]);

                $clientSecret = Arr::get($intent, 'client_secret');

                session([
                    'nom' => $this->nom,
                    'prenom' => $this->prenom,
                    'email' => $this->email,
                    'adresse' => $this->adresse,
                    'telephone' => $this->telephone,
                    'description' => $this->description,
                    'paymentType' => $this->type,
                    'conserver' => $this->conserveInfos,
                    'total' => $this->total,
                    'clientSecret' => $clientSecret
                ]);


                return redirect()->route('stripe.intent');
            } catch (\Throwable $th) {
                session()->flash('error', $th.'Erreur lors de l\'initiation du paiement. Veuillez vérifier votre connexion internet et reéssayez.');
            }
        }
    }



    public function render()
    {
        return view('livewire.caisse');
    }
}
