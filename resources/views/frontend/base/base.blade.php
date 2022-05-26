<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="elemis">
    <title>Accueil | {{$title}}</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo Nwanyepote31.png')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="preload" href="{{asset('assets/css/fonts/thicccboi.css')}}" as="style" onload="this.rel='stylesheet'">
    @yield('css_js_header')
    @livewireStyles
</head>

<body>
    <div class="content-wrapper">
        @include('frontend.layouts.header')
        <!-- /header -->
        @yield('content')
        <!-- /end content section -->
    </div>
        <!-- /.content-wrapper -->
        @include('frontend.layouts.footer')
        <!-- /.end footer -->

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
        </div>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/theme.js')}}"></script>
</body>
    @yield('js_footer')
    @livewireScripts
</html>