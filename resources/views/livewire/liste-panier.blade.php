<div class="offcanvas offcanvas-end bg-light" id="offcanvas-cart" data-bs-scroll="true" wire:ignore.self>
    <div class="offcanvas-header">
        <h3 class="mb-0">Votre Panier</h3>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    @if (!auth()->check())
    <div class="offcanvas-body d-flex flex-column">
        <div class="shopping-cart">
            <p>Connectez vous pour acceder à votre panier.</p>
        </div>    
    </div>    
    @else
    <div class="offcanvas-body d-flex flex-column">
        <div class="shopping-cart">
            @php
                $total=0;
            @endphp
            @foreach ($this->panier as $key=>$item)
                <div class="shopping-cart-item d-flex justify-content-between mb-4">
                    <div class="d-flex flex-row">
                        <figure class="rounded w-17">
                            <a href="{{route('detail-produit',encrypt($item->id_produit))}}"><img src="{{asset("app/produit/$item->img_principale")}}" alt="" /></a>
                        </figure>
                        <div class="w-100 ms-4">
                            <h3 class="post-title fs-16 lh-xs mb-1"><a href="{{route('detail-produit',encrypt($item->id_produit))}}" class="link-dark">{{$item->libelle}}</a></h3>
                            <p class="price fs-sm">{{$item->quantite}} X <ins><span class="amount">{{number_format($item->prix,0,'',' ')}} Fcfa</span></ins></p>
                            <div class="form-select-wrapper">
                                <select class="form-select form-select-sm" wire:model='qte.{{$key+1}}.val'>
                                    @for ($i = 1; $i < 100; $i++)
                                        <option value="{{$i.'-'.$item->id}}">{{$i}}</option>
                                    @endfor
                                </select>
                                
                                <span class="amount">Total : {{ number_format($item->prix * $item->quantite,0,'',' ')}} Fcfa</span>
                                @php
                                    $total=$total+$item->prix * $item->quantite
                                @endphp
                            </div>
                            <!--/.form-select-wrapper -->
                        </div>
                    </div>
                    <div class="ms-2"><a href="#" class="link-dark" wire:click='remove({{$item->id}})'><i class="uil uil-trash-alt"></i></a></div>
                </div>
                <!--/.shopping-cart-item -->
            @endforeach
            
        </div>
        <!-- /.shopping-cart-->
        <div class="offcanvas-footer flex-column text-center">
            <div class="d-flex w-100 justify-content-between mb-4">
                <span>Sous Total:</span>
                <span class="h6 mb-0">{{ number_format($total,0,'',' ')}} FCFA</span>
            </div>
            <a href=" {{route('caisse')}} " class="btn btn-primary btn-icon btn-icon-start rounded w-100 mb-4 @if($total<=0) disabled @endif"><i class="uil uil-credit-card fs-18"></i> Valider mon panier</a>
            <p class="fs-14 mb-0">Livraison gratuite pour les commandes de plus de 50 000 FCFA</p>
        </div>
        <!-- /.offcanvas-footer-->
    </div>
    <!-- /.offcanvas-body -->
    @endif
    
</div>
<!-- /.offcanvas -->