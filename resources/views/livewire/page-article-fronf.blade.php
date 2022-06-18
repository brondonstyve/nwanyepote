<div>
    <section class="wrapper bg-light wrapper-border">
        <div class="container inner py-8">
            <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
                <div class="col-lg-8 align-self-center">
                    <div class="blog-filter filter">
                        <p>Filtre d'articles:</p>
                        <ul>
                            <li wire:click="$set('type','Tout')"><a class="{{($type=='Tout')?'active':''}}" href="#!">Tout</a></li>
                            @foreach ($this->types as $item)
                            <li wire:click="$set('type','{{$item->domaine}}')"><a class="{{($type==$item->domaine)?'active':''}}" href="#!">{{$item->domaine}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/.filter -->
                </div>
                <!--/column -->
                <aside class="col-lg-4 sidebar">
                    <form class="search-form">
                        <div class="form-floating mb-0">
                            <input id="search-form" type="text" wire:model.debounce.1s="search" class="form-control" placeholder="Recherche">
                            <label for="search-form">Recherche</label>
                        </div>
                    </form>
                    <!-- /.search-form -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-8 order-lg-2">

                    <div>
                        @if ($this->search)
                            <p>Resultat de la recherche pour "{{$this->search}}"</p>
                            @else
                            @if ($this->type!='Tout')
                            <p>Article de la catégorie "{{$this->type}}"</p>
                            @endif
                        @endif
                    </div>
                    <div class="blog classic-view">
                        @if (sizeOf($this->articles)==0)
                        <article class="post">
                            <div class="card">
                                <figure class="card-img-top overlay overlay-1 hover-scale">
                                    <a href="#"><img src="./assets/img/photos/istock mount-cameroon-1489500.jpg" alt=""><span class="bg"></span></a>
                                    <figcaption>
                                        <h5 class="from-top mb-0">Aucun article enregistré pour le moment.</h5>
                                    </figcaption>
                                </figure>
                                <div class="card-body">
                                    <div class="post-header">
                                        <!-- /.post-category -->
                                        <h2 class="post-title mt-1 mb-0">
                                            <a class="link-dark" href="#!">Aucun article enregistré pour le moment.
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                             Veuillez repasser une autre fois nos experts travaille sur la rédaction de ces derniers.
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        @else
                        @foreach ($this->articles as $key=>$item)
                        <article class="post">
                            <div class="card">
                                <a href="{{route('detail-article',$item->id)}}"> 
                                    <figure class="card-img-top overlay overlay-1 hover-scale"
                                            style="min-height: 500px;max-height: 600px;background-image: url({{asset("app/article/$item->image")}});
                                            background-size: cover;background-position: center;background-repeat: no-repeat;">
                                                <figcaption style="background-image: linear-gradient(45deg, #2991d6, #050b2b);">
                                                <h5 class="from-top mb-0 text-dark">Lire Plus</h5>
                                                </figcaption>
                                            </figure>
                                    </a>
                                <div class="card-body">
                                    <div class="post-header">
                                        <div class="post-category text-line">
                                            <a href="#" class="hover" rel="category">
                                                {{$item->domaine}}
                                            </a>
                                        </div>
                                        <!-- /.post-category -->
                                        <h2 class="post-title mt-1 mb-0">
                                            <a class="link-dark" href="{{route("detail-article",$item->id)}}">
                                                {{$item->titre}}
                                            </a>
                                        </h2>
                                    </div>
                                    <!-- /.post-header -->
                                    <div class="post-content">
                                        <p>
                                            {!!substr($item->article1,0,300)!!} [...]
                                        </p>
                                    </div>
                                    <!-- /.post-content -->
                                </div>
                                <!--/.card-body -->
                                <div class="card-footer">
                                    <ul class="post-meta d-flex mb-0">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span> {{$item->created_at}} </span></li>
                                        <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>Par {{$item->auteur}}</span></a></li>
                                        <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>3<span> Commentaires</span></a></li>
                                        <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>3</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </article>
                        <!-- /.post -->
                        @endforeach
                        <nav class="d-flex" aria-label="pagination">
                            {{$this->articles->links()}}
                            <!-- /.pagination -->
                        </nav>
                        @endif
                    </div>
                    <!-- /.blog -->
{{-- 
                    @if ($infosPage)
                    <div class="blog grid grid-view">
                        <div class="row isotope gx-md-8 gy-8 mb-8" style="position: relative; height: 1262.19px;">

                    @foreach ($this->articles as $key=>$item)
                    <article class="item post col-md-6" style="position: absolute; left: 0%; top: 0px;">
                        <div class="card">
                            <figure class="card-img-top overlay overlay-1 hover-scale">
                                <a href="{{route("detail-article",$item->id)}}"> <img src='{{asset("app/article/$item->image")}}' alt=""><span class="bg"></span></a>
                                <figcaption>
                                    <h5 class="from-top mb-0">Lire Plus</h5>
                                </figcaption>
                            </figure>
                            <div class="card-body">
                                <div class="post-header">
                                    <div class="post-category text-line">
                                        <a href="#" class="hover" rel="category">{{$item->domaine}}</a>
                                    </div>
                                    <!-- /.post-category -->
                                    <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="{{route("detail-article",$item->id)}}">{{$item->titre}}</a></h2>
                                </div>
                                <!-- /.post-header -->
                                <div class="post-content">
                                    <p>
                                        {!!str_replace(array("<br>", "<div>", "</div>","<i>","</i>","<>"), '', substr($item->article1,0,100))!!} [...] 
                                    </p>
                                </div>
                                <!-- /.post-content -->
                            </div>
                            <!--/.card-body -->
                            <div class="card-footer">
                                <ul class="post-meta d-flex mb-0">
                                    <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{$item->created_at}}</span></li>
                                    <li class="post-Commentaires"><a href="#"><i class="uil uil-comment"></i>4</a></li>
                                    <li class="post-likes ms-auto"><a href="#"><i class="uil uil-heart-alt"></i>5</a></li>
                                </ul>
                                <!-- /.post-meta -->
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                    </article>
                    <!-- /.post -->
                    @endforeach
                        </div>
                        <!-- /.row -->
                    </div>
                    <nav class="d-flex" aria-label="pagination">
                        {{$this->articles->links()}}
                        <!-- /.pagination -->
                    </nav>
                    <!-- /nav -->
                    <!-- /.blog -->
                    @endif --}}


                    
                </div>
                <!-- /column -->
                <aside class="col-lg-4 sidebar mt-11 mt-lg-6">

                    @if ($infosPage)
                    <div class="widget">
                        <h4 class="widget-title mb-3">{{$infosPage->titre2}}</h4>
                        <p>
                            {{$infosPage->description2}}
                        </p>
                        <nav class="nav social">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->     
                    @else
                    <div class="widget">
                        <h4 class="widget-title mb-3">A propos de nous</h4>
                        <p>ci, la route nationale N 5 reliant Bandjoun à Bafang est fait d'un tracé escarpé et accidentogène. Le paysage offre une vue unique sur les précipices aux bords de la route et sur la chaîne de montagnes qui domine le plateau
                            Bamiléké à Bana.
                        </p>
                        <nav class="nav social">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->     
                    @endif
                   
                    <div class="widget">
                        <h4 class="widget-title mb-3">Posts Populaires</h4>
                        <ul class="image-list">
                            @foreach ($this->articles as $key=>$item)
                            @if ($key==3)
                                @break
                            @endif
                            <li>
                                <figure class="rounded">
                                    <a href="{{route("detail-article",$item->id)}}"><img src="{{asset("app/article/$item->image")}}" alt="" /></a>
                                </figure>
                                <div class="post-content">
                                    <h6 class="mb-2"> <a class="link-dark" href="{{route("detail-article",$item->id)}}">{{$item->titre}}</a> </h6>
                                    <ul class="post-meta">
                                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ $item->created_at}}</span></li>
                                        <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>{{$key+1+15}}</a></li>
                                    </ul>
                                    <!-- /.post-meta -->
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>
                        <!-- /.image-list -->
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Catégories</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            @foreach ($this->types as $item)
                                <li wire:click="$set('type','{{$item->domaine}}')"><a href="#">{{$item->domaine}} ({{$item->nombre}})</a></li>
                            @endforeach
                            
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Tags</h4>
                        <ul class="list-unstyled tag-list">
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Vie Urbaine</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Religion</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Culture</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Sport</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">transport</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Ventes</a></li>
                            <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photographie</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                    <div class="widget">
                        <h4 class="widget-title mb-3">Archive</h4>
                        <ul class="unordered-list bullet-primary text-reset">
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">January 2019</a></li>
                            <li><a href="#">December 2018</a></li>
                            <li><a href="#">November 2018</a></li>
                            <li><a href="#">October 2016</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </aside>
                <!-- /column .sidebar -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /end content section -->
</div>
