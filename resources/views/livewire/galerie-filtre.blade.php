<div class="wrapper bg-light wrapper-border">
    <section class="wrapper bg-light wrapper-border">
                <div class="container py-11">
                    <h2 class="h5">Filtres :
                    </h2>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-1 mb-2">
                                <button class="btn @if($type=='Tous') btn-primary @else btn-soft-ash @endif btn-sm rounded" wire:click="$set('type','Tous')">
                                    Tous
                                </button> 
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                                <button class="btn @if($type=='BATIE') btn-primary @else btn-soft-ash @endif btn-sm rounded"  wire:click="$set('type','BATIE')">
                                    Batié
                                </button>
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                                <button class="btn @if($type=='CULTUREL') btn-primary @else btn-soft-ash @endif btn-sm rounded" wire:click.prevent="$set('type','CULTUREL')">
                                    Culture
                                </button>
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                                <button class="btn @if($type=='TRADITIONEL') btn-primary @else btn-soft-ash @endif btn-sm rounded" wire:click.prevent="$set('type','TRADITIONEL')">
                                    Tradition
                                </button>
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                                <button class="btn @if($type=='SPORT') btn-primary @else btn-soft-ash @endif btn-sm rounded" wire:click.prevent="$set('type','SPORT')">
                                    Sport
                                </button>
                        </li>
                    </ul>
                </div>
                <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
          <!-- /.row -->

          @if (sizeOf($this->galeries)==0)
                  <div class="post-header text-center">
                    <h2 class="post-title h3 fs-22">Aucune image trouvé</h2>
                  </div>
              <!-- /.item -->
              

            </div>
            <!-- /.row -->
          </div>
          @else
          <div class="grid grid-view projects-masonry">
            <div class="row gx-md-8 gy-10 gy-md-13 isotope">
          @foreach ($this->galeries as $img)
          
              <div class="project item col-md-6 col-xl-4">
                <figure class="rounded mb-6"><img src="{{asset('app/galeries/'.$img->image)}}" srcset="{{asset('app/galeries/'.$img->image)}}" alt="" /><a class="item-link" href="{{asset('app/galeries/'.$img->image)}}" data-glightbox data-gallery="projects-group"><i class="uil uil-focus-add"></i></a></figure>
                <div class="project-details d-flex justify-content-center flex-column">
                  <div class="post-header">
                    <h2 class="post-title h3 fs-22"><a href="#!" class="link-dark">{{ $img->libelet }}</a></h2>
                    <div class="post-category text-ash">{{ $img->type }}</div>
                  </div>
                  <!-- /.post-header -->
                </div>
                <!-- /.project-details -->
              </div>
              <!-- /.item -->     
          @endforeach
         
              

            </div>
            <!-- /.row -->
          </div>
          @endif
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->




</div>