<div>
    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-12">
                <div class="col-lg-8">

                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-icon mb-6" role="alert">
                        <i class="uil uil-exclamation-circle"></i>
                        <p>{{$message}}</p>
                    </div>

                    @endif


                    <h3 class="mb-4">
                        Adresse de facturation
                    </h3>
                    <form class="" wire:submit.prevent="postPaymentWithpaypal()">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="firstName" placeholder="Prénom"
                                        required="" wire:model.lazy='prenom'>
                                    <label for="firstName" class="form-label">Prénom</label>
                                    <div class="invalid-feedback">Un prénom valide est requis.
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="lastName" placeholder="Nom de famille"
                                        required="" wire:model.lazy='nom'>
                                    <label for="lastName" class="form-label">Nom de famille</label>
                                    <div class="invalid-feedback">Un nom de famille valide est requis.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com"
                                        required="" wire:model.lazy='email'>
                                    <label for="email" class="form-label">E-mail</label>
                                    <div class="invalid-feedback">Veuillez entrer une adresse e-mail valide pour les
                                        mises à
                                        jour d'expédition.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                        required="" wire:model.lazy='adresse'>
                                    <label for="address" class="form-label">Adresse</label>
                                    <div class="invalid-feedback">Prière d'indiquer ton adresse d'expédition.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="address2" placeholder="Téléphone"
                                        wire:model.lazy='telephone'>
                                    <label for="address2" class="form-label">Téléphone <span
                                            class="text-muted">(facultatif)</span></label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-select-wrapper">
                                    <label for="description" class="form-label">Donnez des informations supplémentaires
                                        dont vous jugez pertinent pour votre commande<span
                                            class="text-muted"></span></label>
                                    <textarea rows="5" class="form-control" id="description" placeholder="description"
                                        wire:model.lazy='description'></textarea>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-7 mb-6">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info" wire:model='conserveInfos'>
                            <label class="form-check-label" for="save-info">Conservez ces informations pour la prochaine
                                fois</label>
                        </div>

                        <hr class="mt-7 mb-6">
                        <h3 class="mb-4">
                            Paiement
                        </h3>
                        <div class="mt-3 mb-6">
                            
                            <div class="form-check">
                                <input name="paymentMethod" type="radio" value="pp" class="form-check-input"
                                wire:click="$set('type','pp')" required>
                                <label class="form-check-label">PayPal</label>
                                @if ($type=='pp')
                                <div class="alert alert-primary alert-icon mb-6" role="alert">
                                    <i class="uil uil-exclamation-circle"></i>
                                    <p>Vous procéderez au paiement par carte de crédit.</p>
                                </div>
                            @endif
                            </div>

                            <div class="form-check">
                                <input name="paymentMethod" type="radio" value="cc" class="form-check-input"
                                    wire:click="$set('type','cc')" required>
                                <label class="form-check-label">Carte de crédit</label>
                                @if ($type=='cc')
                                <div class="alert alert-primary alert-icon mb-6" role="alert">
                                    <i class="uil uil-exclamation-circle"></i>
                                    <p>Vous procéderez au paiement par votre compte Paypal.</p>
                                </div>
                        @endif
                            </div>

                            <div class="invalid-feedback">Prière d'indiquer ton adresse d'expédition.
                            </div>
                        </div>

                        <button class="btn btn-primary rounded w-100 mt-4" type="button" wire:loading
                            wire:target='typePaiement.val'>s'il vous plait Patientez un instant le chargement du
                            formulaire ...</button>

                       

                        



                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <h3 class="mb-4">
                        Récapitulatif de la commande
                    </h3>
                    <div class="shopping-cart mb-7">
                        @php
                        $total=0;
                        @endphp
                        @foreach ($this->panier as $key=>$item)
                        <div class="shopping-cart-item d-flex justify-content-between mb-4">
                            <div class="d-flex flex-row d-flex align-items-center">
                                <figure class="rounded w-17">
                                    <a href="boutique.html"><img src="{{asset(" app/produit/$item->img_principale")}}"
                                        srcset="{{asset("app/produit/$item->img_principale")}} 2x"
                                        alt=""></a>
                                </figure>
                                <div class="w-100 ms-4">
                                    <h3 class="post-title h6 lh-xs mb-1">
                                        <a href="https://sandbox.elemisthemes.com/shop-product.html" class="link-dark">
                                            {{$item->libelle}}
                                        </a>
                                    </h3>
                                    <div class="small">Couleur: xx
                                    </div>
                                    <div class="small">Taille : xx
                                    </div>
                                </div>
                            </div>
                            <div class="ms-2 d-flex align-items-center">
                                <p class="price fs-sm"><span
                                        class="amount">{{number_format($item->prix*$item->quantite,0,'',' ')}}
                                        Fcfa</span></p>
                            </div>
                        </div>
                        @php
                        $total=$total+$item->prix*$item->quantite
                        @endphp
                        <!--/.shopping-cart-item -->
                        @endforeach


                    </div>
                    <!-- /.shopping-cart-->
                    <hr class="my-4">
                    <h3 class="mb-2">
                        Expédition
                    </h3>
                    <div class="mb-5">
                        {{-- <div class="form-check mb-2">
                            <input id="standart" name="shippingMethod" type="radio" class="form-check-input"
                                required="">
                            <label class="form-check-label" for="standart">Gratuit - Livraison standard</label>
                            <small class="text-muted d-block">L'expédition peut prendre 5-6 jours ouvrables</small>
                        </div> --}}
                        <div class="form-check">
                            <input id="express" name="shippingMethod" type="radio" class="form-check-input" checked=""
                                required="">
                            <label class="form-check-label" for="express">1000 FCFA - Livraison express</label>
                            <small class="text-muted d-block">L'expédition peut prendre 2-5 jours ouvrables</small>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-order">
                            <tbody>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Total</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price">
                                            {{number_format($total,0,'',' ')}}
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Remise (0%)</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price text-red">
                                            -0 FCFA
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Expédition</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price">
                                            @if ($total>0)
                                            1000 Fcfa
                                            @else
                                            0 FCFA
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Grand Total</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price text-dark fw-bold">
                                            @if ($total>0)
                                            {{number_format($total+1000,0,'',' ')}} FCFA
                                            @else
                                            0 FCFA
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   
                    <button class="btn btn-primary rounded w-100 mt-4" type="submit" wire:loading.remove
            wire:target='postPaymentWithpaypal' @if($total<=0) disabled @endif>valider le paiement</button>
             <button class="btn btn-primary rounded w-100 mt-4" type="button" wire:loading
            wire:target='postPaymentWithpaypal'>s'il vous plait Patientez un instant ...
            <div class="spinner-border" role="status">
                <span class="sr-only"></span>
            </div>

        </button>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-icon mb-6" role="alert">
                <i class="uil uil-exclamation-circle"></i>
                <p>{{$message}}</p>
            </div>
            <?php Session::forget('error');?>
            @endif
            

            </form>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

</div>