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
                    @if(empty($informations))
                        <h1 class="display-1 mb-4 text-blue">Pas de titre</h1>
                    @else
                        @foreach ($informations as $information)
                            <h1 class="display-1 mb-4 text-blue">{{ $information->grand_titre }}</h1>
                        @endforeach
                    @endif
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        @if(empty($informations))
            <h1 class="display-1 mb-4 text-blue">Pas de 'image enregistrer une image</h1>
        @else
            @foreach ($informations as $information)
                <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img src="app/apropos/{{$information->imageIf}}" alt="" /></figure>
            @endforeach
        @endif
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    @if(empty($informations))
                        <h2 class="display-4 mb-4 px-lg-14">Pas de titre</h2>
                    @else
                        @foreach ($informations as $information)
                            <h2 class="display-4 mb-4 px-lg-14">{{ $information->titre1 }}</h2>
                        @endforeach
                    @endif    
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
            @if(empty($apropobs))
                <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                    <div class="col-lg-6 position-relative order-lg-2">
                        <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                        <div class="overlap-grid overlap-grid-2">
                            <h2 class="display-4 mb-3">pas d'information enregistrer des information a propos de batier</h2>
                        </div>
                    </div>
                    <!--/.modal -->
                </div>
            @else
                @foreach ($apropobs as $apropob)
                    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                        <div class="col-lg-6 position-relative order-lg-2">
                            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
                            <div class="overlap-grid overlap-grid-2">
                                @foreach(explode('->',$apropob->imageab) as $item)
                                    @if($item)
                                        <div class="item">
                                            <figure class="rounded shadow"><img src="/app/apropos/{{ $item }}" srcset=".app/apropos/{{$apropob->imageab}} 2x" alt=""></figure>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="item">
                                    <figure class="rounded shadow"><img src="app/apropos/{{$apropob->imageab}}" srcset="app/apropos/{{$apropob->imageab}} 2x" alt=""></figure>
                                </div>
                            </div>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <img src="./assets/img/icons/lineal/earth.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                            <h2 class="display-4 mb-3">{{$apropob->titreab}}</h2>
                            <p class="lead fs-lg text-justify">{{$apropob->text1ab}}</p>
                            <p class="text-justify mb-6">{{$apropob->text2ab}}</p>
                            @if (!empty($apropob->lireplusab))
                                <a href="#" class="btn btn-primary rounded-pill mb-0" data-bs-toggle="modal" data-bs-target="#{{$apropob->modal}}">Lire
                                plus</a>
                            @endif

                            <!--/.row -->
                        </div>
                        <!--/column -->
                        <div class="modal fade" id="{{$apropob->modal}}" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered modal-md">
                                <div class="modal-content text-center">
                                    <div class="modal-body">
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        <h1>{{$apropob->titreab}}</h1>
                                        <div class="newsletter-wrapper">
                                            <div class="row">
                                                @foreach(explode('->',$apropob->imageab) as $i => $item)
                                                    @if($item)
                                                        <div class="row mb-5">
                                                            <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                                                <img src="/app/apropos/{{ $item }}" alt="" />
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="col-md-10 offset-md-1">
                                                    <!-- Begin Mailchimp Signup Form -->
                                                    <div id="mc_embed_signup">
                                                        <p class="text-justify mb-6">
                                                            {{$apropob->lireplusab}}
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
                @endforeach
            @endif
            <div class="row mb-5">
                <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
                    <img src="./assets/img/icons/lineal/list.svg" class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    @if(empty($informations))
                        <h2 class="display-4 mb-4 px-lg-14">pas de titre</h2>
                    @else
                        @foreach ($informations as $information)
                            <h2 class="display-4 mb-4 px-lg-14">{{$information->titre2}}</h2>
                        @endforeach
                    @endif
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    @if(empty($caracteristiques))
                        <div class="card me-lg-6">
                                <div class="card-body p-6">
                                    <div class="d-flex flex-row">
                                        <div>
                                            <h4 class="mb-1">pas de characteristique veuiller enregistrer des characteristiques</h4>
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.card-body -->
                            </div>
                    @else
                        @foreach ($caracteristiques as $caracteristique)
                            @if($caracteristique->caract_num == 1)
                                <div class="card me-lg-6">
                                    <div class="card-body p-6">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                                            class="number">0{{$caracteristique->caract_num}}</span></span>
                                            </div>
                                            <div>
                                                <h4 class="mb-1">{{$caracteristique->caract_intitule}}</h4>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                            @endif
                            @if($caracteristique->caract_num == 2)
                                <div class="card ms-lg-13 mt-6">
                                    <div class="card-body p-6">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                                            class="number">0{{$caracteristique->caract_num}}</span></span>
                                            </div>
                                            <div>
                                                <h4 class="mb-1">{{$caracteristique->caract_intitule}}</h4>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                            @endif
                            @if($caracteristique->caract_num == 3)
                                <div class="card mx-lg-6 mt-6">
                                    <div class="card-body p-6">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <span class="icon btn btn-circle btn-lg btn-soft-primary disabled me-4"><span
                                                            class="number">0{{$caracteristique->caract_num}}</span></span>
                                            </div>
                                            <div>
                                                <h4 class="mb-1">{{$caracteristique->caract_intitule}}</h4>
                                                <p class="mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                            @endif
                        @endforeach
                    @endif
                    <!--/.card -->
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    @if(empty($caracteristiques))
                        <h2 class="display-6 mb-3">pas de detatil characteristique</h2>
                    @else
                        @foreach ($caracteristiques as $caracteristique)
                        <h2 class="display-6 mb-3">{{ $caracteristique->titreC }}</h2>
                        <p class="mb-6 text-justify">{{ $caracteristique->caract_libelet }}</p>
                        @endforeach
                    @endif
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
            @if(empty($objectifs))
                <div class="row gx-lg-8 gx-xl-0 align-items-center">
                    <h2 class="display-6 mb-3">pas de titre objectif</h2>
                    <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                        <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                        <figure><img src="./assets/img/photos/pco2.png" srcset="./assets/img/photos/pco2.png 2x" alt="">
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                        <div class="dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
                                <h3 class="h1 post-title mb-3">pas dobjectif veuiller enregistrer des objectif</h3>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!--/column -->
                </div>
            @else
                <div class="row gx-lg-8 gx-xl-0 align-items-center">
                    @foreach ($objectifs as $objectif)
                    <h2 class="display-6 mb-3">{{ $objectif->titreOb }}</h2>
                    @endforeach
                    <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                        <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block" data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                        <figure><img src="./assets/img/photos/pco2.png" srcset="app/apropos/{{$objectif->imageOb}} 2x" alt="">
                        </figure>
                    </div>
                    <!--/column -->
                    <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                        <div class="dots-start dots-closer mt-md-10 mb-md-15" data-margin="30" data-dots="true">
                            @foreach ($objectifs as $objectif)
                                <div class="post-category mb-3 text-blue">{{ $objectif->objectif_num }}</div>
                                <h3 class="h1 post-title mb-3">{{ $objectif->objectif_intitule }}</h3>
                                <p class="text-justify">{{ $objectif->objectif_libelet}}</p>
                            @endforeach
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                    </div>
                    <!--/column -->
                </div>
            @endif
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
                    @if(empty($informations))
                        <h2 class="display-4 mb-3 px-lg-14">pas de titre</h2>
                    @else
                        @foreach ($informations as $information)
                            <h2 class="display-4 mb-3 px-lg-14">{{ $information->titre3 }}</h2>
                        @endforeach
                    @endif
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
                            @if(empty($partenaires))
                                <div class="swiper-slide text-center">
                                    <div class="item-inner text-center">
                                        <div class="card text-center">
                                            <div class="card-body text-center">
                                                <h4 class="mb-1">Pas de partenaire</h4>
                                                <div class="meta mb-2">veuiller enregistrer des partenaire</div>
                                                <!-- /.social -->
                                            </div>
                                            <!--/.card-body -->
                                        </div>
                                        <!-- /.card -->
                                    </div>
                                    <!-- /.item-inner -->
                                </div>
                            @else
                                @foreach ($partenaires as $partenaire)
                                    <div class="swiper-slide">
                                        <div class="item-inner">
                                            <div class="card">
                                                <div class="card-body">
                                                    <img class="rounded-circle w-15 mb-4" src="app/apropos/{{$partenaire->logo}}" srcset="app/apropos/{{$partenaire->logo}} 2x" alt="" />
                                                    <h4 class="mb-1">{{$partenaire->nom_part}}</h4>
                                                    <div class="meta mb-2">{{$partenaire->services}}</div>
                                                    <nav class="nav social mb-0">
                                                        <a href="{{$partenaire->link1}}"><i class="{{$partenaire->social_media1}}"></i></a>
                                                        <a href="{{$partenaire->link2}}"><i class="{{$partenaire->social_media2}}"></i></a>
                                                        <a href="{{$partenaire->link3}}"><i class="{{$partenaire->social_media3}}"></i></a>
                                                    </nav>
                                                    <!-- /.social -->
                                                </div>
                                                <!--/.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <!-- /.item-inner -->
                                    </div>
                                @endforeach
                            @endif
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