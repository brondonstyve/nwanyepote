@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

 <!-- /content section -->
 <section class="wrapper bg-gray">
    <div class="container py-3 py-md-5">
        <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="#">Accueil
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Boutique
                </li>
            </ol>
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16 pt-12">
        <div class="row gy-10">
            <div class="col-lg-9 order-lg-2">
                <div class="row align-items-center mb-10 position-relative zindex-1">
                    <div class="col-md-7 col-xl-8 pe-xl-20">
                        <h2 class="display-6 mb-1">Nouvelles Arrivées
                        </h2>
                        <p class="mb-0 text-muted">Affichage de 1 à 9 sur 30 résultats
                        </p>
                    </div>
                    <!--/column -->
                    <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                        <div class="form-select-wrapper">
                            <select class="form-select">
            <option value="popularity">Trier par popularité</option>
            <option value="rating">Trier par note moyenne</option>
            <option value="newness">Trier par nouveauté</option>
            <option value="price: low to high">Trier par prix : du plus bas au plus élevé</option>
            <option value="price: high to low">Trier par prix : décroissant</option>
          </select>
                        </div>
                        <!--/.form-select-wrapper -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
                <div class="grid grid-view projects-masonry shop mb-13">
                    <div class="row gx-md-8 gy-10 gy-md-13 isotope" style="position: relative; height: 1579.69px;">
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 0px;">
                            <figure class="rounded mb-6">
                                <img src="assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg" srcset="assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                                <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Vente!</span></span>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Des chaussures
                                    </div>
                                    <span class="ratings five"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">Masque I
                                    </a>
                                </h2>
                                <p class="price"><del><span class="amount">55.00 Fcfa</span></del> <ins><span class="amount">45.00 Fcfa</span></ins></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 0px;">
                            <figure class="rounded mb-6">
                                <img src="assets/img/photos/Istock_Photoistockphoto-182863025-612x612.jpg" srcset="assets/img/photos/Istock_Photoistockphoto-182863025-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Électronique
                                    </div>
                                    <span class="ratings four"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Masque II
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 66.6667%; top: 0px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/Istock_Photoistockphoto-155145997-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-155145997-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                                <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>New!</span></span>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">
                                        Électronique
                                    </div>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Tam-Tam
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 526.562px;">
                            <figure class="rounded mb-6">
                                <img src="/assets/img/photos/Istock_Photoistockphoto-1186696704-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-1186696704-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">
                                        Des chaussures
                                    </div>
                                    <span class="ratings three"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Foulard
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 526.562px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/Istock_Photoistockphoto-1186696704-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-1186696704-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">
                                        Électronique
                                    </div>
                                    <span class="ratings one"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Foulard Tradi
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 526.562px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/Istock_Photoistockphoto-1186696704-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-1186696704-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">
                                        Électronique
                                    </div>
                                    <span class="ratings one"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Foulard tradi
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 0px;">
                            <figure class="rounded mb-6">
                                <img src="assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg" srcset="assets/img/photos/Istock_Photoistockphoto-157642451-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                                <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Vente!</span></span>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Des chaussures
                                    </div>
                                    <span class="ratings five"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">Masque I
                                    </a>
                                </h2>
                                <p class="price"><del><span class="amount">55.00 Fcfa</span></del> <ins><span class="amount">45.00 Fcfa</span></ins></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 0px;">
                            <figure class="rounded mb-6">
                                <img src="assets/img/photos/Istock_Photoistockphoto-182863025-612x612.jpg" srcset="assets/img/photos/Istock_Photoistockphoto-182863025-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">Électronique
                                    </div>
                                    <span class="ratings four"></span>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Masque II
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 66.6667%; top: 0px;">
                            <figure class="rounded mb-6">
                                <img src="./assets/img/photos/Istock_Photoistockphoto-155145997-612x612.jpg" srcset="./assets/img/photos/Istock_Photoistockphoto-155145997-612x612.jpg 2x" alt="">
                                <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Add to wishlist" aria-label="Ajouter à la liste de souhaits"><i class="uil uil-heart"></i></a>
                                <a class="item-view" href="#" data-bs-toggle="white-tooltip" title="" data-bs-original-title="Quick view" aria-label="Aperçu rapide"><i class="uil uil-eye"></i></a>
                                <a href="#" class="item-cart"><i class="uil uil-shopping-bag"></i>Ajouter au chariot</a>
                                <span class="avatar bg-aqua text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>New!</span></span>
                            </figure>
                            <div class="post-header">
                                <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                                    <div class="post-category text-ash mb-0">
                                        Électronique
                                    </div>
                                </div>
                                <h2 class="post-title h3 fs-22">
                                    <a href="detailproduit.html" class="link-dark">
                                        Tam-Tam
                                    </a>
                                </h2>
                                <p class="price"><span class="amount">55.00 Fcfa</span></p>
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.item -->




                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.grid -->
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Précédent">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                2
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                3
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Suivant">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.pagination -->
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
            <aside class="col-lg-3 sidebar">
                <div class="widget mt-1">
                    <h4 class="widget-title mb-3">Catégories
                    </h4>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <a href="#" class="align-items-center rounded link-body" data-bs-toggle="collapse" data-bs-target="#clothing-collapse" aria-expanded="true">
                                Vêtements <span class="fs-sm text-muted ms-1">(21)</span>
                            </a>
                            <div class="collapse show mt-1" id="clothing-collapse">
                                <ul class="btn-toggle-nav list-unstyled ps-2">
                                    <li>
                                        <a href="#" class="link-body">
                                            Robes
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Tricots
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            jeans
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#electronics-collapse" aria-expanded="false">
                                Livres <span class="fs-sm text-muted ms-1">(19)</span>
                            </a>
                            <div class="collapse mt-1" id="electronics-collapse">
                                <ul class="btn-toggle-nav list-unstyled ps-2">
                                    <li>
                                        <a href="#" class="link-body">
                                            Écouteurs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Des ordinateurs
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Appareils photo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Annuellement
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#shoes-collapse" aria-expanded="false">
                                Culturel <span class="fs-sm text-muted ms-1">(12)</span>
                            </a>
                            <div class="collapse mt-1" id="shoes-collapse">
                                <ul class="btn-toggle-nav list-unstyled ps-2">
                                    <li>
                                        <a href="#" class="link-body">
                                            Baskets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Des sandales
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Bottes
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <a href="#" class="align-items-center rounded collapsed link-body" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Maison &amp; Cuisine <span class="fs-sm text-muted ms-1">(16)</span>
                            </a>
                            <div class="collapse mt-1" id="home-collapse">
                                <ul class="btn-toggle-nav list-unstyled ps-2">
                                    <li>
                                        <a href="#" class="link-body">
                                            Horloges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Bouilloires
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="link-body">
                                            Ustensiles de cuisine
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Notation
                    </h4>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="rating" id="rating5" checked="">
                        <label class="form-check-label" for="rating5">
          <span class="ratings five"></span>
        </label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="rating" id="rating4">
                        <label class="form-check-label" for="rating4">
          <span class="ratings four"></span>
        </label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="rating" id="rating3">
                        <label class="form-check-label" for="rating3">
          <span class="ratings three"></span>
        </label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="rating" id="rating2">
                        <label class="form-check-label" for="rating2">
          <span class="ratings two"></span>
        </label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="rating" id="rating1">
                        <label class="form-check-label" for="rating1">
          <span class="ratings one"></span>
        </label>
                    </div>
                    <!-- /.form-check -->
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Taille
                    </h4>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" id="xs" checked="">
                        <label class="form-check-label" for="xs">XS <span class="fs-sm text-muted ms-1">(23)</span></label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" id="s">
                        <label class="form-check-label" for="s">S <span class="fs-sm text-muted ms-1">(253)</span></label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" id="m">
                        <label class="form-check-label" for="m">M <span class="fs-sm text-muted ms-1">(65)</span></label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" id="l">
                        <label class="form-check-label" for="l">L <span class="fs-sm text-muted ms-1">(156)</span></label>
                    </div>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="checkbox" id="xl">
                        <label class="form-check-label" for="xl">XL <span class="fs-sm text-muted ms-1">(74)</span></label>
                    </div>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Prix
                    </h4>
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="price" id="price1" checked="">
                        <label class="form-check-label" for="price1">0.00  Fcfa- $50.00</label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="price" id="price2">
                        <label class="form-check-label" for="price2">0.00  Fcfa- $50.00</label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="price" id="price3">
                        <label class="form-check-label" for="price3">50.00 Fcfa - $100.00</label>
                    </div>
                    <!-- /.form-check -->
                    <div class="form-check mb-1">
                        <input class="form-check-input" type="radio" name="price" id="price4">
                        <label class="form-check-label" for="price4">150.0 Fcfa0 - $200.00</label>
                    </div>
                    <!-- /.form-check -->
                    <div class="row">
                        <div class="col-7 col-md-5 col-lg-12 col-xl-10 col-xxl-10">
                            <div class="d-flex align-items-center mt-4">
                                <input type="number" class="form-control form-control-sm" placeholder="$0.00" min="0">
                                <div class="text-muted mx-2">
                                    ‒
                                </div>
                                <input type="number" class="form-control form-control-sm" placeholder="$50.00" max="50">
                            </div>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.widget -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
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
<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection