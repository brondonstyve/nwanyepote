@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<section class="wrapper bg-dark">
    <div class="container py-12 py-md-16 text-center">
        <div class="row">
            <div class="col-lg-10 col-xxl-8 mx-auto">
                <h1 class="display-1 mb-1 text-blue">Le tourisme a batie.</h1>
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
        <div class="row mt-6">
            <div class="col-xl-10 mx-auto">
                <div class="projects-tiles">
                    <div class="project grid grid-view">
                        <div class="row g-6 isotope">
                            <div class="item col-md-6">
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <div class="post-category text-red mb-3">Mont Metchou</div>
                                        <h2 class="post-title mb-3">Situer a l'este du village</h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p class="text-justify">L'autre trait caractéristique de Batié est le mont Metchou (2 000 mètres), le sommet qui domine ce village montagneux.</p>
                                        <p class="text-justify" id="maDiv" style="display:none;">
                                            L'autre trait caractéristique de Batié est le mont Metchou (2 000 mètres), le sommet qui domine ce village montagneux.
                                        </p>
                                        <a class="more hover link-red" onclick="maFonction()">lire plus</a>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item col-md-6">
                                <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                    <a href="./assets/img/photos/istock mount-cameroon-1489500.jpg" data-glightbox="title: Cursus Inceptos Sit" data-gallery="project-1"> <img src="./assets/img/photos/istock mount-cameroon-1489500.jpg" alt="" /></a>
                                </figure>
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.project -->
                    <div class="project grid grid-view">
                        <div class="row g-6 isotope">
                            <div class="item col-md-6">
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <div class="post-category text-yellow mb-3">Grotte de Nka'a</div>
                                        <h2 class="post-title mb-3">Situer a l'oueste</h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p class="text-justify">elle au niveau d'une descente en bordure d’une combe près d'un torrent. Au milieu d'une végétation luxuriante. elle attire beaucoup de touriste</p>
                                        <p class="text-justify" id="maDiv2" style="display:none;">
                                            L'autre trait caractéristique de Batié est le mont Metchou (2 000 mètres), le sommet qui domine ce village montagneux.
                                        </p>
                                        <a class="more hover link-yellow" onclick="maFonction2()">lire plus</a>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item col-md-6">
                                <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                    <a href="./assets/img/photos/Istock_Photo520px-Cave_Fovu,_Baham,_Cameroon.jpg" data-glightbox="title: Purus Tellus Magna" data-gallery="project-2"> <img src="./assets/img/photos/Istock_Photo520px-Cave_Fovu,_Baham,_Cameroon.jpg" alt="" /></a>
                                </figure>
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.project -->
                    <div class="project grid grid-view">
                        <div class="row g-6 isotope">
                            <div class="item col-md-6">
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <div class="post-category text-green mb-3">Col Batié</div>
                                        <h2 class="post-title mb-3">Situer sur la voie entre Douala et Bafoussam</h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p class="text-justify">Batié est connu pour son col appelé le col Batié, le plus connu du Cameroun. Ici, la route nationale qui relie Douala et Bafoussam serpente sur une chaîne de montagnes escarpées qui culmine à 2 000 mètres
                                            d'altitude.
                                        </p>
                                        <p class="text-justify" id="maDiv3" style="display:none;">
                                            L'autre trait caractéristique de Batié est le mont Metchou (2 000 mètres), le sommet qui domine ce village montagneux.
                                        </p>
                                        <a class="more hover link-green" onclick="maFonction3()">lire plus</a>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                            <!-- /.item -->
                            <div class="item col-md-6">
                                <figure class="itooltip itooltip-light hover-scale rounded" title=''>
                                    <a href="./assets/img/photos/5.jpg" data-glightbox="title: Venenatis Amet Ipsum" data-gallery="project-3"> <img src="./assets/img/photos/5.jpg" alt="" /></a>
                                </figure>
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.project -->
                </div>
                <!-- /.projects-tiles -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection