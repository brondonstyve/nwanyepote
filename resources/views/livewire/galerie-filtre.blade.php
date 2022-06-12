<div class="wrapper bg-light wrapper-border">
    <section class="wrapper bg-light wrapper-border">
                <div class="container py-11">
                    <h2 class="h5">Filtres :
                    </h2>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item me-1 mb-2">
                            <form>
                                <input type="hidden" wire:model="tous" >
                                <button class="btn btn-soft-ash btn-sm rounded " wire:click.prevent="$set('type','Tous')">
                                    Tous
                                </button> 
                            </form>     
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                            <form>
                                <input value="BATIE" type="hidden" wire:model="batie" >
                                <button class="btn btn-soft-ash btn-sm rounded " wire:click.prevent="$set('type','BATIE')">
                                    Batié
                                </button>
                            </form>
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                                <button class="btn btn-soft-ash btn-sm rounded " wire:click.prevent="$set('type','CULTUREL')">
                                    Culture
                                </button>
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                            <form>
                                <input value="TRADITIONEL" type="hidden" wire:model="traditionel">
                                <button class="btn btn-soft-ash btn-sm rounded " wire:click.prevent="$set('type','TRADITIONEL')">
                                    Tradition
                                </button>
                            </form>
                        </li>
                        <li class="list-inline-item me-1 mb-2">
                            <form>
                                <input value="SPORT" type="hidden" wire:model="sport">
                                <button class="btn btn-soft-ash btn-sm rounded " wire:click.prevent="$set('type','SPORT')">
                                    Sport
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.container -->
    </section>
    <!-- /section -->
    <div class="grid grid-view projects-masonry">
                <div class="row gx-md-8 gy-10 gy-md-13 isotope" style="position: relative; height: 1230.84px;">
                    @if(empty($image = $this->galeries))
                        <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 0px;">
                            <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">veuiller faire une recherche en cliquan sur un bouton de filtre</a></h2>
                        </div>
                    @else
                        @foreach($this->galeries as $img)
                            <div class="project item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 0px;">
                                <figure class="rounded mb-6"><img src="app/galeries/{{$img->image}}" srcset="app/galeries/{{$img->image}} 2x" style="width: 100%; heigth: 100%" alt="">
                                    <a class="item-link" href="app/galeries/{{$img->image}}" data-glightbox="" data-gallery="projects-group"><i class="uil uil-focus-add"></i></a>
                                </figure>
                                <div class="project-details d-flex justify-content-center flex-column">
                                    <div class="post-header">
                                        <h2 class="post-title h3 fs-22"><a href="#" class="link-dark">{{ $img->libelet }}</a></h2>
                                        <div class="post-category text-ash">{{ $img->type }}</div>
                                    </div>
                                    <!-- /.post-header -->
                                </div>
                                <!-- /.project-details -->
                            </div>
                        @endforeach
                    @endif
                    <!-- /.item -->
                </div>
                <!-- /.row -->
                <div class="text-center mt-10">
                    <button type="button" class="btn btn-lg btn-primary rounded-pill">Voir Plus</button>
                </div>
    </div>
    <!-- /.grid -->
</div>