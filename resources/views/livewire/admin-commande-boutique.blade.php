<div>
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">

                    
                    
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-dark d-inline-block mb-0">Commandes </h6>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a href="#" class="btn btn-sm btn-neutral mt-2" data-toggle="modal" wire:click='wath("tout")'>Tout</a>
                        <a href="#" class="btn btn-sm btn-neutral mt-2" data-toggle="modal" wire:click='wath("livre")'>Livré</a>
                        <a href="#" class="btn btn-sm btn-neutral mt-2" data-toggle="modal" wire:click='wath("nlivre")'>Non Livré</a>
                        
                    </div>
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

    @if ($com!=null)
    <div class="container-fluid ">

        <!-- Dark table -->
        <div class="row ">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="table-responsive">


                        @if ($liste)
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-white mb-0">Liste des Commandes</h3>
                        </div>

                        
                        <form class=" navbar-search-light form-inline mr-sm-3 mr-2" style="float: right">
                            <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Rechercher..." wire:model.debounce.1s='search'>
                                </div>
                            </div>
                          </form>

                          <br>
                          <br>
                          


                        @if (sizeOf($this->post)==0)
                        <h3 class="text-white mb-0 text-center">Aucune Commande enregistrée pour le moment</h3>
                        @else
                        <table class="table align-items-center table-dark table-flush">

                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort">Code</th>
                                    <th scope="col" class="sort">libellé</th>
                                    <th scope="col" class="sort">Montant</th>
                                    <th scope="col" class="sort">Qté</th>
                                    <th scope="col" class="sort">Total</th>

                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($this->detailCommande as $item)
                                <tr>
                                    <th scope="row">
                                        {{ $item->codeCom }}
                                    </th>
                                    <td class="budget">
                                        {{ $item->libelle }}
                                    </td>
                                    <td class="budget">
                                        {{ $item->montant }}
                                    </td>

                                    <td class="budget">
                                        {{ $item->quantite }}
                                    </td>

                                    <td class="budget">
                                        {{ $item->montant*$item->quantite }}
                                    </td>
                                </tr>

                                @endforeach

                                <tr>
                                    <td colspan="4">
                                        Total
                                    </td>
                                    <td class="budget">
                                        {{ $item->montant_total }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endif
                        @endif



                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="container-fluid ">

        <!-- Dark table -->
        <div class="row ">
            <div class="col">
                <div class="card bg-default shadow">
                    <div class="table-responsive">


                        @if ($liste)
                        <div class="card-header bg-transparent border-0">
                            <h3 class="text-white mb-0">Liste des Commandes</h3>
                        </div>

                        
                        <form class=" navbar-search-light form-inline mr-sm-3 mr-2" style="float: right">
                            <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Rechercher..." wire:model.debounce.1s='search'>
                                </div>
                            </div>
                          </form>

                          <br>
                          <br>
                          


                        @if (sizeOf($this->post)==0)
                        <h3 class="text-white mb-0 text-center">Aucune Commande enregistrée pour le moment</h3>
                        @else
                        <table class="table align-items-center table-dark table-flush">

                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="sort">Code</th>
                                    <th scope="col" class="sort">Nom</th>
                                    <th scope="col" class="sort">Montant</th>
                                    {{-- <th scope="col" class="sort">Livreur</th> --}}
                                    <th scope="col">statut</th>
                                    <th scope="col">Manipulations</th>
                                    <th scope="col">Validations</th>

                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach ($this->post as $item)
                                <tr>
                                    <th scope="row">
                                        {{ $item->codeCom}}
                                    </th>
                                    <td class="budget">
                                        {{ $item->nom }}
                                    </td>
                                    <td class="budget">
                                        {{ $item->montant_total }}
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            @if (!$item->status)
                                            <i class="bg-success"></i> Livré
                                            @else
                                            <i class="bg-warning"></i> Non Livré
                                            @endif

                                        </span>
                                    </td>

                                    <td id="{{ $item->codeCom }}">
                                        <div class="avatar-group"  wire:loading.remove>
                                            <a href="#!" class="btn btn-primary" wire:click="voirDetail('{{$item->codeCom}}')">Voir</a>

                                            <a href="#!" class="btn btn-danger" wire:click="confSupp('{{$item->codeCom}}')">Supprimer</a>

                                            @if (!$item->status==true)
                                            <a href="#!" wire:click='statut("{{$item->codeCom}}")' class="btn btn-success">Desactiver</a>
                                                
                                            @else
                                            <a href="#!" wire:click='statut("{{$item->codeCom}}")' class="btn btn-success">Confirmer</a>
                                                
                                            @endif

                                            </div>


                                    </td>

                                    <td>
                                        <span wire:loading>Patientez...</span>

                                        @if ($supp==55)
                                        @endif

                                        @if ($supp==$item->codeCom)
                                        <button type="button" class="btn btn-danger" wire:loading.remove wire:click="supprimer('{{ $item->codeCom }}')" id="btn-sup">Confirmer</button>
                                        @endif
                                    </td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                        @endif
                        <div class="mt-3 mr-2" style="float: right">
                            <nav aria-label="...">
                                {{ $this->post->links() }}
                            </nav>
                        </div>
                        @endif



                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif



</div>



