@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

 <!-- /content section -->
 <section class="wrapper bg-dark">
    <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">
                            Détail d'événement non participatif
                        </a>
                    </div>
                    <!-- /.post-category -->
                    @foreach ($detailEvents as $detailEvent)
                    <h1 class="display-1 mb-4  text-white">
                        {{ $detailEvent->titres }},<br> {{ $detailEvent->edition }}
                    </h1>
                    <ul class="post-meta mb-5">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $detailEvent->created_at->format('d') }} {{ $detailEvent->created_at->format('M') }} {{ $detailEvent->created_at->format('Y') }}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>{{ $detailEvent->directeur_publication }}</span></a></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>{{ $nombcoment }} <span>commentaires</span></a></li>
                        <!--<li class="post-likes"><a href="#"><i class="uil uil-heart-alt"></i>3 <span>J'aime</span></a></li>-->
                    </ul>
                    @endforeach
                    <!-- /.post-meta -->
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        @foreach ($detailEvents as $detailEvent)
                        <figure class="card-img-top"><img src="/app/evenement/{{ $detailEvent->image_principal }}" alt=""></figure>
                        @endforeach
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    @foreach ($detailEvents as $detailEvent)
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $detailEvent->titres1 }}</h2>
                                            @if ($detailEvent->video1)
                                                <p>Video relative à l'article</p>
                                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$detailEvent->video1}}"></div>
                                            @endif 
                                            <p class="pb-14 pb-md-7"></p>
                                            <p>{{ $detailEvent->libelet1a }}</p>
                                            <p>{{ $detailEvent->libelet1b }}</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                <!--/column -->
                                                @foreach(explode('->',$detailEvent->imagenp) as $item)
                                                    @if($item)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark">
                                                                <a href="/app/evenement/{{ $item }}" data-glightbox data-gallery="post"> <img src="/app/evenement/{{ $item }}" alt="" /></a>
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->
                                            <p>{{ $detailEvent->libelet1c }}</p>
                                        </div>
                                    @endforeach
                                    
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <div class="classic-view">
                                <article class="post">
                                    @foreach ($detailEvents as $detailEvent)
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $detailEvent->titres2 }}</h2>
                                            @if ($detailEvent->video2)
                                                <p>Video relative à l'article</p>
                                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$detailEvent->$video2}}"></div>
                                            @endif 
                                            <p>{{ $detailEvent->libelet2a }}</p>
                                            <p>{{ $detailEvent->libelet2b }}</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                <!--/column -->
                                                @foreach(explode('->',$detailEvent->imagenp2) as $item)
                                                    @if($item)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark">
                                                                <a href="/app/evenement/{{ $item }}" data-glightbox data-gallery="post"> <img src="/app/evenement/{{ $item }}" alt="" /></a>
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->
                                            <p>{{ $detailEvent->libelet2c }}</p>
                                        </div>
                                    @endforeach
                                    
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <div class="classic-view">
                                <article class="post">
                                    @foreach ($detailEvents as $detailEvent)
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $detailEvent->titres3 }}</h2>
                                            @if ($detailEvent->video3)
                                                <p>Video relative à l'article</p>
                                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$detailEvent->video3}}"></div>
                                            @endif 
                                            <p>{{ $detailEvent->libelet3a }}</p>
                                            <p>{{ $detailEvent->libelet3b }}</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                <!--/column -->
                                                @foreach(explode('->',$detailEvent->imagenp3) as $item)
                                                    @if($item)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark">
                                                                <a href="/app/evenement/{{ $item }}" data-glightbox data-gallery="post"> <img src="/app/evenement/{{ $item }}" alt="" /></a>
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->
                                            <p>{{ $detailEvent->libelet3c }}</p>
                                        </div>
                                    @endforeach
                                    
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <div class="classic-view">
                                <article class="post">
                                    @foreach ($detailEvents as $detailEvent)
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $detailEvent->titres4 }}</h2>
                                            @if ($detailEvent->video4)
                                                <p>Video relative à l'article</p>
                                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$detailEvent->video4}}"></div>
                                            @endif 
                                            <p>{{ $detailEvent->libelet4a }}</p>
                                            <p>{{ $detailEvent->libelet4b }}</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                <!--/column -->
                                                @foreach(explode('->',$detailEvent->imagenp4) as $item)
                                                    @if($item)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark">
                                                                <a href="/app/evenement/{{ $item }}" data-glightbox data-gallery="post"> <img src="/app/evenement/{{ $item }}" alt="" /></a>
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->
                                            <p>{{ $detailEvent->libelet4c }}</p>
                                        </div>
                                    @endforeach
                                    
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <div class="classic-view">
                                <article class="post">
                                    @foreach ($detailEvents as $detailEvent)
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{ $detailEvent->titres5 }}</h2>
                                            @if ($detailEvent->video5)
                                                <p>Video relative à l'article</p>
                                                <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$detailEvent->video5}}"></div>
                                            @endif      
                                            <p>{{ $detailEvent->libelet5a }}</p>
                                            <p>{{ $detailEvent->libelet5b }}</p>
                                            <div class="row g-6 mt-3 mb-10">
                                                <!--/column -->
                                                @foreach(explode('->',$detailEvent->imagenp5) as $item)
                                                    @if($item)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark">
                                                                <a href="/app/evenement/{{ $item }}" data-glightbox data-gallery="post"> <img src="/app/evenement/{{ $item }}" alt="" /></a>
                                                            </figure>
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!--/column -->
                                            </div>
                                            <!-- /.row -->
                                            <p>{{ $detailEvent->libelet5c }}</p>
                                        </div>
                                    @endforeach
                                    
                                    <!-- /.post-footer -->
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr>
                            @foreach ($detailEvents as $detailEvent)
                            <div class="author-info d-md-flex align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt="" src="/app/evenement/{{$detailEvent->imagedp}}"></figure>
                                    <div>
                                        <h6><a href="#" class="link-dark">{{ $detailEvent->directeur_publication }}</a></h6>
                                        <span class="post-meta fs-15">Directeur de production</span>
                                    </div>
                                </div>
                                <div class="mt-3 mt-md-0 ms-auto">
                                    <a href="#" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> Tous les articles</a>
                                </div>
                            </div>
                            <!-- /.author-info -->
                            <p>{{ $detailEvent->apropoDP }}</p>
                            <!-- /.social -->
                            <hr>
                            @endforeach
                            <!-- /.swiper-container -->
                            <!-- #comments -->
                            @foreach ($detailEvents as $detailEvent)
                                @livewire('commentaire-evenementnp', ['idevent' => ($idevent = $detailEvent->id)])
                            @endforeach
                           
                            <!-- /#comments -->
                            <hr>
                            <h3 class="mb-6">Vous pourriez aussi aimer</h3>
                            <div class="swiper-container blog grid-view mb-16 swiper-container-0" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-da917bc125d97111" aria-live="off" style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 343.5px; margin-right: 30px;">
                                            <article>
                                                <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                                    <a href="#"> <img src="assets/img/photos/african-2771095_1920 (copie).jpg" alt=""><span class="bg"></span></a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Lire Plus</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="post-header">
                                                    <div class="post-category text-line">
                                                        <a href="#" class="hover" rel="category">Business Tips</a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="blog.html">Morbi leo risus porta eget</a></h2>
                                                </div>
                                                <div class="post-footer">
                                                    <ul class="post-meta mb-0">
                                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>7 Jan 2021</span></li>
                                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>2</a></li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /.post-footer -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!--/.swiper-slide -->
                                    </div>
                                    <!--/.swiper-wrapper -->
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                <!-- /.swiper -->
                                <div class="swiper-controls">
                                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Aller à la diapositive 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
                                            role="button" aria-label="Aller à la diapositive 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Aller à la diapositive 3"></span></div>
                                </div>
                            </div>
                            <!-- /.comment-form -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@livewireScripts
<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection