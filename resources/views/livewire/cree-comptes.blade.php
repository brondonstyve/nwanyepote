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
                                    <p class="lead mb-6 text-start">La création de votre compte prendra quelques minutes.</p>
                                    <form class="text-start mb-3">
                                        <div class="form-floating mb-4">
                                            <input type="text" class="form-control" placeholder="Name" id="loginName" wire:model="name">
                                            <label for="loginName">Name</label>
                                            @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-floating mb-4">
                                            <input type="email" class="form-control" placeholder="Email" id="loginEmail" wire:model="email">
                                            <label for="loginEmail">Email</label>
                                            @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-floating password-field mb-4">
                                            <input type="password" class="form-control" placeholder="Password" id="loginPassword" wire:model="password">
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPassword">Mot De Passe</label>
                                            @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <div class="form-floating password-field mb-4">
                                            <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm" wire:model="confirmPass">
                                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                            <label for="loginPasswordConfirm">Confirmer Mot De Passe</label>
                                            @error('confirmPass') <span class="text-danger error">{{ $message }}</span>@enderror
                                        </div>
                                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2" wire:click.prevent="store()" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">Crée le compte</a>
                                    </form>
                                    <!-- /form -->
                                    <p class="mb-0">vous avez déja un compte? <a href="{{route('login')}}" class="hover">Se connecter</a></p>
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
        <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Verification du code OTP</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control"  id="recipient-name" wire:model="email">
                                    @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">OTP Code:</label>
                                    <input type="text" class="form-control"  id="recipient-name" wire:model="otpCode">
                                    @error('otpCode') <span class="text-danger error">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn bg-gradient-primary" wire:click.prevent="verifyOtp()" data-bs-dismiss="modal">Enregistrer</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
        <!-- Modal -->
</section>
