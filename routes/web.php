<?php

use App\Http\Controllers\frontController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\stripeController;
use App\Http\Livewire\AdminCollection;
use App\Http\Livewire\AdminCommandeBoutique;
use App\Http\Livewire\AdminEvenementParticipatif;
use App\Http\Livewire\Apropos;
use App\Http\Livewire\AdminPageAccueil;
use App\Http\Livewire\AdminPageArticle;
use App\Http\Livewire\AdminPageCulture;
use App\Http\Livewire\AdminPageFaq;
use App\Http\Livewire\AdminPageRessource;
use App\Http\Livewire\AdminPageSport;
use App\Http\Livewire\AdminPageTourisme;
use App\Http\Livewire\AdminParticipant;
use App\Http\Livewire\AdminProduit;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Contacte;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Evenement;
use App\Http\Livewire\Galerie;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\StaticSignIn;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
---------------------
 front end page 
---------------------

 Ici on ne retrouve que les routes liées au frontend
*/


Route::group([
    'middleware' => ['cookie-consent']
], function () {
    // Simple page
    Route::get('/', [frontController::class, 'index'])->name("index");
    Route::get('/A-Propos', [frontController::class, 'propos'])->name("apropos");
    Route::get('/sport', [frontController::class, 'sport'])->name("sport");
    Route::get('/tourisme', [frontController::class, 'tourisme'])->name("tourisme");
    Route::get('/culture', [frontController::class, 'culture'])->name("culture");
    Route::get('/contact', [frontController::class, 'contact'])->name("contact");
    Route::get('/ressource', [frontController::class, 'ressource'])->name("ressource");
    Route::get('/galerie', [frontController::class, 'galerie'])->name("galerie");
    Route::get('/faq', [frontController::class, 'faq'])->name("faq");
    Route::get('/politique', [frontController::class, 'politique'])->name("politique");


    //événement
    Route::get('/evenement', [frontController::class, 'evenement'])->name("evenement");
    Route::get('/detail-evenement', [frontController::class, 'detailEvenement'])->name("detail-evenement");
    Route::get('/detail-evenement-participatif/{id}', [frontController::class, 'detailEvenementParticipatif'])->name("detail-evenement-participatif");
    Route::get('/participant/{id}', [frontController::class, 'participant'])->name("participant");
    Route::get('/detail-evenement/{id}', [frontController::class, 'detailEvenement'])->name("detail-evenement");

    //article
    Route::get('/article', [frontController::class, 'article'])->name("article");
    Route::get('/detailArticle/{id}', [frontController::class, 'detailArticle'])->name("detail-article");

    //Boutique
    Route::get('/boutique', [frontController::class, 'boutique'])->name("boutique");
    Route::get('/mon-panier', [frontController::class, 'panier'])->name("panier");
    Route::get('/detail-produit/{id}', [frontController::class, 'detailProduit'])->name("detail-produit");

    //compte
    Route::get('/mon-compte', [frontController::class, 'compte'])->name("compte");
    Route::get('/connexion', [frontController::class, 'login'])->name("login");
    Route::get('/creer-compte', [frontController::class, 'signin'])->name("signin");
    Route::get('/changer-son-mot-de-passe', [frontController::class, 'resetPassword'])->name("reset-password-front");



    /*
---------------------
 backend end page 
---------------------
 Ici on ne retrouve que les routes liées au backend d'administration 
 */

    Route::get('/login-admin', Login::class)->name('login-admin');

    Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

    Route::get('/reset-password/{id}', ResetPassword::class)->name('reset-password')->middleware('signed');
});



//route pour utilisateurs connectés pour les pages simple
Route::middleware('auth2')->group(function () {
    Route::get('/caisse', [frontController::class, 'caisse'])->name("caisse");

    //paypall route
    Route::get('/paywithpaypal', [PaypalController::class, 'payWithPaypal'])->name("paywithpaypal");
    Route::get('/paypal', [PaypalController::class, 'getPaymentStatus'])->name("status");
    Route::get('/paypal-response/{code}', [PaypalController::class, 'getResponse'])->name("paypalResponse");
    Route::get('/commande', [frontController::class, 'commande'])->name("commande");

    //stripe
    Route::get('stripe', [StripeController::class, 'stripe'])->name('stripe.intent');
    Route::post('payment', [StripeController::class, 'stripePost'])->name('stripe.pay');
    Route::get('/reponse-de-paiement-stripe', [stripeController::class, 'reponseStripe']);

    //Evenement
    Route::get('/participer/{id}', [frontController::class, 'participer'])->name("participer");
});


//route pour utilisateurs connectés pour les pages admin
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
    Route::get('/contacte', Contacte::class)->name('contacte');
    Route::get('/galeries', Galerie::class)->name('galeries');
    Route::get('/apropo', Apropos::class)->name('apropo');
    Route::get('/evenements', Evenement::class)->name('evenements');
    Route::get('/admin-page-accueil', AdminPageAccueil::class)->name('admin-page-accueil');
    Route::get('/admin-page-ressources', AdminPageRessource::class)->name('admin-page-ressources');
    Route::get('/admin-page-article', AdminPageArticle::class)->name('admin-page-article');
    Route::get('/admin-page-culture', AdminPageCulture::class)->name('admin-page-culture');
    Route::get('/admin-page-tourisme', AdminPageTourisme::class)->name('admin-page-tourisme');
    Route::get('/admin-page-sport', AdminPageSport::class)->name('admin-page-sport');
    Route::get('/admin-page-faq', AdminPageFaq::class)->name('admin-page-faq');
    Route::get('/boutique-collection', AdminCollection::class)->name('boutique-collection');
    Route::get('/boutique-produit', AdminProduit::class)->name('boutique-produit');
    Route::get('/boutique-commande-admin', AdminCommandeBoutique::class)->name('boutique-commande-admin');
    Route::get('/admin-evenement-participatif', AdminEvenementParticipatif::class)->name('admin-evenement-participatif');
    Route::get('/admin-participant/{id}', AdminParticipant::class)->name('admin-participant');
});






//Dernière instruction de vue. aucune instruction ne doit se situer en dessous de ce dernier.
//Route::fallback(function() {
//    return redirect()->route('index'); // la vue 404.blade.php
// });
