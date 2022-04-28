@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<section class="wrapper bg-dark">
    <div class="container py-12 py-md-16 text-center">
        <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
                <h1 class="display-1 mb-1 text-blue">FAQ.</h1>
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
                <h2 class="mb-3 text-center">Frequently Asked Questions</h2>
                <p class="lead mb-5 text-center">Si vous ne voyer pas de reponse a votre question ici, s'il vous plais contacter nous en suivent le lien:</p>
                <a href="{{route('contact')}}" class="mx-auto btn btn-primary rounded-pill me-2">Formulaire De Contact</a>
                <div class="accordion accordion-wrapper mt-10" id="accordion">
                    <div class="card accordion-item">
                        <div class="card-header" id="faq-0">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"> quel est la superfici du village Batie?
                                </button>
                        </div>
                        <!--/.card-header -->
                        <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                            <div class="card-body">
                                <p>Dans le pays Bamiléké au Cameroun, l’un des signes qui montrent au voyageur qu’il est aux abords du palais royal ou de la concession d’un grand notable c’est souvent une immense forêt manifestement bien entretenue.
                                    On y voit de grands arbres.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card accordion-item">
                        <div class="card-header" id="faq-1">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"> quel son les elemt qui constitu le relief du peuple batie? </button>
                        </div>
                        <!--/.card-header -->
                        <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                            <div class="card-body">
                                <p>Dans le pays Bamiléké au Cameroun, l’un des signes qui montrent au voyageur qu’il est aux abords du palais royal ou de la concession d’un grand notable c’est souvent une immense forêt manifestement bien entretenue.
                                    On y voit de grands arbres.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card accordion-item">
                        <div class="card-header" id="faq-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"> d'ou vien le peuple Batie ?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                            <div class="card-body">
                                <p>
                                    Dans le pays Bamiléké au Cameroun, l’un des signes qui montrent au voyageur qu’il est aux abords du palais royal ou de la concession d’un grand notable c’est souvent une immense forêt manifestement bien entretenue. On y voit de grands arbres
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card accordion-item">
                        <div class="card-header" id="faq-6">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6">quel est la provenance du peuple Batie?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                            <div class="card-body">
                                <p>
                                    Dans le pays Bamiléké au Cameroun, l’un des signes qui montrent au voyageur qu’il est aux abords du palais royal ou de la concession d’un grand notable c’est souvent une immense forêt manifestement bien entretenue. On y voit de grands arbres
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card accordion-item">
                        <div class="card-header" id="faq-3">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"> quel son les caracteristiques du Mont metchou? </button>
                        </div>
                        <!--/.card-header -->
                        <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                            <div class="card-body">
                                <p>Dans le pays Bamiléké au Cameroun, l’un des signes qui montrent au voyageur qu’il est aux abords du palais royal ou de la concession d’un grand notable c’est souvent une immense forêt manifestement bien entretenue.
                                    On y voit de grands arbres.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
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