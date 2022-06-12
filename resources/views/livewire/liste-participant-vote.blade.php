
@if (sizeOf($this->participant)==0)
<div class="row">
    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto">
        <h2 class="fs-15 text-uppercase text-primary text-center">Participants</h2>
        <h3 class="display-4 mb-6 text-center text-danger">Aucun participant pour cet événement.</h3>
    </div>
    <!-- /column -->
</div>
@else
<section class="wrapper bg-light">
<div class="container pb-14 pb-md-16">
    <div class="row">
      <div class="col-lg-12 mx-auto">
          
                    <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto mt-10">
                        <h2 class="fs-15 text-uppercase text-primary text-center">Participants</h2>
                        <h3 class="display-4 mb-6 text-center">Soutenez vos proches en votant pour
                            eux.</h3>
                    </div>
        <!-- /column -->
        <!-- /.blog -->
        <div class="blog grid grid-view">
          <div class="row isotope gx-md-8 gy-8 mb-8">


              @foreach ($this->participant as $key=>$item)
              <article class="item post col-md-4">
                  <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale" style="max-height: 250px; min-height: 250px">

                      @if ($this->evenement->type=='image')
                          <a href="#"> <img src="{{asset("app/participant/$item->image")}}" alt="" /></a>
                          <figcaption>
                            <h5 class="from-top mb-0">Voter</h5>
                          </figcaption>
                          @else
                          <a href="{{$item->video}}"
                              class="btn btn-circle btn-primary btn-play ripple mx-auto mb-5 position-absolute"
                              style="top:50%; left: 20%; transform: translate(-50%,-50%); z-index:3;"
                              data-glightbox><i class="icn-caret-right"></i></a>
                          <img src="{{asset("assets/img/logo.jpg")}}" srcset="{{asset("assets/img/logo.jpg")}} 2x"
                              alt="">
                          @endif
                    
                    </figure>
                    <div class="card-footer" style="min-height: 300px; max-height: 300px">
                      <div class="post-header">
                        <div class="post-category text-line">
                          @if ($this->evenement->type=='image')
                          <a href="{{route("participant",$item->id)}}" class="hover" rel="category">Avec Image</a>
                          @else
                          <a href="{{route("participant",$item->id)}}" class="hover" rel="category">Avec Vidéo</a>
                          @endif
                        </div>
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route("participant",$item->id)}}">{{$item->name}}</a>
                            @if ($this->participant[0]->voie!=0)
                            <span style="float: right;" class="text-success">{{$key+1}} @if($key+1==1) ier(e) @else ieme @endif</span>
                            @endif
                        </h2>
                        
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content text-justify">
                        <p>{!!substr($item->apropos,0,150)!!} [...]</p>
                      </div>
                      <a href="{{route('participant',$item->id)}}"><span class="badge bg-primary rounded-0 accordion-button">Lire Plus</span></a>

                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                      <ul class="post-meta d-flex mb-0">
                        <li class="post-date">
                          @if (!auth()->guest())
                          <a href="#!" 
                          data-bs-toggle="modal" data-bs-target="#modal-01" wire:click='preparerVote({{$item->user}},"{{$item->name}}")'
                          class="btn btn-expand btn-soft-primary rounded-pill">
                          <i class="uil uil-arrow-right"></i>
                          <span>Voter pour moi</span>
                      </a>
                          @else
                          @if ($this->asTuVoter)
                          <span>Vous avez Déjà voté</span>
                          @else
                          <a href="#!" 
                              data-bs-toggle="modal" data-bs-target="#modal-01" wire:click='preparerVote({{$item->user}},"{{$item->name}}")'
                              class="btn btn-expand btn-soft-primary rounded-pill">
                              <i class="uil uil-arrow-right"></i>
                              <span>Voter pour moi</span>
                          </a>
                          @endif
                          @endif
                            
                        </li>
                        <li class="post-likes ms-auto"><a href="#!"><i class="uil uil-heart-alt"></i>{{$item->voie}} Voie(s)</a></li>
                      </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
              @endforeach
          </div>
          <!-- /.row -->
        </div>
        <!-- /.blog -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>

  <div class="modal fade modal-bottom-center" id="modal-01" tabindex="-1" style="" wire:ignore.self>
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-body p-6">
          <div class="row">
            <div class="col-md-12 col-lg-8 mb-4 mb-lg-0 my-auto align-items-center">
              <h4 class="mb-2">Confirmation de vote</h4>
              <p class="mb-0">Vous voulez effectuer un vote pour le candidat <span class="text-primary">{{$nom}}</span>. L'action sera irreversible et vous ne possedez qu'un seul vote valide . voulez vous continuer ?</p>
            </div>
            <!--/column -->
            <div class="col-md-5 col-lg-4 text-lg-end my-auto">
              <a href="#" class="btn btn-primary rounded-pill" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#modal-02" wire:click='voter()'>Valider</a>
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
  <!-- /.container -->

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
          <p class="mb-6">Merci de me soutenir par ce coup de pousse. </p>
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

@endif


    