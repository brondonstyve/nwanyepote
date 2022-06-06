<div class="row g-6">
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
                        <div class="display-4 mb-5"></div>
                        <img src="app/users/{{$data->profile}}" class="rounded-circle shadow-4 mb-4" style="width: 150px;" alt="Avatar" />
                        <h2 class="display-4 mb-4">{{ $data->name }}</h2>
                        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">{{ $data->email }}</p>
                        <div class="display-4 mb-23">
                            <a class="btn btn-primary btn-lg rounded-pill" wire:click.prevent="logout()">Deconnexion</a>
                        </div>
                        <div class="display-4 mb-20"></div>
                        <div class="display-4 mb-22"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="card-body p-11 text-center">
                        <h2 class="mb-3 text-start">Information Du Compte</h2>
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
                        <form class="text-start mb-3">
                            <div class="parent-div">
                                <button class="btn btn-primary btn-lg rounded-pill">Choisir une photo de profil</button>
                                <input type="file" name="upfile" wire:model="profile" />
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='profile'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($profile)
                                <div class="card-body p-3">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src="{{$profile->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" wire:model.lazy="name" placeholder="Name" id="loginName" >
                                <label for="loginName">Nom</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="email" class="form-control" wire:model="email" placeholder="Email" id="loginEmail">
                                <label for="loginEmail">Email</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" wire:model="phone" placeholder="Phone" id="loginPhone">
                                <label for="loginLocation">Phone</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" wire:model="location" placeholder="Location" id="loginLocation">
                                <label for="loginLocation">Location</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea name="about" class="form-control" wire:model="about" placeholder="About" style="height: 150px"></textarea>
                                <label for="loginAbout">A propos de l'utilisateur</label>
                            </div>    
                            <a class="btn btn-primary rounded-pill btn-login w-100 mb-2" wire:click.prevent="update()">Modifier</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
