@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<section class="wrapper bg-gray">
    <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="#">
                        Maison
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">
                        Boutique
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">
                        Chariot
                    </a>
                </li>
                <li class="breadcrumb-item active text-muted" aria-current="page">
                    Vérifier
                </li>
            </ol>
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
        <div class="row gx-md-8 gx-xl-12 gy-12">
            <div class="col-lg-8">
                <div class="alert alert-blue alert-icon mb-6" role="alert">
                    <i class="uil uil-exclamation-circle"></i> Vous avez déjà un compte?
                    <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="alert-link hover">
                        Connectez-vous
                    </a> pour une expérience de paiement plus rapide.

                </div>
                <h3 class="mb-4">
                    Adresse de facturation
                </h3>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="firstName" placeholder="Prénom" value="" required="">
                                <label for="firstName" class="form-label">Prénom</label>
                                <div class="invalid-feedback">Un prénom valide est requis.
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lastName" placeholder="Nom de famille" value="" required="">
                                <label for="lastName" class="form-label">Nom de famille</label>
                                <div class="invalid-feedback">Un nom de famille valide est requis.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
                                <label for="email" class="form-label">E-mail</label>
                                <div class="invalid-feedback">Veuillez entrer une adresse e-mail valide pour les mises à jour d'expédition.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                <label for="address" class="form-label">Adresse</label>
                                <div class="invalid-feedback">Prière d'indiquer ton adresse d'expédition.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="address2" placeholder="Appartement ou suite">
                                <label for="address2" class="form-label">Adresse 2 <span class="text-muted">(facultatif)</span></label>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-select-wrapper">
                                <select class="form-select" id="country" required="">
              <option value="">De campagne</option>
              <option>États-Unis</option>
            </select>
                                <div class="invalid-feedback">Veuillez sélectionner un pays valide.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-select-wrapper">
                                <select class="form-select" id="state" required="">
              <option value="">État</option>
              <option>Californie</option>
            </select>
                                <div class="invalid-feedback">Veuillez fournir un état valide.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="zip" placeholder="Code postal" required="">
                                <label for="zip" class="form-label">Code postal</label>
                                <div class="invalid-feedback">Code postal requis.
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-7 mb-6">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">L'adresse de livraison est la même que mon adresse de facturation</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Conservez ces informations pour la prochaine fois</label>
                    </div>
                    <hr class="mt-7 mb-6">
                    <h3 class="mb-4">
                        Paiement
                    </h3>
                    <div class="mt-3 mb-6">
                        <div class="form-check">
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                            <label class="form-check-label" for="credit">Carte de crédit</label>
                        </div>
                        <div class="form-check">
                            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                            <label class="form-check-label" for="paypal">PayPal</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="row gy-3 gx-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cc-number" placeholder="Numéro de Carte de Crédit" required="">
                                        <label for="cc-number" class="form-label">Numéro de Carte de Crédit</label>
                                        <div class="invalid-feedback">
                                            Le numéro de carte de crédit est requis
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cc-name" placeholder="Nom sur la carte" required="">
                                        <label for="cc-name" class="form-label">Nom sur la carte</label>
                                        <div class="invalid-feedback">
                                            Le nom sur la carte est requis
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="Expiration" required="">
                                        <label for="cc-expiration" class="form-label">Expiration</label>
                                        <div class="invalid-feedback">
                                            Date d'expiration requise
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="CVV" required="">
                                        <label for="cc-cvv" class="form-label">CVV</label>
                                        <div class="invalid-feedback">
                                            Code de sécurité requis
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /column -->
            <div class="col-lg-4">
                <h3 class="mb-4">
                    Récapitulatif de la commande
                </h3>
                <div class="shopping-cart mb-7">
                    <div class="shopping-cart-item d-flex justify-content-between mb-4">
                        <div class="d-flex flex-row d-flex align-items-center">
                            <figure class="rounded w-17">
                                <a href="boutique.html"><img src="./assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg 2x" alt=""></a>
                            </figure>
                            <div class="w-100 ms-4">
                                <h3 class="post-title h6 lh-xs mb-1">
                                    <a href="https://sandbox.elemisthemes.com/shop-product.html" class="link-dark">
                                        Baskets Nike Air
                                    </a>
                                </h3>
                                <div class="small">La couleur noire
                                </div>
                                <div class="small">Taille : 43
                                </div>
                            </div>
                        </div>
                        <div class="ms-2 d-flex align-items-center">
                            <p class="price fs-sm"><span class="amount">45.99 Fcfa</span></p>
                        </div>
                    </div>
                    <!--/.shopping-cart-item -->
                    <div class="shopping-cart-item d-flex justify-content-between mb-4">
                        <div class="d-flex flex-row d-flex align-items-center">
                            <figure class="rounded w-17">
                                <a href="boutique.html"><img src="./assets/img/photos/Istock_Photoistockphoto-182863025-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-182863025-612x612.jpg 2x" alt=""></a>
                            </figure>
                            <div class="w-100 ms-4">
                                <h3 class="post-title h6 lh-xs mb-1">
                                    <a href="https://sandbox.elemisthemes.com/shop-product.html" class="link-dark">
                                        Kougan
                                    </a>
                                </h3>
                                <div class="small">Couleur: Divers
                                </div>
                                <div class="small">Taille : 43
                                </div>
                            </div>
                        </div>
                        <div class="ms-2 d-flex align-items-center">
                            <p class="price fs-sm"><span class="amount">45.00 Fcfa</span></p>
                        </div>
                    </div>
                    <!--/.shopping-cart-item -->
                    <div class="shopping-cart-item d-flex justify-content-between mb-4">
                        <div class="d-flex flex-row d-flex align-items-center">
                            <figure class="rounded w-17">
                                <a href="boutique.html"><img src="./assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg 2x" alt=""></a>
                            </figure>
                            <div class="w-100 ms-4">
                                <h3 class="post-title h6 lh-xs mb-1">
                                    <a href="https://sandbox.elemisthemes.com/shop-product.html" class="link-dark">
                                        Polaroid
                                    </a>
                                </h3>
                                <div class="small">La couleur noire
                                </div>
                            </div>
                        </div>
                        <div class="ms-2 d-flex align-items-center">
                            <p class="price fs-sm"><span class="amount">45.00 Fcfa</span></p>
                        </div>
                    </div>
                    <!--/.shopping-cart-item -->
                </div>
                <!-- /.shopping-cart-->
                <hr class="my-4">
                <h3 class="mb-2">
                    Expédition
                </h3>
                <div class="mb-5">
                    <div class="form-check mb-2">
                        <input id="standart" name="shippingMethod" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="standart">Gratuit - Livraison standard</label>
                        <small class="text-muted d-block">L'expédition peut prendre 5-6 jours ouvrables</small>
                    </div>
                    <div class="form-check">
                        <input id="express" name="shippingMethod" type="radio" class="form-check-input" checked="" required="">
                        <label class="form-check-label" for="express">10 $ - Livraison express</label>
                        <small class="text-muted d-block">L'expédition peut prendre 2-3 jours ouvrables</small>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-order">
                        <tbody>
                            <tr>
                                <td class="ps-0"><strong class="text-dark">Total</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price">
                                        135.9 Fcfa9
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-0"><strong class="text-dark">Remise (5%)</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price text-red">
                                        -$6.8
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-0"><strong class="text-dark">Expédition</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price">
                                        10 Fcfa
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-0"><strong class="text-dark">Grand Total</strong></td>
                                <td class="pe-0 text-end">
                                    <p class="price text-dark fw-bold">
                                        152.7 Fcfa9
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="#" class="btn btn-primary rounded w-100 mt-4">
                    Place Order
                </a>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<div class="modal fade" id="modal-signin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">
                    Content de te revoir
                </h2>
                <p class="lead mb-6 text-start">
                    Remplissez votre email et votre mot de passe pour vous connecter.
                </p>
                <form class="text-start mb-3">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">E-mail</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Mot de passe</label>
                    </div>
                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">
                        S'identifier
                    </a>
                </form>
                <!-- /form -->
                <p class="mb-1">
                    <a href="#" class="hover">
                        Mot de passe oublié?
                    </a>
                </p>
                <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
                <div class="divider-icon my-4">or</div>
                <nav class="nav social justify-content-center text-center">
                    <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                </nav>
                <!--/.social -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->
<div class="modal fade" id="modal-signup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
                <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                <form class="text-start mb-3">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Name" id="loginName">
                        <label for="loginName">Name</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                        <label for="loginEmail">Email</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPassword">Password</label>
                    </div>
                    <div class="form-floating password-field mb-4">
                        <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                        <label for="loginPasswordConfirm">Confirm Password</label>
                    </div>
                    <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
                </form>
                <!-- /form -->
                <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
                <div class="divider-icon my-4">or</div>
                <nav class="nav social justify-content-center text-center">
                    <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                    <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                </nav>
                <!--/.social -->
            </div>
            <!--/.modal-content -->
        </div>
        <!--/.modal-body -->
    </div>
    <!--/.modal-dialog -->
</div>
<!--/.modal -->
<section class="wrapper bg-gray">
    <div class="container py-12 py-md-14">
        <div class="row gx-lg-8 gx-xl-12 gy-8">
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 202.66" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/solid/shipment.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4"><path class="fill-primary" d="M235.33 170.66h-13a10.68 10.68 0 110-21.35h12.33V115l-29.94-40.65-34.05.29v74.69H176a10.67 10.67 0 110 21.33h-16A10.68 10.68 0 01149.33 160V73.58A20.49 20.49 0 01170 53.31h35.12a20.88 20.88 0 0116.82 8.47l30.19 41.44A19.87 19.87 0 01256 115v35.4a20.48 20.48 0 01-20.67 20.26z"></path><path class="fill-primary" d="M160 170.66H89.81a10.68 10.68 0 010-21.35h59.52V20.59l-128.71.74.71 128.72 19.67-.72a10.67 10.67 0 110 21.34H20.62A20.66 20.66 0 010 150.05V20.62A20.64 20.64 0 0120.62 0h129.43a20.64 20.64 0 0120.62 20.62V160A10.67 10.67 0 01160 170.66z"></path><path class="fill-primary" d="M200 202.66a32 32 0 1132-32 32 32 0 01-32 32zm-136 0a32 32 0 1132-32 32 32 0 01-32 32z"></path><path class="fill-secondary" d="M41.47 89.33A9.29 9.29 0 0136 87.52 9.84 9.84 0 0133.76 74l23.71-33.94a9.35 9.35 0 0113.22-2.25 9.85 9.85 0 012.21 13.52L49.18 85.26a9.35 9.35 0 01-7.71 4.07zm64 32a9.29 9.29 0 01-5.5-1.81A9.86 9.86 0 0197.76 106l23.71-33.93a9.36 9.36 0 0113.22-2.26 9.87 9.87 0 012.21 13.54l-23.72 33.93a9.35 9.35 0 01-7.71 4.07zm-42.3 0a9.65 9.65 0 01-5.6-1.79 10.17 10.17 0 01-2.5-14l44.31-65.22a9.7 9.7 0 0113.69-2.54 10.16 10.16 0 012.5 14L71.26 117a9.73 9.73 0 01-8.09 4.33z"></path></svg>
                    </div>
                    <div>
                        <h4 class="mb-1">Livraison gratuite
                        </h4>
                        <p class="mb-0">Les livraisons sont gratuites pour toutes les commandes suppérieures à 15 000 Fcfa.
                        </p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/solid/push-cart.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4"><path class="fill-secondary" d="M216 101.33H82.67a8.06 8.06 0 00-8 8v75.2a41.94 41.94 0 0120.91 18.13H216a8.07 8.07 0 008-8v-85.33a8.06 8.06 0 00-8-8zm-21.33 69.34h-32a8 8 0 010-16h32a8 8 0 010 16zM173.33 0H82.66a8 8 0 00-8 8v74.67a8 8 0 008 8h90.67a8 8 0 008-8V8a8 8 0 00-8-8zM152 74.67h-21.33a8 8 0 110-16H152a8 8 0 010 16z"></path><path class="fill-primary" d="M252.43 237.38l-14.33-12.79a31.8 31.8 0 00-24.35-11.25H88.7A31.94 31.94 0 0064 192.51V21.76A21.38 21.38 0 0042.91.43L10.82 0h-.15a10.67 10.67 0 00-.16 21.33l32.15.43v174.66a31.91 31.91 0 1046 38.25h125.09a10.63 10.63 0 018.33 4 11.38 11.38 0 001.22 1.33l14.93 13.33a10.69 10.69 0 007.1 2.7 10.67 10.67 0 007.1-18.62z"></path></svg>
                    </div>
                    <div>
                        <h4 class="mb-1">30 jours de retour
                        </h4>
                        <p class="mb-0">Les Produits peuvent être retournés en cas de non satisfaction par le client.
                        </p>
                    </div>
                </div>
            </div>
            <!--/column -->
            <div class="col-md-6 col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" data-inject-url="https://sandbox.elemisthemes.com/assets/img/icons/solid/verify.svg" class="svg-inject icon-svg icon-svg-sm solid-mono text-navy me-4"><path class="fill-secondary" d="M186.67 117.33A69.34 69.34 0 10256 186.68a69.43 69.43 0 00-69.33-69.35zm37.34 55L186.68 215a10.65 10.65 0 01-7.68 3.63h-.35a10.67 10.67 0 01-7.53-3.12l-21.33-21.33a10.67 10.67 0 0115.09-15.09l13.26 13.27L208 158.3a10.67 10.67 0 1116 14.07z"></path><path class="fill-primary" d="M177.92 32.32L92.58.32a5.88 5.88 0 00-3.84 0l-85.35 32a5.36 5.36 0 00-3.39 5v68.59c0 97.28 88.64 117.76 89.5 118a6.28 6.28 0 002.34 0 73.48 73.48 0 0010.77-3.41A89.34 89.34 0 0196 186.68a90.78 90.78 0 0185.34-90.56V37.35a5.38 5.38 0 00-3.42-5z"></path></svg>
                    </div>
                    <div>
                        <h4 class="mb-1">Paiements securisés
                        </h4>
                        <p class="mb-0">Vos paiement sont sécuré à 100% sur notre plate forme.
                        </p>
                    </div>
                </div>
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection