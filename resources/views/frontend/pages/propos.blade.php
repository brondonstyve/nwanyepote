@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

 <!-- /content section -->
 <section class="mx-auto m-5 text-center">

    <section class="wrapper bg-dark">
        <div class="container pt-10 pt-md-14 text-center">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <h1 class="display-1 mb-4 text-blue">A Propos de nous!</h1>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="./assets/img/photos/photo shop 1.jpg" alt="" /></figure>
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <h2 class="display-4 mb-4 px-lg-14">A Propos de Batie</h2>
                </div>
                <!-- /column -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/Istock_Photobatie-loc.jpg" srcset="./assets/img/photos/Istock_Photobatie-loc.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/istock hut-7109228.jpg" srcset="./assets/img/photos/istock hut-7109228.jpg 2x" alt=""></figure>

                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/pin.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Localisation</h2>
                    <p class="lead fs-lg text-justify">Batié est une commune du Cameroun située dans le département des Hauts-Plateaux et la région de l'Ouest du Cameroun, en pays Bamiléké</p>
                    <p class="mb-6 text-justify">La localité est située sur la route nationale 5 (axe Douala-Bafoussam) à 6,8 km à l'ouest du chef-lieu départemental Baham.
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">

                            <figure class="rounded shadow"><img src="./assets/img/photos/istock wooden-mask-2543403.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                        </div>

                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/earth.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Historique</h2>
                    <p class="lead fs-lg text-justify">Le royaume Batié (Té) fait partie du grand ensemble géographique communément appelée « les hautes terres de l’Ouest Cameroun »</p>
                    <p class="text-justify mb-6">C’est l'une des Chefferies Traditionnelles de la Province de l'Ouest Cameroun situé sur la Nationale N°2 à 210 Km de Douala et 30 Km de Bafoussam, Chef lieu de la Province.</p>
                    <a href="#" class="btn btn-primary rounded-pill mb-0" data-bs-toggle="modal" data-bs-target="#modal-02">Lire
                        plus</a>

                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="modal fade" id="modal-02" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content text-center">
                            <div class="modal-body">
                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h1>Historique</h1>
                                <div class="newsletter-wrapper">
                                    <div class="row">
                                        <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                            <img src="./assets/img/photos/Istock_Photodocument-352-84-1080-720-20210906154513.jpg" alt="" />
                                        </figure>
                                        <div class="col-md-10 offset-md-1">
                                            <!-- Begin Mailchimp Signup Form -->
                                            <div id="mc_embed_signup">
                                                <p class="text-justify mb-6">
                                                    Le royaume Batié (Té) fait partie du grand ensemble géographique communément appelée « les hautes terres de l’Ouest Cameroun ». C’est l'une des Chefferies Traditionnelles de la Province de l'Ouest Cameroun situé sur la Nationale N°2 à 210 Km de Douala
                                                    et 30 Km de Bafoussam, Chef lieu de la Province. Lors du recensement de 2005, la commune comptait 10 942 habitants. La commune de Batié comprend les villages suivants: Bachepang, Badjeugou, Bafamgoum
                                                    I, Bafamgoum II,Bahiala, Balagou I, Balagou II,Balig, Bametchetcha, Bametchoue Fodom. Batié est aussi célèbre pour ses mines de sable qui sont ouvertes sur les flancs de ses montagnes. C'est
                                                    cette richesse en sable qui a donné son nom à l'équipe de football du village, "Sable de Batié", qui est devenu champion du Cameroun en 1999, devenant ensuite la première équipe camerounaise
                                                    à se qualifier pour la phase de groupe de la Champions League de la Confédération africaine de Football (Caf). Aperçu géographique Superficie : 90 km2 Population : Près de 17.000 habitants Frontières
                                                    : - Au Sud–Est : Bapa et Badenkop - Au Nord : Bangam et Bamendjou - Au Nord–Ouest : Arrt de Baham - Au Sud : Fotouni, Bandja et Babouantou
                                                </p>
                                            </div>
                                            <!--End mc_embed_signup-->
                                        </div>
                                        <!-- /.newsletter-wrapper -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!--/.modal-body -->
                        </div>
                        <!--/.modal-content -->
                    </div>
                    <!--/.modal-dialog -->
                </div>
                <!--/.modal -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">

                            <figure class="rounded shadow"><img src="./assets/img/photos/ndop1.jpg" srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/a propos 1.jpg" srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>

                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/bar-chart.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Peuplement et Migration</h2>
                    <p class="lead fs-lg text-justify">Le royaume Batié (Té) fait partie du grand ensemble géographique communément appelée « les hautes terres de l’Ouest Cameroun »</p>
                    <p class="text-justify mb-6">C’est l'une des Chefferies Traditionnelles de la Province de l'Ouest Cameroun situé sur la Nationale N°2 à 210 Km de Douala et 30 Km de Bafoussam, Chef lieu de la Province.</p>
                    <a href="#" class="btn btn-primary rounded-pill mb-0" data-bs-toggle="modal" data-bs-target="#modal-02">Lire
                        plus</a>

                    <!--/.row -->
                </div>
                <!--/column -->
                <div class="modal fade" id="modal-02" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-md">
                        <div class="modal-content text-center">
                            <div class="modal-body">
                                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                <h1>Peuplement et Migration</h1>
                                <div class="newsletter-wrapper">
                                    <div class="row">
                                        <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                            <img src="./assets/img/photos/Istock_Photodocument-352-84-1080-720-20210906154513.jpg" alt="" />
                                        </figure>
                                        <div class="col-md-10 offset-md-1">
                                            <!-- Begin Mailchimp Signup Form -->
                                            <div id="mc_embed_signup">
                                                <p class="text-justify mb-6">
                                                    Le royaume Batié (Té) fait partie du grand ensemble géographique communément appelée « les hautes terres de l’Ouest Cameroun ». C’est l'une des Chefferies Traditionnelles de la Province de l'Ouest Cameroun situé sur la Nationale N°2 à 210 Km de Douala
                                                    et 30 Km de Bafoussam, Chef lieu de la Province. Lors du recensement de 2005, la commune comptait 10 942 habitants. La commune de Batié comprend les villages suivants: Bachepang, Badjeugou, Bafamgoum
                                                    I, Bafamgoum II,Bahiala, Balagou I, Balagou II,Balig, Bametchetcha, Bametchoue Fodom. Batié est aussi célèbre pour ses mines de sable qui sont ouvertes sur les flancs de ses montagnes. C'est
                                                    cette richesse en sable qui a donné son nom à l'équipe de football du village, "Sable de Batié", qui est devenu champion du Cameroun en 1999, devenant ensuite la première équipe camerounaise
                                                    à se qualifier pour la phase de groupe de la Champions League de la Confédération africaine de Football (Caf). Aperçu géographique Superficie : 90 km2 Population : Près de 17.000 habitants Frontières
                                                    : - Au Sud–Est : Bapa et Badenkop - Au Nord : Bangam et Bamendjou - Au Nord–Ouest : Arrt de Baham - Au Sud : Fotouni, Bandja et Babouantou
                                                </p>
                                            </div>
                                            <!--End mc_embed_signup-->
                                        </div>
                                        <!-- /.newsletter-wrapper -->
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!--/.modal-body -->
                        </div>
                        <!--/.modal-content -->
                    </div>
                    <!--/.modal-dialog -->
                </div>
                <!--/.modal -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/7.jpg" srcset="./assets/img/photos/7.jpg 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/calendar.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Chronologie de pouvoir</h2>
                    <p class="lead fs-lg text-justify">Depuis sa création, la chefferie Batié a connu une succession de 15 rois, à savoir</p>
                    <p class="text-justify mb-6">
                        Fo Tatomdjap, Fo Keunzekouo, Fo Tanzé-ndeu, Fo Ngouomèdoum, Fo Djaboukem, Fo Youayi, Fo Mbeutchouang, Fo Yussu, Fo Kemki, Fo Kemgang I, Fo Kemgang II, Fo Kemgouo, Fo Youté, Fo Dada, Fo Tchouankem
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/3.jpg" srcset="./assets/img/photos/3.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/12.jpg" srcset="./assets/img/photos/12.jpg 2x" alt=""></figure>

                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/touch-screen.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Climat</h2>
                    <p class="lead fs-lg text-justify">La Commune a un climat de type Camerounien d’altitude avec deux saisons : une saison sèche qui va de mi-novembre à mi-mars et une saison des pluies qui va de mi-mars à mi-novembre.</p>
                    <p class="text-justify mb-6">
                        Les précipitations annuelles moyennes varient entre 1600 et 2000 mm ; le mois d’Aout étant le plus pluvieux. Ce climat est favorable à la pratique des activités agro-pastorales.
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/1.jpg" srcset="./assets/img/photos/1.jpg 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/picture.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Sols</h2>
                    <p class="lead fs-lg text-justify">Le sol de Batie est par endroit latéritique ; cependant on observe aussi des zones de sols profonds bruns.</p>
                    <p class="text-justify mb-6">
                        Dans l’ensemble, le sol est essentiellement constitué des roches métamorphiques, couvertes par endroits par des cendres volcaniques (zone du Noun et de Njingah). Du côté de Ndiembou, Ndiengso et Banengo on trouve un sol latéritique rouge ferralitique.
                        Des sols hydro morphes se rencontrent dans les bas-fonds et en bordure des cours d’eau. Bien que peu fertile par endroit, le sol dans l’espace Communal est favorable à la pratique des activités agricoles.
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/4.jpg" srcset="./assets/img/photos/4.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img src="./assets/img/photos/8.jpg" srcset="./assets/img/photos/8.jpg 2x" alt=""></figure>

                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="./assets/img/icons/lineal/bucket.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Relief</h2>
                    <p class="lead fs-lg text-justify">Depuis sa création, le peuple batie a un relief tres divertifier</p>
                    <p class="text-justify mb-6">
                        Dans la commune d’Arrondissement de Batie 1er, le relief peu accidenté présente des zones plates et des collines qui, bien que légèrement abruptes favorisent l’érosion hydrique et crée par endroit des éboulements de terrain (quartiers Banengo, Famla,
                        Ndiengdam et Bamendzi).
                    </p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-4 px-lg-14">Caracteristique et Objectif.</h2>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="card me-lg-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                                class="number">01</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Fiabiliter des informations</h4>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card ms-lg-13 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                                class="number">02</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Connexion des ressortissants</h4>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                    <div class="card mx-lg-6 mt-6">
                        <div class="card-body p-6">
                            <div class="d-flex flex-row">
                                <div>
                                    <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                                class="number">03</span></span>
                                </div>
                                <div>
                                    <h4 class="mb-1">Visibiliter de la culture Batie</h4>
                                    <p class="mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <!--/.card-body -->
                    </div>
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h2 class="display-6 mb-3">Quel son nos caracteristique ?</h2>
                    <p class="lead fs-lg pe-lg-5 text-justify">Notre projet permetra d'avoir des information correcte et fiable a propo du peuple Batie.</p>
                    <p class="text-justify">Le peuble Batie est retrouver partous dans le monde et l'interconnexion entre les ressortisants etranger et locale est tres importante. Cette inter connexion serat fais a traver les evenemet participatif du peuple sur notre
                        plateforme.
                    </p>
                    <p class="mb-6 text-justify">Le peuple batie a une culture diversifier et cette culture serat mis en avant par notre plateforme a traver leur presentations sur la plate forme et aussi la vente de certain article et objet culturel sur notre plateforme.
                    </p>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-16 pb-14 pb-md-0">
            <div class="row gx-lg-8 gx-xl-0 align-items-center">
                <h2 class="display-6 mb-3">Quel son nos objectif ?</h2>
                <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                    <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                    <figure><img src="./assets/img/photos/pco2.png" srcset="./assets/img/photos/pco2@2x.png 2x" alt="">
                    </figure>
                </div>
                <!--/column -->
                <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                    <div class="dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
                        <div class="post-category mb-3 text-red">1</div>
                        <h3 class="h1 post-title mb-3">Objectif social</h3>
                        <p class="text-justify">la presentation de la culture et du savoir faire du peuple batie permetra au artisan et au commersan de croitre leur vente et favorisera le devellopement des activites de la communote.</p>

                        <div class="post-category mb-3 text-blue">2</div>
                        <h3 class="h1 post-title mb-3">Objectif econnomique</h3>
                        <p class="text-justify">A traver les differents evenements qui serons mediatiser permetra au monde entier et au ressortissants batie a traver le monde d'y participer et de contribuer insi a levolution de l'econnomi de la communoter batie.</p>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row mb-3">
                <div class="col-md-10 col-xl-9 col-xxl-7 mx-auto text-center">
                    <img src="./assets/img/icons/lineal/team.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3 px-lg-14">Nos partenaires.</h2>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-yellow rellax w-16 h-16" data-rellax-speed="1" style="bottom: 0.5rem; right: -1.7rem;"></div>
                <div class="shape rounded-circle bg-line red rellax w-16 h-16" data-rellax-speed="1" style="top: 0.5rem; left: -1.7rem;"></div>
                <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/log1.png" srcset="./assets/img/avatars/log1.png 2x" alt="" />
                                            <h4 class="mb-1">Manitou</h4>
                                            <div class="meta mb-2">prestatair de cervices</div>
                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/log2.png" srcset="./assets/img/avatars/log2.png 2x" alt="" />
                                            <h4 class="mb-1">Marions shop</h4>
                                            <div class="meta mb-2">boutique de shaussure</div>

                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/log3.png" srcset="./assets/img/avatars/log3.png 2x" alt="" />
                                            <h4 class="mb-1">Inove solution</h4>
                                            <div class="meta mb-2">prestataire de services</div>

                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te4.jpg" srcset="./assets/img/avatars/te4@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Otnes shop</h4>
                                            <div class="meta mb-2">Entreprise commercial</div>

                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te5.jpg" srcset="./assets/img/avatars/te5@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Il cleaning</h4>
                                            <div class="meta mb-2">prestatair de cervices</div>

                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                            <div class="swiper-slide">
                                <div class="item-inner">
                                    <div class="card">
                                        <div class="card-body">
                                            <img class="rounded-circle w-15 mb-4" src="./assets/img/avatars/te6.jpg" srcset="./assets/img/avatars/te6@2x.jpg 2x" alt="" />
                                            <h4 class="mb-1">Tina Geller</h4>
                                            <div class="meta mb-2">Financial Analyst</div>

                                            <nav class="nav social mb-0">
                                                <a href="#"><i class="uil uil-twitter"></i></a>
                                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                                <a href="#"><i class="uil uil-dribbble"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                        <!--/.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.item-inner -->
                            </div>
                            <!--/.swiper-slide -->
                        </div>
                        <!--/.swiper-wrapper -->
                    </div>
                    <!-- /.swiper -->
                </div>
                <!-- /.swiper-container -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

</section>
<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection