@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<!-- /content section -->
<section class="wrapper bg-dark">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-9 col-lg-7 col-xl-7 mx-auto">
                @foreach ($infoGaleries as $infoGalerie)
                <h1 class="display-1 mb-3  text-blue">{{ $infoGalerie->titre }}
                </h1>
                <p class="lead px-xxl-10 text-white">
                    {{ $infoGalerie->libelet }}
                </p>
                @endforeach
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->



<section id="snippet-3" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="projects-tiles">
            <div class="project grid grid-view">
                <div class="row gx-md-8 gx-xl-12 gy-10 gy-md-12 isotope" style="position: relative; height: 1258.31px;">
                    <div class="item col-md-6 mt-md-7 mt-lg-15" style="position: absolute; left: 0%; top: 0px;">
                        <div class="project-details d-flex justify-content-center align-self-end flex-column ps-0 pb-0">
                            <div class="post-header">
                                @foreach ($infoGaleries as $infoGalerie)
                                    <h2 class="display-4 mb-4 pe-xxl-15">{{ $infoGalerie->titreb1 }}</h2>
                                    <p class="lead fs-lg mb-0">{{ $infoGalerie->libeletb1 }}</p>
                                @endforeach
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    @foreach ($galeries as $galerie)
                        <div class="item col-md-6" style="position: absolute; left: 50%; top: 0px;">
                            <figure class="lift rounded mb-6">
                                <a href="#"> <img src="app/galeries/{{$galerie->image}}" srcset="app/galeries/{{$galerie->image}} 2x" alt=""></a>
                            </figure>
                            <div class="post-category text-line mb-3 text-violet">{{ $galerie->type }}</div>
                            <h2 class="post-title h3">{{ $galerie->libelet }}</h2>
                        </div>
                    @endforeach
                </div>
                <!-- /.row -->
            </div>
            <!-- /.project -->
        </div>
        <!-- /.projects-tiles -->
    </div>
</section>
<!-- /section -->


<section id="snippet-8" class="wrapper bg-light wrapper-border">
    <div class="container py-14 py-md-16">
        <div class="row">
            <div class="col-lg-11 col-xl-10 mx-auto mb-10">
                @foreach ($infoGaleries as $infoGalerie)
                    <h2 class="fs-16 text-uppercase text-muted text-center mb-3">{{ $infoGalerie->texteb2 }}</h2>
                    <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">{{ $infoGalerie->titreb2 }}</h3>
                @endforeach
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <section class="wrapper bg-light wrapper-border">
            <div class="container py-11">
                <h2 class="h5">Filtres :
                </h2>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Tous
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Batié
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Culture
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Tradition
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Contact
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            La Falaise
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            FAQ
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Caractéristiques
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Sport
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Héros
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Divers
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Acteur
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded text-primary pe-none">
                            Tradition
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Col Batié
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Traiter
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Équipe
                        </a>
                    </li>
                    <li class="list-inline-item me-1 mb-2">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded ">
                            Star
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->


        <div class="grid grid-view projects-masonry">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope" style="position: relative; height: 1230.84px;">
                <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 0px;">
                    <figure class="rounded mb-6"><img src="assets/img/photos/5.jpg" srcset="../../assets/img/photos/5.jpg 2x" alt="">
                        <a class="item-link" href="assets/img/photos/5.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                    </figure>
                    <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Cras Fermentum Sem</a></h2>
                            <div class="post-category text-ash">Culturel</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.item -->
                <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 0px;">
                    <figure class="rounded mb-6"><img src="assets/img/photos/8.jpg" srcset="../../assets/img/photos/8.jpg 2x" alt="">
                        <a class="item-link" href="assets/img/photos/8.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                    </figure>
                    <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Mollis Ipsum Mattis</a></h2>
                            <div class="post-category text-ash">Magazine</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.item -->
                <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 66.6667%; top: 0px;">
                    <figure class="rounded mb-6"><img src="assets/img/photos/9.jpg" srcset="../../assets/img/photos/9.jpg 2x" alt="">
                        <a class="item-link" href="assets/img/photos/9.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                    </figure>
                    <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Ipsum Ultricies Cursus</a></h2>
                            <div class="post-category text-ash">Traditionnel</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.item -->
                <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 615.422px;">
                    <figure class="rounded mb-6"><img src="assets/img/photos/10.jpg" srcset="../../assets/img/photos/10.jpg 2x" alt="">
                        <a class="item-link" href="assets/img/photos/10.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                    </figure>
                    <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Inceptos Euismod Egestas</a></h2>
                            <div class="post-category text-ash">Sport</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.item -->
                <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 615.422px;">
                    <figure class="rounded mb-6"><img src="assets/img/photos/11.jpg" srcset="../../assets/img/photos/11.jpg 2x" alt="">
                        <a class="item-link" href="assets/img/photos/11.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                    </figure>
                    <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Ipsum Mollis Vulputate</a></h2>
                            <div class="post-category text-ash">autres</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.item -->
                <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 66.6667%; top: 615.422px;">
                    <figure class="rounded mb-6"><img src="assets/img/photos/12.jpg" srcset="../../assets/img/photos/12.jpg 2x" alt="">
                        <a class="item-link" href="assets/img/photos/12.jpg" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                    </figure>
                    <div class="project-details d-flex justify-content-center flex-column">
                        <div class="post-header">
                            <h2 class="post-title h3 fs-22"><a href="single-project3.html" class="link-dark">Porta Ornare Cras</a></h2>
                            <div class="post-category text-ash">Loisir</div>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.item -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.grid -->
        <div class="text-center mt-10">
            <a href="#" class="btn btn-lg btn-primary rounded-pill">Voir Plus</a>
        </div>
    </div>
</section>
<!-- /section -->
<!-- /end content section -->


@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection