@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}

@endsection


@section('content')

<!-- /content section -->
<section class="mx-auto m-5 text-center">
    <div class="row g-6">
        <div class="col-lg-12">
            <div class="card shadow-lg">
                <div class="card-body">
                            <section class="wrapper bg-light">
                                <div class="container py-14 py-md-16">
                                    
                                    <div class="row">
                                        <div class="col-xl-12 mx-auto">
                                            
                                                @livewire('participant-front', ['code' => $code])
                                                <!--/column -->
                                            <!--/.row -->
                                        </div>
                                        <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.container -->
                            </section>
                            <!-- /section -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /end content section -->

@endsection

@section('js_footer')
{{-- ajouter du js spécifique à la page --}}

@endsection