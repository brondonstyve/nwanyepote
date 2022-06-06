<main>  
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
                                    <h5 class="mb-0">Galerie d'image</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessage">+&nbsp; Ajouter image</a>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Image
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Libelet
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Type
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <img src="app/galeries/{{$row->image}}" class="avatar avatar-sm me-3">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->libelet}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->type}}</p>
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

    </div>

    <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier les images</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner image</button>
                                    <input type="file" wire:model="image" />
                                </div>
                                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='image'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
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
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet">
                                @error('libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Type:</label>
                                <select class="form-control" wire:model="type">
                                    <option>SPORT</option>
                                    <option>CULTUREL</option>
                                    <option>TRADITIONEL</option>
                                    <option>AUTRE</option>
                                </select>
                                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
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
                            <h5 class="modal-title" id="exampleModalLabel">Modifier les images</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>

                            <!--<button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='image'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                            </button>-->
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner image</button>
                                    <input type="file" wire:model.lezy="image" />
                                </div>
                                @error('image') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='image'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
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
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet">
                                @error('libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Type:</label>
                                <select class="form-control" wire:model="type">
                                    <option>SPORT</option>
                                    <option>CULTUREL</option>
                                    <option>TRADITIONEL</option>
                                    <option>AUTRE</option>
                                </select>
                                @error('type') <span class="text-danger error">{{ $message }}</span>@enderror
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
    <div class="container-fluid py-4">
        <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Information image</h5>
                                </div>
                                @if(!empty($data2))
                                    
                                @else
                                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessageI">+&nbsp; Ajouter une information</a>
                                @endif
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titre
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titreb1
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        texteb2
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
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titre}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titreb1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->texteb2}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageI2">
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageI" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre">
                                @error('titre') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet">
                                @error('libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titreb1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreb1">
                                @error('titreb1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libeletb1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libeletb1">
                                @error('libeletb1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Texteb2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="texteb2">
                                @error('texteb2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titreb2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreb2">
                                @error('titreb2') <span class="text-danger error">{{ $message }}</span>@enderror
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageI2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier une information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre">
                                @error('titre') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet">
                                @error('libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titreb1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreb1">
                                @error('titreb1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libeletb1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libeletb1">
                                @error('libeletb1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Texteb2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="texteb2">
                                @error('texteb2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titreb2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreb2">
                                @error('titreb2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update2()" data-bs-dismiss="modal">Modifier</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
    </div>
</main>
@livewireScripts
