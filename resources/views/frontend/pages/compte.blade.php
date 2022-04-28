@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

 <!-- /content section -->
 <section class="mx-auto m-5 text-center">
    <div class="row g-6">
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
                        <div class="display-4 mb-5"></div>
                        <img src="./assets/img/logo-light.png" class="rounded-circle shadow-4 mb-4" style="width: 150px;" alt="Avatar" />
                        <h2 class="display-4 mb-4">KENGNE Albert</h2>
                        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">Electrique</p>
                        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">albert20@gmail.com</p>
                        <div class="parent-div">
                            <button class="btn btn-primary btn-lg rounded-pill">Choisir une image</button>
                            <input type="file" name="upfile" />
                        </div>
                        <div class="display-4 mb-13"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="card-body p-11 text-center">
                        <h2 class="mb-3 text-start">Information Du Compte</h2>
                        <form class="text-start mb-3">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="loginName" value="Electrique">
                                <label for="loginName">Nom d'utilisateur</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="loginName" value="KENGNE">
                                <label for="loginName">Nom</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="loginName" value="Albert">
                                <label for="loginName">Pre nom</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" placeholder="Email" id="loginEmail" value="albert20@gmail.com">
                                <label for="loginEmail">Email</label>
                            </div>
                            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Modifier</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-14 py-md-16">
        <div class="row mb-10">
            <div class="col-xl-10 mx-auto">
                <div class="row align-items-center counter-wrapper gy-6 text-center">
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/check.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">18</h3>
                        <p>Participation evenement</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/growth.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">12</h3>
                        <p>Evenement en cour</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/shopping-cart.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">21</h3>
                        <p>Commande en cour</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-3">
                        <img src="./assets/img/icons/lineal/user.svg" class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                        <h3 class="counter counter-lg text-primary">23</h3>
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