@extends('frontend.base.base', ['title' => 'Nwanyepote | '] )

@section('css_js_header')
{{-- css ou js spécifique à la page --}}

@endsection


@section('content')

@livewire('participant-unique', ['code' => $code])

@endsection

@section('js_footer')
{{-- ajouter du js spécifique à la page --}}

@endsection