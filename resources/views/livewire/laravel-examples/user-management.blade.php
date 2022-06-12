<div>
    

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    @if (sizeOf($this->client)!=0)
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">Liste des clients</h5>
                        </div>
                        
                    </div>
                    @endif
                </div>
                @if (sizeOf($this->client)==0)
                <div class="">
                    <div>
                        <h5 class="mb-0">
                            <div class="text-center">
                                <div>
                                    <h5 class="mb-0">Aucun client pour le moment.</h5>
                                </div>
                                
                            </div>
                        </h5>
                    </div>
                    
                </div> 
                @else
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Numéro
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nom + Prenom
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Ville
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Boite Postale
                                    </th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Téléphone
                                    </th>

                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($this->client as $key=>$item)
                                <tr>
                                    <td class="ps-4" rowspan="2">
                                        <p class="text-xs font-weight-bold mb-0">{{$key+1}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0"> {{$item->nom .' '.$item->prenom}} </p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                                    </td>
                                    <td class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">{{$item->ville}}</p>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-secondary text-xs font-weight-bold">{{$item->postal}}</span>
                                    </td>
                                    <td class="text-center">
                                        {{$item->telephone}}
                                    </td>
                                    <td class="text-center">
                                        {{date_format($item->created_at, 'd-M-Y')}}
                                    </td>
                                </tr>
                                <tr >
                                    <td>Message :</td>
                                    <td colspan='7'>
                                        Message: {{$item->message    }}
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination mx-auto"> 
                        {{$this->client->links()}}
                    </div>
                </div>
                @endif
                
            </div>
        </div>

        
    </div>

</div>
