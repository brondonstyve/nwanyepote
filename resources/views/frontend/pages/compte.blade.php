@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

 <!-- /content section -->
 <section class="mx-auto m-5 text-center">
    @livewire('compte-user')
    <div class="container py-14 py-md-16">
        <div class="row mb-10">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">{{ $nomb_participation }}</h3>
                        <p>Participation evenement</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/growth.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">{{ $nomb_event }}</h3>
                        <p>Evenement en cour</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/shopping-cart.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">{{ $nomb_commande }}</h3>
                        <p>Commande en cour</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">{{ $com_livrer }}</h3>
                        <p>Commande livrer</p>
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection