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
                    <h1 class="display-1 text-white mb-3">Reinitialiser votre mot de passe</h1>
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
                                    <p class="lead mb-6 text-start">Entrer votre nouvau mot de passe.</p>
                                    <form class="text-start mb-3">
                                        <div class="form-floating password-field mb-4">
                                            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPassword">Mot De Passe </label>
                                        </div>
                                        <div class="form-floating password-field mb-4">
                                            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPassword">Confirmation du Mot de Passe</label>
                                        </div>
                                        <p class="mb-0">Vous avez deja un compte? <a href="{{route('login')}}" class="hover">Connecter vous</a></p>
                                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Reinitialiser</a>
                                    </form>
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
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
</section>
<!-- /section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection


