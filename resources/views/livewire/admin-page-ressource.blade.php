<div>

    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card h-100 mb-4">

                @if ($showSuccesNotification)
                <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text text-white">{{ $message}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif

                @if ($showErrorNotification)
                <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text text-white">{{ $message}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif


                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="mb-0">Gestion des informations de la page Acceuil</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-4 p-3">

                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left"
                        enctype="multipart/form-data">

                        <div class="row">
                            <h3 for="">Bloc 1</h3>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Titre Principal </label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="ressource.titre1" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">description Principale </label>
                                    <div class="">
                                        <textarea wire:model.lazy="ressource.description1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>


                            <h3 for="">Bloc 2</h3>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Titre </label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="ressource.titre2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">description </label>
                                    <div class="">
                                        <textarea wire:model.lazy="ressource.description2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Image du bloc</label>
                                    <div class="">
                                        <input wire:model="image1" class="form-control" type="file"
                                            accept="image/*">
                                    </div>
                                    @error('image1') <span class="text text-danger error">Erreur lors du
                                        téléchargement</span> @enderror

                                    <button class="btn btn-primary btn-sm mt-2" type="button" disabled
                                        wire:loading wire:target='image1'>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Patientez le chargement de l'image...
                                    </button>
                                    @if ($image1)
                                    <div class="row">
                                        <div class="col-xl-4 mx-auto col-md-4 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{$image1->temporaryUrl()}} "
                                                            alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @if ($this->ressource->image1)
                                    <div class="row">
                                        <div class="col-xl-4 mx-auto col-md-4 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{ asset('/app/ressources/'.$this->ressource->image1)}} "
                                                            alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @endif
                                </div>
                            </div>

                            @for ($i = 1; $i < 4; $i++) 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Question {{$i}}</label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="ressource.question{{$i}}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            @endfor

                            @for ($i = 1; $i < 4; $i++) 
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Réponse {{$i}}</label>
                                    <div class="">
                                        <textarea wire:model.lazy="ressource.reponse{{$i}}"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            @endfor

                            <h3>Bloc 3</h3>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Titre descriptif des ressources</label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="ressource.description3" class="form-control">
                                    </div>
                                </div>
                            </div>



                            <br>
                    <span class="mb-2 mt-5 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                            S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.
                        </span></span>
                    <div class="d-flex justify-content-end">

                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading.remove
                            wire:target='save'>Enregistrer</button>
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"
                            wire:loading wire:target='save'>Patientez...</button>

                    </div>
                    


                    @if ($showSuccesNotification)
                    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{{ $message}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif

                    @if ($showErrorNotification)
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{{ $message}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif


                        </div>
                    
                </div>
            </div>
        </div>

    </form>


    <h3 for="">Bloc des ressources de la page</h3>

    <div class="col-md-7 mt-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Gestion des vidéos de page</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">

                    @if (sizeOf($this->ressources)==0)
                    <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{!! __('Aucune ressource enregistrée pour le moment. <br>
                            &nbsp;&nbsp;&nbsp; Veuillez enregistrer une nouvelle ressource dans le formulaire à
                            droite.')!!}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @else

                    @endif
                    @foreach ($this->ressources as $key=>$ressource)
                    @if ($supp==$ressource->id)
                    <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                        wire:model='supp'>
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i
                                    class="fa fa-warning" aria-hidden="true"></i> Confirmation de suppression du
                                ressource de {{ $ressource->auteur }}</h4>
                            <span class="mb-2 text-xs">La suppression de cette ressource engendrera automatiquement la
                                destruction de cette dernière.
                                <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                            </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete({{$ressource->id}})'>
                                    Confirmer
                                </button>

                                <button class="btn btn-success" wire:click="$set('supp',-1)">
                                    Annuler
                                </button>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column col-md-9 text-justify">
                           
                            <h4 class="mb-3 text-sm">Libellé &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{$ressource->libelle}}</h4>
                                <h4 class="mb-3 text-sm">Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{$ressource->description}}</h4>
                            <span class="mb-2 text-xs">Lien &nbsp;&nbsp;&nbsp;&nbsp;: <span
                                    class="text-dark ms-2 font-weight-bold"> <a href="{{$ressource->lien}}">{{$ressource->lien}}</a> 
                                </span></span>

                        </div>
                        <div class="ms-auto">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="$set('supp',{{$ressource->id}})"><i class="far fa-trash-alt me-2"
                                    aria-hidden="true"></i>Supprimer</a>

                            <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="update({{$ressource->id}})"><i
                                    class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Voir /
                                Modifier</a>

                        </div>
                    </li>
                    @endif

                    @endforeach

                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-5 mt-4 mx-auto">
        <div class="card h-100 mb-4">
            <div class="card-header pb-0 px-3">
                <div class="row">
                    <div class="col-md-12">
                        <h6 class="mb-0">nouvelle ressource / Modification des ressources</h6>
                    </div>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit.prevent="saveRes" action="#" method="POST" role="form text-left">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Libellé</label>
                            <div class="">
                                <input wire:model.lazy="contenuRessource.libelle" class="form-control" type="text"
                                    placeholder="libelle  ressource" id="user-name">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Description de la ressource</label>
                            <div class="">
                                <textarea wire:model.lazy="contenuRessource.description" class="form-control"
                                    placeholder="description de la ressource" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about">Lien vers la ressource</label>
                            <div class="">
                                <input type="text" class="form-control" wire:model.lazy="contenuRessource.lien" 
                                 placeholder="lien de la ressource">
                            </div>
                        </div>


                    </div>


                    <br>

                    @if ($showSuccesNotification1)
                    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{{ $message}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif

                    @if ($showErrorNotification1)
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{{ $message}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif

                    <div class="d-flex justify-content-end">

                        @if ($modification!=null)

                        <input type="button" value="Annuler" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-"
                            wire:click='annuler()' wire:target='saveRes'>
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='saveRes'>Enregistrer les
                            modification</button>

                        @else
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='saveRes'>Enregistrer</button>

                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>

    
</div>