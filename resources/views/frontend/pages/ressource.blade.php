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
                @if ($infosPage)
                <h1 class="display-1 mb-3 text-blue">
                    {{$infosPage->titre1}}
                </h1>
                <p class="lead px-xxl-10 text-white">
                    {{$infosPage->description1}}    
                </p>
                @else
                <h1 class="display-1 mb-3 text-blue">
                    Ressources
                </h1>
                <p class="lead px-xxl-10 text-white">
                    Ici vous avez accès à des liens externes vers d'autres pages ou site qui peuvent vous aider dans le but de vous documenter sur le peuple Batie.
                </p>
                @endif
               
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
                <figure><img class="w-auto" src="{{asset('app/ressources/'.$infosPage->image1)}}" srcset="{{asset('app/ressources/'.$infosPage->image1)}}" alt=""></figure>
            </div>
            <!--/column -->
            <div class="col-lg-6">
                @if ($infosPage)
                <h2 class="display-4 mb-3">
                    {{$infosPage->titre2}}
                </h2>
                <p class="lead fs-lg mb-6 pe-xxl-10">
                    {{$infosPage->description2}}
                </p>
                @else
                <h2 class="display-4 mb-3">
                    Fonctionnement
                </h2>
                <p class="lead fs-lg mb-6 pe-xxl-10">
                    Si vous ne voyez pas <span class="underline">de ressources à votre questionnement</span> , vous pouvez nous envoyer un email depuis notre formulaire de contact.
                </p>
                @endif
                
                <div class="accordion accordion-wrapper" id="accordionExample-2">
                    @if ($infosPage)
                    
                    @for ($i = 1; $i < 4; $i++)
                    @php
                        $question="question$i";
                        $reponse="reponse$i";
                    @endphp
                    <div class="card plain accordion-item">
                        <div class="card-header" id="heading{{$i}}-2">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}-2" aria-expanded="true" aria-controls="collapse{{$i}}-2">{{$infosPage->$question}}</button>
                        </div>
                        <!--/.card-header -->
                        <div id="collapse{{$i}}-2" class="accordion-collapse collapse {{($i==1)? 'show' :''}} " aria-labelledby="heading{{$i}}-2" data-bs-parent="#accordionExample-2">
                            <div class="card-body">
                                <p>
                                    {{$infosPage->$reponse}}
                                </p>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.accordion-collapse -->
                    </div>
                    <!--/.accordion-item -->
                    @endfor
                    
                        
                    @endif
                    
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

            @if ($infosPage)
            <p class="lead text-center mb-10 px-md-16 px-lg-0">
                {{$infosPage->description3}}
            </p>
            @else
            <p class="lead text-center mb-10 px-md-16 px-lg-0">
                Cliquez sur l'élément qui vous intéresse et vous seriez redirigé vers la page correspondante.
            </p>
            @endif
            

            @if ($ressources)
                @foreach ($ressources as $item)
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <div>
                            <span class="icon btn btn-sm btn-circle btn-primary disabled me-5"><i class="uil uil-comment-exclamation"></i></span>
                        </div>
                        <div>
                            <h4>
                               <a href="{{$item->lien}}">{{$item->libelle}}</a> 
                            </h4>
                            <p class="mb-0 text-justify">
                                {{substr($item->description,0,250)}}
                                
                                @if (strlen($item->description)>250)
                                <span id="collapse{{$i}}" class="accordion-collapse collapse">
                                    {{substr($item->description,250)}}
                                </span> 
                                ... <br> <a href="#!"><span class="badge bg-primary rounded-0 accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">Lire Plus</span></a>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /column -->
                @endforeach
            @endif

        </div>
        <!-- /.row -->
    </div>
</section>
<!-- /end content section -->


@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection