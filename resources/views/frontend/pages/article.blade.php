
@extends('frontend.base.base', ['title' => 'Nwanyepote'] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<!-- /content section -->
<section class="wrapper bg-dark text-white">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
            <div class="col-md-7 col-lg-6 col-xl-10 mx-auto">
                @if ($infosPage)
                <h1 class="display-1 mb-3 text-blue">
                    {{$infosPage->titre1}}
                </h1>
                <p class="lead px-xxl-10 text-white">
                    {{$infosPage->description1}}    
                </p>
                @else
                <h1 class="display-1 mb-3 text-blue">
                    Actualité De Chez Nwanyepote
                </h1>
                <p class="lead px-lg-5 px-xxl-8">
                    Bienvenue dans notre revue. Ici vous pouvez trouver les dernières nouvelles dans tous les aspects concernant Batié de l'Ouest Cameroun.
                </p>
                @endif
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->


@livewire('page-article-fronf',['infosPage'=>$infosPage])

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection