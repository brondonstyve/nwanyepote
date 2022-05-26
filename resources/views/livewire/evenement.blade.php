<main>  
    <div class="container-fluid py-4">
        <h1 class="mb-0">EVENEMENT NON PARTICIPATIF</h1>
    </div>   
    <div class="container-fluid py-4">
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
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Information de la page</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessage">+&nbsp; Ajouter une information</a>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Grand titre
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            titre 1
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            titre 2
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            titre 3
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                            <tr>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->grang_titre}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->titre1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->titre2}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->titre3}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessage2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit({{$row->id}})"></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary" wire:click="destroy({{$row->id}})"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach   
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter information a la page evenement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Grand titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="grang_titre">
                                @error('grang_titre') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet">
                                @error('libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre1">
                                @error('titre1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet1">
                                @error('libelet1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre2">
                                @error('titre2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet2">
                                @error('libelet2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 3:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre3">
                                @error('titre3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessage2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier information a la page evenement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Grand titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="grang_titre">
                                @error('grang_titre') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet">
                                @error('libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre1">
                                @error('titre1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet1">
                                @error('libelet1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre2">
                                @error('titre2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet2">
                                @error('libelet2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 3:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre3">
                                @error('titre3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->

    </div>
    <div class="container-fluid py-4">
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
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">evenement non participatif</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessageEp">+&nbsp; Ajouter un evenement</a>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            TitreS
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Titres 1
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Titres 2
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Personne importate
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data2 as $row2)
                                            <tr>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titres}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titres1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titres2}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->personne_importantes}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageEp2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit2({{$row2->id}})"></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary" wire:click="destroy2({{$row2->id}})"></i>
                                                    </span>
                                                </td>
                                            </tr>
                                        @endforeach   
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessageEp" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter evenement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner les image de l'evenement</button>
                                    <input type="file" wire:model="imagenp" multiple />
                                </div>
                                @error('imagenp') <span class="text-danger error">{{ $message }}</span>@enderror 
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner l'image principale</button>
                                    <input type="file" wire:model="image_principal" />
                                </div>
                                @error('image_principal') <span class="text-danger error">{{ $message }}</span>@enderror 
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titres:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titres">
                                @error('titres') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Date d'edition:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="edition">
                                @error('edition') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titres 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titres1">
                                @error('titres1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 1a</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet1a" rows="3"></textarea>
                                @error('libelet1a') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 1b</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet1b" rows="3"></textarea>
                                @error('libelet1b') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 1c</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet1c" rows="3"></textarea>
                                @error('libelet1c') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Personne importante:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="personne_importantes">
                                @error('personne_importantes') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titres 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titres2">
                                @error('titres2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 2a</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet2a" rows="3"></textarea>
                                @error('libelet2a') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 2b</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet2b" rows="3"></textarea>
                                @error('libelet2b') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Directeur de production:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="directeur_publication">
                                @error('directeur_publication') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">A propos du DP</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="apropoDP" rows="3"></textarea>
                                @error('apropoDP') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner l'image du directeur de production</button>
                                    <input type="file" wire:model="imagedp" />
                                </div>
                                @error('imagedp') <span class="text-danger error">{{ $message }}</span>@enderror 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store2()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessageEp2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update Evenement</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner les image</button>
                                    <input type="file" wire:model="imagenp" multiple />
                                </div>
                                @error('imagenp') <span class="text-danger error">{{ $message }}</span>@enderror 
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner l'image principale</button>
                                    <input type="file" wire:model="image_principal" />
                                </div>
                                @error('image_principal') <span class="text-danger error">{{ $message }}</span>@enderror 
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titres:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titres">
                                @error('titres') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Date d'edition:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="edition">
                                @error('edition') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titres 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titres1">
                                @error('titres1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 1a</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet1a" rows="3"></textarea>
                                @error('libelet1a') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 1b</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet1b" rows="3"></textarea>
                                @error('libelet1b') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 1c</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet1c" rows="3"></textarea>
                                @error('libelet1c') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Personne importante:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="personne_importantes">
                                @error('personne_importantes') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titres 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titres2">
                                @error('titres2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 2a</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet2a" rows="3"></textarea>
                                @error('libelet2a') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet 2b</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="libelet2b" rows="3"></textarea>
                                @error('libelet2b') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Directeur de production:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="directeur_publication">
                                @error('directeur_publication') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">A propos du DP</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="apropoDP" rows="3"></textarea>
                                @error('apropoDP') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner l'image du directeur de production</button>
                                    <input type="file" wire:model="imagedp" />
                                </div>
                                @error('imagedp') <span class="text-danger error">{{ $message }}</span>@enderror 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update2()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->

    </div>
</main>
@livewireScripts

