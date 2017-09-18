<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-site-verification" content="aScgXuIENeIk0WL0rIM53VZjQb2nNXUrxG9ZlDDK81g" />
    <meta name="keywords" content="Arquitectura El Salvador, Desarrollo web El Salvador, Diseño gráfico El Salvador, #BeColorSpace">
    <meta name="description" content="Equipo, #BeColorSpace, Team">
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
    {!! Html::style('//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css') !!}


{!! Html::style('css/animate.css') !!}
{!! Html::style('css/app.css') !!}
{!! Html::style('css/images.css') !!}
{!! Html::style('css/team.css') !!}
{!! Html::style('css/style.css') !!}

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
@include('includes.modals')
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="{{url('/')}}">
        <img id="logoColorSpace" src="img/colorspacelogo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav  justify-content-end">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Promociones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalContacto">Escríbenos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/team')}}">Sobre nosotros</a>
            </li>
        </ul>
    </div>
</nav>
<main class="mdl-layout__content">
    @yield('content')
</main>

@include('includes.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
