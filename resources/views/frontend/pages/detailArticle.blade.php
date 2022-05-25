@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<!-- /content section -->
<section class="wrapper image-wrapper bg-dark bg-overlay text-white">
    <div class="container pt-17 pb-13 pt-md-19 pb-md-17 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line text-white">

                        <a href="#" class="text-reset" rel="category">{{$article->domaine}}</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4 text-blue">{{$article->titre}}</h1>

                    <ul class="post-meta text-white">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$article->created_at}}</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><a href="#" class="text-reset"><span>{{$article->auteur}}</span></a></li>
                        <li class="post-comments"><i class="uil uil-comment"></i><a href="#" class="text-reset">{{$nbComment}}<span> Commentaires</span></a></li>
                        <li class="post-likes"><i class="uil uil-heart-alt"></i><a href="#" class="text-reset">3<span> J'aime</span></a></li>
                    </ul>
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
<section class="wrapper bg-light wrapper-border">
    <div class="container inner py-8">
        <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
            <div class="col-md-8 align-self-center text-center text-md-start navigation">
                @if ($precedent)
                     <a href="{{route("detail-article",$precedent->id)}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i class="uil uil-arrow-left"></i> Précédent</a> 
                @endif

                @if ($suivant)
                    <a href="{{route("detail-article",$suivant->id)}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">Suivant <i class="uil uil-arrow-right"></i></a>
                @endif
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
        <div class="row gx-lg-8 gx-xl-12">
            <div class="col-lg-8 order-lg-2">
                <div class="blog single">
                    <div class="card">
                        <figure class="card-img-top"><img src="{{asset("app/article/$article->image")}}" alt=""></figure>
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">
                                    
                                    @for ($i = 1; $i < 6; $i++)
                                    @php
                                        $titre="titre$i";
                                        $articl="article$i";
                                        $image="image$i";
                                        $video="video$i";
                                    @endphp
                                        @if ($article->titre1)
                                        <div class="post-content mb-5">
                                            <h2 class="h1 mb-4">{{$article->$titre}}</h2>
                                            <p>
                                                {!!$article->$articl!!}
                                            </p>
    
                                                @if ($article->$image)
                                                <div class="row g-6 mt-3 mb-10">
                                                    @foreach (explode('<-->',$article->$image) as $item)
                                                        @if ($item!=null)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark">
                                                                <a href="{{asset("app/article/$item")}}" data-glightbox="title: Image; description: image d'article" data-gallery="post"> <img src="{{asset("app/article/$item")}}" alt="" /></a>
                                                            </figure>
                                                        </div>
                                                        <!--/column -->
                                                        @endif
                                                        
                                                    @endforeach
                                                </div>

                                                @if ($article->$video)
                                                <p>Video relative à l'article</p>
                                                  <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$article->$video}}"></div>
                                                @endif
                                                
                                                @endif

    
                                        </div>
                                        <!-- /.post-content -->
                                        @endif
                                    @endfor
                                </article>
                                <!-- /.post -->
                            </div>
                            <!-- /.classic-view -->
                            <hr>
                            <div class="author-info d-md-flex align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt="" src="assets/img/avatars/t1.jpg"></figure>
                                    <div>
                                        <h6><a href="#" class="link-dark">{{$article->auteur}}</a></h6>
                                        <span class="post-meta fs-15">{{$article->desc_auteur}}</span>
                                    </div>
                                </div>
                                <div class="mt-3 mt-md-0 ms-auto">
                                    <a href="{{route('article')}}" class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-file-alt"></i> Tous les articles</a>
                                </div>
                            </div>
                            <!-- /.author-info -->
                            <hr>
                            <h3 class="mb-6">Vous pourriez aussi aimer</h3>
                            <div class="swiper-container blog grid-view mb-16 swiper-container-0" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-da917bc125d97111" aria-live="off" style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                                    
                                        @foreach ($aimer as $item)
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 4" style="width: 343.5px; margin-right: 30px;">
                                            <article>
                                                <figure class="overlay overlay-1 hover-scale rounded mb-5">
                                                    <a href="{{route("detail-article",$item->id)}}"> <img src="{{asset("app/article/$item->image")}}" alt=""><span class="bg"></span></a>
                                                    <figcaption>
                                                        <h5 class="from-top mb-0">Lire Plus</h5>
                                                    </figcaption>
                                                </figure>
                                                <div class="post-header">
                                                    <div class="post-category text-line">
                                                        <a href="{{route("detail-article",$item->id)}}" class="hover" rel="category">{{$item->domaine}}
                                                        </a>
                                                    </div>
                                                    <!-- /.post-category -->
                                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route("detail-article",$item->id)}}">{{$item->titre}}</a></h2>
                                                </div>
                                                <!-- /.post-header -->
                                                <div class="post-footer">
                                                    <ul class="post-meta mb-0">
                                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$item->created_at}}</span></li>
                                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                                    </ul>
                                                    <!-- /.post-meta -->
                                                </div>
                                                <!-- /.post-footer -->
                                            </article>
                                            <!-- /article -->
                                        </div>
                                        <!--/.swiper-slide -->
                                        @endforeach
                                        


                                    </div>
                                    <!--/.swiper-wrapper -->
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                <!-- /.swiper -->
                                <div class="swiper-controls">
                                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Aller à la diapositive 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0"
                                            role="button" aria-label="Aller à la diapositive 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Aller à la diapositive 3"></span></div>
                                </div>
                            </div>
                            <!-- /.swiper-container -->
                            <hr>
                            @livewire('commentaire-article', ['idA' => $article->id])
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.blog -->
            </div>
            <!-- /column -->
            <aside class="col-lg-4 sidebar mt-11 mt-lg-6">
                <div class="widget">
                    @if ($infosPage)
                    <h4 class="widget-title mb-3">{{$infosPage->titre2}}</h4>
                    <p>
                        {{$infosPage->description2}}
                    </p>
                    @else
                    <h4 class="widget-title mb-3">A propos de nous</h4>
                    <p>ci, la route nationale N 5 reliant Bandjoun à Bafang est fait d'un tracé escarpé et accidentogène. Le paysage offre une vue unique sur les précipices aux bords de la route et sur la chaîne de montagnes qui domine le plateau
                        Bamiléké à Bana.
                    </p>
                    @endif
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
                                <a href="./detailblog.html"><img src="assets/img/photos/african-2771095_1920 (copie).jpg" alt="" /></a>
                            </figure>
                            <div class="post-content">
                                <h6 class="mb-2"> <a class="link-dark" href="./detailblog.html">Le col Batie</a> </h6>
                                <ul class="post-meta">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2021</span></li>
                                    <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
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
                        <li><a href="{{route('article')}}">Sport (21)</a></li>
                        <li><a href="{{route('article')}}">Idées (19)</a></li>
                        <li><a href="{{route('article')}}">Champs (16)</a></li>
                        <li><a href="{{route('article')}}">Cultures (7)</a></li>
                        <li><a href="{{route('article')}}">Traditions (12)</a></li>
                        <li><a href="{{route('article')}}">Business (14)</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Tags</h4>
                    <ul class="list-unstyled tag-list">
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Vie Urbaine</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Religion</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Culture</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Sport</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">transport</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Ventes</a></li>
                        <li><a href="{{route('article')}}" class="btn btn-soft-ash btn-sm rounded-pill">Photographie</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
                <div class="widget">
                    <h4 class="widget-title mb-3">Archive</h4>
                    <ul class="unordered-list bullet-primary text-reset">
                        <li><a href="{{route('article')}}">February 2019</a></li>
                        <li><a href="{{route('article')}}">January 2019</a></li>
                        <li><a href="{{route('article')}}">December 2018</a></li>
                        <li><a href="{{route('article')}}">November 2018</a></li>
                        <li><a href="{{route('article')}}">October 2018</a></li>
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
<!-- /section -->
<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection