<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="aScgXuIENeIk0WL0rIM53VZjQb2nNXUrxG9ZlDDK81g" />
    <meta name="keywords" content="arquitectura el salvador, desarrollo web el salvador, diseño gráfico el salvador, animación el salvador">
    <meta name="description" content="Desarrollo de sitios web, Diseño arquitectónico, Diseño publicitario, Animación digital">
    <meta name="author" content="colorspaceco.com">
    <meta name="owner" content="Color Space Company">
    <meta name="robots" content="index, follow">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Arquitectura x Desarrollo Web x Diseño Gráfico</title>

    <!-- Styles -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://code.getmdl.io/1.3.0/material.grey-indigo.min.css') !!}
    {!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.2.1.slim.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js') !!}


    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/images.css') !!}
    {!! Html::style('css/servicios.css') !!}
    {!! Html::style('css/app.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/portaStyle.css') !!}


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-105860379-1', 'auto');
        ga('send', 'pageview');

    </script>

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "name": "Color Space Company",
          "url": "http://www.colorspaceco.com",
          "sameAs": [
            "https://www.facebook.com/ColorSpaceCompany/",
            "https://www.instagram.com/colorspaceco/"
          ]
        }
</script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{url('/')}}">
        <img id="logoColorSpace" src="img/colorspacelogo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav  justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">{{trans('front.start')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{trans('front.prom')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalContacto">{{trans('front.write')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/team')}}">{{trans('front.about')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/blog')}}">Blog</a>
            </li>


                @if (Auth::guest())
                    <li id="loguear"><a href="#" data-toggle="modal" data-target="#modalLogin">{{trans('auth.inicio')}}</a></li>

                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->nombre }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#">Mi Perfil</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Cerrar Sesión
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{trans('general.lang')}}</a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{url('lang', ['en'])}}">English</a></li>
                                <li><a href="{{url('lang', ['es'])}}">Español</a></li>
                            </ul>
                        </li>
        </ul>
    </div>
</nav>
@include('includes.modals')
<main class="mdl-layout__content">
    <div class="page-content">
        @yield('content')

    </div>
</main>

 @include('includes.footer')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
