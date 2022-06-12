
    <div>
        @if ($showSuccesNotification)
                            <div class="mt-3 alert alert-success alert-dismissible fade show mx-auto col-8 text-center" role="alert">
                                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text text-white">{{ $message}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            @endif

                            @if ($showErrorNotification)
                            <div class="mt-3 alert alert-danger alert-dismissible fade show mx-auto col-8 text-center" role="alert">
                                <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                                <span class="alert-text text-white">{{ $message}}</span>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </button>
                            </div>
                            @endif

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="mx-auto mb-5">
                                <h5 class="mb-0 text-danger text-center text-uppercase">Utilisateur(s) inactif(s) de cet événement participatif</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            @if (sizeOf($this->participantInactif)==0)
                                <H6 class="text-center">Aucun participant dans cette section pour le moment.</H6>
                                @else
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Numéro
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Elmt de participation
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nom
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pays
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date Nais
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($this->participantInactif as $key=>$item)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{$key+1}}</p>
                                        </td>
                                        <td>
                                            @if ($this->evenement->type=='image')
                                            <div>
                                                <img src="{{asset("app/participant/$item->image")}}" class="avatar avatar-sm me-3">
                                            </div>
                                            @else
                                            <p class="text-xs font-weight-bold mb-0">
                                                <a href="{{$item->video}}" target="_blanc">Voir la vidéo</a>
                                            </p>    
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->name.' '.$item->prenom}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->pays}}</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$item->naissance}}</span>
                                        </td>
                                        <td class="text-center" >
                                            <div  wire:loading.remove>
                                                <a href="#!" class="mx-3 btn btn-success"  wire:click='valider({{$item->id}})'>
                                                    valider
                                                </a>
    
                                                <a href="#!" class="mx-3 btn btn-danger"  wire:click='annuler({{$item->id}})' >
                                                    Annuler
                                                </a>
                                            </div>
                                            

                                            <a href="#!" class="mx-3 btn btn-danger" wire:loading>
                                                Patienter un instant svp...
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

<br>
<br>
<br>
<br>
<br>
<br>

        
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div class="mx-auto mb-5">
                                <h5 class="mb-0 text-success  text-uppercase">Utilisateur(s) actif(s) de cet événement participatif</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            @if (sizeOf($this->participantActif)==0)
                                <H6 class="text-center">Aucun participant dans cette section pour le moment.</H6>
                            @else
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Numéro
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Elmt de participation
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nom
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Email
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Pays
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Date Nais
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($this->participantActif as $key=>$item)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{$key+1}}</p>
                                        </td>
                                        <td>
                                            @if ($this->evenement->type=='image')
                                            <div>
                                                <img src="{{asset("app/participant/$item->image")}}" class="avatar avatar-sm me-3">
                                            </div>
                                            @else
                                            <p class="text-xs font-weight-bold mb-0">
                                                <a href="{{$item->video}}" target="_blanc">Voir la vidéo</a>
                                            </p>    
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->name.' '.$item->prenom}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{$item->pays}}</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$item->naissance}}</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#!" class="mx-3 btn btn-primary"  wire:click='desactiver({{$item->id}})' >
                                                Desactiver
                                            </a>

                                            <a href="#!" class="mx-3 btn btn-danger"  wire:click='annuler({{$item->id}})'  >
                                                Annuler
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>