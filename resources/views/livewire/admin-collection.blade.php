<div>
    
    
    <div class="row">
        <div class="col-md-12 mt-4">
        </div>



    <div class="col-md-7 mt-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Gestion des collections de la page</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">

                    @if (sizeOf($this->collections)==0)
                    <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{!! __('Aucune information de collection enregistrée pour le moment. <br>
                            &nbsp;&nbsp;&nbsp; Veuillez enregistrer une nouvelle information collection dans le formulaire à
                            droite.')!!}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @else

                    @endif
                    @foreach ($this->collections as $key=>$collection)
                    @if ($supp==$collection->id)
                    <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                        wire:model='supp'>
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i
                                    class="fa fa-warning" aria-hidden="true"></i> Confirmation de suppression de l'information
                                collection de {{ $collection->libelle }}</h4>
                            <span class="mb-2 text-xs">La suppression de cette information collection engendrera automatiquement la
                                destruction de cette dernière.
                                <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                            </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete({{$collection->id}})'>
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
                           
                            <h4 class="mb-3 text-sm">libellé  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{$collection->libelle}}</h4>
                                <h4 class="mb-3 text-sm">Description &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{substr($collection->description,0,100).'[...]'}}</h4>

                        </div>
                        <div class="ms-auto">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="$set('supp',{{$collection->id}})"><i class="far fa-trash-alt me-2"
                                    aria-hidden="true"></i>Supprimer</a>

                            <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="update({{$collection->id}})"><i
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
                        <h6 class="mb-0">nouvelle information collection / Modification information collection</h6>
                    </div>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit.prevent="save" action="#" method="POST" role="form text-left">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">libellé</label>
                            <div class="">
                                <input wire:model.lazy="collection.libelle" class="form-control" type="text"
                                    placeholder="ex : Le col batié" id="user-name">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Description de la collection</label>
                            <div class="">
                                <textarea wire:model.lazy="collection.description" class="form-control"
                                    placeholder="description de la collection" rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label">Images de l'infos</label>
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
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src="{{$image1->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    @else
                                    @if ($this->collection->image)
                                    <div class="row">
                                        @foreach (explode('<-->',$this->collection->image) as $item)
                                        @if ($item)
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src=" {{ asset('/app/collection/'.$item)}} " alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endif
                                            @endforeach
                                    </div>
                                    @endif
                                    @endif
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
                            wire:click='annuler()' wire:target='save'>
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='save'>Enregistrer les
                            modification</button>

                        @else
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='save'>Enregistrer</button>

                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>


</div>
