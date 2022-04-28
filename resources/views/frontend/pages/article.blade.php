
@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<!-- /content section -->
<section class="wrapper bg-dark text-white">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-10 mx-auto">
                <h1 class="display-1 mb-3 text-blue">
                    Actualité De Chez Nwanyepote
                </h1>
                <p class="lead px-lg-5 px-xxl-8">
                    Bienvenue dans notre revue. Ici vous pouvez trouver les dernières nouvelles dans tous les aspects concernant Batié de l'Ouest Cameroun.
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


<section class="wrapper bg-light wrapper-border">
    <div class="container inner py-8">
        <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
            <div class="col-lg-8 align-self-center">
                <div class="blog-filter filter">
                    <p>Blog Filter:</p>
                    <ul>
                        <li><a class="active" href="#">Paper</a></li>
                        <li><a href="#">Fabric</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Party</a></li>
                        <li><a href="#">Printables</a></li>
                    </ul>
                </div>
                <!--/.filter -->
            </div>
            <!--/column -->
            <aside class="col-lg-4 sidebar">
                <form class="search-form">
                    <div class="form-floating mb-0">
                        <input id="search-form" type="text" class="form-control" placeholder="Recherche">
                        <label for="search-form">Recherche</label>
                    </div>
                </form>
                <!-- /.search-form -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8 order-lg-2">
                <div class="blog classic-view">
                    <article class="post">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale">
                                <a href="{{route("detail-article")}}"><img src="./assets/img/photos/istock mount-cameroon-1489500.jpg" alt=""><span class="bg"></span></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Lire plus</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">
                                            Tourisme
                                        </a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-0">
                                        <a class="link-dark" href="{{route("detail-article")}}">C'est quoi le col Batie
                                        </a>
                                    </h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Le col Batié est un col de montagne sur l'un des tronçons de route bitumée les plus en altitude du pays Bamiléké, à l'Ouest du Cameroun. ci, la route nationale N 5 reliant Bandjoun à Bafang est fait d'un tracé
                                        escarpé et accidentogène. Le paysage offre une vue unique sur les précipices aux bords de la route et sur la chaîne de montagnes qui domine le plateau Bamiléké à Bana.</p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>5 Juillet 2021</span></li>
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Par Brondon styve</span></a></li>
                                    <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>3<span> Commentaires</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->
                    <article class="post">
                        <div class="card">
                            <div class="post-slider card-img-top">
                                <div class="swiper-container dots-over" data-margin="5" data-nav="true" data-dots="true">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide"><img src="assets/img/photos/drums-5949725.jpg" alt="" /></div>
                                            <div class="swiper-slide"><img src="assets/img/photos/girl-2980722_1920.jpg" alt="" /></div>
                                        </div>
                                        <!--/.swiper-wrapper -->
                                    </div>
                                    <!-- /.swiper -->
                                </div>
                                <!-- /.swiper-container -->
                            </div>
                            <!-- /.post-slider -->
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Culture</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{route("detail-article")}}">Pourquoi les fêtes culturelles Batié sont variées?</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Le col Batié est un col de montagne sur l'un des tronçons de route bitumée les plus en altitude du pays Bamiléké, à l'Ouest du Cameroun. ci, la route nationale N 5 reliant Bandjoun à Bafang est fait d'un tracé
                                        escarpé et accidentogène. Le paysage offre une vue unique sur les précipices aux bords de la route et sur la chaîne de montagnes qui domine le plateau Bamiléké à Bana.</p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25 Juin 2021</span></li>
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Par Brondon styve</span></a></li>
                                    <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>5<span> Commentaires</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>4</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->
                    <article class="post">
                        <div class="card">
                            <div class="card-img-top">
                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="sfLTjUVAMQs"></div>
                            </div>
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">Sport</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="{{route("detail-article")}}">Batié réalise un nombre important de sportifs à l'échelle international en 2021 </a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>Le col Batié est un col de montagne sur l'un des tronçons de route bitumée les plus en altitude du pays Bamiléké, à l'Ouest du Cameroun. ci, la route nationale N 5 reliant Bandjoun à Bafang est fait d'un tracé
                                        escarpé et accidentogène. Le paysage offre une vue unique sur les précipices aux bords de la route et sur la chaîne de montagnes qui domine le plateau Bamiléké à Bana.
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18 Mai 2021</span></li>
                                    <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Par Brondon styve</span></a></li>
                                    <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>8<span> Commentaires</span></a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>6</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->




                    <!-- /.post -->
                </div>
                <!-- /.blog -->
                <div class="blog grid grid-view">
                    <div class="row isotope gx-md-8 gy-8 mb-8" style="position: relative; height: 1262.19px;">
                        <article class="item post col-md-6" style="position: absolute; left: 0%; top: 0px;">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="assets/img/photos/african-2771095_1920 (copie).jpg" alt=""><span class="bg"></span></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Lire Plus</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">Apprentissage</a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route("detail-article")}}">Les langues officielles batié</a></h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>Parainé par le chez du village, cette journée permet à nos jeunes de se divertir tout en nous montrant...
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 avril 2021</span></li>
                                        <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        <article class="item post col-md-6" style="position: absolute; left: 50.0196%; top: 0px;">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="assets/img/photos/drums-5949725.jpg" alt=""><span class="bg"></span></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Lire la suite
                                        </h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">Espace de travail
                                            </a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="{{route("detail-article")}}">Pas de douleur
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Parainé par le chez du village, cette journée permet à nos jeunes de se divertir tout en nous montrant... </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 avril 2021</span></li>
                                        <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        <article class="item post col-md-6" style="position: absolute; left: 0%; top: 631.094px;">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="assets/img/photos/drums-5949725.jpg" alt=""><span class="bg"></span></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">
                                            Lire la suite
                                        </h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">
                                                Loisir
                                            </a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="{{route("detail-article")}}">
                                                L'hyper Fête culturelle de 2015
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            Parainé par le chez du village, cette journée permet à nos jeunes de se divertir tout en nous montrant... </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 avril 2021</span></li>
                                        <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        <article class="item post col-md-6" style="position: absolute; left: 50.0196%; top: 631.094px;">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"> <img src="assets/img/photos/african-2771095_1920 (copie).jpg" alt=""><span class="bg"></span></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">
                                            Lire la suite
                                        </h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">
                                                Conseils Agricols
                                            </a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title h3 mt-1 mb-3">
                                            <a class="link-dark" href="{{route("detail-article")}}">
                                                Nos meilleures cultures
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="post-content">
                                        <p>
                                            Parainé par le chez du village, cette journée permet à nos jeunes de se divertir tout en nous montrant... </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 avril 2021</span></li>
                                        <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.blog -->
                <nav class="d-flex" aria-label="pagination">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                            </a>
                        </li>
                    </ul>
                    <!-- /.pagination -->
                </nav>
                <!-- /nav -->
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                <div class="widget">
                    <h4 class="widget-title mb-3">A propos de nous</h4>
                    <p>ci, la route nationale N 5 reliant Bandjoun à Bafang est fait d'un tracé escarpé et accidentogène. Le paysage offre une vue unique sur les précipices aux bords de la route et sur la chaîne de montagnes qui domine le plateau
                        Bamiléké à Bana.
                    </p>
                    <nav class="nav social">
                        <a href="#"><i class="uil uil-twitter"></i></a>
                        <a href="#"><i class="uil uil-facebook-f"></i></a>
                        <a href="#"><i class="uil uil-dribbble"></i></a>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </nav>
                    <!-- /.social -->
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Posts Populaires</h4>
                    <ul class="image-list">
                        <li>
                            <figure class="rounded">
                                <a href="{{route("detail-article")}}"><img src="assets/img/photos/african-2771095_1920 (copie).jpg" alt="" /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark" href="{{route("detail-article")}}">Le col Batie</a> </h6>
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        <li>
                            <figure class="rounded">
                                <a href="{{route("detail-article")}}"><img src="assets/img/photos/drums-5949725.jpg" alt="" /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark" href="{{route("detail-article")}}">La culture batié</a> </h6>
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                        <li>
                            <figure class="rounded">
                                <a href="{{route("detail-article")}}"><img src="assets/img/photos/african-2771095_1920 (copie).jpg" alt="" /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark" href="{{route("detail-article")}}">Sport et Loisir</a> </h6>
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                        </li>
                    </ul>
                    <!-- /.image-list -->
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Catégories</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        <li><a href="#">Sport (21)</a></li>
                        <li><a href="#">Idées (19)</a></li>
                        <li><a href="#">Champs (16)</a></li>
                        <li><a href="#">Cultures (7)</a></li>
                        <li><a href="#">Traditions (12)</a></li>
                        <li><a href="#">Business (14)</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Tags</h4>
                    <ul class="list-unstyled tag-list">
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Vie Urbaine</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Religion</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Culture</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Sport</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">transport</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Ventes</a></li>
                        <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photographie</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Archive</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        <li><a href="#">February 2019</a></li>
                        <li><a href="#">January 2019</a></li>
                        <li><a href="#">December 2018</a></li>
                        <li><a href="#">November 2018</a></li>
                        <li><a href="#">October 2018</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </aside>
            <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection