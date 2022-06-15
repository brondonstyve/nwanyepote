<footer class="bg-dark text-inverse">
    <div style="background: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.55)), url('{{asset("/assets/img/photos/t1.jpg")}}'); visibility: visible; opacity: 1;">
        <div class="container pt-17 pt-md-19 pb-13 pb-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img src="{{asset('assets/img/logo-light.png')}}" srcset="{{asset('assets/img/logo-light.png 2x')}}" alt="" width="35%" />
                        <p class="mb-4">© 2022 Nwanyepote. <br class="d-none d-lg-block" />Tous les droits sont réservés.</p>
                        <nav class="nav social social-white">
                            <a href="#"><i class="uil uil-twitter"></i></a>
                            <a href="#"><i class="uil uil-facebook-f"></i></a>
                            <a href="#"><i class="uil uil-dribbble"></i></a>
                            <a href="#"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Entrer en contact</h4>
                        <address class="pe-xl-15 pe-xxl-17">Ouest St. 11245 Batie, Cameroun, Nwanyepote</address>
                        <a href="mailto:#">info@Nwanyepote.com</a><br /> 00 697 32 09 74
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">NwanyePoTe</h4>
                        <ul class="list-unstyled  mb-0">
                            <li><a href="{{route('apropos')}}">A Propos</a></li>
                            <li><a href="{{route('apropos')}}">Notre Histoire</a></li>
                            <li><a href="{{route('evenement')}}">Evénements</a></li>

                            <li><a href="{{route('politique')}}">politique de confidentialité</a></li>
                            <li><a href="{{route('politique')}}">politique de cookies</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title text-white mb-3">Notre Newsletter</h4>
                        <p class="mb-5">Abonnez-vous à notre newsletter pour recevoir nos nouvelles et nos offres.</p>
                        <div class="newsletter-wrapper">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup2">
                                <form action="" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll2">
                                        <div class="mc-field-group input-group form-floating">
                                            <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                                            <label for="mce-EMAIL2">Adresse Email</label>
                                            <input type="submit" value="Join" name="Souscrire" id="mc-embedded-subscribe2" class="btn btn-primary ">
                                        </div>
                                        <div id="mce-responses2" class="clear">
                                            <div class="response" id="mce-error-response2" style="display:none"></div>
                                            <div class="response" id="mce-success-response2" style="display:none"></div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                                        <div class="clear"></div>
                                    </div>
                                </form>
                            </div>
                            <!--End mc_embed_signup-->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
    </div>
    <!-- /.container -->
</footer>

<script src="{{asset('assets/js/jquery.min.js')}}"></script>


<script>
    window.addEventListener('alert', event => { 
			if (event.detail.type=='existe') {
                $('.msg-panier').replaceWith('<p class="msg-panier mb-6">Ce produit est déjà present dans votre panier!<br> Consulter votre panier <a href="{{ route("panier") }}">ici</a>.</p>');
                $('.notificateur').click();
            }

            if (event.detail.type=='success') {
                $('.msg-panier').replaceWith('<p class="msg-panier mb-6">Votre produit '+event.detail.message+' a été ajouté au panier avec succés!<br> Consulter votre panier <a href="{{ route("panier") }}">ici</a>.</p>');
                $('.notificateur').click();
            }
		});
</script>