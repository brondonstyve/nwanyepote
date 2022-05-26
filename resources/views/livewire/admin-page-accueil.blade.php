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

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label">Titre Principal (Titre de
                                                    Bienvenue)</label>
                                                <div class="">
                                                    <input wire:model.lazy="home.titre1" class="form-control"
                                                        type="text">
                                                </div>

                                            </div>
                                        </div>

                                        <h4>Textes clignotants</h4>
                                        <div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">selectionner le nombre de champ
                                                        pour texte clignotant que vous souhaitez enregistrer</label>
                                                    <div class="">
                                                        <select class="form-control" wire:model='nbcli'>
                                                            @for($i=1; $i<=10; $i++) 
                                                                <option value='{{$i}}'>
                                                                    {{$i}}
                                                                </option>
                                                                @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        @for ($i = 1; $i <= $nbcli; $i++) 
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Texte Clignotant {{$i}}</label>
                                                    <div class="">
                                                        <input wire:model.lazy="textcli.{{$i}}.val" class="form-control"
                                                            type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.description1" class="form-control"
                                                    type="text"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Image de fond</label>
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
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
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
                                            @if ($this->home->image1)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-16 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->image1)}} "
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


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Image de fond de la vidéo de
                                                presentation</label>
                                            <div class="">
                                                <input wire:model="image2" class="form-control" type="file"
                                                    accept="image/*">
                                            </div>
                                            @error('image2') <span class="text text-danger error">Erreur lors du
                                                téléchargement</span> @enderror

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled
                                                wire:loading wire:target='image2'>
                                                <span class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                            </button>
                                            @if ($image2)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{$image2->temporaryUrl()}} "
                                                                    alt="img-blur-shadow"
                                                                    class="img-fluid shadow border-radius-xl">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @else
                                            @if ($this->home->image2)
                                            <div class="row">
                                                <div class="col-xl-6 mx-auto col-md-6 mb-xl-0 mt-2">
                                                    <div class="card card-blog card-plain">
                                                        <div class="position-relative">
                                                            <a class="d-block shadow-xl border-radius-xl">
                                                                <img src=" {{ asset('/app/accueil/'.$this->home->image2)}} "
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

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Lien de la vidéo</label>
                                            <div class="">
                                                <input wire:model.lazy="home.lien_video" class="form-control"
                                                    type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Libellé Bouton</label>
                                            <div class="">
                                                <input type="text" wire:model.lazy="home.texte_bouton1" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="form-control-label">Lien Bouton</label>
                                            <div class="">
                                                <input wire:model.lazy="home.lien_bouton1" class="form-control"
                                                    type="text" />
                                            </div>
                                        </div>
                                    </div>

                                    <h3>Blog 2</h3>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Titre</label>
                                            <div class="">
                                                <input type="text" wire:model.lazy="home.titre2" class="form-control">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="home.description2"
                                                    class="form-control"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    @for ($i = 1; $i <= 4; $i++) <div class="col-md-3">
                                        <div class="form-group">
                                            
                                            <label class="form-control-label">sous titre {{$i}}</label>
                                            <div class="">
                                                <input type="text" wire:model.lazy="sousTitre.{{$i}}.val"
                                                    class="form-control">
                                            </div>

                                            <label class="form-control-label">Code Fa {{$i}}</label>
                                            <div class="">
                                                <input type="text" wire:model.lazy="fa.{{$i}}.val"
                                                    class="form-control" />
                                            </div>

                                            <label class="form-control-label">sous description {{$i}}</label>
                                            <div class="">
                                                <textarea wire:model.lazy="sousDesc.{{$i}}.val" class="form-control"
                                                    rows="4"></textarea>
                                            </div>

                                            <label class="form-control-label">texte du lien {{$i}}</label>
                                            <div class="">
                                                <input type="text" wire:model.lazy="sousTexte.{{$i}}.val"
                                                    class="form-control">
                                            </div>

                                            <label class="form-control-label">Lien {{$i}}</label>
                                            <div class="">
                                                <input type="text" wire:model.lazy="sousLien.{{$i}}.val"
                                                    class="form-control">
                                            </div>
                                        </div>
                            </div>
                            @endfor



                            <h3>Blog 3</h3>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Image de presentation du bloc 3</label>
                                    <div class="">
                                        <input wire:model="image3" class="form-control" type="file" accept="image/*">
                                    </div>
                                    @error('image3') <span class="text text-danger error">Erreur lors du
                                        téléchargement</span> @enderror

                                    <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                        wire:target='image3'>
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        Patientez le chargement de l'image...
                                    </button>
                                    @if ($image3)
                                    <div class="row">
                                        <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{$image3->temporaryUrl()}} " alt="img-blur-shadow"
                                                            class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    @if ($this->home->image3)
                                    <div class="row">
                                        <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                            <div class="card card-blog card-plain">
                                                <div class="position-relative">
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                        <img src=" {{ asset('/app/accueil/'.$this->home->image3)}} "
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

                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Titre</label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="home.titre3" class="form-control">
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="home.description3" class="form-control"></textarea>
                                    </div>

                                </div>
                            </div>


                            @for ($i = 1; $i <= 3; $i++) <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label">sous titre {{$i}}</label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="sousTitreB3.{{$i}}.val"
                                            class="form-control">
                                    </div>

                                    <label class="form-control-label">sous description {{$i}}</label>
                                    <div class="">
                                        <textarea wire:model.lazy="sousDescB3.{{$i}}.val" class="form-control"
                                            rows="4"></textarea>
                                    </div>

                                    <label class="form-control-label">texte du lien {{$i}}</label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="sousTexteB3.{{$i}}.val"
                                            class="form-control">
                                    </div>

                                    <label class="form-control-label">Lien {{$i}}</label>
                                    <div class="">
                                        <input type="text" wire:model.lazy="sousLienB3.{{$i}}.val"
                                            class="form-control">
                                    </div>
                                </div>
                        </div>
                        @endfor



                        <h3>Blog 4</h3>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Titre</label>
                                <div class="">
                                    <input type="text" wire:model.lazy="home.titre4" class="form-control">
                                </div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label">Description</label>
                                <div class="">
                                    <textarea wire:model.lazy="home.description4" class="form-control"></textarea>
                                </div>

                            </div>
                        </div>

                        @for ($i = 1; $i <= 4; $i++) <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label">Sous Titre {{$i}}</label>
                                <div class="">
                                    <input type="text" wire:model.lazy="sousTitreB4.{{$i}}.val"
                                        class="form-control">
                                </div>

                                <label class="form-control-label">sous description {{$i}}</label>
                                <div class="">
                                    <textarea wire:model.lazy="sousDescB4.{{$i}}.val" class="form-control"
                                        rows="4"></textarea>
                                </div>
                            </div>
                    </div>
                    @endfor

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Image defilante 1</label>
                            <div class="">
                                <input wire:model="image4" class="form-control" type="file" accept="image/*">
                            </div>
                            @error('image4') <span class="text text-danger error">Erreur lors du téléchargement</span>
                            @enderror

                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                wire:target='image4'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de l'image...
                            </button>
                            @if ($image4)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{$image4->temporaryUrl()}} " alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($this->home->image4)
                            <div class="row">
                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{ asset('/app/accueil/'.$this->home->image4)}} "
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            <label class="form-control-label">libellé de l'image</label>
                            <div class="">
                                <input type="text" wire:model.lazy="sousTitreI.1.val" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Image defilante 1</label>
                            <div class="">
                                <input wire:model="image5" class="form-control" type="file" accept="image/*">
                            </div>
                            @error('image5') <span class="text text-danger error">Erreur lors du téléchargement</span>
                            @enderror

                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                wire:target='image5'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de l'image...
                            </button>
                            @if ($image5)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{$image5->temporaryUrl()}} " alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($this->home->image5)
                            <div class="row">
                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{ asset('/app/accueil/'.$this->home->image5)}} "
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            <label class="form-control-label">libellé de l'image</label>
                            <div class="">
                                <input type="text" wire:model.lazy="sousTitreI.2.val" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Image defilante 1</label>
                            <div class="">
                                <input wire:model="image6" class="form-control" type="file" accept="image/*">
                            </div>
                            @error('image6') <span class="text text-danger error">Erreur lors du téléchargement</span>
                            @enderror

                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                wire:target='image6'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de l'image...
                            </button>
                            @if ($image6)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{$image6->temporaryUrl()}} " alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($this->home->image6)
                            <div class="row">
                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{ asset('/app/accueil/'.$this->home->image6)}} "
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            <label class="form-control-label">libellé de l'image</label>
                            <div class="">
                                <input type="text" wire:model.lazy="sousTitreI.3.val" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Image defilante 1</label>
                            <div class="">
                                <input wire:model="image7" class="form-control" type="file" accept="image/*">
                            </div>
                            @error('image7') <span class="text text-danger error">Erreur lors du téléchargement</span>
                            @enderror

                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                wire:target='image7'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de l'image...
                            </button>
                            @if ($image7)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{$image7->temporaryUrl()}} " alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($this->home->image7)
                            <div class="row">
                                <div class="col-xl-12 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{ asset('/app/accueil/'.$this->home->image7)}} "
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            <label class="form-control-label">libellé de l'image</label>
                            <div class="">
                                <input type="text" wire:model.lazy="sousTitreI.4.val" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <h3>Blog 5 (Evénement)</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Titre</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.titre5" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <div class="">
                                <textarea wire:model.lazy="home.description5" class="form-control"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Libellé Bouton</label>
                            <div class="">
                                <input wire:model.lazy="home.texte_bouton5" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label class="form-control-label">Lien Bouton</label>
                            <div class="">
                                <input wire:model.lazy="home.lien_bouton5" class="form-control" type="text">
                            </div>
                        </div>
                    </div>


                    <h3>Blog 6 (communauté)</h3>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Titre</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.titre6" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <div class="">
                                <textarea wire:model.lazy="home.description6" class="form-control"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Image de fond</label>
                            <div class="">
                                <input wire:model="image8" class="form-control" type="file" accept="image/*">
                            </div>
                            @error('image8') <span class="text text-danger error">Erreur lors du téléchargement</span>
                            @enderror

                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                wire:target='image8'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de l'image...
                            </button>
                            @if ($image8)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{$image8->temporaryUrl()}} " alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($this->home->image8)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-6 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{ asset('/app/accueil/'.$this->home->image8)}} "
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Libellé Bouton</label>
                            <div class="">
                                <input wire:model.lazy="home.texte_bouton6" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label class="form-control-label">Lien Bouton</label>
                            <div class="">
                                <input wire:model.lazy="home.lien_bouton6" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <h3>Blog 7(Articles)</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Titre</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.titre7" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <div class="">
                                <textarea wire:model.lazy="home.description7" class="form-control"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Libellé Bouton</label>
                            <div class="">
                                <input wire:model.lazy="home.texte_bouton7" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <label class="form-control-label">Lien Bouton</label>
                            <div class="">
                                <input wire:model.lazy="home.lien_bouton7" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <h3>Blog 8 (Commentaires)</h3>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Titre</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.titre8" class="form-control"> 
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-control-label">Description</label>
                            <div class="">
                                <textarea wire:model.lazy="home.description8" class="form-control"></textarea>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Libellé avis 1</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.libelle_avis_fb" class="form-control">
                            </div>

                            <label class="form-control-label">Nombre</label>
                            <input type="number" min="1" wire:model.lazy="home.nb_avis_fb" class="form-control">

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Libellé avis 2</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.libelle_avis_site" class="form-control">
                            </div>

                            <label class="form-control-label">Nombre</label>
                            <div class="">
                                <input type="number" min="1" wire:model.lazy="home.nb_avis_site" class="form-control">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="form-control-label">Libellé avis 3</label>
                            <div class="">
                                <input type="text" wire:model.lazy="home.libelle_avis_autre" class="form-control">
                            </div>

                            <label class="form-control-label">Nombre</label>
                            <div class="">
                                <input type="number" min="1" wire:model.lazy="home.nb_avis_autre" class="form-control">
                            </div>

                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="form-control-label">Image de presentation du bloc</label>
                            <div class="">
                                <input wire:model="image9" class="form-control" type="file" accept="image/*">
                            </div>
                            @error('image9') <span class="text text-danger error">Erreur lors du téléchargement</span>
                            @enderror

                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                wire:target='image9'>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Patientez le chargement de l'image...
                            </button>
                            @if ($image9)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-12 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{$image9->temporaryUrl()}} " alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            @if ($this->home->image9)
                            <div class="row">
                                <div class="col-xl-6 mx-auto col-md-6 mb-xl-0 mt-2">
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src=" {{ asset('/app/accueil/'.$this->home->image9)}} "
                                                    alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
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
                </form>


                </div>




                {{-- Commentaires ajoutés --}}




            </div>
        </div>
    </div>

    <h3 for="">Bloc des commentaires de la page</h3>

    <div class="col-md-7 mt-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">Gestion des vidéos de page</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <ul class="list-group">

                    @if (sizeOf($this->temoignages)==0)
                    <div class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-white">{!! __('Aucun commentaire enregistré pour le moment. <br>
                            &nbsp;&nbsp;&nbsp; Veuillez enregistrer une Nouveau commentaire dans le formulaire à
                            droite.')!!}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @else

                    @endif
                    @foreach ($this->temoignages as $key=>$temoignage)
                    @if ($supp==$temoignage->id)
                    <li class="list-group-item col-md-12 border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg"
                        wire:model='supp'>
                        <div class="d-flex  flex-column text-justify">
                            <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i
                                    class="fa fa-warning" aria-hidden="true"></i> Confirmation de suppression du
                                commentaire de {{ $temoignage->auteur }}</h4>
                            <span class="mb-2 text-xs">La suppression de ce commentaire engendrera automatiquement la
                                destruction de ce dernier.
                                <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                            </span>
                            <div class="mx-auto">
                                <button class="btn btn-danger" wire:click='delete({{$temoignage->id}})'>
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
                           
                            <h4 class="mb-3 text-sm">Auteur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                {{$temoignage->auteur}}</h4>
                                <h4 class="mb-3 text-sm">Pays &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                    {{$temoignage->pays}}</h4>
                            <span class="mb-2 text-xs">Description &nbsp;&nbsp;&nbsp;&nbsp;: <span
                                    class="text-dark ms-2 font-weight-bold">{{$temoignage->commentaire}}
                                </span></span>

                        </div>
                        <div class="ms-auto">
                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="$set('supp',{{$temoignage->id}})"><i class="far fa-trash-alt me-2"
                                    aria-hidden="true"></i>Supprimer</a>

                            <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;"
                                wire:click="update({{$temoignage->id}})"><i
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
                        <h6 class="mb-0">Nouveau commentaire / Modification des commentaires</h6>
                    </div>
                </div>
            </div>
            <div class="card-body pt-4 p-3">
                <form wire:submit.prevent="saveCom" action="#" method="POST" role="form text-left">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="user-name" class="form-control-label">Auteur</label>
                            <div class="">
                                <input wire:model.lazy="temoignage.auteur" class="form-control" type="text"
                                    placeholder="Auteur du commentaire" id="user-name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about">pays</label>
                            <div class="">
                                <input type="text" class="form-control" wire:model.lazy="temoignage.pays" id="about"
                                    rows="5" placeholder="pays du commentaire"></textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="user.location" class="form-control-label">Commentaire</label>
                            <div class="">
                                <textarea wire:model.lazy="temoignage.commentaire" class="form-control"
                                    placeholder="Libellé du commentaire" rows="5" required></textarea>
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
                            wire:click='annuler()' wire:target='saveCom'>
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='saveCom'>Enregistrer les
                            modification</button>

                        @else
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4" wire:target='saveCom'>Enregistrer</button>

                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>







    </div>