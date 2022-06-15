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
                @if(empty($infoGaleries))
                    <h1 class="display-1 mb-3  text-blue">Galerie Photo
                    </h1>
                    <p class="lead px-xxl-10 text-white">
                        Nous vous proposons de vous plonger dans notre immensité culturele à travers une panoplie de visuel que nous vous proposons
                    </p>
                @else
                    @foreach ($infoGaleries as $infoGalerie)
                    <h1 class="display-1 mb-3  text-blue">{{ $infoGalerie->titre }}
                    </h1>
                    <p class="lead px-xxl-10 text-white">
                        {{ $infoGalerie->libelet }}
                    </p>
                    @endforeach
                @endif
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
                                @if(empty($infoGaleries))
                                    <h2 class="display-4 mb-4 pe-xxl-15">Nos Meilleures photos. Les plus regardées par nos visiteurs</h2>
                                    <p class="lead fs-lg mb-0">Des idées traditionnelement réalisées selon nos cultures.</p>
                                @else
                                    @foreach ($infoGaleries as $infoGalerie)
                                        <h2 class="display-4 mb-4 pe-xxl-15">{{ $infoGalerie->titreb1 }}</h2>
                                        <p class="lead fs-lg mb-0">{{ $infoGalerie->libeletb1 }}</p>
                                    @endforeach
                                @endif
                            </div>
                            <!-- /.post-header -->
                        </div>
                        <!-- /.project-details -->
                    </div>
                    <!-- /.item -->
                    @if (empty($galeries))
                        <div class="item col-md-6" style="position: absolute; left: 50%; top: 0px;">
                                <figure class="lift rounded mb-6">
                                    <a href="#"> <img src="./assets/img/photos/7.jpg" srcset="./assets/img/photos/7.jpg 2x" alt=""></a>
                                </figure>
                                <div class="post-category text-line mb-3 text-violet">TRADITIONEL</div>
                                <h2 class="post-title h3">volontaire de crabe</h2>
                        </div>
                        <div class="item col-md-6" style="position: absolute; left: 50%; top: 0px;">
                                <figure class="lift rounded mb-6">
                                    <a href="#"> <img src="./assets/img/photos/11.jpg" srcset="./assets/img/photos/11.jpg 2x" alt=""></a>
                                </figure>
                                <div class="post-category text-line mb-3 text-violet">CULTUREL</div>
                                <h2 class="post-title h3">Volontaire de crabe</h2>
                        </div>
                    @else
                        @foreach ($galeries as $galerie)
                            <div class="item col-md-6" style="position: absolute; left: 50%; top: 0px;">
                                <figure class="lift rounded mb-6">
                                    <div>
                                        <a href="#"> <img src="app/galeries/{{$galerie->image}}" srcset="app/galeries/{{$galerie->image}} 2x" alt="img"></a>
                                    </div>
                                </figure>
                                <div class="post-category text-line mb-3 text-violet">{{ $galerie->type }}</div>
                                <h2 class="post-title h3">{{ $galerie->libelet }}</h2>
                            </div>
                        @endforeach
                    @endif
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
                @if(empty($infoGaleries))
                    <h2 class="fs-16 text-uppercase text-muted text-center mb-3">QUELQUES PHOTOS</h2>
                    <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">Des disigns purements Bamiléké du village Batié.</h3>
                @else
                    @foreach ($infoGaleries as $infoGalerie)
                        <h2 class="fs-16 text-uppercase text-muted text-center mb-3">{{ $infoGalerie->texteb2 }}</h2>
                        <h3 class="display-3 text-center px-lg-5 px-xl-10 px-xxl-16 mb-0">{{ $infoGalerie->titreb2 }}</h3>
                    @endforeach
                @endif
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        @livewire('galerie-filtre')

    </div>
</section>
<!-- /section -->
<!-- /end content section -->


@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection