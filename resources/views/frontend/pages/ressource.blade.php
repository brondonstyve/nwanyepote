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
                <h1 class="display-1 mb-3 text-blue">
                    Ressources
                </h1>
                <p class="lead px-xxl-10 text-white">
                    Ici vous avez accès à des liens externes vers d'autres pages ou site qui peuvent vous aider dans le but de vous documenter sur le peuple Batie.
                </p>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<section id="snippet-1" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row gx-lg-8 gx-xl-12 gy-10">
            <div class="col-lg-6">
                <figure><img class="w-auto" src="{{asset('assets/img/photos/i5.png')}}" srcset="{{asset('assets/img/photos/i5.png')}}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                <h2 class="display-4 mb-3">
                    Fonctionnement
                </h2>
                <p class="lead fs-lg mb-6 pe-xxl-10">
                    Si vous ne voyez pas <span class="underline">de ressources à votre questionnement</span> , vous pouvez nous envoyer un email depuis notre formulaire de contact.
                </p>
                <div class="accordion accordion-wrapper" id="accordionExample-2">
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingOne-2">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">Puis-je être redirigé vers les résaux sociaux ?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseOne-2" class="accordion-collapse collapse show" aria-labelledby="headingOne-2" data-bs-parent="#accordionExample-2">
                            <div class="card-body">
                                <p>
                                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. C'est un grand avantage bien sûr non plus.
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingTwo-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo-2" aria-expanded="false" aria-controls="collapseTwo-2">Quels modes de fonctionnement est utilisé ?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseTwo-2" class="accordion-collapse collapse" aria-labelledby="headingTwo-2" data-bs-parent="#accordionExample-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    <div class="card plain accordion-item">
                        <div class="card-header" id="headingThree-2">
                            <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree-2" aria-expanded="false" aria-controls="collapseThree-2">Comment puis-je gérer mon les sauvegardes de ces ressources&nbsp;?</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapseThree-2" class="accordion-collapse collapse" aria-labelledby="headingThree-2" data-bs-parent="#accordionExample-2">
                            <div class="card-body">
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                </div>
                <!--/.accordion -->
            </div>
            <!--/column -->
        </div>
        <!--/.row -->
    </div>
</section>


<section id="snippet-5" class="wrapper bg-light wrapper-border">
    <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
        <div class="row gx-md-8 gx-xl-12 gy-10">

            <p class="lead text-center mb-10 px-md-16 px-lg-0">
                Cliquez sur l'élément qui vous intéresse et vous seriez redirigé vers la page correspondante.
            </p>

            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Batié pendant la guerre coloniale
                        </h4>
                        <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Même la porte est une grande grille de doux souvenirs.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Pourquoi retrouve t'on assez de pierre à batié ?
                        </h4>
                        <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Même la porte est une grande grille de doux souvenirs.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Les élites de Batié, engendre t'il le developpement rural&nbsp;?
                        </h4>
                        <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Même la porte est une grande grille de doux souvenirs.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /column -->
            <div class="col-lg-6">
                <div class="d-flex flex-row">
                    <div>
                        <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                    </div>
                    <div>
                        <h4>Comment faire de Batie une Zone touristique Camerounaise à 100% ?
                        </h4>
                        <p class="mb-0">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Même la porte est une grande grille de doux souvenirs.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /end content section -->


@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection