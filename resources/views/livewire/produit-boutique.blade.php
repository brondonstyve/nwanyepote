<section class="wrapper bg-light">
    <div class="container pb-14 pb-md-16 pt-12">
      <div class="row gy-10">
        <div class="col-lg-9 order-lg-2">
            <div class="row align-items-center mb-10 position-relative zindex-1">
              <div class="col-md-7 col-xl-8 pe-xl-20">
                  <h2 class="display-6 mb-1">Nouvelles Arrivées</h2>
                  <p class="mb-0 text-muted">Affichage de 1 à 12 au plus sur plusieurs éléments</p>
              </div>
              
              <!--/column -->
              <div class="col-md-5 col-xl-4 ms-md-auto text-md-end mt-5 mt-md-0">
                <div class="form-select-wrapper">
                  <select class="form-select" wire:model='collection'>
                      <option value="Tout">Tout </option>
                      @foreach ($this->collections as $item)
                      <option value="{{$item->id}}"> {{$item->libelle}} </option>                                        
                      @endforeach
                  </select>
                </div>
                <!--/.form-select-wrapper -->
              </div>
              <!--/column -->
            </div>
            <!--/.row -->
            <div class="grid grid-view projects-masonry shop mb-13">
              <div class="row gx-md-8 gy-10 gy-md-13 isotope">
                  @if (sizeOf($this->produits)==0)
                  <div class="project item col-md-6 col-xl-4 mx-auto text-center">
                    <figure class="rounded mb-6" style="min-height: 220px ;max-height: 220px">
                      <img src="{{asset("assets/img/logo.jpg")}}" alt="" />
                      <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>RAS</span></span>
                    </figure>
                    <div class="post-header">
                      <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">Aucun produit enregistré avec ces spécifités pour le moment.</a></h2>
                    </div>
                    <!-- /.post-header -->
                  </div>
                  @else
                  @foreach ($this->produits as $produit)
                  <div class="project item col-md-6 col-xl-4"
                  >
                    <figure class="rounded mb-6"
                    style="min-height: 220px ;max-height: 220px;background-image: url({{asset('/app/produit/'.$produit->img_principale)}});
                      background-size: cover;background-position: center;background-repeat: no-repeat;"
                      >
                      <a class="item-like" href="#" data-bs-toggle="white-tooltip" title="Souhait"><i class="uil uil-heart"></i></a>
                      <a class="item-view" href="{{route('detail-produit',encrypt($produit->id))}}" data-bs-toggle="white-tooltip" title="Voir"><i class="uil uil-eye"></i></a>
                      <a href="#!" class="item-cart" wire:click='panier({{$produit->id}})'><i class="uil uil-shopping-bag"></i> Ajouter au panier</a>
                      <span class="avatar bg-pink text-white w-10 h-10 position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>Vente!</span></span>
                    </figure>

                    <div class="post-header">
                      <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                        <div class="post-category text-ash mb-0">{{$produit->libelle_collection}}</div>
                        <span class="ratings @if($produit->etoile==1) one @endif @if($produit->etoile==2) two @endif @if($produit->etoile==3) three @endif @if($produit->etoile==4) four @endif  @if($produit->etoile==5) five @endif"  ></span>
                      </div>
                      <h2 class="post-title h3 fs-22"><a href="{{route('detail-produit',encrypt($produit->id))}}" class="link-dark">{{$produit->libelle}}</a></h2>
                      <p class="price"><del><span class="amount">{{$produit->prix + ($produit->prix*30)/100}} Fcfa</span></del> <ins><span class="amount">{{$produit->prix}} Fcfa</span></ins></p>
                    </div>
                    <!-- /.post-header -->
                  </div>
                  <!-- /.item -->
                  @endforeach
                  @endif
                  
               
              </div>
              <!-- /.row -->
            </div>
            <!-- /.grid -->
            <nav class="d-flex" aria-label="pagination">
              {{$this->produits->links()}}
                      <!-- /.pagination -->
            </nav>
            <!-- /nav -->
          </div>
        <!-- /column -->
        <aside class="col-lg-3 sidebar">
          <div class="widget mt-1">
            <h4 class="widget-title mb-3">Categories</h4>
            <ul class="list-unstyled ps-0">
                @foreach ($this->collectType as $item)
                <li class="mb-1">
                    <a href="#" class="align-items-center rounded link-body" wire:click='$set("collection",{{$item->collection}})'> {{$item->libelle}} <span class="fs-sm text-muted ms-1">({{$item->nombre}})</span>
                    </a>
                  </li>
                @endforeach
              

            </ul>
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">Qualité</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating5" wire:click='$set("etoile",5)'>
              <label class="form-check-label" for="rating5">
                <span class="ratings five"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating4" wire:click='$set("etoile",4)'>
              <label class="form-check-label" for="rating4">
                <span class="ratings four"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating3" wire:click='$set("etoile",3)'>
              <label class="form-check-label" for="rating3">
                <span class="ratings three"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating2" wire:click='$set("etoile",2)'>
              <label class="form-check-label" for="rating2">
                <span class="ratings two"></span>
              </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="rating" id="rating1" wire:click='$set("etoile",1)'>
              <label class="form-check-label" for="rating1">
                <span class="ratings one"></span>
              </label>
            </div>
            <!-- /.form-check -->
          </div>
          <!-- /.widget -->
          <div class="widget">
            <h4 class="widget-title mb-3">Prix</h4>
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" wire:click='withPrice(1,5000)'>
              <label class="form-check-label" for="price1"> 1 - 5000 Fcfa </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" wire:click='withPrice(5001,10000)'>
              <label class="form-check-label" for="price2"> 5001 - 10000 Fcfa </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" wire:click='withPrice(10001,15000)'>
              <label class="form-check-label" for="price3"> 10 001 - 15 000 Fcfa </label>
            </div>
            <!-- /.form-check -->
            <div class="form-check mb-1">
              <input class="form-check-input" type="radio" name="price" wire:click='withPrice(15001,20000)'>
              <label class="form-check-label" for="price4"> 15 001 - 20 000 Fcfa </label>
            </div>
            <!-- /.form-check -->
            <div class="row">
              <div class="col-7 col-md-5 col-lg-12 col-xl-10 col-xxl-10">
                <div class="d-flex align-items-center mt-4">
                  <input type="number" class="form-control form-control-sm" placeholder="1 Fcfa" min="1" wire:model='prix1'>
                  <div class="text-muted mx-2">‒</div>
                  <input type="number" class="form-control form-control-sm" placeholder="100 000 Fcaf" wire:model='prix2'>
                </div>
                <span class="text-danger">
                    {{$message}}
                </span>
              </div>
              <!-- /column -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.widget -->
        </aside>
        <!-- /column .sidebar -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <button class="notificateur invisible" data-bs-toggle="modal" data-bs-target="#modal-02">xvdfv</button>
  
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

</section>