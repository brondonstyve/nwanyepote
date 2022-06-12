
    <div id="comments">
        <h3 class="mb-6">{{ $comentnombers }} Commentaires</h3>
        <ol id="singlecomments" class="commentlist">
            @foreach ( $data2 as $row)
            <li class="comment">
                <div class="comment-header d-md-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <figure class="user-avatar"><img class="rounded-circle" alt="" src="./assets/img/avatars/te1.jpg"></figure>
                        <div>
                            <h6 class="comment-author"><a href="#" class="link-dark">{{ $row->user->name }}</a></h6>
                            <ul class="post-meta">
                                <li><i class="uil uil-calendar-alt"></i>{{ $row->created_at->format('d') }} {{ $row->created_at->format('M') }} {{ $row->created_at->format('Y') }}</li>
                            </ul>
                                                    <!-- /.post-meta -->
                        </div>
                                                <!-- /div -->
                    </div>
                                            <!-- /div -->
                    <!--<div class="mt-3 mt-md-0 ms-auto">
                        <a href="#" class="btn btn-soft-ash btn-sm rounded-pill btn-icon btn-icon-start mb-0"><i class="uil uil-comments"></i> Reply</a>
                    </div>-->
                    <!-- /div -->
                </div>
                <!-- /.comment-header -->
                <p>{{ $row->commentaire }}</p>
            </li>
            @endforeach
        </ol> 

        <hr>

        <h3 class="mb-3">Voulez vous partager votre pensée?</h3>
        <p class="mb-7">Votre email ne sera pas publié. les champs marqués par (*) sont obligés.</p>
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
        <form class="comment-form">
            <div class="form-floating mb-4">
                <input type="email" class="form-control" placeholder="Email*" id="c-email" wire:model="email">
                <label for="c-email">Email*</label>
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-floating mb-4">
                <input type="text" class="form-control" placeholder="Website" id="c-web" wire:model="swb">
                <label for="c-web">Site web</label>
                @error('swb') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-floating mb-4">
                <textarea name="textarea" class="form-control" placeholder="Comment" style="height: 150px" wire:model="commentaire"></textarea>
                <label>Commentaire *</label>
                @error('commentaire') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <button type="button" class="btn btn-primary rounded-pill mb-0" wire:click.prevent="store()">Envoyer</button>
        </form>                      
    </div>
