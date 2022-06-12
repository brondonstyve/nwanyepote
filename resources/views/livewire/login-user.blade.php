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
                                                    <input type="email" wire:model="email" class="form-control" placeholder="Email" id="loginEmail">
                                                    <label for="loginEmail">Email</label>
                                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                                <div class="form-floating password-field mb-4">
                                                    <input type="password" wire:model="password" class="form-control" placeholder="Password" id="loginPassword">
                                                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                                    <label for="loginPassword">Mot de passe</label>
                                                    @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                                </div>
                                                <a class="btn btn-primary rounded-pill btn-login w-100 mb-2" wire:click.prevent="login">Connexion</a>
                                            </form>
                                            @if (session()->has('message'))
                                                <div class="alert alert-info text-center alert-dismissible">
                                                    {{ session('message') }}
                                                </div>
                                            @endif
                                            @if (session()->has('error'))
                                                <div class="alert alert-danger text-center upper alert-dismissible">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
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
                </div>    
</section>
