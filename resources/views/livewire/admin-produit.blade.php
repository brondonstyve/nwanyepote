<div class="container-fluid">
    <div class="card card-body blur shadow-blur">


        @if($liste)
        <div class="col-xl-4 col-md-8 mb-xl-0 mb-4" wire:click='new()'>
            <div class="card h-100 card-plain border">
                <div class="card-body d-flex flex-column justify-content-center text-center">
                    <a href="javascript:;">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class=" text-secondary"> Nouveau produit </h5>
                    </a>
                </div>
            </div>
        </div>
        @endif




        <div class="row gx-4">
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




            @if ($liste)
            <div style="float: right;text-align: right">
                {{--
                <button class="btn btn-info" wire:click="updateService('')">Tout</button>
                <button class="btn btn-info" wire:click="updateService('Maison contemporaine')">Maison
                    contemporaine</button>
                <button class="btn btn-info" wire:click="updateService('Logement collectif')">Logement
                    collectif</button>
                <button class="btn btn-info" wire:click="updateService('Maconnerie générale')">Maconnerie
                    générale</button>
                <button class="btn btn-info" wire:click="updateService('Maison Individuelle')">Maison
                    Individuelle</button> --}}

            </div>
            <div class="col-12 mt-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Gestion des produits</h6>
                    </div>

                    <div class="card-body p-3">
                        <div class="row">
                            @foreach ($this->listProject as $item)

                            @if ($supp==$item->id)

                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                <div class="card card-blog card-plain">
                                    <div class="d-flex  flex-column text-justify">
                                        <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i
                                                class="fa fa-warning" aria-hidden="true"></i> Confirmation de
                                            suppression de {{ $produit->libelle }}</h4>
                                        <span class="mb-2 text-xs">La suppression de ce produit sera irrevoquable et
                                            engendrera automatiquement la suppression de toutes les images liées à ce
                                            dernier.
                                            <br>
                                            Cliquez sur le bouton en sessous si vous souhaitez continuer la suppression.
                                        </span>
                                        <div class="mx-auto">
                                            <button class="btn btn-danger" wire:click='delete({{$item->id}})'>
                                                Confirmer
                                            </button>

                                            <button class="btn btn-success" wire:click="$set('supp',{{null}})">
                                                Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            @else


                            @php
                            $image=explode('->',$item->image);
                            @endphp


                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4 mt-2">
                                <div class="card card-blog card-plain">
                                    <div class="position-relative">


                                        @if ($item->image==null)
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="" alt="Erreur d'image" class="img-fluid shadow border-radius-xl">
                                        </a>
                                        @else
                                        <a class="d-block shadow-xl border-radius-xl">
                                            <img src="@if($urlSeeImage!=null && $item->id==$idVue ){{asset('/app/produit/'.$urlSeeImage)}}@else{{asset('/app/produit/'.$item->img_principale)}}@endif"
                                                alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                        </a>
                                        @endif


                                    </div>
                                    <div class="card-body px-1 pb-0">
                                        <p class="text-gradient text-dark mb-2 text-sm">Produit : {{$item->libelle}}
                                        </p>
                                        <p class="text-gradient text-dark mb-2 text-sm">Marque : {{$item->marque}}</p>
                                        <a href="javascript:;">
                                            <h5>
                                                Prix : {{$item->prix}}
                                            </h5>
                                        </a>
                                        <p class="mb-4 text-sm">
                                            Description : {{ substr($item->description, 0, 100).'[...]'; }}
                                        </p>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <button type="button" class="btn btn-success btn-sm mb-0"
                                                wire:click='voir({{$item->id}})'>Voir</button>
                                            <button type="button" class="btn btn-danger btn-sm mb-0"
                                                wire:click="$set('supp',{{$item->id}})">Supprimer</button>
                                            <div class="avatar-group mt-2">

                                                @foreach ($image as $key=>$value)
                                                @if ($key!=0 && $value)
                                                <a href="javascript:;" wire:click='seeImage("{{$value}}",{{$item->id}})'
                                                    class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom" title="Visuel {{$key+1}}">
                                                    <img alt="Image placeholder"
                                                        src="{{asset('/app/produit/'.$value)}}">
                                                </a>
                                                @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        {{-- @if ($item->produit_principal==null)
                                        <div class="d-flex align-items-center justify-content-between mt-1">
                                            <button type="button" class="btn btn-info btn-sm mb-0"
                                                wire:click="maisonPrinc({{$item->id}},'{{$item->service}}')">Définir
                                                comme image accueil pour @if($item->service=='Maison individuelle')
                                                Maison contempaoraine @else {{$item->service}} @endif</button>
                                        </div>
                                        @endif --}}


                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach





                        </div>
                    </div>
                </div>
                <div>
                    {{$this->listProject->links()}}
                </div>
            </div>

            @else




            <div class="row">




                <div class="col-md-12 mt-4">
                    <div class="card h-100 mb-4">
                        <div class="card-header pb-0 px-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6 class="mb-0">Nouveau produit / Modification produit</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-4 p-3">
                            <form wire:submit.prevent="save" action="#" method="POST" role="form text-left"
                                enctype="multipart/form-data">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="produit-name" class="form-control-label">Catégorie du produit</label>
                                            <div class="">
                                                <select wire:model.lazy="produit.collection" class="form-control"
                                                    required>
                                                    <option value=""></option>
                                                    @foreach ($this->collection as $item)
                                                    <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('produit.collection') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produit-name" class="form-control-label">Libellé du
                                                produit</label>
                                            <div class="">
                                                <input wire:model.lazy="produit.libelle" class="form-control"
                                                    type="text" required placeholder="Libellé du produit"
                                                    id="produit-name" required>
                                            </div>
                                            @error('produit.libelle') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="produit-email" class="form-control-label">{{ __('Prix du
                                                produit') }}</label>
                                            <div class="@error('produit.prix')border border-danger rounded-3 @enderror">
                                                <input wire:model.lazy="produit.prix" class="form-control" type="number"
                                                    placeholder="Prix" min="1" step="0.1">
                                            </div>
                                            @error('produit.prix') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="produit-email" class="form-control-label">{{ __("Nombre d'étoile") }}</label>
                                            <div class="@error('produit.etoile')border border-danger rounded-3 @enderror">
                                                <input wire:model.lazy="produit.etoile" class="form-control" type="number"
                                                    placeholder="etoile" min="1" max="5">
                                            </div>
                                            @error('produit.etoile') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produit-name" class="form-control-label">marque</label>
                                            <div class="">
                                                <input wire:model.lazy="produit.marque" class="form-control" type="text"
                                                    required placeholder="marque du produit" id="produit-name" required>
                                            </div>
                                            @error('produit.marque') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="produit-email" class="form-control-label">{{ __('durée de
                                                réalisation (en semaine)') }}</label>
                                            <div
                                                class="@error('produit.email')border border-danger rounded-3 @enderror">
                                                <input wire:model.lazy="produit.duree" class="form-control"
                                                    type="number" placeholder="durée de réalisation" id="produit-email">
                                            </div>
                                            @error('produit.duree') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produit-email" class="form-control-label">{{ __('quantite')
                                                }}</label>
                                            <div
                                                class="@error('produit.quantite')border border-danger rounded-3 @enderror">
                                                <input wire:model.lazy="produit.quantite" class="form-control"
                                                    type="number" placeholder="quantite" id="produit-email" min="1">
                                            </div>
                                            @error('produit.quantite') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produit-name" class="form-control-label">Couleurs</label>
                                            <div class="">
                                                <input wire:model.lazy="produit.couleur" class="form-control"
                                                    type="text" placeholder="Noir, Rouge, Bleue ..." id="produit-name">
                                            </div>
                                            @error('produit.couleur') <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-6">

                                        @if ($modification)
                                        <div class="form-group">
                                            <label for="produit-name" class="form-control-label">Ajouter un visuel
                                                uniquement</label>
                                            <div class="">
                                                <input wire:model="image" class="form-control" type="file"
                                                    placeholder="Visuel du produit" id="produit-name" accept="image/*"
                                                    multiple>
                                            </div>

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled
                                                wire:loading wire:target='image'>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                            </button>

                                            @error('image') <div class="text-danger">erreur lors du téléchargement</div>
                                            @enderror
                                            @if(session()->has('image')) <div class="text-danger">{{
                                                session()->get('image')}}</div> @endif
                                        </div>
                                        @else
                                        <div class="form-group">
                                            <label for="produit-name" class="form-control-label">Visuel</label>
                                            <div class="">
                                                <input wire:model="image" class="form-control" type="file" required
                                                    placeholder="Visuel du produit" id="produit-name" required
                                                    accept="image/*" multiple>
                                            </div>

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled
                                                wire:loading wire:target='image'>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Patientez le chargement de(s) image(s)...
                                            </button>

                                            @error('image') <div class="text-danger">erreur lors du téléchargement</div>
                                            @enderror
                                            @if(session()->has('image')) <div class="text-danger">{{
                                                session()->get('image')}}</div> @endif
                                        </div>
                                        @endif

                                        
                                    </div>


                                    @if ($image!=null)

                                    @if ($modification)
                                    <div class="col-12 mt-4">
                                        <div class="card mb-4">
                                            <div class="card-header pb-0 p-3">
                                                <h6 class="mb-1">visuel d'ajout de modification</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row">
                                                    @foreach ($image as $key=>$item)
                                                    <div class="col-xl-3 col-md-3 mb-xl-0 mb-4">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$item->temporaryUrl()}} "
                                                                        alt="img-blur-shadow"
                                                                        class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                            <div class="card-body px-1 pb-0">
                                                                <p class="text-gradient text-dark mb-2 text-sm">
                                                                    Visuel {{$key+1}} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <div class="col-12 mt-4">
                                        <div class="card mb-4">
                                            <div class="card-header pb-0 p-3">
                                                <h6 class="mb-1">Liste des visuels</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row">
                                                    @foreach ($image as $key=>$item)
                                                    <div class="col-xl-3 col-md-3 mb-xl-0 mb-4">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$item->temporaryUrl()}} "
                                                                        alt="img-blur-shadow"
                                                                        class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                            <div class="card-body px-1 pb-0">
                                                                <p class="text-gradient text-dark mb-2 text-sm">
                                                                    Visuel {{$key+1}} </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif


                                    @endif


                                    @if ($modification==true && !$image)

                                    @php
                                    $image=explode('->',$produit->image);
                                    @endphp

                                    <div class="col-12 mt-4">
                                        <div class="card mb-4">
                                            <div class="card-header pb-0 p-3">
                                                <h6 class="mb-1">Liste des visuels</h6>
                                            </div>
                                            <div class="card-body p-3">
                                                <div class="row">
                                                    @foreach ($image as $key=>$img)
                                                    @if ($key>0 && $img)
                                                    <div class="col-xl-3 col-md-3 mb-xl-0 mb-4">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">

                                                                    <img src="{{asset('/app/produit/'.$img)}}"
                                                                        alt="img-blur-shadow"
                                                                        class="img-fluid shadow border-radius-xl">
                                                                </a>

                                                                @if ($produit->img_principale!=$img)
                                                                <button type="button"
                                                                    class="btn bg-gradient-danger btn-md mt-4 mb-4"
                                                                    wire:click='removeImg("{{$img}}")'>Enlever</button>

                                                                <button type="button"
                                                                    class="btn bg-gradient-primary btn-md mt-4 mb-4"
                                                                    wire:click='definrP("{{$img}}")'>Image
                                                                    Principale</button>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    @endif


                                    <div class="form-group">
                                        <label for="about">Description</label>
                                        <div class="">
                                            <textarea wire:model.lazy="produit.description" class="form-control"
                                                id="about" rows="7" placeholder="à propos du produit"
                                                required></textarea>
                                        </div>
                                    </div>

                                    <h4>SEO</h4>

                                    <div class="form-group col-md-6">
                                        <label for="about">Titre de la page</label>
                                        <div class="">
                                            <textarea class="form-control" wire:model.lazy="produit.titreSeo" id="about"
                                                rows="1" placeholder="titre de la page" maxlength="62"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="about">Description de la méta</label>
                                        <div class="">
                                            <textarea class="form-control" wire:model.lazy="produit.descriptionSeo"
                                                id="about" rows="2" placeholder="Description de la page"
                                                maxlength="122"></textarea>
                                        </div>
                                    </div>

                                </div>


                                @if ($showErrorNotification)
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
                                    @if ($modification==true)

                                    <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-"
                                        wire:click='annuler'>Annuler</button>
                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"
                                        wire:loading.remove wire:target='image'>Enregistrer les modification</button>
                                    <button type="button" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading
                                        wire:target='image'>Patientez le chargement de(s) images ...</button>

                                    @else
                                    <button type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-"
                                        wire:click='annuler'>Annuler</button>

                                    <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4"
                                        wire:loading.remove wire:target='image'>Enregistrer</button>
                                    <button type="button" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:loading
                                        wire:target='image'>Patientez le chargement de(s) images ...</button>

                                    @endif
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>







            @endif

        </div>
    </div>
</div>