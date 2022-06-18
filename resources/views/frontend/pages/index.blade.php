
@extends('frontend.base.base', ['title' => 'Accueil | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')
    <!-- /content section -->
    <section class="wrapper bg-dark angled lower-start">
        @if ($infosPage)
        <div style="background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.35)), url('{{asset("app/accueil/$infosPage->image1")}}'); visibility: visible; opacity: 1;">
            
        @else
        <div style="background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.35)), url('./assets/img/photos/t1.jpg'); visibility: visible; opacity: 1;">
            
        @endif
            <div class="container pt-7 pt-md-11 pb-8">
                <div class="row gx-0 gy-10 align-items-center">
                    <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        @if ($infosPage)
                        <h1 class="display-1 text-white mb-4">{{$infosPage->titre1}} <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="@foreach (explode('<->',$infosPage->txt_cligontants) as $key => $value)@if($value){{$value}},@endif @endforeach">
                        </span><span class="cursor text-primary" data-owner="typer"></span></h1>
                        <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">{{$infosPage->description1}}</p>
                        <div>
                            <a href="{{$infosPage->lien_bouton1}}" class="btn btn-lg btn-primary rounded">{{$infosPage->texte_bouton1}}</a>
                        </div>
                        @else
                        <h1 class="display-1 text-white mb-4">Bienvenue <br /><span class="typer text-primary text-nowrap" data-delay="100" data-words="Sur Nwanye po te,Peuple Bamiléké Batié,Dans l'ouest Cameroun"></span><span class="cursor text-primary" data-owner="typer"></span></h1>
                        <p class="lead fs-24 lh-sm text-white mb-7 pe-md-18 pe-lg-0 pe-xxl-15">D'entrée de jeu, ce resumé vidéo à droite vous présente en quelques minutes de cette merveilleuse region situé dans l'Ouest Cameroun.</p>
                        <div>
                            <a href="contact.html" class="btn btn-lg btn-primary rounded">Nous Contacter</a>
                        </div>    
                        @endif
                        

                    </div>
                    <!-- /column -->
                    <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
                        <div class="position-relative">
                            @if ($infosPage)
                                <a href="{{$infosPage->lien_video}}" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
                                <figure class="rounded shadow-lg"><img src='{{asset("app/accueil/$infosPage->image2")}}' srcset="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804@2x.jpg 2x')}}" alt=""></figure>
                            @else
                                <a href="https://www.youtube.com/watch?v=7IXcENeBZ4g" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
                                <figure class="rounded shadow-lg"><img src="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg')}}" srcset="{{asset('assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804@2x.jpg 2x')}}" alt=""></figure>
                            @endif
                            
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
                    @if ($infosPage)
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">{{$infosPage->titre2}}</h2>
                    <h3 class="display-4 mb-9">{{$infosPage->description2}}</h3>
                
                    @else
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Que faisons nous?</h2>
                    <h3 class="display-4 mb-9">Cet espace purement traditionnel à pour but d'être un boulevard d'informations et de ressourcement culturel lié à Batié.</h3>
                
                    @endif
                    </div>
                <!-- /column -->
            </div>
            <!-- /.row -->

            @if ($infosPage)
            <div class="row gx-md-8 gy-8 mb-14 mb-md-18">
                @php
                    $fa=explode('<->',$infosPage->sous_bloc2_code_fa);
                    $titre=explode('<->',$infosPage->sous_bloc2_titres);
                    $description=explode('<->',$infosPage->sous_bloc2_descriptions);
                    $texte=explode('<->',$infosPage->sous_bloc2_textes_boutons);
                    $lien=explode('<->',$infosPage->sous_bloc2_liens_boutons);
                @endphp
                @for ($i = 1; $i < 5; $i++)
                <div class="col-md-6 col-lg-3">
                    <div class="icon btn btn-block btn-lg btn-soft-primary disabled mb-6"> <i class="uil uil-{{$fa[$i]}}"></i> </div>
                    <h4>
                        <a href="evenement.html" class="text-dark">{{$titre[$i]}}</a></h4>
                    <p class="mb-3">{{$description[$i]}}</p>
                    <a href="{{$lien[$i]}}" class="more hover link-primary">{{$texte[$i]}}</a>
                </div>
                @endfor
                <!--/column -->
            @endif
            
            </div>
            <!--/.row -->
            <div class="row gy-10 gy-sm-13 gx-lg-3 mb-16 mb-md-18 align-items-center">
                <div class="col-md-8 col-lg-6 position-relative">
                    <div class="shape bg-dot primary rellax w-17 h-21" data-rellax-speed="1" style="top: -2rem; left: -1.9rem;"></div>
                    <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; "></div>
                    @if ($infosPage)
                    <figure class="rounded"><img src='{{asset("app/accueil/$infosPage->image3")}}' alt="" /></figure>
                        
                    @else
                    <figure class="rounded"><img src="{{asset('assets/img/photos/istock hut-7109228.jpg')}}" alt="" /></figure>
                        
                    @endif
                </div>
                <!--/column -->
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    @if ($infosPage)
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3"> {{$infosPage->titre3}} </h2>
                    <h3 class="display-4 mb-7"> {{$infosPage->description3}} </h3>
                    @else
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">A Propos de Batié</h2>
                    <h3 class="display-4 mb-7">En 3 aspects résumés, nous presentons ainsi notre peuple :</h3>
                    @endif
                    
                    @if ($infosPage)
                    @php
                        $titre=explode('<->',$infosPage->sous_bloc3_titres);
                        $description=explode('<->',$infosPage->sous_bloc3_descriptions);
                        $texte=explode('<->',$infosPage->sous_bloc3_textes_boutons);
                        $lien=explode('<->',$infosPage->sous_bloc3_liens_boutons);
                    @endphp
                        @for ($i = 1; $i < 4; $i++)
                        <div class="d-flex flex-row mb-6">
                            <div>
                                <span class="icon btn btn-block btn-soft-primary disabled me-5"><span class="number fs-18">{{$i}}</span></span>
                            </div>
                            <div>
                                <h4 class="mb-1">{{$titre[$i]}}</h4>
                                <p class="mb-0" style="text-align: justify;">{{$description[$i]}}</p>
                                <a href="{{$lien[$i]}}"><span class="badge bg-primary rounded-0">{{$texte[$i]}}</span></a>
                            </div>
                        </div>
                        @endfor
                    @endif
                    
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
                            @if ($infosPage)
                            <div class="swiper-wrapper">

                                @php
                                    $description=explode('<->',$infosPage->sous_bloc4_descriptions_images);
                                @endphp
                                <div class="swiper-slide bg-overlay bg-overlay-400 rounded">
                                    <img src='{{asset("app/accueil/$infosPage->image4")}}' alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">{{$description[1]}}</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>

                                <div class="swiper-slide bg-overlay bg-overlay-400 rounded">
                                    <img src='{{asset("app/accueil/$infosPage->image5")}}' alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">{{$description[2]}}</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>

                                <!--/.swiper-slide -->
                                <div class="swiper-slide rounded">
                                    <img src='{{asset("app/accueil/$infosPage->image6")}}' alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">{{$description[3]}}</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide rounded">
                                    <img src='{{asset("app/accueil/$infosPage->image7")}}' alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div class="caption bg-white rounded px-4 py-3 mx-auto mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">{{$description[4]}}</h5>
                                        </div>
                                        <!--/.caption -->
                                    </div>
                                    <!--/.caption-wrapper -->
                                </div>
                                <!--/.swiper-slide -->


                            </div>
                            <!--/.swiper-wrapper -->
                            @endif
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->



                </div>
                <!--/column -->
                <div class="col-lg-5">
                    @if ($infosPage)
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">{{$infosPage->titre4}}</h2>
                    <h3 class="display-4 mb-7">{{$infosPage->description4}}</h3>
                    @else
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Tourisme</h2>
                    <h3 class="display-4 mb-7">Batié presente un aspect touristique hors du commun.</h3>
                    @endif
                    
                    <div class="accordion accordion-wrapper caret-simple" id="accordionExample">

                        @if ($infosPage)
                        @php
                            $titre=explode('<->',$infosPage->sous_bloc4_titres);
                            $description=explode('<->',$infosPage->sous_bloc4_descriptions);
                        @endphp
                            @for ($i = 1; $i < 5; $i++)
                            <div class="card plain accordion-item">
                                <div class="card-header" id="headingOne">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}"> {{$titre[$i]}} </button>
                                </div>
                                <!--/.card-header -->
                                <div id="collapse{{$i}}" class="accordion-collapse collapse {{($i==1)? "show" : ''}}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>
                                            {{$description[$i]}}
                                        </p>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.accordion-collapse -->
                            </div>
                            <!--/.accordion-item -->
                            @endfor
                        @endif
                        

                    </div>
                    <a href="{{route('tourisme')}}" class="btn btn-blue rounded mb-0 text-nowrap" style="float: right;">En savoir plus</a>

                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    @if (sizeOf($evenementParticipatif)==0 && sizeOf($evenementNonParticipatif)==0)
    <section id="snippet-3 " class="wrapper bg-light wrapper-border" style="margin-top: -10%;">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15 ">
            <div class="row ">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto ">
                    <h2 class="fs-15 text-uppercase text-primary text-center ">Nos Evénements</h2>
                    <h3 class="display-4 mb-6 text-center ">Aucun événement enregistré pour le moment.</h3>
                </div>
                <!-- /column -->
            </div> 
        </div>
    </section> 

    @else
    <section id="snippet-3 " class="wrapper bg-light wrapper-border" style="margin-top: -10%;">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15 ">
            <div class="row ">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto ">
                    @if ($infosPage)
                    <h2 class="fs-15 text-uppercase text-primary text-center ">{{$infosPage->titre5}}</h2>
                    <h3 class="display-4 mb-6 text-center ">{{$infosPage->description5}}</h3>
                    @else
                    <h2 class="fs-15 text-uppercase text-primary text-center ">Nos Evénements</h2>
                    <h3 class="display-4 mb-6 text-center ">Ici vous découvirez les célébrations de notre Communauté en détail.</h3>
                    @endif
                    
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            
            <div class="position-relative ">
                <div class="shape bg-dot primary rellax w-17 h-20 " data-rellax-speed="1 " style="top: 0px; left: -1.7rem; transform: translate3d(0px, 10px, 0px); "></div>
                <div class="swiper-container dots-closer blog grid-view mb-6 swiper-container-2 " data-margin="0 " data-dots="true " data-items-xl="3 " data-items-md="2 " data-items-xs="1 ">
                    <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events ">
                        <div class="swiper-wrapper " id="swiper-wrapper-c2549ac53cc1635b " aria-live="off " style="cursor: grab; transform: translate3d(0px, 0px, 0px); ">
    
                            <!--/.swiper-slide -->
    
                            @foreach ($evenementNonParticipatif as $key=>$item)
                            <div class="swiper-slide " style="width: 465px; " role="group " aria-label="3 / 4 ">
                                <div class="item-inner ">
                                    <article>
                                        <div class="card ">
                                            <figure class="card-img-top overlay overlay-1 hover-scale"  style="min-height: 350px;max-height: 350px">
                                                <a href="{{route('detail-evenement',$item->id)}}"> <img src="{{asset('app/evenement/'.$item->image_principal)}}" alt=" "><span class="bg "></span></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Lire plus</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body " style="min-height: 250px;max-height: 250px">
                                                <div class="post-header ">
                                                    <div class="post-category text-line ">
                                                        <a href="{{route('detail-evenement',$item->id)}}" class="hover " rel="category ">Evénement Non Participatif</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark " href="{{route('detail-evenement',$item->id)}}">{{$item->titres}}</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content text-justify">
                                                    <p>{!!substr($item->libelet1a,0,150)!!} [...]</p>
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer ">
                                                <ul class="post-meta d-flex mb-0 ">
                                                    <li class="post-date "><i class="uil uil-calendar-alt "></i><span>{{$item->created_at->format('d-M-Y    H:i')}}
                                                    </span></li>
                                                    <li class="post-comments "><a href="# "><i class="uil uil-comment "></i>xx</a></li>
                                                    {{$key}}
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
                            @if (sizeOf($evenementParticipatif)>=1 && $key==1)
                                @break
                            @endif
                            @endforeach

                            @foreach ($evenementParticipatif as $keys=>$item)
                            @if (sizeOf($evenementNonParticipatif)<2 && $key==1)
                                @break
                            @endif
                            <div class="swiper-slide " style="width: 465px; " role="group " aria-label="3 / 4 ">
                                <div class="item-inner ">
                                    <article>
                                        <div class="card ">
                                            <figure class="card-img-top overlay overlay-1 hover-scale"  style="min-height: 350px;max-height: 350px">
                                                <a href="{{route('detail-evenement-participatif',$item->id)}}"> <img src="{{asset('app/evenementparticipatif/'.$item->image)}}" alt=" "><span class="bg "></span></a>
                                                <figcaption>
                                                    <h5 class="from-top mb-0">Lire plus</h5>
                                                </figcaption>
                                            </figure>
                                            <div class="card-body " style="min-height: 250px;max-height: 250px">
                                                <div class="post-header ">
                                                    <div class="post-category text-line ">
                                                        <a href="{{route('detail-evenement-participatif',$item->id)}}" class="hover " rel="category ">Evénement Participatif</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark " href="{{route('detail-evenement-participatif',$item->id)}}">{{$item->titre}}</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-content text-justify">
                                                    <p>{!!substr($item->article1,0,150)!!} [...]</p>
                                                </div>
                                                <!-- /.post-content -->
                                            </div>
                                            <!--/.card-body -->
                                            <div class="card-footer ">
                                                <ul class="post-meta d-flex mb-0 ">
                                                    <li class="post-date "><i class="uil uil-calendar-alt "></i><span>{{$item->created_at->format('d-M-Y    H:i')}}
                                                    </span></li>
                                                    <li class="post-comments "><a href="# "><i class="uil uil-comment "></i>xx</a></li>
                                                    @if ($item->statut)
                                                    <li class="post-likes ms-auto ">
                                                        <a href="{{route('participer',$item->id)}}"><button style="background-color: #3f78e0;" class="text-white">Participer</button></a>
                                                    </li>
                                                    @else
                                                    <li class="post-likes ms-auto ">
                                                        <button style="background-color: #3f78e0;" class="text-white">Cloturé</button>
                                                    </li>
                                                    @endif
                                                    
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
                            @endforeach
                        </div>
                </div>
                <!-- /.swiper-container -->
            </div>
            @if ($infosPage)
                            <a href="{{$infosPage->lien_bouton5}}" class="btn btn-blue rounded mb-0 text-nowrap" style="float: right;">{{$infosPage->texte_bouton5}}</a>
                                
                            @else
                            <a href="#" class="btn btn-blue rounded mb-0 text-nowrap" style="float: right;">Voir Plus</a>
                                
                            @endif
            <!-- /.position-relative -->
        </div>
    </section>
    @endif


    @if ($infosPage)
    <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src='{{asset("app/accueil/$infosPage->image8")}}'>
        
    @else
    <section class="wrapper image-wrapper bg-image bg-overlay" data-image-src="{{asset('assets/img/photos/african-2771095_1920.jpg')}}">
        
    @endif
        <div class="container py-18">
            <div class="row">
                <div class="col-lg-8">
                    @if ($infosPage)
                    <h2 class="fs-16 text-uppercase text-line text-white mb-3">{{$infosPage->titre6}}</h2>
                    <h3 class="display-4 mb-6 text-white pe-xxl-18">{{$infosPage->description6}}</h3>
                    <a href="{{$infosPage->lien_bouton6}}" class="btn btn-white rounded mb-0 text-nowrap">{{$infosPage->texte_bouton6}}</a>
                    @else
                    <h2 class="fs-16 text-uppercase text-line text-white mb-3">Joindre notre communauté</h2>
                    <h3 class="display-4 mb-6 text-white pe-xxl-18">La communauté batié compte déjà à nos jour plus de 250 membres de toutes origines térritoriales.</h3>
                    <a href="#" class="btn btn-white rounded mb-0 text-nowrap">Nous Joindre</a>
                    @endif
                    
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    @if (sizeOf($article)==0)
    <section id="snippet-3 " class="wrapper bg-light wrapper-border" style="">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15 ">
            <div class="row ">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto ">
                    <h2 class="fs-15 text-uppercase text-primary text-center ">Nos Articles</h2>
                    <h3 class="display-4 mb-6 text-center ">Aucun Article enregistré pour le moment.</h3>
                </div>
                <!-- /column -->
            </div> 
        </div>
    </section>
    @else
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7">
                    @if ($infosPage)
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">{{$infosPage->titre7}}</h2>
                    <h3 class="display-4 mb-9">{{$infosPage->description7}}</h3>
                    @else
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Article</h2>
                    <h3 class="display-4 mb-9">Des articles rédactés par nos experts dans le but de correctement situé certaines thématiques.</h3>
                    @endif
                    
                </div>
                <!-- /column -->
            </div>
            <div class="swiper-container blog grid-view mb-6" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
            <div class="swiper">
              <div class="swiper-wrapper">
                  @foreach ($article as $item)
                  <div class="swiper-slide">
                    <article>
                      <figure class="overlay overlay-1 hover-scale rounded mb-5"style="min-height: 350px;max-height: 350px"><a href="{{route('detail-article',$item->id)}}"> <img src="{{asset('app/article/'.$item->image)}}" alt="" /></a>
                        <figcaption>
                          <h5 class="from-top mb-0">Lire Plus</h5>
                        </figcaption>
                      </figure>
                      <div class="post-header" style="min-height: 350px;max-height: 350px">
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route('detail-article',$item->id)}}">{{$item->titre}}</a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-footer">
                        <ul class="post-meta">
                          <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$item->created_at->format('d-M-Y')}}</span></li>
                          <li class="post-comments"><a href="#"><i class="uil uil-file-alt fs-15"></i>{{$item->domaine}}</a></li>
                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.post-footer -->
                    </article>
                    <!-- /article -->
                  </div>      
                  @endforeach
                

              </div>
              <!--/.swiper-wrapper -->
            </div>
            <!-- /.swiper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    @endif
      <!-- /section -->

   
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 pt-md-17 pb-md-21">
            <div class="row gx-lg-8 gx-xl-12 gy-10 gy-lg-0 mb-2 align-items-end">
                <div class="col-lg-12">
                    @if ($infosPage)
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">{{$infosPage->titre8}}</h2>
                    <h3 class="display-4 mb-0 pe-xxl-15">{{$infosPage->description8}}</h3>
                    @else
                    <h2 class="fs-16 text-uppercase text-line text-primary mb-3">Avis et interactions</h2>
                    <h3 class="display-4 mb-0 pe-xxl-15">Ce que disent les autres sur Batié depuis notre site web et sur les réseau sociaux.</h3>
                    @endif
                    
                </div>
                <!-- /column -->
                <div class="col-lg-8 mt-lg-2">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">

                        @if ($infosPage)
                        <div class="col-md-4">
                            <h3 class="counter counter-lg">+ {{$infosPage->nb_avis_fb}}</h3>
                            <p>{{$infosPage->libelle_avis_fb}}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <h3 class="counter counter-lg">+ {{$infosPage->nb_avis_site}}</h3>
                            <p>{{$infosPage->libelle_avis_site}}</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-4">
                            <h3 class="counter counter-lg">+ {{$infosPage->nb_avis_autre}}</h3>
                            <p>{{$infosPage->libelle_avis_autre}}</p>
                        </div>
                        <!--/column -->
                        @else
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
                        @endif
                        

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
                        @if ($infosPage)
                        <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('app/accueil/'.$infosPage->image9.'')}}">
                            
                        @else
                        <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('assets/img/photos/istock africa-6289451.jpg')}}">
                            
                        @endif
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <div class="p-10 p-md-11 p-lg-13">
                                <div class="swiper-container dots-closer mb-4" data-margin="30" data-dots="true">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            @if ($commentaire)
                                                @foreach ($commentaire as $item)
                                                <div class="swiper-slide">
                                                    <blockquote class="icon icon-top fs-lg text-center">
                                                        <p>“{{$item->commentaire}}”</p>
                                                        <div class="blockquote-details justify-content-center text-center">
                                                            <div class="info ps-0">
                                                                <h5 class="mb-1">{{$item->auteur}}</h5>
                                                                <p class="mb-0">{{$item->pays}}</p>
                                                            </div>
                                                        </div>
                                                    </blockquote>
                                                </div>
                                                <!--/.swiper-slide -->
                                                @endforeach
                                            @else
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
                                            @endif
                                            
                                            
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