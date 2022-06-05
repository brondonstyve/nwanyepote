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
            @livewire('login-user')
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