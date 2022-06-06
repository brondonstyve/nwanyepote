<main>  
    <div class="container-fluid py-4">
      <div class="row">


          
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
                                    <h5 class="mb-0">Tous les message</h5>
                                </div>
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nom
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Surname
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        phone
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        message
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
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->name}}</p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->last_name}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->email}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->phone}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row->message}}</p>
                                                </td>
                                                <td class="text-center">
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

    </div>
    <div class="container-fluid py-4">
        <div class="row">
                <div class="col-12">
                    <div class="card mb-4 mx-4">
                        <div class="card-header pb-0">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <h5 class="mb-0">Iformation page contact</h5>
                                </div>
                                @if(!empty($data2))
                                    
                                @else
                                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalMessage">+&nbsp; Ajouter info</a>
                                @endif
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titre de la page
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Titre du formulaire
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                        </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data2 as $row2)
                                            <tr>
                                                <td class="ps-4">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titre_page}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row2->titre_formulaire}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessage2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit({{$row2->id}})"></i>
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter les information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre page:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre_page">
                                @error('titre_page') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet page:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet_page">
                                 @error('libelet_page') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre formulaire:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre_formulaire">
                                 @error('titre_formulaire') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet formulaire:</label>
                                <input type="text" wire:model="libelet_formulaire" class="form-control"  id="recipient-name">
                                 @error('libelet_formulaire') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store()" data-bs-dismiss="modal">Envoyer les informations</button>
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
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter les information</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre page:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre_page">
                                @error('titre_page') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet page:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="libelet_page">
                                 @error('libelet_page') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Titre formulaire:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="titre_formulaire">
                                 @error('titre_formulaire') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Libelet formulaire:</label>
                                <input type="text" wire:model="libelet_formulaire" class="form-control"  id="recipient-name">
                                 @error('libelet_formulaire') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update()" data-bs-dismiss="modal">Envoyer les informations</button>
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
                                    <h5 class="mb-0">Iformation de la plate forme</h5>
                                </div>
                                @if(!empty($data3))
                                    
                                @else
                                    <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button" data-bs-toggle="modal" data-bs-target="#exampleModalMessageIC">+&nbsp; Ajouter information de la plate forme</a>
                                @endif
                                </div>
                                </div>
                                <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Adresse
                                            </th>   
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Adresse 2
                                            </th>   
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Numero de telephone
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data3 as $row3)
                                            <tr>
                                                <td class="ps-4">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->adresse1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->adresse2}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->numero1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <p class="text-xs font-weight-bold mb-0">{{$row3->email1}}</p>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#" class="mx-3" data-bs-toggle="modal" data-bs-target="#exampleModalMessageIC2">
                                                        <i class="fas fa-user-edit text-secondary" wire:click="edit2({{$row3->id}})"></i>
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
                <div class="modal fade" wire:ignore.self id="exampleModalMessageIC" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessage" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter les information de la plateforme</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adresse 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="adresse1">
                                @error('adresse1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adresse 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="adresse2">
                                 @error('adresse2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="numero1">
                                 @error('numero1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="numero2">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email 1:</label>
                                <input type="email" class="form-control"  id="recipient-name" wire:model="email1">
                                 @error('email1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email 2:</label>
                                <input type="email" wire:model="email2" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Youtube :</label>
                                <input type="text" wire:model="youtube" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Facebook :</label>
                                <input type="text" wire:model="facebook" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Twiter :</label>
                                <input type="text" wire:model="twiter" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Instagramme :</label>
                                <input type="text" wire:model="instagramme" class="form-control"  id="recipient-name">
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="store2()" data-bs-dismiss="modal">Envoyer les informations</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
            <!-- Modal -->
                <div class="modal fade" wire:ignore.self id="exampleModalMessageIC2" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessage" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ajouter les information de la plateforme</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adresse 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="adresse1">
                                @error('adresse1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adresse 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="adresse2">
                                 @error('adresse2') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero 1:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="numero1">
                                 @error('numero1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Numero 2:</label>
                                <input type="text" class="form-control"  id="recipient-name" wire:model="numero2">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email 1:</label>
                                <input type="email" class="form-control"  id="recipient-name" wire:model="email1">
                                 @error('email1') <span class="text-danger error">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email 2:</label>
                                <input type="email" wire:model="email2" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Youtube :</label>
                                <input type="text" wire:model="youtube" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Facebook :</label>
                                <input type="text" wire:model="facebook" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Twiter :</label>
                                <input type="text" wire:model="twiter" class="form-control"  id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Instagramme :</label>
                                <input type="text" wire:model="instagramme" class="form-control"  id="recipient-name">
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary" wire:click.prevent="update2()" data-bs-dismiss="modal">Envoyer les informations</button>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Modal -->
    </div>
</main>
@livewireScripts
