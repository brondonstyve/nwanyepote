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
                            Détail d'événement participatif
                        </a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4  text-white">
                        {{$evenement->titre}}
                    </h1>
                    <ul class="post-meta mb-5">
                        <li class="post-date"><i
                                class="uil uil-calendar-alt"></i><span>{{$evenement->created_at}}</span></li>
                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Par
                                    {{$evenement->auteur}}</span></a></li>
                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>{{$nbComment}}
                                <span>commentaires</span></a></li>
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
<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row  mx-auto">
            <div class="mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <div class="card-body">
                            <div class="classic-view">
                                <article class="post">

                                    <article class="post">

                                        @for ($i = 1; $i < 6; $i++) @php $titre="titre$i" ; $articl="article$i" ;
                                            $image="image$i" ; $video="video$i" ; @endphp @if ($evenement->titre1)
                                            <div class="post-content mb-5">
                                                <h2 class="h1 mb-4">{{$evenement->$titre}}</h2>
                                                <p>
                                                    {!!$evenement->$articl!!}
                                                </p>

                                                @if ($evenement->$image)
                                                <div class="row g-6 mt-3 mb-10">
                                                    @foreach (explode('<-->',$evenement->$image) as $item)
                                                        @if ($item!=null)
                                                        <div class="col-md-6">
                                                            <figure class="hover-scale rounded cursor-dark"
                                                                style="max-height: 300Px">
                                                                <a href="{{asset("app/evenementparticipatif/$item")}}"
                                                                    data-glightbox="title: Image; description: image d'article"
                                                                    data-gallery="post"> <img src="{{asset("app/evenementparticipatif/$item")}}"
                                                                        alt="" /></a>
                                                            </figure>
                                                        </div>
                                                        <!--/column -->
                                                        @endif

                                                        @endforeach
                                                </div>

                                                @if ($evenement->$video)
                                                <p>Video relative à l'article</p>
                                                <div class="col-md-12 col-lg-7 position-relative mx-auto">
                                                    <a href="{{$evenement->$video}}"
                                                        class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"
                                                        style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"
                                                        data-glightbox><i class="icn-caret-right"></i></a>
                                                    <div class="shape rounded bg-soft-primary rellax d-md-block"
                                                        data-rellax-speed="0"
                                                        style="bottom: -1.8rem; right: -1.5rem; width: 85%; height: 90%; ">
                                                    </div>
                                                    <figure class="rounded"><img src="{{asset("app/evenementparticipatif/$evenement->image")}}" alt="">
                                                    </figure>
                                                </div>
                                                @endif

                                                @endif


                                            </div>
                                            <!-- /.post-content -->
                                            @endif
                                            @endfor
                                    </article>
                                    <!-- /.post -->

                                </article>
                                <!-- /.post -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.classic-view -->
@livewire('liste-participant-vote', ['id' => $evenement->id])

<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16">
        <div class="row  mx-auto">
            <div class="mx-auto">
                <div class="blog single mt-n17">
                    <div class="card">
                        <div class="card-body">
                            <hr>
                            <div class="author-info d-md-flex align-items-center mb-3 col-md-10 mx-auto">
                                <div class="d-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{asset("assets/img/logo.jpg")}}"></figure>
                                    <div>
                                        <h6><a href="#" class="link-dark">{{$evenement->auteur}}</a></h6>
                                        <span class="post-meta fs-15">Directeur de publications</span>
                                    </div>
                                </div>

                                <div class="mt-3 mt-md-0 ms-auto">
                                    <a href="{{route('evenement')}}"
                                        class="btn btn-sm btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0"><i
                                            class="uil uil-file-alt"></i> Tous les événements</a>
                                </div>
                            </div>
                            <!-- /.author-info -->
                            <p class="col-md-10 mx-auto">{{$evenement->desc_auteur}}</p>


                            <hr>
                            <div class="col-md-8 align-self-center text-center text-md-start navigation">
                                @if ($precedent)
                                <a href="{{route('detail-evenement-participatif',$precedent->id)}}" class="btn btn-sm
                                    btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 me-1"><i
                                        class="uil uil-arrow-left"></i>Evénement Précédent</a>
                                @endif

                                @if ($suivant)
                                <a href="{{route('detail-evenement-participatif',$suivant->id)}}" class="btn btn-sm
                                    btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0">Evénement Suivant <i
                                        class="uil uil-arrow-right"></i></a>
                                @endif
                            </div>

                            <hr>
                            @livewire('commentaire-evenement-participatif', ['idA' => $evenement->id])

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
<!-- /end content section -->



@endsection

@section('js_footer')
{{-- ajouter du js spécifique à la page --}}

@endsection