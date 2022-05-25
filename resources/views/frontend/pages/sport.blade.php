@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<section class="wrapper bg-dark">
    <div class="container py-12 py-md-16 text-center">
        <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
                @if ($infosPage)
                <h1 class="display-1 mb-3 text-blue">{{$infosPage->titre1}}</h1>
                <p class="lead fs-lg px-lg-10 px-xxl-8 text-white">{{$infosPage->description1}}</p>
                @else
                <h1 class="display-1 mb-3 text-blue">Sport</h1>
                <p class="lead fs-lg px-lg-10 px-xxl-8 text-white">Tous a propos des activiters sportives du peuple batie.</p>
                @endif
                
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
@if ($contenuSport)
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row mt-6">
            <div class="col-xl-10 mx-auto">
                <div class="projects-tiles">
                   
                   @foreach ($contenuSport as $i=>$item)
                   <div class="project grid grid-view">
                    <div class="row g-6 isotope">
                        <div class="item col-md-6">
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <div class="post-category text-red mb-3">{{$item->auteur}}</div>
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
                                ... <br> <a href="#!"><span class="badge bg-primary rounded-0 accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">Lire Plus</span></a>
                                @endif
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!-- /.item -->
                        @foreach (array_reverse(explode('<-->',$item->image)) as $item)
                            @if ($item)
                            <div class="item col-md-6">
                                <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                    <a href="{{asset('app/sport/'.$item)}}" data-glightbox="title: Cursus Inceptos Sit" data-gallery="project-1"> <img src="{{asset('app/sport/'.$item)}}" alt="" /></a>
                                </figure>
                            </div>
                            @endif
                        @endforeach
                        
                        <!-- /.item -->
                        
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.project -->
                   @endforeach

                </div>
                <!-- /.projects-tiles -->
            </div>
            <nav class="d-flex justify-content-center" aria-label="pagination">
                {{$contenuSport->links()}}
                <!-- /.pagination -->
            </nav>
            <!-- /column -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

   
</section>
<!-- /section -->
@endif

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection