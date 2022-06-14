@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<!-- /content section -->
<section class="wrapper bg-dark text-white mb-15">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-10 mx-auto">
                @if (empty($infoContactes))
                    <h1 class="display-1 mb-3 text-blue">
                        Contactez-nous
                    </h1>
                    <p class="lead px-lg-5 px-xxl-8">
                        Pour toute information supplémentaires veuillez vous referer à ce contenu pour nous joindre d'une manière où d'une autre.
                    </p>
                @else
                    @foreach ($infoContactes as $infoContacte)
                        <h1 class="display-1 mb-3 text-blue">
                            {{ $infoContacte->titre_page }}
                        </h1>
                        <p class="lead px-lg-5 px-xxl-8">
                            {{ $infoContacte->libelet_page }}
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
<!-- /section -->
<section class="wrapper bg-light angled upper-end">
    <div class="container pb-11">
        <div class="row mb-14 mb-md-16">
            <div class="col-xl-10 mx-auto mt-n19">
                <div class="card">
                    <div class="row gx-0">
                        @if(empty($infoplateformes))
                            <div class="col-lg-6 align-self-stretch">
                                <div class="map map-full rounded-top rounded-lg-start">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25387.23478654725!2d-122.06115399490332!3d37.309248660190086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb4571bd377ab%3A0x394d3fe1a3e178b4!2sCupertino%2C%20CA%2C%20USA!5e0!3m2!1sen!2str!4v1645437305701!5m2!1sen!2str"
                                        style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                </div>
                                <!-- /.map -->
                            </div>
                            <!--/column -->
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-14">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                            </div>
                                             <div class="align-self-start justify-content-start">
                                                <h5 class="mb-1">Addresse</h5>
                                                <address>Ouest St. 11245 Batie2, <br class="d-none d-md-block" />Cameroun, Nwanyepote2</address>
                                            </div>
                                        </div>
                                        <!--/div -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Phone</h5>
                                                <p>01 697 32 09 74 <br />00 697 32 09 74</p>
                                            </div>
                                        </div>
                                        <!--/div -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">E-mail</h5>
                                                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">info@Nwanyepote.com</a></p>
                                                <p class="mb-0"><a href="mailto:help@sandbox.com" class="link-body">contact@Nwanyepote.com</a></p>
                                            </div>
                                        </div>
                                        <!--/div -->
                                    </div>
                                    <!--/div -->
                                </div>
                        @else
                            @foreach ($infoplateformes as $infoplateforme)
                                <div class="col-lg-6 align-self-stretch">
                                    <div class="map map-full rounded-top rounded-lg-start">
                                        <iframe src="{{ $infoplateforme->instagramme }}"
                                            style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                    </div>
                                    <!-- /.map -->
                                </div>
                            <!--/column -->
                                <div class="col-lg-6">
                                    <div class="p-10 p-md-11 p-lg-14">
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                                            </div>
                                            <div class="align-self-start justify-content-start">
                                                <h5 class="mb-1">Addresse</h5>
                                                <address>{{ $infoplateforme->adresse1 }}, <br class="d-none d-md-block" />{{ $infoplateforme->adresse2 }}</address>
                                            </div>
                                        </div>
                                        <!--/div -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">Phone</h5>
                                                <p>{{ $infoplateforme->numero1 }} <br />{{ $infoplateforme->numero2 }}</p>
                                            </div>
                                        </div>
                                        <!--/div -->
                                        <div class="d-flex flex-row">
                                            <div>
                                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                                            </div>
                                            <div>
                                                <h5 class="mb-1">E-mail</h5>
                                                <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">{{ $infoplateforme->email1 }}</a></p>
                                                <p class="mb-0"><a href="mailto:help@sandbox.com" class="link-body">{{ $infoplateforme->email2 }}</a></p>
                                            </div>
                                        </div>
                                        <!--/div -->
                                    </div>
                                    <!--/div -->
                                </div>
                            @endforeach
                        @endif
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
        <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
            @if(empty($infoContactes))
                <h2 class="display-4 mb-3 text-center">Laisser nous un message</h2>
                <p class="lead text-center mb-10">Ecrivez nous ici et nous vous reviendrons le plus tôt possible.</p>                
            @else
                @foreach ($infoContactes as $infoContacte)
                    <h2 class="display-4 mb-3 text-center">{{ $infoContacte->titre_formulaire }}</h2>
                    <p class="lead text-center mb-10">{{ $infoContacte->libelet_formulaire }}</p>
                @endforeach
            @endif
        @livewire('contact-message')
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