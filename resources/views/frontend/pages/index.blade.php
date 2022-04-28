
@extends('frontend.base.base', ['title' => 'Accueil | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')
    <!-- /content section -->
    <section class="wrapper bg-dark angled lower-start">
        <div style="background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.35)), url('./assets/img/photos/t1.jpg'); visibility: visible; opacity: 1;">
            <div class="container pt-7 pt-md-11 pb-8">
                <div class="row gx-0 gy-10 align-items-center">
                    <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 text-white mb-4">Bienvenue <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Sur Nwanye po te,Peuple Bamiléké Batié,Dans l'ouest Cameroun"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                        <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">D'entrée de jeu, ce resumé vidéo à droite vous présente en quelques minutes de cette merveilleuse region situé dans l'Ouest Cameroun.</p>
                        <div>
                            <a href="contact.html" class="btn btn-lg btn-primary rounded">Nous Contacter</a>
                        </div>

                    </div>
                    <!-- /column -->
                    <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                        <div class="position-relative">
                            <a href="https://www.youtube.com/watch?v=7IXcENeBZ4g" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
                            <figure class="rounded shadow-lg"><img src="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg')}}" srcset="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804@2x.jpg 2x')}}" alt=""></figure>
                        </div>
                        <!-- /div -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>

    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pt-19 pt-md-21 pb-16 pb-md-18">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-8">
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Que faisons nous?</h2>
                    <h3 class="display-4 mb-9">Cet espace purement traditionnel à pour but d'être un boulevard d'informations et de ressourcement culturel lié à Batié.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-md-8 gy-8 mb-14 mb-md-18">
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-primary disabled mb-6"> <i class="uil uil-abacus"></i> </div>
                    <h4>
                        <a href="evenement.html" class="text-dark">Événements Culturels</a></h4>
                    <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
                    <a href="evenement.html" class="more hover link-primary">En Savoir Plus</a>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-primary disabled mb-6"> <i class="uil uil-picture"></i> </div>
                    <h4><a href="galerie.html" class="text-dark">Galerie Traditionnel</a></h4>
                    <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
                    <a href="galerie.html" class="more hover link-primary">En Savoir Plus</a>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-primary disabled mb-6"> <i class="uil uil-car"></i> </div>
                    <h4>
                        <a href="tourisme.html" class="text-dark">Tourisme</a></h4>
                    <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
                    <a href="tourisme.html" class="more hover link-primary">En Savoir Plus</a>
                </div>
                <!--/column -->
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-primary disabled mb-6"> <i class="uil uil-truck-loading"></i> </div>
                    <h4>
                        <a href="boutique.html" class="text-dark">Ventes Traditionnelles</a></h4>
                    <p class="mb-3">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Cras justo.</p>
                    <a href="boutique.html" class="more hover link-primary">En Savoir Plus</a>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
                <div class="col-md-8 col-lg-6 position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                    <figure class="rounded"><img src="{{asset('assets/img/photos/istock hut-7109228.jpg')}}" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">A Propos de Batié</h2>
                    <h3 class="display-4 mb-7">En 3 aspects résumés, nous presentons ainsi notre peuple :</h3>
                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-block btn-soft-primary disabled me-5"><span class="number fs-18">1</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Localisation</h4>
                            <p class="mb-0" style="text-align: justify;">La localité est située sur la route nationale 5 (axe Douala-Bafoussam) à 6,8 km à l'ouest du chef-lieu départemental Baham...</p>
                            <a href="apropos.html"><span class="badge bg-primary rounded-0">Lire plus</span></a>
                        </div>
                    </div>
                    <div class="d-flex flex-row mb-6">
                        <div>
                            <span class="icon btn btn-block btn-soft-primary disabled me-5"><span class="number fs-18">2</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Topographie</h4>
                            <p class="mb-0" style="text-align: justify;">1 - col Batié : Batié est connu pour son col appelé le col Batié, le plus connu du Cameroun. Ici, la route nationale qui relie Douala et Bafoussam serpente...
                            </p>
                            <a href="apropos.html"><span class="badge bg-primary rounded-0">lire plus</span></a>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-block btn-soft-primary disabled me-5"><span class="number fs-18">3</span></span>
                        </div>
                        <div>
                            <h4 class="mb-1">Dynastie des Rois</h4>
                            <p class="mb-0" style="text-align: justify;">Fo Tatomdjap Fo Keunzekouo, Fo Tanzé-ndeu, Fo Ngouomèdoum, Fo Djaboukem, Fo Youayi, Fo Mbeutchouang,... </p>
                            <a href="apropos.html"><span class="badge bg-primary rounded-0">lire plus</span></a>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">
                <div class="col-md-8 col-lg-6 offset-lg-1 order-lg-2 position-relative">
                    <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; left: -1.5rem; width: 85%; height: 90%; "></div>

                    <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true" data-autoheight="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide bg-overlay bg-overlay-400 rounded">
                                    <img src="{{asset('assets/img/photos/istock forest-438432.jpg')}}" alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Une faune attirante</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>

                                <div class="swiper-slide bg-overlay bg-overlay-400 rounded">
                                    <img src="{{asset('assets/img/photos/12.jpg')}}" alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Zones montagneuses</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>

                                <!--/.swiper-slide -->
                                <div class="swiper-slide rounded">
                                    <img src="{{asset('assets/img/photos/hbatie2.jpg')}}" alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Hotels de qualités</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide rounded">
                                    <img src="{{asset('assets/img/photos/8.jpg')}}" alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Terres Féralitiques</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->



                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Tourisme</h2>
                    <h3 class="display-4 mb-7">Batié presente un aspect touristique hors du commun.</h3>
                    <div class="accordion accordion-wrapper caret-simple" id="accordionExample">
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingOne">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Cols, Grottes Et Chefferies </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>
                                        Le col de Batié, très réputé avec sur le sommet le plus élevé, un centre touristique aménagé à 1600m d’altitude et présentant une belle vue panoramique de la région.
                                    </p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Le Mont Metchou  </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>L'autre trait caractéristique de Batié est le mont Metchou (2 000 mètres), le sommet qui domine ce village montagneux.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingThree">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Grotte de Nka'a  </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Il faut descendre en bordure d’une combe près d'un torrent. Au milieu d'une végétation luxuriante.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingFour">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Les Mines de sable </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Batié est aussi célèbre pour ses mines de sable qui sont ouvertes sur les flancs de ses montagnes. C'est cette richesse en sable qui a donné son nom à l'équipe de football du village, le Sable de Batié, qui est
                                        devenu champion du Cameroun en 1999, devenant ensuite la première équipe camerounaise à se qualifier pour la phase de groupe de la Champions League de la Confédération africaine de football (CAF).</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                    </div>
                    <a href="#" class="btn btn-blue rounded mb-0 text-nowrap" style="float: right;">En savoir plus</a>

                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section id="snippet-3 " class="wrapper bg-light wrapper-border" style="margin-top: -10%;">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15 ">
            <div class="row ">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto ">
                    <h2 class="fs-15 text-uppercase text-primary text-center ">Nos Evénements</h2>
                    <h3 class="display-4 mb-6 text-center ">Ici vous découvirez les célébrations de notre Communauté en détail.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative ">
                <div class="shape bg-dot primary rellax w-17 h-20 " data-rellax-speed="1 " style="top: 0px; left: -1.7rem; transform: translate3d(0px, 10px, 0px); "></div>
                <div class="swiper-container dots-closer blog grid-view mb-6 swiper-container-2 " data-margin="0 " data-dots="true " data-items-xl="3 " data-items-md="2 " data-items-xs="1 ">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events ">
                        <div class="swiper-wrapper " id="swiper-wrapper-c2549ac53cc1635b " aria-live="off " style="cursor: grab; transform: translate3d(0px, 0px, 0px); ">
                            <div class="swiper-slide swiper-slide-active " role="group " aria-label="1 / 4 " style="width: 465px; ">
                                <div class="item-inner ">
                                    <article>
                                        <div class="card ">
                                            <figure class="card-img-top overlay overlay-1 hover-scale ">
                                                <a href="detaiEventNonParticipatif.html"> <img src="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg')}}" alt=" "><span class="bg "></span></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Lire plus</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body ">
                                                <div class="post-header ">
                                                    <div class="post-category text-line ">
                                                        <a href="detaiEventNonParticipatif.html" class="hover " rel="category ">Evénement non Participatif</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark " href="detaiEventNonParticipatif.html">Fête culturelle de 2016</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content ">
                                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer ">
                                                <ul class="post-meta d-flex mb-0 ">
                                                    <li class="post-date "><i class="uil uil-calendar-alt "></i><span>14 Apr 2021</span></li>
                                                    <li class="post-comments "><a href="# "><i class="uil uil-comment "></i>4</a></li>
                                                    <li class="post-likes ms-auto "><a href="# "><i class="uil uil-heart-alt "></i>5</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide swiper-slide-active " role="group " aria-label="1 / 4 " style="width: 465px; ">
                                <div class="item-inner ">
                                    <article>
                                        <div class="card ">
                                            <figure class="card-img-top overlay overlay-1 hover-scale ">
                                                <a href="detaiEventNonParticipatif.html"> <img src="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg')}}" alt=" "><span class="bg "></span></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Lire plus</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body ">
                                                <div class="post-header ">
                                                    <div class="post-category text-line ">
                                                        <a href="detaiEventNonParticipatif.html" class="hover " rel="category ">Evénement non Participatif</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark " href="detaiEventNonParticipatif.html">Fête culturelle de 2016</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content ">
                                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer ">
                                                <ul class="post-meta d-flex mb-0 ">
                                                    <li class="post-date "><i class="uil uil-calendar-alt "></i><span>14 Apr 2021</span></li>
                                                    <li class="post-comments "><a href="# "><i class="uil uil-comment "></i>4</a></li>
                                                    <li class="post-likes ms-auto "><a href="# "><i class="uil uil-heart-alt "></i>5</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide swiper-slide-active " role="group " aria-label="1 / 4 " style="width: 465px; ">
                                <div class="item-inner ">
                                    <article>
                                        <div class="card ">
                                            <figure class="card-img-top overlay overlay-1 hover-scale ">
                                                <a href="detaiEventNonParticipatif.html"> <img src="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg')}}" alt=" "><span class="bg "></span></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Lire plus</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body ">
                                                <div class="post-header ">
                                                    <div class="post-category text-line ">
                                                        <a href="detaiEventNonParticipatif.html" class="hover " rel="category ">Evénement non Participatif</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark " href="detaiEventNonParticipatif.html">Fête culturelle de 2016</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content ">
                                                    <p>Mauris convallis non ligula non interdum. Gravida vulputate convallis tempus vestibulum cras imperdiet nun eu dolor.</p>
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer ">
                                                <ul class="post-meta d-flex mb-0 ">
                                                    <li class="post-date "><i class="uil uil-calendar-alt "></i><span>14 Apr 2021</span></li>
                                                    <li class="post-comments "><a href="# "><i class="uil uil-comment "></i>4</a></li>
                                                    <li class="post-likes ms-auto "><a href="# "><i class="uil uil-heart-alt "></i>5</a></li>
                                                </ul>
                                                <!-- /.post-meta -->
                                            </div>
                                            <!-- /.card-footer -->
                                        </div>
                                        <!-- /.card -->
                                    </article>
                                    <!-- /article -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->

                        </div>
                    </div>
                    <!-- /.swiper-container -->
                    <a href="#" class="btn btn-blue rounded mb-0 text-nowrap" style="float: right;">Voir Plus</a>

                </div>
                <!-- /.position-relative -->
            </div>
    </section>


    <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('assets/img/photos/african-2771095_1920.jpg')}}">
        <div class="container py-18">
            <div class="row">
                <div class="col-lg-8">
                    <h2 class="fs-16 text-uppercase text-line text-white mb-3">Joindre notre communauté</h2>
                    <h3 class="display-4 mb-6 text-white pe-xxl-18">La communauté batié compte déjà à nos jour plus de 250 membres de toutes origines térritoriales.</h3>
                    <a href="#" class="btn btn-white rounded mb-0 text-nowrap">Nous Joindre</a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Blog</h2>
                    <h3 class="display-4 mb-9">Des articles rédactés par nos experts dans le but de correctement situé certaines thématiques.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6">
                                    <a href="#"> <img src="{{asset('assets/img/photos/Istock_PhotoCol_Batié (1).jpg')}}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Lire plus</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="article.html">C'est quoi le col Batie</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14 Apr 2021</span></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Tourisme</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6">
                                    <a href="#"> <img src="{{asset('assets/img/photos/drums-5949725.jpg')}}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Lire plus</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="article.html">Pourquoi les fêtes culturelles Batié...?</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29 Mar 2021</span></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Tradition</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide">
                            <article>
                                <figure class="overlay overlay-1 hover-scale rounded mb-6">
                                    <a href="#"> <img src="{{asset('assets/img/photos/scarf-2771102_1920.jpg')}}" alt="" /></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Lire plus</h5>
                                    </figcaption>
                                </figure>
                                <div class="post-header">
                                    <h2 class="post-title h3 mb-3"><a class="link-dark" href="article.html">Batié réalise un nombre important...</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-footer">
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Feb 2021</span></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>Loisir</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.post-footer -->
                            </article>
                            <!-- /article -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <a href="#" class="btn btn-blue rounded mb-0 text-nowrap" style="float: right;">Voir Plus</a>

                    <!-- /.swiper-wrapper -->
                </div>
                <!-- /.swiper -->
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 pt-md-17 pb-md-21">
            <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 align-items-end">
                <div class="col-lg-12">
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Avis et interactions</h2>
                    <h3 class="display-4 mb-0 pe-xxl-15">Ce que disent les autres sur Batié depuis notre site web et sur les réseau sociaux.</h3>
                </div>
                <!-- /column -->
                <div class="col-lg-8 mt-lg-2">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-4">
                            <h3 class="counter counter-lg">+ 100</h3>
                            <p>Avis depuis notre site</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <h3 class="counter counter-lg">+ 500</h3>
                            <p>Sur Facebook</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <h3 class="counter counter-lg">+ 150</h3>
                            <p>Sur autres plateformes</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-start">
        <div class="container py-16 py-md-18 position-relative">
            <div class="position-relative mt-n18 mt-md-n23 mb-16 mb-md-18">
                <div class="shape rounded-circle bg-line primary rellax w-18 h-18" data-rellax-speed="1" style="top: -2rem; right: -2.7rem; z-index:0;"></div>
                <div class="shape rounded-circle bg-soft-primary rellax w-18 h-18" data-rellax-speed="1" style="bottom: -1rem; left: -3rem; z-index:0;"></div>
                <div class="card shadow-lg">
                    <div class="row gx-0">
                        <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('assets/img/photos/istock africa-6289451.jpg')}}">
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-13">
                                <div class="swiper-container dots-closer mb-4" data-margin="30" data-dots="true">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                    <p>“Le col Batié est un col de montagne sur l'un des tronçons de route bitumée les plus en altitude du pays Bamiléké.”</p>
                                                    <div class="blockquote-details justify-content-center text-center">
                                                        <div class="info ps-0">
                                                            <h5 class="mb-1">Jakin Youdom</h5>
                                                            <p class="mb-0">Camerounais</p>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                    <p>“Le col de Batié a déjà servi de parcours au Tour du Cameroun.”</p>
                                                    <div class="blockquote-details justify-content-center text-center">
                                                        <div class="info ps-0">
                                                            <h5 class="mb-1">Jakin Youdom</h5>
                                                            <p class="mb-0">Camerounais</p>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!--/.swiper-slide -->
                                            <div class="swiper-slide">
                                                <blockquote class="icon icon-top fs-lg text-center">
                                                    <p>“Un centre touristique aménagé à 1 600 m d’altitude offre une vue panoramique.”</p>
                                                    <div class="blockquote-details justify-content-center text-center">
                                                        <div class="info ps-0">
                                                            <h5 class="mb-1">Jakin Youdom</h5>
                                                            <p class="mb-0">Camerounais</p>
                                                        </div>
                                                    </div>
                                                </blockquote>
                                            </div>
                                            <!--/.swiper-slide -->
                                        </div>
                                        <!-- /.swiper-wrapper -->
                                    </div>
                                    <!-- /.swiper -->
                                </div>
                                <!-- /.swiper-container -->
                            </div>
                            <!--/div -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /div -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection