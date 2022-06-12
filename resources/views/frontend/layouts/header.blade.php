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
                                            <li><a class="dropdown-item" href="{{route('commande')}}">Commande</a></li>

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
                            @livewire('nombre-panier')
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="{{route('login')}}" class="btn btn-sm btn-primary rounded">Connexion</a> 
                    </li>
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
    @if (auth()->check())
    @livewire('liste-panier')        
    @endif

</header>