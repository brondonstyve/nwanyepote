@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<section class="wrapper bg-dark">
    <div class="container pt-10 pt-md-14 text-center">
        <div class="row">
            <div class="col-md-8 col-lg-7 col-xl-6 col-xxl-5 mx-auto">
                @if ($infosPage)
                <h1 class="display-1 mb-3 text-blue">{{$infosPage->titre1}}</h1>
                <p class="lead fs-lg px-lg-10 px-xxl-8 text-white">{{$infosPage->description1}}</p>
                @else
                <h1 class="display-1 mb-3 text-blue">Culture</h1>
                <p class="lead fs-lg px-lg-10 px-xxl-8 text-white">Tous a propos de la culture du peuple batie.</p>
                @endif
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->

@if ($contenuCulture)
<section class="wrapper bg-light">
    <div class="container pt-9 pt-md-11 pb-14 pb-md-16">
        <div class="projects-overflow mt-md-10 mb-10 mb-lg-15">


            @foreach ($contenuCulture as $i=>$item)
                
            <div class="project item">
                <div class="row">
                    <figure class="col-lg-8 col-xl-7 offset-xl-1 rounded"> <img src="{{asset('app/culture/'.$item->image)}}" alt="" /></figure>
                    <div class="project-details d-flex justify-content-center flex-column" style="right: 10%; bottom: 25%;">
                        <div class="card shadow rellax" data-rellax-xs-speed="0" data-rellax-mobile-speed="0">
                            <div class="card-body">
                                <div class="post-header">
                                    <h2 class="post-title mb-3">{{$item->libelle}}</h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p class="text-justify">
                                        {{substr($item->description,0,300)}}

                                            @if (strlen($item->description)>300)
                                            <span id="collapse{{$i}}" class="accordion-collapse collapse">
                                                {{substr($item->description,300)}}
                                            </span>
                                            ... <br> <a href="#!"><span
                                                    class="badge bg-primary rounded-0 accordion-button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}"
                                                    aria-expanded="true" aria-controls="collapse{{$i}}">Lire
                                                    Plus</span></a>
                                            @endif
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.project-details -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.project -->
            @endforeach


            

        </div>
        <!-- /.projects-overflow -->
        <nav class="d-flex justify-content-center" aria-label="pagination">
            {{$contenuCulture->links()}}
        </nav>
        <!-- /nav -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@endif



@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection