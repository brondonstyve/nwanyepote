@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<section class="wrapper bg-dark">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            @if (empty($infoEvent))
                <div class="col-md-9 col-lg-7 col-xl-7 mx-auto">
                    <h1 class="display-1 mb-3 text-blue">Pas de grand titre
                    </h1>
                    <p class="lead px-xxl-10 text-white">veuiller remplire les informations de la pages
                    </p>
                </div>
            @else
                @foreach ($infoEvent as $item)
                    <div class="col-md-9 col-lg-7 col-xl-7 mx-auto">
                        <h1 class="display-1 mb-3 text-blue">{{ $item->grang_titre }}
                        </h1>
                        <p class="lead px-xxl-10 text-white">{{ $item->libelet }}
                        </p>
                    </div>
                @endforeach
            @endif
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>




@if ($evenementParticipatifRecent)
<section id="snippet-7" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row gy-10 gy-sm-13 gx-lg-3 align-items-center">


            @if ($evenementParticipatifRecent)
                
            <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                @if(empty($infoEvent))
                    <h2 class="display-3 text-primary  mb-3 px-lg-8">Evénement participatif le plus récent.</h2>
                    <p class="lead  text-center">Nos talents locaux présentent en live des oeuvres réalisées par eux même pendant des célébrations auxquelles ils prennent part.</p>
               <a href="{{route('detail-evenement-participatif',$evenementParticipatifRecent->id)}}" class="btn btn-lg btn-primary rounded-pill mb-10">En savoir plus</a>

                @else
                    @foreach ($infoEvent as $item)
                        <h2 class="display-3 text-primary  mb-3 px-lg-8">{{ $item->titre1 }}</h2>
                        <p class="lead  text-center">{{ $item->libelet1 }}</p>
                    @endforeach
               <a href="{{route('detail-evenement-participatif',$evenementParticipatifRecent->id)}}" class="btn btn-lg btn-primary rounded-pill mb-10">En savoir plus</a>

                @endif


            </div>


            <div class="col-md-8 col-lg-6 position-relative">

                @if ($evenementParticipatifRecent->type=='image')
                <figure class="rounded"><img src="{{asset('app/evenementparticipatif/'.$evenementParticipatifRecent->image)}}" alt="" style="min-height: 300px;max-height: 500px"></figure>
                    
                @else
                @foreach ($participant as $key=>$item)
                <a href="{{$item->video}}" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox=""><i class="icn-caret-right"></i></a>
                @break
                @endforeach
                <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; transform: translate3d(0px, 0px, 0px);"></div>
                <figure class="rounded"><img src="{{asset('assets/img/logo.jpg')}}" alt="" style="min-height: 300px;max-height: 500px"></figure>
            
                @endif
                </div>
            <div class="col-lg-5 col-xl-4 offset-lg-1">
                <h3 class="display-4 mb-3">{{$evenementParticipatifRecent->titre}}</h3>
                <p class="lead fs-lg mb-6 text-justify">{{substr($evenementParticipatifRecent->article1,0,200)}}[...]</p>
                <p class="lead fs-lg mb-6">Participants</p>
                <ul class="progress-list">

                    @if (sizeOf($participant)==0)
                        <li>
                            <p>Aucun participant</p>
                        </li>
                    @else
                    @foreach ($participant as $key=>$item)
                    <li>
                        <p>{{$item->name}} @if($key==0 && $item->voie!=0) (<span>Vainqueur</span>) @endif</p>
                        <div class="progressbar line primary" data-value="{{($item->voie/$total)*100}}"></div>
                    </li>
                    @endforeach
                    @endif
                </ul>
                <!-- /.progress-list -->
            </div>

            <!--/column -->
            
            @endif
            
        </div>
        <!--/.row -->
    </div>
</section>
@endif


<section id="snippet-2" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
            <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                @if(empty($infoEvent))
                    <h2 class="display-3 text-primary mb-3 px-lg-8">Evénement non participatif le plus récent.</h2>
                    <p class="lead  text-center">Des cérémonies traditionnelles, des presentations culturelles, des salons d'oeuvres d'arts et bien d'autres.</p>
                @else
                    @foreach ($infoEvent as $item)
                        <h2 class="display-3 text-primary mb-3 px-lg-8">{{ $item->titre2 }}</h2>
                        <p class="lead  text-center">{{ $item->libelet2 }}</p>
                    @endforeach
                @endif
                @if(empty($lastEvents))
                    <a href="#" target="_blank" class="btn btn-lg btn-primary rounded-pill mb-10">En savoir plus</a>
                @else
                    @foreach ($lastEvents as $lastEvent)
                        <a href="{{ route('detail-evenement', $lastEvent->id) }}" target="_blank" class="btn btn-lg btn-primary rounded-pill mb-10">En savoir plus</a>
                    @endforeach
                @endif
            </div>
            <div class="col-lg-6 position-relative">
                <div class="btn btn-circle btn-primary disabled position-absolute counter-wrapper flex-column d-none d-md-flex" style="top: 50%; left: 50%; transform: translate(-50%, -50%); width: 170px; height: 170px;">
                    @if(empty($diffd))
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg" style="visibility: visible;">New</span></h3>
                    @elseif ($diffd >= 365)
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg" style="visibility: visible;">{{ $diffyear }} Ans</span></h3>
                    @elseif ($diffd > 31)
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg" style="visibility: visible;">{{ $diffm }} Mois</span></h3>
                    @elseif ($diffd < 31)
                    <h3 class="text-white mb-1 mt-n2"><span class="counter counter-lg" style="visibility: visible;">{{ $diffd }} Jour</span></h3>
                    @endif
                    <p>Environ</p>
                </div>
                <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-10 offset-md-2">
                                <figure class="rounded"><img src="./assets/img/photos/13.jpg" srcset="./assets/img/photos/13.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                            <div class="col-md-12">
                                <figure class="rounded"><img src="./assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg" srcset="./assets/img/photos/Istock_PhotoNdop-tissu-traditionnel-Royal-Bamiléké-1-e1595963834804.jpg 2x" alt=""></figure>
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6">
                        <figure class="rounded"><img src="./assets/img/photos/istock dance-3882695.jpg" srcset="./assets/img/photos/istock dance-3882695.jpg 2x" alt=""></figure>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 390.3" data-inject-url="/assets/img/icons/lineal/handshake.svg" class="svg-inject icon-svg icon-svg-md mb-4"><path class="lineal-stroke" d="M508.4 133.5L378.5 3.7c-4.9-4.9-12.8-4.9-17.6 0l-73.1 73.1-14.4-14.4c-4.9-4.9-12.8-4.9-17.6 0l-22.9 22.9-81.8-81.6c-4.9-4.9-12.8-4.9-17.6 0L3.7 133.5c-4.9 4.9-4.9 12.8 0 17.6L85.6 233c4.9 4.9 12.8 4.9 17.6 0l52.1-52.1 26.5 26.5c.3.3.6.6 1 .9 5 4 12.2 3.7 16.7-.9L256 151l120.7 120.6-13 13-103.6-103.4c-4.9-4.9-12.8-4.9-17.6 0-.3.3-.6.6-.9 1-4 5-3.7 12.2.9 16.7l123.8 123.8-13 13-123.8-123.9c-5-4.7-12.9-4.6-17.6.4-4.6 4.8-4.6 12.4 0 17.2L315.3 333l-13 13-7.7-7.7-95.9-95.8c-4.5-4.5-11.7-4.9-16.7-.9-.4.3-.7.5-1 .9-1.2 1.2-2.1 2.6-2.7 4.1-.3.7-.5 1.5-.7 2.3-.1.4-.1.8-.2 1.2-.4 3.7 1 7.4 3.6 10l43.5 43.5 43.5 43.5-13 13-115-115c-4.9-4.9-12.8-4.9-17.6 0-4.9 4.9-4.9 12.8 0 17.6l123.8 123.9c4.9 4.9 12.8 4.9 17.6 0l21.9-21.9 7.7 7.7c4.8 4.9 12.7 4.9 17.6 0l21.9-21.9 11.5 11.5c4.9 4.9 12.8 4.9 17.6 0l30.7-30.7c4.9-4.9 4.9-12.8 0-17.6l-11.5-11.5 21.9-21.9c4.9-4.9 4.9-12.8 0-17.6L264.8 124.5c-4.9-4.9-12.8-4.9-17.6 0l-56.6 56.6-9.2-9.2 83.1-83.1 14.4 14.4 3.1 3.2.4.4 126.3 126.3c4.9 4.9 12.8 4.9 17.6 0l81.9-81.9c5-4.9 5-12.8.2-17.7z"></path><path class="lineal-fill" d="M30.106 142.324L142.323 30.107 206.6 94.382 94.382 206.6zm275.29-47.939l64.276-64.276 112.216 112.217-64.275 64.276z"></path></svg>
                @if(empty($lastEvents))
                    <h3 class="display-5 mb-5">Pas de titre</h3>
                    <p class="mb-7">Vous dever remplire les information de la page</p>
                @else
                    @foreach ($lastEvents as $lastEvent)
                        <h3 class="display-5 mb-5">{{ $lastEvent->titres }}</h3>
                        <p class="mb-7">{{ $lastEvent->libelet1a }}</p>
                    @endforeach
                @endif
                <div class="row counter-wrapper gy-6">
                    <div class="col-md-4">
                        <h3 class="counter text-primary" style="visibility: visible;">500</h3>
                        <p>Participants environ</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <h3 class="counter text-primary" style="visibility: visible;">{{ $nombcoment }}</h3>
                        <p>commentaires</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-4">
                        <h3 class="counter text-primary" style="visibility: visible;">152</h3>
                        <p>Spectateurs en ligne</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>

<section id="snippet-3 " class="wrapper bg-light wrapper-border ">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15 ">
        <div class="row ">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto ">
                <h2 class="fs-15 text-uppercase text-primary text-center ">Nos Evénements</h2>
                @if(empty($infoEvent))
                    <h3 class="display-4 mb-6 text-center ">EVENEMENT NON PARTICIPATIF.</h3>
                @else
                    @foreach ($infoEvent as $item)
                        <h3 class="display-4 mb-6 text-center ">{{ $item->titre3 }}</h3>
                    @endforeach
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
                        @if(empty($npEvents))
                            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
                                <h4 class="display-4 mb-6 text-center ">aucun evenement enregistrer</h4>
                            </div>   
                        @else
                            @foreach ($npEvents as $npEvent)
                                <div class="swiper-slide swiper-slide-active " role="group " aria-label="1 / 4 " style="width: 465px; ">
                                    <div class="item-inner ">
                                        <article>
                                            <div class="card ">
                                                <figure class="card-img-top overlay overlay-1 hover-scale ">
                                                    <a href="{{ route('detail-evenement',$npEvent->id) }}"> <img src="{{asset('/app/evenement/'.$npEvent->image_principal)}}" alt=" "><span class="bg "></span></a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Lire plus</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="card-body ">
                                                    <div class="post-header ">
                                                        <div class="post-category text-line ">
                                                            <a href="{{ route('detail-evenement', $npEvent->id) }}" class="hover " rel="category ">Evénement non Participatif</a>
                                                        </div>
                                                        <!-- /.post-category -->
                                                        <h2 class="post-title h3 mt-1 mb-3 "><a class="link-dark " href="{{ route('detail-evenement',$npEvent->id) }}">{{ $npEvent->titres }}</a></h2>
                                                    </div>
                                                    <!-- /.post-header -->
                                                    <div class="post-content ">
                                                        <p>{{ $npEvent->libelet1a }}</p>
                                                    </div>
                                                    <!-- /.post-content -->
                                                </div>
                                                <!--/.card-body -->
                                                <div class="card-footer ">
                                                    <ul class="post-meta d-flex mb-0 ">
                                                        <li class="post-date "><i class="uil uil-calendar-alt "></i><span>{{ $npEvent->created_at->format('d') }} {{ $npEvent->created_at->format('M') }} {{ $npEvent->created_at->format('Y') }}</span></li>
                                                        <li class="post-comments "><a href="# "><i class="uil uil-comment "></i></a></li>
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
                        @endif
                        <!--/.swiper-slide -->
                    </div>
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.position-relative -->


        <div class="row ">
            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto ">
                <h6 class=" mb-6 text-center ">EVENEMENT PARTICIPATIF.</h6>
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

                        @foreach ($evenementParticipatif as $item)
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
                                                <li class="post-date "><i class="uil uil-calendar-alt "></i><span>{{$item->created_at}}</span></li>
                                                <li class="post-comments "><a href="# "><i class="uil uil-comment "></i>xx</a></li>
                                                <li class="post-likes ms-auto ">
                                                    <a href="{{route('participer',$item->id)}}"><button style="background-color: #3f78e0;" class="text-white">Participer</button></a>
                                                    
                                                </li>
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
        <nav class="d-flex" aria-label="pagination">
            {{$evenementParticipatif->links()}}
            <!-- /.pagination -->
        </nav>
        <!-- /.position-relative -->
    </div>
</section>
@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection