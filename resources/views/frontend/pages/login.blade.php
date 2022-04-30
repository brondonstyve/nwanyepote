@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')


        <!-- /content section -->
        <section class="mx-auto m-5 text-center">
            <section class="wrapper bg-dark text-white">
                <div class="container pt-18 pt-md-20 pb-21 pb-md-21 text-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <h1 class="display-1 text-white mb-3">Connectez vous</h1>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </section>
            <!-- /section -->
            <section class="wrapper bg-light">
                <div class="container pb-14 pb-md-16">
                    <div class="row">
                        <div class="col mt-n19">
                            <div class="card shadow-lg">
                                <div class="row gx-0 text-center">
                                    <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="./assets/img/photos/istock hut-7109228.jpg">
                                    </div>
                                    <!--/column -->
                                    <div class="col-lg-6">
                                        <div class="p-10 p-md-11 p-lg-13">
                                            <p class="lead mb-6 text-start">Entrer votre email et mot de passe pour vous connecter.</p>
                                            <form class="text-start mb-3">
                                                <div class="form-floating mb-4">
                                                    <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                                                    <label for="loginEmail">Email</label>
                                                </div>
                                                <div class="form-floating password-field mb-4">
                                                    <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                                    <label for="loginPassword">Mot de passe</label>
                                                </div>
                                                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Connexion</a>
                                            </form>
                                            <!-- /form -->
                                            <p class="mb-1"><a href="#" class="hover" data-bs-toggle="modal" data-bs-target="#modal-signin">Mot de passe oublier?</a></p>
                                            <p class="mb-0">Vous n'avez pas de compte? <a href="{{route('signin')}}" class="hover">Crée un compte</a></p>
                                        </div>
                                        <!--/div -->
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.container -->
            </section>
            <div class="modal fade" id="modal-signin" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h2 class="mb-3 text-start">Verification de votre email</h2>
                            <p class="lead mb-6 text-start">Entrer votre adresse email.</p>
                            <form class="text-start mb-3">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                                    <label for="loginEmail">Email</label>
                                </div>
                                <a href="{{route('reset-password-front')}}" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Envoyer</a>
                            </form>
                            <!-- /form -->
                        </div>
                        <!--/.modal-content -->
                    </div>
                    <!--/.modal-content -->
                </div>
                <!--/.modal-body -->
            </div>
            <!--/.modal-dialog -->
            </div>
            <!--/.modal -->
            <!-- /section -->
            <!-- /.container -->
        </section>
        <!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection