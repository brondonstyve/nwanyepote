<div class="col-md-10 mx-auto">
    <div id="comments">
        @if (sizeOf($this->listComment)>0)
        <h3 class="mb-6">{{sizeOf($this->listComment)+sizeOf($this->listRepComment)}} Commentaire(s)</h3>
            @else
            <h3>Aucun commentaire pour le moment</h3>
        @endif
        <ol id="singlecomments" class="commentlist">
           
            
            @foreach ($this->listComment as $item)
            <li class="comment">
                <div class="comment-header d-md-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <figure class="user-avatar"><img class="rounded-circle" alt=""
                                src="{{asset('assets/img/logo-light.png')}}"></figure>
                        <div>
                            <h6 class="comment-author"><a href="#" class="link-dark">{{$item->nom}}</a></h6>
                            <ul class="post-meta">
                                <li><i class="uil uil-calendar-alt"></i>{{$item->created_at}}</li>
                            </ul>
                            <!-- /.post-meta -->
                        </div>
                        <!-- /div -->
                    </div>
                    <!-- /div -->
                    <div class="mt-3 mt-md-0 ms-auto">
                        <a href="#formCom" wire:click="repondre({{$item->id}})" class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i
                                class="uil uil-comments"></i> Repondre</a>
                    </div>
                    <!-- /div -->
                </div>
                <!-- /.comment-header -->
                <p>
                    {{$item->comment}}    
                </p>
                <ul class="children">
                    @foreach ($this->listRepComment as $rep)
                        @if ($rep->commentaire==$item->id)
                        <li class="comment">
                            <div class="comment-header d-md-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt=""
                                            src="{{asset('assets/img/logo-light.png')}}"></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark">{{$rep->nom}}</a></h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>{{$rep->created_at}}</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /div -->
                            </div>
                            <!-- /.comment-header -->
                            <p>{{$rep->comment}}</p>
                        </li>
                        @endif
                    @endforeach
                    

                </ul>
            </li>
            @endforeach


        </ol>
    </div>
    <!-- /#comments -->
    <hr>
    

   @if ($type=='c')
   <h3 class="mb-3">Voulez vous partager votre pensée?</h3>
    <p class="mb-7">Votre email ne sera pas publié. les champs marqués par (*) sont obligés.</p>
   <form class="comment-form" method="POST" wire:submit.prevent='save' id='formCom'>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" placeholder="Name*" id="c-name" wire:model.lazy='commentaire.nom'
            required>
        <label for="c-name">Nom *</label>
    </div>
    <div class="form-floating mb-4">
        <input type="email" class="form-control" placeholder="Email*" id="c-email"
            wire:model.lazy='commentaire.email' required>
        <label for="c-email">Email*</label>
    </div>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" placeholder="Website" id="c-web" wire:model.lazy='commentaire.cweb'>
        <label for="c-web">Site web</label>
    </div>
    <div class="form-floating mb-4">
        <textarea name="textarea" class="form-control" placeholder="Comment" style="height: 150px"
            wire:model.lazy='commentaire.comment' required></textarea>
        <label>Commentaire *</label>
    </div>
    @if ($showSuccesNotification)
    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon text-dark"><i class="ni ni-like-2"></i></span>
        <span class="alert-text text-dark">{{ $message}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    @if ($showErrorNotification)
    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon text-dark"><i class="ni ni-like-2"></i></span>
        <span class="alert-text text-dark">{{ $message}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
    <button type="submit" class="btn btn-primary rounded-pill mb-0" wire:target='save'
        wire:loading.remove>Envoyer</button>
    <button type="button" class="btn btn-primary rounded-pill mb-0" wire:target='save'
        wire:loading>Patientez...</button>
</form>
   @else
   <h3 class="mb-3">Reponse à un commentaire</h3>
    <p class="mb-7">Votre email ne sera pas publié. les champs marqués par (*) sont obligés.</p>
   <form class="comment-form" method="POST" wire:submit.prevent='save' id='formCom'>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" placeholder="Name*" id="c-name" wire:model.lazy='commentaireR.nom'
            required>
        <label for="c-name">Nom *</label>
    </div>
    <div class="form-floating mb-4">
        <input type="email" class="form-control" placeholder="Email*" id="c-email"
            wire:model.lazy='commentaireR.email' required>
        <label for="c-email">Email*</label>
    </div>
    <div class="form-floating mb-4">
        <input type="text" class="form-control" placeholder="Website" id="c-web" wire:model.lazy='commentaireR.cweb'>
        <label for="c-web">Site web</label>
    </div>
    <div class="form-floating mb-4">
        <textarea name="textarea" class="form-control" placeholder="Comment" style="height: 150px"
            wire:model.lazy='commentaireR.comment' required></textarea>
        <label>Commentaire *</label>
    </div>
    @if ($showSuccesNotification)
    <div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
        <span class="alert-icon text-dark"><i class="ni ni-like-2"></i></span>
        <span class="alert-text text-dark">{{ $message}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif

    @if ($showErrorNotification)
    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
        <span class="alert-icon text-dark"><i class="ni ni-like-2"></i></span>
        <span class="alert-text text-dark">{{ $message}}</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
    </div>
    @endif
    <button type="submit" class="btn btn-primary rounded-pill mb-0" wire:target='save'
        wire:loading.remove>Envoyer</button>
    <button type="button" class="btn btn-primary rounded-pill mb-0" wire:target='save'
        wire:loading>Patientez...</button>
</form>
   @endif
    <!-- /.comment-form -->
</div>