<div>

    <section class="wrapper bg-light">
        <div class="container pt-12 pt-md-14 pb-14 pb-md-16">
            <div class="row gx-md-8 gx-xl-12 gy-12">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table text-center shopping-cart">
                            <thead>
                                <tr>
                                    <th class="ps-0">
                                        <div class="h4 mb-0 text-start">
                                            Produit
                                        </div>
                                    </th>
                                    <th>
                                        <div class="h4 mb-0">
                                            Prix
                                        </div>
                                    </th>
                                    <th>
                                        <div class="h4 mb-0">
                                            Quantité
                                        </div>
                                    </th>
                                    <th>
                                        <div class="h4 mb-0">
                                            Total
                                        </div>
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total=0;
                                @endphp
                                @foreach ($this->panier as $key=>$item)
                                <tr>
                                    <td class="option text-start d-flex flex-row align-items-center ps-0" >
                                        <figure class="rounded w-17">
                                            <a href="{{route('detail-produit',encrypt($item->id_produit))}}"><img
                                                    src="{{asset("app/produit/$item->img_principale")}}"
                                                    srcset="{{asset("app/produit/$item->img_principale")}} 2x"
                                                    alt=""></a>
                                        </figure>
                                        <div class="w-100 ms-4">
                                            <h3 class="post-title h6 lh-xs mb-1">
                                                <a href="{{route('detail-produit',encrypt($item->id_produit))}}" class="link-dark">
                                                    {{$item->libelle}}
                                                </a>
                                            </h3>
                                            <div class="small">
                                                La couleur : xx
                                            </div>
                                            <div class="small">
                                                Taille : xx
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="price"> <ins><span class="amount">{{number_format($item->prix,0,'',' ')}} Fcfa</span></ins></p>
                                    </td>
                                    <td>
                                        <div class="form-select-wrapper">
                                            <span style="display: inline-block" class="text-danger"> {{$item->quantite}}</span>
                                            <select class="form-select form-select-sm mx-auto" wire:model='qte.{{$key+1}}.val' style="display: inline-block">
                                                @for ($i = 1; $i < 100; $i++)
                                                    <option value="{{$i.'-'.$item->id}}">{{$i}}</option>
                                                @endfor
                                            </select>
                                            
                                        </div>
                                        <!--/.form-select-wrapper -->
                                    </td>
                                    <td>
                                        <p class="price"><span class="amount">{{number_format($item->prix*$item->quantite,0,'',' ')}}</span></p>
                                    </td>
                                    <td class="pe-0">
                                        <a href="#!" wire:click='remove({{$item->id}})' class="link-dark" ><i class="uil uil-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @php
                                    $total=$total+$item->prix*$item->quantite
                                @endphp
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div class="row mt-0 gy-4">
                        <div class="col-md-8 col-lg-7">
                            <div class="form-floating input-group">
                                <input type="url" class="form-control" placeholder="Saisir le code promotionnel"
                                    id="seo-check">
                                <label for="seo-check">Saisir le code promotionnel</label>
                                <button class="btn btn-primary" type="button">Appliquer</button>
                            </div>
                            <!-- /.input-group -->
                        </div>
                        <!-- /column -->
                        <div class="col-md-4 col-lg-5 ms-auto ms-lg-0 text-md-end">
                            <a href="{{route("boutique")}}" class="btn btn-primary rounded">
                                Ajouter des produits au panier
                            </a>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
                <div class="col-lg-4">
                    <h3 class="mb-4">
                        Récapitulatif de la commande
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-order">
                            <tbody>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Total</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price">
                                            {{number_format($total,0,'',' ')}} Fcfa
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0"><strong class="text-dark">Remise (0%)</strong></td>
                                    <td class="pe-0 text-end">
                                        <p class="price text-red">
                                            0 Fcfa
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
                    <a href="{{route('caisse')}}" class="btn btn-primary rounded w-100 mt-4  @if($total<=0) disabled @endif">
                        Passer à la caisse
                    </a>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

</div>