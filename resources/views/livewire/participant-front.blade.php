<div class="row gy-12 gx-lg-12 gx-xl-12">
    <div class="col-lg-7">
        <h2 class="">Informations à fournir pour participer à cet
            événement
        </h2>


        <form class="contact-form" wire:submit.prevent='save'>
            <div class="messages"></div>
            <div class="row gx-4">
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" value="{{auth()->user()->name}}" class="form-control" disabled
                            placeholder="Nom" required>
                        <label>Nom *</label>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" value="{{auth()->user()->prenom}}" class="form-control" disabled
                            placeholder="Prenom" required>
                        <label>Prénom *</label>
                    </div>
                </div>
                <!-- /column -->
                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="email" value="{{auth()->user()->email}}" class="form-control" disabled
                            placeholder="adresse email" required>
                        <label>Email *</label>
                    </div>
                </div>
                <!-- /column -->

                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" disabled placeholder="numéro de téléphone" required
                            value="{{auth()->user()->phone}}">
                        <label>Téléphone *</label>
                    </div>
                </div>
                <!-- /column -->

                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="Pays" required
                            wire:model.lazy='participant.pays'>
                        <label>Pays *</label>
                    </div>
                </div>
                <!-- /column -->

                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="ville" required
                            wire:model.lazy='participant.ville'>
                        <label>ville *</label>
                    </div>
                </div>
                <!-- /column -->


                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" placeholder="adresse" required
                            wire:model.lazy='participant.adresse'>
                        <label>adresse *</label>
                    </div>
                </div>
                <!-- /column -->

                <div class="col-md-6">
                    <div class="form-floating mb-4">
                        <input type="date" class="form-control" placeholder="date de naissance" max="2010-01-01" value="2010-01-01" required
                            wire:model.lazy='participant.naissance'>
                        <label>Date de naissance *</label>
                    </div>
                    
                </div>
                <!-- /column -->

                @if ($this->evenement->type=='Image')
                

                <div class="col-md-12">
                    <div class="form-floating mb-4">
                        
                        <input type="file" class="form-control" placeholder="visuel de participation" accept="image/*"
                        @if(!$test) required @endif wire:model.lazy='image'>
                            
                        <label>image de participation *</label>
                    </div>
                    <h6>@error('image')
                        erreur sur l'image
                        @enderror</h6>
                    <input type="button" class="btn btn-primary rounded-pill btn-send mb-3"
                        value="Patientez le chargement de l'image ..." wire:loading wire:target='image'>
                </div>

                @if ($image)
                <div class="col-md-12">
                    <div class="form-floating mb-4">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src=" {{$image->temporaryUrl()}} " alt="img-blur-shadow"
                                class="img-fluid shadow border-radius-xl" width="25%">
                        </a>
                    </div>
                </div>
                @else
                @if ($participant->image)
                <div class="col-md-12">
                    <div class="form-floating mb-4">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src=" {{ asset('/app/participant/'.$participant->image)}} " alt="img-blur-shadow"
                                class="img-fluid shadow border-radius-xl" width="25%">
                        </a>
                    </div>
                </div>
                @endif
                @endif
                <!-- /column -->
                @else
                <div class="col-md-12">
                    <div class="form-floating mb-4">
                        <input type="url" class="form-control" placeholder="vidéo de participation" required
                            wire:model.lazy='participant.video'>
                        <label>vidéo  - exemple : https://www.youtube.com/xxxxxxxxx *</label>
                    </div>
                </div>
                <!-- /column -->     
                @endif
               

                <div class="col-12">
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="A Propos de vous" required
                            wire:model.lazy='participant.apropos' style="height: 200px" required></textarea>
                        <label>Discour sur vous qui sera afficher pour ceux
                            qui navigue dans l'événement *</label>
                    </div>
                </div>

                <!-- /column -->
                @if ($showSuccesNotification)
                <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text">{{ $message}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif

                @if ($showErrorNotification)
                <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text">{{ $message}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif

                <div class="col-12">

                    <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3"
                        value="Déposer votre participation" wire:loading.remove wire:target='save'>

                    <input type="button" class="btn btn-primary rounded-pill btn-send mb-3"
                        value="Patientez un instant ..." wire:loading wire:target='save'>
                    <p class="text-muted"><strong>*</strong> Les champs avec
                        le symbole * sont obligatoires et ceux grisés vous
                        ne pouvez pas les modifier</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </form>
        <!-- /form -->
    </div>

    <div class="col-md-12 col-lg-7 col-xl-5 mx-auto text-center">
        <div class="display-4 mb-5"></div>
        <img src="{{asset('assets/img/logo.jpg')}}" class="rounded-circle shadow-4 mb-4" style="width: 150px;"
            alt="Avatar" />
        <h2 class="display-4 mb-4">Titre de l'événement : <h3 class="text-primary">' {{$this->evenement->titre}} '</h3>
        </h2>
        <br>
        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">
            Nombre de participant restant : <span class="text-primary">{{$this->reste}}</span> </p>
            
        <br>
        <p class="lead fs-lg px-xl-10 px-xxl-15">
            {{auth()->user()->email}}</p>

        <p class="lead fs-lg mb-6 px-xl-10 px-xxl-15">
            {{auth()->user()->name}}</p>
        <div class="parent-div">
            <a href="{{route('evenement')}}">
                <button type="button" class="btn btn-primary btn-lg rounded-pill">Retourn aux
                    événements</button>
            </a>
        </div>
        <div class="display-4 mb-13"></div>
    </div>
</div>