<div>
    
    
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card h-100 mb-4">

                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="mb-0">Gestion des informations de la page faq</h6>
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
                                        <input type="text" wire:model.lazy="faq.titre1" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">description Principale </label>
                                    <div class="">
                                        <textarea wire:model.lazy="faq.description1" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>

                            <h3 for="">Bloc 2</h3>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Titre 2 </label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="faq.titre2" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">description 2 </label>
                                    <div class="">
                                        <textarea wire:model.lazy="faq.description2" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>


                            



                            <br>
                            
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


    <h3 for="">Bloc des informations de faq de la page</h3>

    <div class="col-md-7 mt-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Gestion des vidéos de page</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">

                    @if (sizeOf($this->faqs)==0)
                    <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{!! __('Aucune information de faq enregistrée pour le moment. <br>
                            &nbsp;&nbsp;&nbsp; Veuillez enregistrer une nouvelle information faq dans le formulaire à
                            droite.')!!}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @else

                    @endif
                    @foreach ($this->faqs as $key=>$faq)
                    @if ($supp==$faq->id)
                    <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                        wire:model='supp'>
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i
                                    class="fa fa-warning" aria-hidden="true"></i> Confirmation de suppression de l'information
                                faq de {{ $faq->localisation }}</h4>
                            <span class="mb-2 text-xs">La suppression de cette information faq engendrera automatiquement la
                                destruction de cette dernière.
                                <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                            </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete({{$faq->id}})'>
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
                           
                            <h4 class="mb-3 text-sm">Question  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{$faq->question}}</h4>
                                <h4 class="mb-3 text-sm">Réponse &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{substr($faq->reponse,0,100).'[...]'}}</h4>

                        </div>
                        <div class="ms-auto">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="$set('supp',{{$faq->id}})"><i class="far fa-trash-alt me-2"
                                    aria-hidden="true"></i>Supprimer</a>

                            <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="update({{$faq->id}})"><i
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
                        <h6 class="mb-0">nouvelle information faq / Modification information faq</h6>
                    </div>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit.prevent="savefaq" action="#" method="POST" role="form text-left">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Question</label>
                            <div class="">
                                <input wire:model.lazy="contenuFaq.question" class="form-control" type="text"
                                    placeholder="Question" id="user-name">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Description de la faq</label>
                            <div class="">
                                <textarea wire:model.lazy="contenuFaq.reponse" class="form-control"
                                    placeholder="réponse de la question" rows="5" required></textarea>
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
                            wire:click='annuler()' wire:target='savefaq'>
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='savefaq'>Enregistrer les
                            modification</button>

                        @else
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='savefaq'>Enregistrer</button>

                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>


</div>
