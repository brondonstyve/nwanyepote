<div>

    


    <section class="wrapper bg-dark">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
            <div class="row">
                <div class="col-md-10 col-xl-8 mx-auto">
                    <div class="post-header">
                        <div class="post-category text-line">
                            <a href="#" class="hover" rel="category">
                                Page d'un participant
                            </a>
                        </div>
                        <!-- /.post-category -->
                        <h1 class="display-1 mb-4  text-white">
                            {{$this->participant->name .' '.$this->participant->prenom}}
                        </h1>
                        <ul class="post-meta mb-5">
                            <li class="post-date"><i
                                    class="uil uil-calendar-alt"></i><span>{{$this->participant->created_at->format('d-M-Y  H:i')}}</span></li>
                            <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Par
                                        {{$this->participant->auteur}}</span></a></li>
                            <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>{{$this->participant->voie}}
                                    <span>Voie(s)</span></a></li>
                        </ul>
                        @if (!$this->evenement->statut)
                        <h1 class="display-1 mb-4  text-danger" style="text-transform: uppercase">
                          éVéNEMENT CLOTURé
                        </h1>
                        @endif
                        <!-- /.post-meta -->
                    </div>
                    <!-- /.post-header -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


    <section class="wrapper bg-gray">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
          <div class="row gy-10 gy-md-13 gy-lg-0 align-items-center">

            <div class="row gx-3 gy-10 mb-15 mb-md-18 align-items-center">
                <div class="col-lg-6">
                  <figure><img class="w-auto" src="{{asset('/assets/img/3d3.png')}}" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5 offset-lg-1">
                  <h2 class="fs-16 text-uppercase text-gradient gradient-1 mb-3">Contactez Moi</h2>
                  <h3 class="display-4 mb-8">Vous avez des questions? n'hésitez pas à me contacter.</h3>
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{asset('/assets/img/icons/solid/pin.svg')}}" class="icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4" style="width: 1.5rem; height: 1.5rem;" alt="">
                    </div>
                    <div>
                      <h5 class="mb-0">Adresse</h5>
                      <address>{{$this->participant->adresse}}</address>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{asset('/assets/img/icons/solid/rotary.svg')}}" class="icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4" style="width: 1.5rem; height: 1.5rem;" alt="">
                    </div>
                    <div>
                      <h5 class="mb-0">Téléphone</h5>
                      <p>{{$this->participant->phone}}</p>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div>
                      <img src="{{asset('/assets/img/icons/solid/emails.svg')}}" class="icon-svg icon-svg-xs solid-duo text-grape-fuchsia mt-1 me-4" style="width: 1.5rem; height: 1.5rem;" alt="">
                    </div>
                    <div>
                      <h5 class="mb-0">E-mail</h5>
                      <p class="mb-0"><a href="{{$this->participant->email}}" class="link-body">{{$this->participant->email}}</a></p>
                    </div>
                  </div>
                </div>
                <!--/column -->
              </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->

      <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
      <div class="">
        <h2 class="display-1 fs-60 mb-4 px-md-15 px-lg-0 text-center">Procedez au vote pour Moi.</h2>
        <p class="lead fs-24 lh-sm mb-7 mx-md-13 mx-lg-10">Vous n'avez qu'à cliquer sur le bouton <span class="underline-2 blue">voter pour moi</span> juste en dessous pour une donner une voie.</p>

      </div>
    </div>
      </section>

      <section class="wrapper bg-light">
        <div class="container pt-8 pt-md-14">
          <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
            <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
              <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
              <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;">
            
        </div>
        
            <figure class="rounded">
                <h3>Elément de participation : @if($this->participant->type=='Image') Visuel @else Vidéo @endif </h3>
                @if ($this->participant->type=='Image')
                <img src="{{asset('app/participant/'.$this->participant->image)}}" srcset="./assets/img/photos/about7@2x.jpg 2x" alt="" />
                    
                @else
                <a href="{{$this->participant->video}}"
                    class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"
                    style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;"
                    data-glightbox><i class="icn-caret-right"></i></a>
                <img src="{{asset('assets/img/logo.jpg')}}" srcset="./assets/img/photos/about7@2x.jpg 2x" alt="" />
                @endif
            </figure>
            </div>
            <!--/column -->
            <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
              <h5 class="display-1 mb-5">Mon Discour pour cet événement.</h5>
              <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-justify">{{$this->participant->apropos}}</p>
              <div class="d-flex justify-content-center justify-content-lg-start">
                <span><a href="{{route('evenement')}}" class="btn btn-lg btn-primary rounded-pill me-2">Retour aux événements</a></span>

                @if (!$this->evenement->statut)
                    <span><a href="#!" class="btn btn-lg btn-outline-primary rounded-pill disabled">Evénement cloturé</a></span>
                @else
                @if (!auth()->guest())
                @if ($this->asTuVoter)
                <span><a href="#!" class="btn btn-lg btn-outline-primary rounded-pill disabled">Déjà Voté</a></span>
                    
                @else
                <span><a href="#!" data-bs-toggle="modal" data-bs-target="#modal-01" class="btn btn-lg btn-outline-primary rounded-pill" wire:click='preparerVote({{$this->participant->user}},"{{$this->participant->name}}")'>Voter pour moi</a></span>
                    
                @endif
                @else
                <span><a href="#!" data-bs-toggle="modal" data-bs-target="#modal-01" class="btn btn-lg btn-outline-primary rounded-pill" wire:click='preparerVote({{$this->participant->user}},"{{$this->participant->name}}")'>Voter pour moi</a></span>
                
                @endif
                @endif
                
                
              </div>
            </div>
            <!--/column -->
          </div>
          <!-- /.row -->

          <div class="modal fade modal-bottom-center" id="modal-01" tabindex="-1" style="" wire:ignore.self>
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-body p-6">
                  <div class="row">
                    <div class="col-md-12 col-lg-8 mb-4 mb-lg-0 my-auto align-items-center">
                      <h4 class="mb-2">Confirmation de vote</h4>
                      <p class="mb-0">Vous voulez effectuer un vote pour le candidat <span class="text-primary">{{$nom}}</span>. l'action sera irreversible et vous ne possedez qu'un seul vote valide . voulez vous continuer ?</p>
                    </div>
                    <!--/column -->
                    <div class="col-md-5 col-lg-4 text-lg-end my-auto">
                      <a href="#" class="btn btn-primary rounded-pill" data-bs-dismiss="modal" aria-label="Close"  data-bs-toggle="modal" data-bs-target="#modal-02" wire:click='voter()'>Valider</a>
                      <a href="#" class="btn btn-danger rounded-pill" data-bs-dismiss="modal" aria-label="Close">Annuler</a>
                    </div>
                    <!--/column -->
                  </div>
                  <!--/.row -->
                </div>
                <!--/.modal-body -->
              </div>
              <!--/.modal-content -->
            </div>
            <!--/.modal-dialog -->
          </div>


  
<div class="modal fade" id="modal-02" tabindex="-1" wire:ignore.self>
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <figure class="mb-6"><img src="{{asset('assets/img/i10.png')}}" alt="" /></figure>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <h3>Vote éffectué avec succès</h3>
        <p class="mb-6">Le participant {{$nom}} passe à {{$this->participant->voie}}. <br> Merci de me soutenir par ce coup de pousse. </p>
        <!-- /.row -->
        <div class="col-md-5 col-lg-4  mx-auto">
            <a href="#" class="btn btn-primary rounded-pill" data-bs-dismiss="modal" aria-label="Close">Merci</a>
          </div>
      </div>
      
      <!--/.modal-body -->
    </div>
    <!--/.modal-content -->
  </div>
  <!--/.modal-dialog -->
</div>

      </section>
      <!-- /section -->
</div>
