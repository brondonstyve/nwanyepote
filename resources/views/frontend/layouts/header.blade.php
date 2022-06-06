<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light caret-simple">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{route('index')}}">
                    <img src="{{asset('assets/img/logo Nwanyepote31.png')}}" srcset="{{asset('assets/img/logo Nwanyepote31.png 2x')}}" alt="" width="60%" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">Nwanyepote</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="{{route('index')}}">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('apropos')}}">A Propos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Cultures & Loisirs</a>
                            <div class="dropdown-menu dropdown-lg">
                                <div class="dropdown-lg-content">
                                    <div>
                                        <h6 class="dropdown-header">Cultures et Loisir</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="{{route('sport')}}">Sport</a></li>
                                            <li><a class="dropdown-item" href="{{route('tourisme')}}">Tourisme</a></li>
                                            <li><a class="dropdown-item" href="{{route('culture')}}">Culture</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /auto-column -->
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('evenement')}}">Evénement</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link" href="{{route('article')}}">Articles</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route('boutique')}}">Boutiques</a>
                            <div class="dropdown-menu dropdown-lg">
                                <div class="dropdown-lg-content">
                                    <div>
                                        <h6 class="dropdown-header">Elément de boutique</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="{{route('boutique')}}">Nos produits</a></li>
                                            <li><a class="dropdown-item" href="{{route('panier')}}">Mon Panier</a></li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- /auto-column -->
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Extra</a>
                            <div class="dropdown-menu dropdown-lg">
                                <div class="dropdown-lg-content">
                                    <div>

                                        <h6 class="dropdown-header">Autres pages utiles</h6>
                                        <ul class="list-unstyled">
                                            <li><a class="dropdown-item" href="{{route('contact')}}">Contact</a></li>
                                            <li><a class="dropdown-item" href="{{route('ressource')}}">Ressources</a></li>
                                            <li><a class="dropdown-item" href="{{route('galerie')}}">Galerie</a></li>
                                            <li><a class="dropdown-item" href="{{route('faq')}}">FAQ</a></li>
                                        </ul>


                                    </div>
                                </div>
                                <!-- /auto-column -->
                            </div>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                    <div class="offcanvas-footer d-lg-none">
                        <div>
                            <a href="mailto:info@nwanyepote.com" class="link-inverse">info@nwanyepote.com</a>
                            <br /> 00 6 97 32 09 74 <br />
                            <nav class="nav social social-white mt-4">
                                <a href="#"><i class="uil uil-facebook-f"></i></a>
                                <a href="#"><i class="uil uil-instagram"></i></a>
                                <a href="#"><i class="uil uil-youtube"></i></a>
                            </nav>
                            <!-- /.social -->
                        </div>
                    </div>
                    <!-- /.offcanvas-footer -->
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search"><i class="uil uil-search"></i></a></li>
                    <li class="nav-item">
                        <a class="nav-link position-relative d-flex flex-row align-items-center" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                            <i class="uil uil-shopping-cart"></i>
                            <span class="badge badge-cart bg-primary">3</span>
                        </a>
                    </li>
                    @if(auth()->user())
                        <li class="nav-item d-none d-md-block">
                            <a href="{{route('compte')}}" class="btn btn-sm btn-primary rounded">Mon Compte</a> 
                        </li>  
                    @else
                        <li class="nav-item d-none d-md-block">
                            <a href="{{route('login')}}" class="btn btn-sm btn-primary rounded">Connexion</a> 
                        </li>
                    @endif    
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
    <div class="offcanvas offcanvas-top bg-light" id="offcanvas-search" data-bs-scroll="true">
        <div class="container d-flex flex-row py-6">
            <form class="search-form w-100">
                <input id="search-form" type="text" class="form-control" placeholder="Entrer un élément de recherche ...">
            </form>
            <!-- /.search-form -->
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.offcanvas -->

    


    <div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true">
        <div class="offcanvas-header">
            <h3 class="mb-0">Your Cart</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <div class="shopping-cart">
                <div class="shopping-cart-item d-flex justify-content-between mb-4">
                    <div class="d-flex flex-row">
                        <figure class="rounded w-17">
                            <a href="./shop-product.html"><img src="./assets/img/photos/sth1.jpg" srcset="./assets/img/photos/sth1@2x.jpg 2x" alt="" /></a>
                        </figure>
                        <div class="w-100 ms-4">
                            <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Nike Air Sneakers</a></h3>
                            <p class="price fs-sm"><del><span class="amount">$55.00</span></del> <ins><span class="amount">$45.99</span></ins></p>
                            <div class="form-select-wrapper">
                                <select class="form-select form-select-sm">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                            </div>
                            <!--/.form-select-wrapper -->
                        </div>
                    </div>
                    <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
                </div>
                <!--/.shopping-cart-item -->
                <div class="shopping-cart-item d-flex justify-content-between mb-4">
                    <div class="d-flex flex-row">
                        <figure class="rounded w-17">
                            <a href="./shop-product.html"><img src="./assets/img/photos/sth2.jpg" srcset="./assets/img/photos/sth2@2x.jpg 2x" alt="" /></a>
                        </figure>
                        <div class="w-100 ms-4">
                            <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Colorful Sneakers</a></h3>
                            <p class="price fs-sm"><span class="amount">$45.00</span></p>
                            <div class="form-select-wrapper">
                                <select class="form-select form-select-sm">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                            </div>
                            <!--/.form-select-wrapper -->
                        </div>
                    </div>
                    <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
                </div>
                <!--/.shopping-cart-item -->
                <div class="shopping-cart-item d-flex justify-content-between mb-4">
                    <div class="d-flex flex-row">
                        <figure class="rounded w-17">
                            <a href="./shop-product.html"><img src="./assets/img/photos/sth3.jpg" srcset="./assets/img/photos/sth3@2x.jpg 2x" alt="" /></a>
                        </figure>
                        <div class="w-100 ms-4">
                            <h3 class="post-title fs-16 lh-xs mb-1"><a href="./shop-product.html" class="link-dark">Foulard Tradi</a></h3>
                            <p class="price fs-sm"><span class="amount">$45.00</span></p>
                            <div class="form-select-wrapper">
                                <select class="form-select form-select-sm">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                            </div>
                            <!--/.form-select-wrapper -->
                        </div>
                    </div>
                    <div class="ms-2"><a href="#" class="link-dark"><i class="uil uil-trash-alt"></i></a></div>
                </div>
                <!--/.shopping-cart-item -->
            </div>
            <!-- /.shopping-cart-->
            <div class="offcanvas-footer flex-column text-center">
                <div class="d-flex w-100 justify-content-between mb-4">
                    <span>Subtotal:</span>
                    <span class="h6 mb-0">$135.99</span>
                </div>
                <a href="#" class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4"><i class="uil uil-credit-card fs-18"></i> Checkout</a>
                <p class="fs-14 mb-0">Free shipping on all orders over $50</p>
            </div>
            <!-- /.offcanvas-footer-->
        </div>
        <!-- /.offcanvas-body -->
    </div>
    <!-- /.offcanvas -->



</header>