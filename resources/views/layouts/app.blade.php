<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://code.getmdl.io/1.3.0/material.blue_grey-blue.min.css') !!}
    {!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

    {!! Html::style('css/animate.css') !!}

    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/app.css') !!}


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <a class="navbar-brand" href="{{url('/')}}">
                        <img id="logoColorSpace" src="img/logospace.png" alt="">
                    </a>
                    <span class="mdl-layout-title">Color Space</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link black-text" href="{{url('/')}}">Home</a>
                        <a class="mdl-navigation__link" href="#servicios">Servicios</a>
                        <a class="mdl-navigation__link" href="#nosotros">Sobre Nosotros</a>
                        <a class="mdl-navigation__link" href="#" id="demo-menu-lower-right">Proyectos <!-- Right aligned menu below button -->

                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                for="demo-menu-lower-right">
                                <a href="{{url('/architecture')}}"><li class="mdl-menu__item">Arquitectura</li></a>
                                <a href="{{url('/design')}}"><li class="mdl-menu__item">Diseño Gráfico</li></a>
                                <li class="mdl-menu__item">Diseño Web</li>
                            </ul></a>
                        <a class="mdl-navigation__link" href="#">Contacto</a>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <br>
                <img class="center-block img-responsive" src="img/logospace.png" alt="" width="150" height="70">
                <h2 class="text-center">Color Space</h2>

                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="{{url('/')}}">Home</a>
                    <a class="mdl-navigation__link" href="#">Servicios</a>
                    <a class="mdl-navigation__link" href="#">Sobre Nosotros</a>
                    <a class="mdl-navigation__link" href="{{url('/architecture')}}">Arquitectura</a>
                    <a class="mdl-navigation__link" href="{{url('/design')}}">Diseño Gráfico</a>
                    <a class="mdl-navigation__link" href="#">Diseño Web</a>
                    <a class="mdl-navigation__link" href="#">Contacto</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">@yield('content')</div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
