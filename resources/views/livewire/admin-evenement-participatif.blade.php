<div>
    <div class="row">

        <div class="col-md-7 mt-4">
            <div class="card">
                <div class="card-header pb-0 px-3">
                    <h6 class="mb-0">Gestion des événements participatifs</h6>
                </div>
                <div class="card-body pt-4 p-3">
                    <ul class="list-group">

                        @if (sizeOf($this->evenementparticipatifs)==0)
                        <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span class="alert-text text-white">{!! __('Aucun evenementparticipatif enregistré pour le moment. <br>
                                &nbsp;&nbsp;&nbsp; Veuillez enregistrer une nouvelle evenementparticipatif dans le formulaire à
                                droite.')!!}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @else

                        @endif
                        @foreach ($this->evenementparticipatifs as $key=>$evenementparticipatif)
                        @if ($supp==$evenementparticipatif->id)
                        <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                            wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                                <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i
                                        class="fa fa-warning" aria-hidden="true"></i> Confirmation de suppression de
                                    l'evenementparticipatif {{ $evenementparticipatif->titre }}</h4>
                                <span class="mb-2 text-xs">La suppression de cet événement engendrera automatiquement la
                                    suppression de ce dernier ainsi que les images y associés.
                                    <br>
                                    Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                                </span>
                                <div class="mx-auto">
                                    <button class="btn btn-danger" wire:click='delete({{$evenementparticipatif->id}})'>
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
                                <h4 class="mb-3 text-sm">Titre &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{$evenementparticipatif->titre}}</h4>
                                <span class="mb-2 text-xs">Domaine &nbsp;&nbsp;&nbsp;&nbsp;: <span
                                        class="text-dark ms-2 font-weight-bold">{{$evenementparticipatif->domaine}} </span></span>

                                <span class="text-xs">Description : <span class="text-dark ms-2 font-weight-bold"> {{
                                        substr($evenementparticipatif->desc_auteur,0,100).'...'; }} </span></span>

                                <span class="text-xs">nombre de participants : <span class="text-dark ms-2 font-weight-bold"> 
                                    {{  $evenementparticipatif->nombre }}  </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span> allant du  {{  $evenementparticipatif->debut .' à '. $evenementparticipatif->fin }}</span></span>

                                    <br>
                                    <h4>Statut : 
                                        @if ($evenementparticipatif->statut)
                                        <span class="text-success ms-2 font-weight-bold"> 
                                            événement en cours
                                        </span>
                                    @else
                                        <span class="text-danger ms-2 font-weight-bold"> 
                                            événement terminé
                                        </span>
                                        @endif
                                </h5>
                            </div>
                            <div class="ms-auto" wire:loading.remove>
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"
                                    wire:click="$set('supp',{{$evenementparticipatif->id}})"><i class="far fa-trash-alt me-2"
                                        aria-hidden="true"></i>Supprimer</a>

                                <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"
                                    wire:click="update({{$evenementparticipatif->id}})"><i class="fas fa-pencil-alt text-dark  me-2"
                                        aria-hidden="true"></i>Voir / Modifier</a>

                                        @if ($evenementparticipatif->statut==true)
                                        <a class="btn btn-link text-success text-gradient px-3 mb-0" href="javascript:;"
                                        wire:click="cloturer({{$evenementparticipatif->id}})"><i class="fas float-lg-end-alt text-dark  me-2"
                                            aria-hidden="true"></i>Cloturer</a>
                                        @endif
                                
                                        <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="{{route('admin-participant',$evenementparticipatif->id)}}">
                                            <i class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Participants</a>

                            </div>
                            <div class="ms-auto">
                                <button class="btn btn-danger" wire:loading>Patientez svp ...</button>
                            </div>
                        </li>
                        @endif

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-5 mt-4">
            <div class="card h-100 mb-4">
                <div class="card-header pb-0 px-3">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="mb-0">Nouvelle evenementparticipatif / Modification des événements participatifs</h6>
                        </div>
                    </div>
                </div>

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


                <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="saveArt" action="#" method="POST" role="form text-left">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="user-name" class="form-control-label">Titre de l'evenementparticipatif</label>
                                <div class="">
                                    <input wire:model.lazy="evenementparticipatif.titre" class="form-control" type="text"
                                        placeholder="Titre de l'evenementparticipatif" id="user-name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Catégorie</label>
                                <div class="">
                                    <select wire:model.lazy="evenementparticipatif.domaine" class="form-control" required>
                                        <option></option>
                                        <option>Tradition</option>
                                        <option>Culture</option>
                                        <option>Religion</option>
                                        <option>Loisir</option>
                                        <option>Touriste</option>
                                        <option>Art</option>
                                        <option>Paysage</option>
                                        <option>Sport</option>
                                        <option>Buisness</option>
                                        <option>Autres...</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="terrain-name" class="form-control-label">Image principale de l'evenementparticipatif
                                </label>
                                <div class="">
                                    <input wire:model.lazy="image" class="form-control" type="file" id="terrain-name"
                                        accept="image/*" @if ($modification==null) required @endif>
                                </div>
                                @error('image') <span class="text text-danger error">Erreur lors du
                                    téléchargement</span> @enderror

                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='image'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>

                            @if ($modification!=null)
                            @if ($image)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$image->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{asset('/app/evenementparticipatif/'.$imageVue)}}"
                                                        alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @else
                            @if ($image)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$image->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @endif


                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Nombre maximum de participants</label>
                                <div class="">
                                    <input wire:model.lazy="evenementparticipatif.nombre" class="form-control" type="number" min="2"
                                        placeholder="nombre de participant" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Date de début</label>
                                <div class="">
                                    <input type="date" class="form-control" placeholder="entrez la date de début" required wire:model.lazy='evenementparticipatif.debut'  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Date de Fin</label>
                                <div class="">
                                    <input type="date" class="form-control" placeholder="entrez la date de fin" required wire:model.lazy='evenementparticipatif.fin'  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Elément de participation</label>
                                <div class="">
                                    <select wire:model.lazy="evenementparticipatif.type" class="form-control" required>
                                        <option></option>
                                        <option>Vidéo ou song</option>
                                        <option>Image</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user.location" class="form-control-label">Nom de l'auteur</label>
                                <div class="">
                                    <input wire:model.lazy="evenementparticipatif.auteur" class="form-control" type="text"
                                        placeholder="nom de l'auteur" id="name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="about">A Propos de l'auteur</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="evenementparticipatif.desc_auteur" id="about"
                                        rows="5" placeholder="à propos de l'auteur" required></textarea>
                                </div>
                            </div>

                            <h5>SEO</h5>

                            <div class="form-group">
                                <label for="about">Titre de la page</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="evenementparticipatif.titreSeo" id="about"
                                        rows="1" placeholder="titre de la page" maxlength="62"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="about">Meta Description</label>
                                <div class="">
                                    <textarea class="form-control" wire:model.lazy="evenementparticipatif.descriptionSeo" id="about"
                                        rows="2" placeholder="Description de la page" maxlength="122"></textarea>
                                </div>
                            </div>
                        </div>

                        @for ($i = 1; $i < 6; $i++) <span>
                            <a class="btn  
                            @if($i==1) btn-info @endif
                            @if($i==3) bg-gradient-success @endif
                            @if($i==4) bg-gradient-warning @endif
                            @if($i==5) btn-primary @endif
                            @if($i==2) btn-secondary @endif
                            
                            " data-bs-toggle="collapse" href="#bloc{{$i}}" role="button" aria-expanded="false"
                                aria-controls="collapseExample" wire:click="$set('collapse',collapse)">
                                Bloc {{$i}}
                            </a>
                            </span>




                            <div class="row {{$collapse}}" id="bloc{{$i}}">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="user-name" class="form-control-label">Titre du bloc</label>
                                        <div class="">
                                            <input wire:model.lazy="evenementparticipatif.titre{{$i}}" class="form-control"
                                                type="text" placeholder="titre du bloc {{$i}}" id="user-name">
                                        </div>
                                    </div>




                                    <div class="form-group">
                                        <label for="about">événement participatif </label>
                                        <div class="">
                                            <textarea wire:model.lazy="evenementparticipatif.article{{$i}}" class="form-control"
                                                id="about" rows="7"
                                                placeholder="Ecrivez à propos de l'événement participatif"></textarea>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="terrain-name" class="form-control-label">Image relative à l'evenement participatif
                                            ?</label>
                                        <div class="">
                                            <input type="file" wire:model="image{{$i}}" class="form-control" accept="image/*" multiple>
                                            @if(session()->has("image$i")) <div class="text-danger">{{ session()->get("image$i")}}</div> @endif
                                            @error("image$i") <span class="text text-danger error"></span> @enderror

                                        </div>


                                        <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                            wire:target='image{{$i}}'>
                                            <span class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span>
                                            Patientez le chargement de(s) image(s)...
                                        </button>
                                    </div>
                                    @if ($i==1)
                                    @if ($modification!=null)
                                    @if ($image1)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image1 as $item)
                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                            
                                                            <a class="d-block shadow-xl border-radius-xl">

                                                                <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                                class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    @else
                                    @if ($imageVue1)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach (explode('<-->',$imageVue1) as $key=>$item)
                                                @if ($item)
                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                        <button type="button" class="btn btn-danger" wire:click='removeImage("image{{$i}}",{{$key}},"{{$item}}")'>Retirer</button>

                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src="{{asset('/app/evenementparticipatif/'.$item)}}"
                                                                    alt="img-blur-shadow"
                                                                    class="img-fluid shadow border-radius-xl">
                                                            </a>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                            

                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @else
                                    @if ($image1)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image1 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @endif




                                    @if ($i==2)
                                    @if ($modification!=null)
                                    @if ($image2)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image2 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    @if ($imageVue2)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach (explode('<-->',$imageVue2) as $item)
                                                @if ($item)
                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src="{{asset('/app/evenementparticipatif/'.$item)}}"
                                                                    alt="img-blur-shadow"
                                                                    class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                            <button class="badge badge-danger">Retirer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @else
                                    @if ($image2)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image2 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @endif




                                    @if ($i==3)
                                    @if ($modification!=null)
                                    @if ($image3)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image3 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    @if ($imageVue3)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach (explode('<-->',$imageVue3) as $item)
                                                @if ($item)
                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src="{{asset('/app/evenementparticipatif/'.$item)}}"
                                                                    alt="img-blur-shadow"
                                                                    class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        <button class="badge badge-danger">Retirer</button>

                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @else
                                    @if ($image3)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image3 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @endif



                                    @if ($i==4)
                                    @if ($modification!=null)
                                    @if ($image4)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image4 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    @if ($imageVue4)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach (explode('<-->',$imageVue4) as $item)
                                                @if ($item)
                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src="{{asset('/app/evenementparticipatif/'.$item)}}"
                                                                    alt="img-blur-shadow"
                                                                    class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                            <button class="badge badge-danger">Retirer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @else
                                    @if ($image4)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image4 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @endif


                                    @if ($i==5)
                                    @if ($modification!=null)
                                    @if ($image5)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image5 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @else
                                    @if ($imageVue5)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach (explode('<-->',$imageVue5) as $item)
                                                @if ($item)
                                                <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src="{{asset('/app/evenementparticipatif/'.$item)}}"
                                                                    alt="img-blur-shadow"
                                                                    class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                            <button class="badge badge-danger">Retirer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @else
                                    @if ($image5)
                                    <div class="card-body p-3">
                                        <div class="row">
                                            @foreach ($image5 as $item)

                                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">

                                                            <img src="{{$item->temporaryUrl()}}" alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif

                                    @endif

                                    @endif


                                    <div class="form-group">
                                        <label for="user.location" class="form-control-label">Code Embed de la vidéo qui sera chargé depuis youtube (contactez les concepteurs en cas de non comprehension)</label>
                                        <div class="">
                                            <input wire:model.lazy="evenementparticipatif.video{{$i}}" class="form-control"
                                                type="text" placeholder="ex: https://www.youtube.com/embed/Code"
                                                id="name">
                                        </div>
                                    </div>


                                </div>
                            </div>
                            @endfor


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
                            <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                    S'il vout plait patientez le chargement des images avant de passer à
                                    l'enregistrement.
                                </span></span>



                            <div class="d-flex justify-content-end">

                                @if ($modification!=null)

                                <input type="button" value="Annuler" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-"
                                    wire:click='annuler()'>

                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"
                                    wire:loading.remove>Enregistrer les modification</button>

                                @else
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"
                                    wire:loading.remove>Enregistrer</button>

                                @endif
                                <button class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading>Patienter...</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
