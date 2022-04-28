@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}
    
@endsection


@section('content')

<!-- /content section -->
<section class="wrapper image-wrapper bg-dark bg-overlay text-white">
    <div class="container pt-17 pb-13 pt-md-19 pb-md-17 text-center">
        <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
                <div class="post-header">
                    <div class="post-category text-line text-white">

                        <a href="#" class="text-reset" rel="category">Politique De Confidentialité</a>
                    </div>
                    <!-- /.post-category -->
                    <h1 class="display-1 mb-4 text-blue">Quelles sont les mode d'utilisation de notre site ?</h1>
                </div>
                <!-- /.post-header -->
            </div>
            <!-- /column -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /section -->
<div class="container">
    <div class="row gx-0">
        <aside class="col-xl-3 sidebar sticky-sidebar mt-md-0 py-16 d-none d-xl-block">
            <div class="widget">
                <nav id="sidebar-nav">
                    <ul class="list-unstyled text-reset">
                        <li><a class="nav-link scroll" href="#s1">1. Qui sommes-nous</a></li>
                        <li><a class="nav-link scroll" href="#s2">2. Commentaires</a></li>
                        <li><a class="nav-link scroll" href="#s3">3. Médias</a></li>
                        <li><a class="nav-link scroll" href="#s4">4. Cookies</a></li>
                        <li><a class="nav-link scroll" href="#s5">5. Contenu intégré d’autres sites Web</a></li>
                        <li><a class="nav-link scroll" href="#s6">6. Avec qui partageons-nous vos données</a></li>
                        <li><a class="nav-link scroll" href="#s7">7. Combien de temps conservons-nous vos données</a></li>
                        <li><a class="nav-link scroll" href="#s8">8. Quels sont vos droits sur vos données</a></li>
                        <li><a class="nav-link scroll" href="#s9">9. Où envoyons-nous vos données</a></li>
                        <li><a class="nav-link scroll" href="#s10">10. Éditeur</a></li>
                        <li><a class="nav-link scroll" href="#s11">11. Directeur de la publication</a></li>
                        <li><a class="nav-link scroll" href="#s12">12. Conception et développement web</a></li>
                        <li><a class="nav-link scroll" href="#s13">13. Droits d’auteur</a></li>
                        <li><a class="nav-link scroll" href="#s14">14. Réalisations</a></li>
                        <li><a class="nav-link scroll" href="#s15">15. Photos</a></li>
                    </ul>
                </nav>
                <!-- /nav -->
            </div>
            <!-- /.widget -->
        </aside>
        <!-- /column -->
        <div class="col-xl-8">
            <section id="s1" class="wrapper pt-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">1. Qui sommes-nous</h2>
                        <p>L’adresse de notre site Web est : https://nwanyepote.com. Pour mieux nous connaitre, allez sur notre page <a href="">A Propos</a></p>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
            <section id="s2" class="wrapper pt-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">2. Commentaires</h2>
                        <p>Lorsque les visiteurs laissent des commentaires sur le site, nous collectons les données affichées dans le formulaire de commentaires, ainsi que l’adresse IP du visiteur et la chaîne de l’agent utilisateur du navigateur
                            pour faciliter la détection des spams.</p>
                        <p>Une chaîne anonymisée créée à partir de votre adresse e-mail (également appelée hachage) peut être fournie au service Gravatar pour voir si vous l’utilisez. La politique de confidentialité du service Gravatar est disponible
                            ici : https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil est visible publiquement à côté de votre commentaire.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
            <section id="s3" class="wrapper pt-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">3. Médias</h2>
                        <p>Si vous téléchargez des images sur le site Web, vous devez éviter de télécharger des images avec des données de localisation intégrées (EXIF GPS) incluses . Les visiteurs du site Web peuvent télécharger et extraire toutes
                            les données de localisation des images sur le site Web.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
            <section id="s4" class="wrapper pt-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">4. Cookies</h2>
                        <p>Si vous laissez un commentaire sur notre site, vous pouvez choisir d’enregistrer votre nom, votre adresse e-mail et votre site Web dans des cookies. Ceux-ci sont pour votre commodité afin que vous n’ayez pas à remplir à
                            nouveau vos coordonnées lorsque vous laissez un autre commentaire. Ces cookies dureront un an.</p>
                        <p>Si vous visitez notre page de connexion, nous installerons un cookie temporaire pour déterminer si votre navigateur accepte les cookies. Ce cookie ne contient aucune donnée personnelle et est supprimé lorsque vous fermez
                            votre navigateur.</p>
                        <p>Lorsque vous vous connecterez, nous mettrons également en place plusieurs cookies pour enregistrer vos informations de connexion et vos choix d’affichage à l’écran. Les cookies de connexion durent deux jours et les cookies
                            d’options d’écran durent un an. Si vous sélectionnez “Se souvenir de moi”, votre connexion persistera pendant deux semaines. Si vous vous déconnectez de votre compte, les cookies de connexion seront supprimés.</p>
                        <p>Si vous modifiez ou publiez un article, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne contient aucune donnée personnelle et indique simplement l’identifiant de publication de l’article que
                            vous venez d’éditer. Il expire après 1 jour.</p>
                        <p>pour en savoir plus allez à la page <a href="">Politique de cookies</a></p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
            <section id="s5" class="wrapper pt-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">5. Contenu intégré d’autres sites Web</h2>
                        <p>Les articles de ce site peuvent inclure du contenu intégré (par exemple, des vidéos, des images, des articles, etc.). Le contenu intégré d’autres sites Web se comporte exactement de la même manière que si le visiteur avait
                            visité l’autre site Web.</p>
                        <p>Ces sites Web peuvent collecter des données vous concernant, utiliser des cookies, intégrer un suivi tiers supplémentaire et surveiller votre interaction avec ce contenu intégré, y compris le suivi de votre interaction
                            avec le contenu intégré si vous avez un compte et êtes connecté à ce site Web .</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
            <section id="s6" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">6. Avec qui partageons-nous vos données</h2>
                        <p>Si vous demandez une réinitialisation de mot de passe, votre adresse IP sera incluse dans l’e-mail de réinitialisation.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s7" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">7. Combien de temps conservons-nous vos données</h2>
                        <p>Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela nous permet de reconnaître et d’approuver automatiquement tous les commentaires de suivi au lieu de les conserver dans
                            une file d’attente de modération.</p>
                        <p>Pour les utilisateurs qui s’inscrivent sur notre site Web (le cas échéant), nous stockons également les informations personnelles qu’ils fournissent dans leur profil d’utilisateur. Tous les utilisateurs peuvent voir, modifier
                            ou supprimer leurs informations personnelles à tout moment (sauf qu’ils ne peuvent pas changer leur nom d’utilisateur). Les administrateurs du site Web peuvent également voir et modifier ces informations.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s8" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">8. Quels sont vos droits sur vos données</h2>
                        <p>Si vous avez un compte sur ce site, ou avez laissé des commentaires, vous pouvez demander à recevoir un fichier exporté des données personnelles que nous détenons vous concernant, y compris les données que vous nous avez
                            fournies. Vous pouvez également nous demander d’effacer toutes les données personnelles que nous détenons à votre sujet. Cela n’inclut pas les données que nous sommes obligés de conserver à des fins administratives,
                            juridiques ou de sécurité.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s9" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">9. Où envoyons-nous vos données</h2>
                        <p>les commentaires des visiteurs peuvent être vérifiés via un service de détection de spam automatisé.</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s10" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">10. Éditeur</h2>
                        <p>Brondon Styve</p>
                        <p>
                            Tél. : +237 697 32 09 74 <br> E-mail :Brondonstyve@gmail.com
                        </p>

                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s11" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">11. Directeur de la publication</h2>
                        <p>Brondon Styve</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s12" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">12. Conception et développement web</h2>
                        <p>Brondon Styve</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s13" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">13. Droits d’auteur</h2>
                        <p>Ce site doit être considéré comme un tout indissociable. Les informations y figurant sont réservées à un usage exclusivement personnel et ne peuvent être en tout ou partie ni reproduites, ni communiquées. Certaines des
                            données (textes, publications, sons ou images) figurant sur les pages de ce site ont fait l’objet d’une autorisation de publication, de diffusion ou d’un droit d’usage acquis auprès de tiers. Toute reproduction, représentation
                            ou diffusion, à des fins autres que personnelles ou celles explicitement autorisées, en tout ou partie du contenu du site sur quelque support ou par tout procédé que ce soit, est interdite. Le non-respect de cette interdiction
                            constitue une contrefaçon susceptible d’engager la responsabilité civile et pénale du contrefacteur. Il est strictement interdit d’utiliser ou de reproduire les logos, seuls ou associés, à quelque titre que ce soit,
                            et notamment à des fins publicitaires, sans l’accord préalable écrit des différentes structures .</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s14" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">14. Réalisations</h2>
                        <p>Brondon Styve</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>

            <section id="s15" class="wrapper py-16">
                <div class="card">
                    <div class="card-body p-10">
                        <h2 class="mb-3">15. Photos</h2>
                        <p>Brondon Styve</p>
                    </div>
                    <!--/.card-body -->
                </div>
                <!--/.card -->
            </section>
        </div>
        <!-- /column -->
    </div>
    <!-- /.row -->
</div>

<!-- /end content section -->

@endsection
        
@section('js_footer')
    {{-- ajouter du js spécifique à la page --}}

@endsection


