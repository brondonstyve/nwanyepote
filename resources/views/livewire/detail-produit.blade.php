<div>
    <section class="wrapper bg-gray">
        <div class="container py-3 py-md-5">
            <nav class="d-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{route("index")}}">
                            Accueil
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{route("boutique")}}">
                            Boutique
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-muted">
                            {{$this->produit->lib_collection}}
                    </li>
                    <li class="breadcrumb-item active text-muted" aria-current="page">
                        {{$this->produit->libelle}}
                    </li>
                </ol>
            </nav>
            <!-- /nav -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-8">
                <div class="col-lg-6">
                    <div class="swiper-container swiper-thumbs-container dots-over swiper-container-0" data-margin="10"
                        data-dots="false" data-nav="true" data-thumbs="true">
                        <div class="swiper-main">
                            <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                <div class="swiper-wrapper" id="swiper-wrapper-2a0964863798810910" aria-live="off"
                                    style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 5"
                                        style="width: 610px; margin-right: 10px;">
                                        <figure class="rounded" style="min-height: 400px; max-height: 500px"><img
                                                src="{{asset("app/produit/".$this->produit->img_principale)}}"
                                            alt=""><a class="item-link swiper-no-swiping" href="{{asset("
                                                app/produit/".$this->produit->img_principale)}}"
                                                data-glightbox="" data-gallery="product-group"><i
                                                    class="uil uil-focus-add"></i></a></figure>
                                    </div>
                                    @foreach (explode('->',$this->produit->image) as $key=>$item)

                                    @if ($item && $item!=$this->produit->img_principale)
                                    <div class="swiper-slide " role="group" aria-label="{{$key}} / 5"
                                        style="width: 610px; margin-right: 10px;">
                                        <figure class="rounded" style="min-height: 400px; max-height: 500px"><img
                                                src="{{asset("app/produit/$item")}}" alt=""><a
                                                class="item-link swiper-no-swiping" href="{{asset("
                                                app/produit/$item")}}" data-glightbox="" data-gallery="product-group"><i
                                                    class="uil uil-focus-add"></i></a></figure>
                                    </div>
                                    @endif

                                    @endforeach



                                </div>
                                <!--/.swiper-wrapper -->
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                            <div class="swiper-controls">
                                <div class="swiper-navigation">
                                    <div class="swiper-button swiper-button-prev swiper-button-disabled" tabindex="-1"
                                        role="button" aria-label="Diapositive précédente"
                                        aria-controls="swiper-wrapper-2a0964863798810910" aria-disabled="true"></div>
                                    <div class="swiper-button swiper-button-next" tabindex="0" role="button"
                                        aria-label="Diapositive suivante"
                                        aria-controls="swiper-wrapper-2a0964863798810910" aria-disabled="false"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.swiper -->
                        <div class="swiper swiper-thumbs swiper-initialized swiper-horizontal swiper-pointer-events">
                            <div class="swiper-wrapper" id="swiper-wrapper-cec46dc8ea936c71" aria-live="polite"
                                style="transform: translate3d(0px, 0px, 0px);">

                                <div class="swiper-slide swiper-slide-active swiper-slide-thumb-active" role="group"
                                    aria-label="1 / 5" style="width: 114px; margin-right: 10px; max-height:75px"><img
                                        src="{{asset("app/produit/".$this->produit->img_principale)}}"
                                    srcset="{{asset("app/produit/".$this->produit->img_principale)}} 2x" class="rounded"
                                    alt=""></div>

                                @foreach (explode('->',$this->produit->image) as $key=>$item)
                                @if ($item && $item!=$this->produit->img_principale)
                                <div class="swiper-slide" role="group" aria-label="{{$key}} / 5"
                                    style="width: 114px; margin-right: 10px; max-height:75px"><img src="{{asset("
                                        app/produit/$item")}}" srcset="{{asset("app/produit/$item")}} 2x"
                                        class="rounded" alt=""></div>
                                @endif
                                @endforeach

                            </div>
                            <!--/.swiper-wrapper -->
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!-- /column -->
                <div class="col-lg-6">
                    <div class="post-header mb-5">
                        <h2 class="post-title display-5">
                            <a href="" class="link-dark">
                                {{$this->produit->libelle}}
                            </a>
                        </h2>
                        <p class="price fs-20 mb-2"><span class="amount">{{number_format($this->produit->prix,0,'','
                                ')}} FCFA</span></p>
                        <a href="#" class="link-body ratings-wrapper"><span
                                class="ratings @if($this->produit->etoile==1) one @endif @if($this->produit->etoile==2) two @endif @if($this->produit->etoile==3) three @endif @if($this->produit->etoile==4) four @endif  @if($this->produit->etoile==5) five @endif"></span><span>(5
                                avis)</span></a>
                    </div>
                    <!-- /.post-header -->
                    <p class="mb-6">
                        {{$this->produit->description}}
                    </p>
                    <form>
                        <fieldset class="picker">
                            <legend class="h6 fs-16 text-body mb-3">
                                Couleurs disponibles
                            </legend>
                            <label for="color-1" style="--color:#fab758">
                                <input type="radio" name="colors" id="color-1" checked="">
                                <span>Jaune</span>
                            </label>
                            <label for="color-2" style="--color:#e2626b">
                                <input type="radio" name="colors" id="color-2">
                                <span>rouge</span>
                            </label>
                            <label for="color-3" style="--color:#7cb798">
                                <input type="radio" name="colors" id="color-3">
                                <span>Vert</span>
                            </label>
                            <label for="color-4" style="--color:#3f78e0">
                                <input type="radio" name="colors" id="color-4">
                                <span>Bleu</span>
                            </label>
                            <label for="color-5" style="--color:#a07cc5">
                                <input type="radio" name="colors" id="color-5">
                                <span>Mauve</span>
                            </label>
                            <label for="color-6" style="--color:#000000">
                                <input type="radio" name="colors" id="color-6">
                                <span>Mauve</span>
                            </label>
                        </fieldset>
                        <div class="row">
                            <div class="col-lg-9 d-flex flex-row pt-2">
                                <div>
                                    <div class="form-select-wrapper">
                                        <select class="form-select" wire:model='qte'>
                                            @for ($i = 1; $i < 100; $i++) <option value="{{$i}}">{{$i}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <!--/.form-select-wrapper -->
                                </div>
                                <div class="flex-grow-1 mx-2">
                                    <button type="button" class="btn btn-primary btn-icon btn-icon-start rounded w-100 flex-grow-1" wire:click='panier({{$this->produit->id}})'><i
                                            class="uil uil-shopping-bag"></i>Ajouter au chariot</button>
                                </div>
                                <div>
                                    <button class="btn btn-block btn-red btn-icon rounded px-3 w-100 h-100"><i
                                            class="uil uil-heart"></i></button>
                                </div>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </form>
                    <!-- /form -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <ul class="nav nav-tabs nav-tabs-basic mt-12">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#tab1-1">
                        détails du produit
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab1-2">
                        Information additionnelle
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tab1-3">
                        Livraison
                    </a>
                </li>
            </ul>
            <!-- /.nav-tabs -->
            <div class="tab-content mt-0 mt-md-5">
                <div class="tab-pane fade show active" id="tab1-1">
                    <p>
                        {{$this->produit->description}}
                    </p>
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab1-2">
                    <p>
                        Nwanyepote commercialise des mélanges artisanaux et haut-de-gamme. Le nom du
                        produit et le prix sont bien mis en évidence, ce qui est une très bonne chose. L’image utilisée
                        pour présenter le produit est en HD. Il n’y en a qu’une. Mais dans ce cas, en proposer plusieurs
                        aurait été parfaitement inutile. La description est complète et bien structurée. A ce sujet, on
                        remarquera la présence de la petite miniature, du titre (Fun & Fruity) et les espaces entre les
                        paragraphes. Le bouton d’ajout panier saute aux yeux, à
                        cause de sa couleur.
                    </p>
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab1-3">
                    <p>
                        Notre politique de remboursement et de retour dure 30 jours. Si 30 jours se sont écoulés depuis votre achat, nous ne pouvons pas vous offrir un remboursement complet ou un échange.
                        <br>
                        Pour être éligible à un retour, votre article doit être inutilisé et dans le même état que vous l’avez reçu. Il doit également être dans l’emballage d’origine.
                        <br>

                        Plusieurs types de marchandises sont exemptées de retour. Les denrées périssables telles que la nourriture, les fleurs, les journaux ou les magazines ne peuvent pas être retournées. Nous n’acceptons pas non plus les produits intimes ou sanitaires, les matières dangereuses ou les liquides ou gaz inflammables.
                        <br>

                        Articles non remboursables supplémentaires :
                    </p>
                </div>
                <!--/.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-14 py-md-16">
            <h3 class="h2 mb-6 text-center">Vous pourriez aussi aimer</h3>
            <div class="swiper-container blog grid-view shop mb-6 swiper-container-1" data-margin="30" data-dots="true"
                data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-913f9e22f5b2ae55" aria-live="off"
                        style="cursor: grab; transform: translate3d(0px, 0px, 0px);">

                        @foreach ($this->produitSim as $key=>$item)
                            
                        <div class="swiper-slide project item swiper-slide-active" role="group" aria-label="{{$key+1}} / {{sizeOf($this->produitSim)}}"
                        style="width: 410px; margin-right: 30px;">
                        <figure class="rounded mb-6" style="max-height: 250px;min-height: 250px">
                            <img src="{{asset("app/produit/$item->img_principale")}}"
                                srcset="{{asset("app/produit/$item->img_principale")}} 2x"
                                alt="">
                            <a class="item-like " href="# " data-bs-toggle="white-tooltip " title=" "
                                data-bs-original-title="Add to wishlist "
                                aria-label="Ajouter à la liste de souhaits "><i class="uil uil-heart "></i></a>
                            <a class="item-view " href="{{route('detail-produit',encrypt($item->id))}}" data-bs-toggle="white-tooltip " title=" "
                                data-bs-original-title="Quick view " aria-label="Aperçu rapide "><i
                                    class="uil uil-eye "></i></a>
                            <a href="#!" class="item-cart" wire:click='panier1({{$item->id}})'><i class="uil uil-shopping-bag "></i> AJouter au panier</a>
                            <span
                                class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13 "
                                style="top: 1rem; left: 1rem; "><span>vente!</span></span>
                        </figure>
                        <div class="post-header ">
                            <div class="d-flex flex-row align-items-center justify-content-between mb-2 ">
                                <div class="post-category text-ash mb-0 ">{{$item->lib_collection}}</div>
                                <span class="ratings  @if($item->etoile==1) one @endif @if($item->etoile==2) two @endif @if($item->etoile==3) three @endif @if($item->etoile==4) four @endif  @if($item->etoile==5) five @endif"></span>
                            </div>
                            <h2 class="post-title h3 fs-22 "><a href="{{route('detail-produit',encrypt($item->id))}}" class="link-dark ">{{$item->libelle}}</a>
                            </h2>
                            <p class="price "><del><span class="amount ">{{number_format($item->prix+($item->prix*30)/100,0,'',' ')}} Fcfa</span></del> <ins><span
                                        class="amount ">{{number_format($item->prix,0,'',' ')}} Fcfa</span></ins></p>
                        </div>
                        <!-- /.post-header -->
                    </div>
                    <!--/.swiper-slide -->
                        @endforeach



                    </div>
                    <!--/.swiper-wrapper -->
                    <span class="swiper-notification " aria-live="assertive " aria-atomic="true "></span>
                </div>
                <!-- /.swiper -->
                <div class="swiper-controls ">
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal ">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active " tabindex="0 "
                            role="button " aria-label="Aller
                                    à la diapositive 1 " aria-current="true "></span><span
                            class="swiper-pagination-bullet " tabindex="0 " role="button "
                            aria-label="Aller à la diapositive 2 "></span>
                        <span class="swiper-pagination-bullet " tabindex="0 " role="button "
                            aria-label="Aller à la diapositive 3 "></span>
                    </div>
                </div>
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-10">
                <aside class="col-lg-4 sidebar">
                    <div class="widget mt-1">
                        <h4 class="widget-title mb-3">Répartition des notes</h4>
                        <div class="mb-5"><span class="ratings @if(round($this->moy[0]->moyenne)==1) one @endif @if(round($this->moy[0]->moyenne)==2) two @endif @if(round($this->moy[0]->moyenne)==3) three @endif @if(round($this->moy[0]->moyenne)==4) four @endif  @if(round($this->moy[0]->moyenne)==5) five @endif"></span><span>{{number_format($this->moy[0]->moyenne,1,',','')}} Sur 5</span></div>
                        <!-- /.progress-list -->
                    </div>
    
                    <h3 class="mb-3">Voulez vous partager votre pensée?</h3>
                    <p class="mb-7">Votre email ne sera pas publié. les champs marqués par (*) sont obligés.</p>
                   <form class="comment-form" method="POST" wire:submit.prevent='save' id='formCom'>
                    <div class="form-floating mb-4">
                        <select class="form-control" wire:model.lazy='commentaire.etoile' required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>    
                        <label for="c-name">Nombre d'étoile *</label>
                    </div>
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
                        <span class="alert-text text-dark">{{$message}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif
                
                    @if ($showErrorNotification)
                    <div class="mt-3 alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="alert-icon text-dark"><i class="ni ni-like-2"></i></span>
                        <span class="alert-text text-dark">{{$message}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary rounded-pill mb-0" wire:target='save'
                        wire:loading.remove>Envoyer</button>
                    <button type="button" class="btn btn-primary rounded-pill mb-0" wire:target='save'
                        wire:loading>Patientez...</button>
                </form>
                    <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
                <div class="col-lg-8">
                    <div id="comments">
                        <ol id="singlecomments" class="commentlist">

                            @foreach ($this->listComment as $item)
                            <li class="comment">
                                <div class="comment-header d-md-flex align-items-center">
                                    <figure class="user-avatar"><img class="rounded-circle" alt="" src="{{asset("assets/img/logo.jpg")}}" /></figure>
                                    <div>
                                        <h6 class="comment-author"><a href="#" class="link-dark"> {{$item->nom}} </a></h6>
                                        <ul class="post-meta">
                                            <li><i class="uil uil-calendar-alt"></i>{{$item->created_at}}</li>
                                        </ul>
                                        <!-- /.post-meta -->
                                    </div>
                                    <!-- /div -->
                                </div>
                                <!-- /.comment-header -->
                                <div class="d-flex flex-row align-items-center mt-5 mb-2">
                                    <span class="ratings @if($item->etoile==1) one @endif @if($item->etoile==2) two @endif @if($item->etoile==3) three @endif @if($item->etoile==4) four @endif  @if($item->etoile==5) five @endif"></span>
                                    <h6 class="mb-0">
                                        @if ($item->etoile>=3)
                                        Hautement recommandé!
                                            
                                        @else
                                        Moyennement recommandé!
                                        @endif
                                    </h6>
                                </div>
                                <p>{{$item->comment}}</p>
                                <div class="d-flex flex-row align-items-center pb-3">
                                    <p class="text-muted fs-15 mb-0 me-5">Aimé?</p>
                                    <div>
                                        <a href="#" class="link-dark me-3"><i class="uil uil-thumbs-up"></i> Toujours</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            
                        </ol>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <button class="notificateur invisible" data-bs-toggle="modal" data-bs-target="#modal-02"></button>
  
<div class="modal fade" id="modal-02" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <figure class="mb-6" id="imgIllust"><img src="{{asset('assets/img/logo-light.png')}}" alt="" style="max-width: 50%"/></figure>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
        <h3>Notification</h3>
        <p class="msg-panier mb-6"></p>
        <div class="newsletter-wrapper">
          <div class="row">
            <div class="col-md-10 offset-md-1">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup">
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!--/.modal-body -->
    </div>
    <!--/.modal-content -->
  </div>
  <!--/.modal-dialog -->
</div>
<!--/.modal -->
</div>