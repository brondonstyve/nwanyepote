<?php

use App\Http\Controllers\frontController;
use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Dashboard;
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

//article
Route::get('/article', [frontController::class, 'article'])->name("article");
Route::get('/detailArticle', [frontController::class, 'detailArticle'])->name("detail-article");

//Boutique
Route::get('/boutique', [frontController::class, 'boutique'])->name("boutique");
Route::get('/mon-panier', [frontController::class, 'panier'])->name("panier");
Route::get('/detail-produit', [frontController::class, 'detailProduit'])->name("detail-produit");
Route::get('/caisse', [frontController::class, 'caisse'])->name("caisse");

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
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

//route pour utilisateurs connectés
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});



//Dernière instruction de vue. aucune instruction ne doit se situer en dessous de ce dernier.
Route::fallback(function() {
    return redirect()->route('index'); // la vue 404.blade.php
 });