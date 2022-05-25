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
                <h1 class="display-1 mb-1 text-blue">FAQ.</h1>
                @endif
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">

            <section id="snippet-1" class="wrapper py-1">
                @if ($infosPage)
                <h2 class="mb-3 text-center">{{$infosPage->titre2}}</h2>
                <p class="lead mb-5 text-center">{{$infosPage->description2}}</p>
                @else
                <h2 class="mb-3 text-center">Frequently Asked Questions</h2>
                <p class="lead mb-5 text-center">Si vous ne voyer pas de reponse a votre question ici, s'il vous plais contacter nous en suivent le lien:</p>

                @endif
                
                <a href="{{route('contact')}}" class="mx-auto btn btn-primary rounded-pill me-2">Formulaire De Contact</a>


                <div class="accordion accordion-wrapper mt-10" id="accordion">


                    @foreach ($faq as $i=>$item)
                    <div class="card accordion-item">
                        <div class="card-header" id="faq-{{$i}}">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-{{$i}}" aria-expanded="true" aria-controls="faq-collapse-{{$i}}"> {{$item->question}}
                                </button>
                        </div>
                        <!--/.card-header -->
                        <div id="faq-collapse-{{$i}}" class="accordion-collapse collapse" aria-labelledby="faq-{{$i}}">
                            <div class="card-body">
                                <p>
                                    {{$item->reponse}}
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    @endforeach
                    
                    
                </div>

        </div>
        <!--/.row -->
        <div class="row mb-5">

        </div>
        <!-- /.row -->
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

            <!--/column -->

            <!--/column -->
        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->
    </section>
    <!-- /.container -->


@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection