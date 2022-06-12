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
                                    <h5 class="mb-0">A propos de batie</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessage">+&nbsp; Ajouter un bloc apropos</a>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            image
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            titreAB
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            texte1
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
                                                    @foreach(explode('->',$row->imageab) as $i => $item)
                                                        @if($item)
                                                            <div>
                                                                <img src="app/apropos/{{$item}}" class="avatar avatar-sm me-3">
                                                            </div>
                                                        @endif
                                                    @endforeach        
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->titreab}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->text1ab}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageUp">
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
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un bloc apropos de batie</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreab">
                                @error('titreab') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Text1ab</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="text1ab" rows="3"></textarea>
                                @error('text1ab') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Text2ab</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="text2ab" rows="3"></textarea>
                                @error('text2ab') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Lire plus</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="lireplusab" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner image</button>
                                    <input type="file" wire:model="imageab" multiple/>
                                </div>
                                @error('imageab') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='imageab'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button> 
                            </div>
                            @if ($imageab)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                @foreach ( $imageab as $image )
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$image->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">modal</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="modal">
                                @error('modal') <span class="text-danger error">{{ $message }}</span>@enderror
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier un bloc apropos de batie</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreab">
                                @error('titreab') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Text1ab</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1"  wire:model="text1ab" rows="3"></textarea>
                                @error('text1ab') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Text2ab</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="text2ab" rows="3"></textarea>
                                @error('text2ab') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Lire plus</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="lireplusab" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner image</button>
                                    <input type="file" wire:model="imageab" multiple/>
                                </div>
                                @error('imageab') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='imageab'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($imageab)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                @foreach ( $imageab as $image )
                                                    <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$image->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">modal</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="modal">
                                @error('modal') <span class="text-danger error">{{ $message }}</span>@enderror
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
        <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Caracteristique</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessageC">+&nbsp; Ajouter Caracteristiques</a>
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
                                            numero
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            libelet
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
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titreC}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->caract_num}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->caract_intitule}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageC2">
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageC" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une caracteristique</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreC">
                                @error('titreC') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero:</label>
                                <input type="number" class="form-control"  id="recipient-name" wire:model="caract_num">
                                @error('caract_num') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Intitule:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="caract_intitule">
                                @error('caract_intitule') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="caract_libelet" rows="3"></textarea>
                                @error('caract_libelet') <span class="text-danger error">{{ $message }}</span>@enderror
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageC2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier une caracteristique</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreC">
                                @error('titreC') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero:</label>
                                <input type="number" class="form-control"  id="recipient-name" wire:model="caract_num">
                                @error('caract_num') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Intitule:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="caract_intitule">
                                @error('caract_intitule') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="caract_libelet" rows="3"></textarea>
                                @error('caract_libelet') <span class="text-danger error">{{ $message }}</span>@enderror
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

    <div class="container-fluid py-4">
        <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Objectif</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessageOB">+&nbsp; Ajouter Objectif</a>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            numero
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            intitule
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            libelet
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data3 as $row3)
                                            <tr>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->objectif_num}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->objectif_intitule}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->objectif_libelet}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageOB2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit3({{$row3->id}})"></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary" wire:click="destroy3({{$row3->id}})"></i>
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageOB" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une Objectif</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreOb">
                                @error('titreOb') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero:</label>
                                <input type="number" class="form-control"  id="recipient-name" wire:model="objectif_num">
                                @error('objectif_num') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Intitule:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="objectif_intitule">
                                @error('objectif_intitule') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="objectif_libelet" rows="3"></textarea>
                                @error('objectif_libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner image</button>
                                    <input type="file" wire:model="imageOb" />
                                </div>
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='imageOb'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($imageOb)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$imageOb->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store3()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessageOB2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier une Objectif</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titreOb">
                                @error('titreOb') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero:</label>
                                <input type="number" class="form-control"  id="recipient-name" wire:model="objectif_num">
                                @error('objectif_num') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Intitule:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="objectif_intitule">
                                @error('objectif_intitule') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Libelet:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" wire:model="objectif_libelet" rows="3"></textarea>
                                @error('objectif_libelet') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner image</button>
                                    <input type="file" wire:model="imageOb" />
                                </div>
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='imageOb'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($imageOb)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$imageOb->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update3()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
    </div>

    <div class="container-fluid py-4">
        <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Partenaires</h5>
                                </div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessageP">+&nbsp; Ajouter Partenaires</a>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Logo
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Entreprise
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Services
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data4 as $row4)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <img src="app/apropos/{{$row4->logo}}" class="avatar avatar-sm me-3">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row4->nom_part}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row4->services}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageP2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit4({{$row4->id}})"></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary" wire:click="destroy4({{$row4->id}})"></i>
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageP" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter un partenaire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner un logo</button>
                                    <input type="file" wire:model="logo" />
                                </div>
                                @error('logo') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='logo'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($logo)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$logo->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nom de l'entreprise:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="nom_part">
                                @error('nom_part') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Services:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="services">
                                @error('services') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Reseau social 1:</label>
                                <select class="form-control" wire:model="social_media1">
                                    <option></option>
                                    <option>uil uil-twitter</option>
                                    <option>uil uil-facebook-f</option>
                                    <option>uil uil-dribbble</option>
                                </select>
                                @error('social_media1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Link1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="link1">
                                @error('link1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Reseau social 2:</label>
                                <select class="form-control" wire:model="social_media2">
                                    <option></option>
                                    <option>uil uil-twitter</option>
                                    <option>uil uil-facebook-f</option>
                                    <option>uil uil-dribbble</option>
                                </select>
                                @error('social_media2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Link2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="link2">
                                @error('link2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Reseau social 3:</label>
                                <select class="form-control" wire:model="social_media3">
                                    <option></option>
                                    <option>uil uil-twitter</option>
                                    <option>uil uil-facebook-f</option>
                                    <option>uil uil-dribbble</option>
                                </select>
                                @error('social_media3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Link3:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="link3">
                                @error('link3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store4()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessageP2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifier un partenaire</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner un logo</button>
                                    <input type="file" wire:model="logo" />
                                </div>
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='logo'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($logo)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$logo->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nom de l'entreprise:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="nom_part">
                                @error('nom_part') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Services:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="services">
                                @error('services') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Reseau social 1:</label>
                                <select class="form-control" wire:model="social_media1">
                                    <option></option>
                                    <option>uil uil-twitter</option>
                                    <option>uil uil-facebook-f</option>
                                    <option>uil uil-dribbble</option>
                                </select>
                                @error('social_media1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Link1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="link1">
                                @error('link1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Reseau social 2:</label>
                                <select class="form-control" wire:model="social_media2">
                                    <option></option>
                                    <option>uil uil-twitter</option>
                                    <option>uil uil-facebook-f</option>
                                    <option>uil uil-dribbble</option>
                                </select>
                                @error('social_media2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Link2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="link2">
                                @error('link2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Reseau social 3:</label>
                                <select class="form-control" wire:model="social_media3">
                                    <option></option>
                                    <option>uil uil-twitter</option>
                                    <option>uil uil-facebook-f</option>
                                    <option>uil uil-dribbble</option>
                                </select>
                                @error('social_media3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Link3:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="link3">
                                @error('link3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update4()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->        
    </div>
    <div class="container-fluid py-4">
        <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Information page</h5>
                                </div>
                                @if(sizeof($data5) != 0)
                                    
                                @else
                                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button"  data-bs-toggle="modal" data-bs-target="#exampleModalMessageIf">+&nbsp; Ajouter Information page</a>
                                @endif
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
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Grand titre
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Titre 1
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Titre 2
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Titre 3
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data5 as $row5)
                                            <tr>
                                                <td class="ps-4">
                                                    <div>
                                                        <img src="app/apropos/{{$row5->imageIf}}" class="avatar avatar-sm me-3">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row5->grand_titre}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row5->titre1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row5->titre2}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row5->titre3}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageIf2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit5({{$row5->id}})"></i>
                                                    </a>
                                                    <span>
                                                        <i class="cursor-pointer fas fa-trash text-secondary" wire:click="destroy5({{$row5->id}})"></i>
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageIf" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une info de la page</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner une image</button>
                                    <input type="file" wire:model="imageIf" />
                                </div>
                                @error('imageIf') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='imageIf'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($imageIf)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$imageIf->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Grand titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="grand_titre">
                                @error('grand_titre') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre1">
                                @error('titre1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre2">
                                @error('titre2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 3:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre3">
                                @error('titre3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store5()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessageIf2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter une info de la page</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label"></label>
                                <div class="parent-div">
                                    <button class="btn btn-primary btn-lg rounded-pill">Selectionner une image</button>
                                    <input type="file" wire:model="imageIf" />
                                </div>
                                @error('imageIf') <span class="text-danger error">{{ $message }}</span>@enderror
                                <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading
                                    wire:target='imageIf'>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Patientez le chargement de(s) image(s)...
                                </button>
                            </div>
                            @if ($imageIf)
                            <div class="card-body p-3">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src="{{$imageIf->temporaryUrl()}}" alt="img-blur-shadow"
                                                        class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Grand titre:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="grand_titre">
                                @error('grand_titre') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre1">
                                @error('titre1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre2">
                                @error('titre2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre 3:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre3">
                                @error('titre3') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update5()" data-bs-dismiss="modal">Enregistrer</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->       
    </div>   
</main>
@livewireScripts

