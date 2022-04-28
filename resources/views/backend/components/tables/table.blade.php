
    <div class="row">

        <div class="container-fluid">
            <div class="card card-body pt-4 p-3">
                
                      <div class="col-md-12 mt-4">

                        @if ($showSuccesNotification1)
                        <div
                            class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{{ $message}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @endif

                        @if ($showErrorNotification1)
                        <div
                            class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{{ $message}}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @endif

                        

                            <h4 class="mb-0">Gestion des visuels</h4>

                            <h3 for="">Entête</h3>
                            <form  wire:submit.prevent='save_visuel'>
                                @csrf
                            <div class="row">
                                

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="service-name" class="form-control-label">Description</label>
                                            <div class="">
                                                <textarea wire:model.lazy="servicePage.descriptionEnt" class="form-control" id="about" rows="7" required ></textarea>
                                            </div>
                                            
                                         </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="service-name" class="form-control-label">Image Entête</label>
                                            <div class="">
                                                 <input wire:model="imageEnt" class="form-control" type="file"  accept="image/*" > 
                                            </div> 
                                            @error('imageEnt') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                            <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imageEnt'>
                                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                                Patientez le chargement de l'image...
                                              </button>
                                            
                                         </div> 
                                    </div>

                                    <div class="col-md-4">
                                    
                                        <div class="form-group">
                                            <label for="service-name" class="form-control-label">Visuel</label>
                                            <div class="">
                                                @if ($imageEnt)
                                                <div class="row">
                                                    <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{$imageEnt->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                @if ($this->servicePage->imageEnt)
                                                <div class="row">
                                                    <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                                        <div class="card card-blog card-plain">
                                                            <div class="position-relative">
                                                                <a class="d-block shadow-xl border-radius-xl">
                                                                    <img src=" {{ asset('/app/service/'.$this->servicePage->imageEnt)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                @endif
                                            </div>
                                            
                                         </div>
                                    </div>

                            <h3 for="">Corps de la page</h3>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Description</label>
                                    <div class="">
                                        <textarea wire:model.lazy="servicePage.description" class="form-control" id="about" rows="3" required ></textarea>
                                    </div>
                                    
                                 </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Surfaces crées (en m²)</label>
                                    <div class="">
                                        <input wire:model.lazy="servicePage.surface" class="form-control" type="number" >
                                    </div>
                                    
                                 </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Nombre de projet réalisé</label>
                                    <div class="">
                                        <input wire:model.lazy="servicePage.projetnb" class="form-control" type="number" >
                                    </div>
                                    
                                 </div>
                            </div>

                            <h3 for="">bas de page</h3>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Image </label>
                                    <div class="">
                                         <input wire:model="imagebas" class="form-control" type="file"  accept="image/*" > 
                                    </div> 
                                    @error('imagebas') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                    <button class="btn btn-primary btn-sm mt-2" type="button" disabled wire:loading wire:target='imagebas'>
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Patientez le chargement de l'image...
                                      </button>
                                    
                                 </div> 
                            </div>

                            <div class="col-md-4">
                            
                                <div class="form-group">
                                    <label for="service-name" class="form-control-label">Visuel</label>
                                    <div class="">
                                        @if ($imagebas)
                                        <div class="row">
                                            <div class="col-xl-4 mx-auto col-md-12 mb-xl-0 mt-2">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" {{$imagebas->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        @if ($this->servicePage->imagebas)
                                        <div class="row">
                                            <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                                <div class="card card-blog card-plain">
                                                    <div class="position-relative">
                                                        <a class="d-block shadow-xl border-radius-xl">
                                                            <img src=" {{ asset('/app/service/'.$this->servicePage->imagebas)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endif
                                    </div>
                                    
                                 </div>
                            </div>

                            <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                              </div>
                     </div>
                    </form>
                </div></div>
        </div>
            
        @if ($showSuccesNotification)
        <div
            class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
            <span
                class="alert-text text-white">{{ $message}}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif

        @if ($showErrorNotification)
        <div
            class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
            <span
                class="alert-text text-white">{{ $message}}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
        @endif

          <div class="col-md-7 mt-4">
              <div class="card">
                  <div class="card-header pb-0 px-3">
                      <h6 class="mb-0">Gestion des services</h6>
                  </div>
                  <div class="card-body pt-4 p-3">
                      <ul class="list-group">
                        
                        @if (sizeOf($this->services)==0)
                        <div
                            class="mt-3 alert alert-primary alert-dismissible fade show" role="alert">
                            <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                            <span
                                class="alert-text text-white">{!! __('Aucun service enregistré pour le moment. <br> &nbsp;&nbsp;&nbsp; Veuillez enregistrer un nouveau service dans le formulaire à droite.')!!}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @else
                            
                        @endif
                        @foreach ($this->services as $key=>$service)
                        @if ($supp==$service->id)
                        <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg" wire:model='supp'>
                            <div class="d-flex  flex-column text-justify">
                               <h4 class="mb-3 text-sm alert alert-danger text-white text-center"><i class="fa fa-warning" aria-hidden="true"></i>  Confirmation de suppression de {{ $service->libelle }}</h4>
                                <span class="mb-2 text-xs">La suppression de ce service engendrera automatiquement la suppression de tous les sous services et réalisations liés à ce dernier. 
                                    <br>
                                Cliquez sur le bouton ci dessous si vous souhaitez continuer la suppression.
                                </span>
                               <div class="mx-auto">
                                   <button class="btn btn-danger" wire:click='delete({{$service->id}})'>
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
                                <h4 class="mb-3 text-sm">{{$service->libelle}}</h4>
                                <span class="text-xs">Description : <span class="text-dark ms-2 font-weight-bold"> {{$service->description}} </span></span>
                            </div>
                            <div class="ms-auto">
                                <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;" wire:click="$set('supp',{{$service->id}})"><i class="far fa-trash-alt me-2" aria-hidden="true"></i>Supprimer</a>
                                
                                <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="javascript:;" wire:click="update({{$service->id}})"><i class="fas fa-pencil-alt text-dark  me-2" aria-hidden="true"></i>Voir / Modifier</a>
                                
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
                              <h6 class="mb-0">Nouveau service / Modification des services</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-4 p-3">
                    <form wire:submit.prevent="save" action="#" method="POST" role="form text-left" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user-name" class="form-control-label">Libellé du service</label>
                                    <div class="">
                                        <input wire:model.lazy="service.libelle" class="form-control" type="text" placeholder="Libellé" id="user-name" required>
                                    </div>
                                @error('image') <span class="text text-danger error">Erreur lors du téléchargement</span> @enderror

                                  </div>
                                  
                           
                                  
                                  
                                <div class="form-group">
                                    <label for="user.location" class="form-control-label">Image</label>
                                    <div class="">
                                        <input wire:model="image" class="form-control" type="file">
                                    </div>
                                </div>

                                @if ($image)
                                  <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="service-name" class="form-control-label">Visuel  </label>
                                        
                                <div class="row">
                                    <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src=" {{$image->temporaryUrl()}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                @else
                                @if ($this->service->diminutif)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="service-name" class="form-control-label">Visuel  </label>
                                <div class="row">
                                    <div class="col-xl-8 mx-auto col-md-12 mb-xl-0 mt-2">
                                        <div class="card card-blog card-plain">
                                            <div class="position-relative">
                                                <a class="d-block shadow-xl border-radius-xl">
                                                    <img src=" {{ asset('/app/service/'.$this->service->diminutif)}} " alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                @endif
                                @endif
                            
                        <div class="form-group">
                            <label for="about">Description</label>
                            <div class="">
                                <textarea wire:model.lazy="service.description" class="form-control" id="about" rows="7" placeholder="à propos du service" required></textarea>
                            </div>
                         </div>

                         <div class="form-group">
                            <label for="about">Lien de l'article</label>
                            <div class="">
                                <textarea class="form-control" wire:model.lazy="service.lien" id="about" rows="5" placeholder="Lien de l'article" ></textarea>
                            </div>
                         </div>

                         <br>
                            <span class="mb-2 text-xs "><span class="text-danger ms-2 font-weight-bold ">
                                S'il vout plait patientez le chargement des images avant de passer à l'enregistrement.    
                            </span></span>
                            
                        <div class="d-flex justify-content-end">
                          @if ($modification!=null)
                            <input type="button" class="btn bg-gradient-danger btn-md mt-4 mb-4 mr-" value="Annuler" wire:click='annuler()'>
                          <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer les modification</button>
                          
                          @else                            
                          <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">Enregistrer</button>
                          
                          @endif
                        </div>
                    </form>
    
                </div>
              </div>
          </div>

         

         


      </div>