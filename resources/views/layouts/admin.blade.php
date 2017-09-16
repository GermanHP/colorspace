<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

{!! Html::style('assets/css/bootstrap.css') !!}
<!-- Font Awesome -->

{!! Html::style('assets/css/font-awesome.css') !!}
{!! Html::style('dist/css/select2.css') !!}
<!-- Ionicons -->
{!! Html::script('http://code.jquery.com/jquery-latest.js') !!}
<!-- DataTables -->
{!! Html::style('assets/plugins/datatables/dataTables.bootstrap.css') !!}
<!-- Theme style -->
{!! Html::style('assets/dist/css/AdminLTE.css') !!}
<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
{!! Html::style('assets/dist/css/skins/_all-skins.css') !!}
<!-- jQuery 2.1.4 -->
{!! Html::script('assets/plugins/jQuery/jQuery-2.1.4.min.js') !!}

{!! Html::script('dist/js/select2.full.js') !!}
<!-- Bootstrap 3.3.5 -->
{!! Html::script('assets/js/bootstrap.min.js') !!}
<!-- DataTables -->
{!! Html::script('assets/plugins/datatables/jquery.dataTables.min.js') !!}
{!! Html::script('assets/plugins/datatables/dataTables.bootstrap.min.js') !!}
<!-- SlimScroll -->
{!! Html::script('assets/plugins/slimScroll/jquery.slimscroll.min.js') !!}
<!-- FastClick -->
{!! Html::script('assets/plugins/fastclick/fastclick.min.js') !!}
<!-- AdminLTE App -->
{!! Html::script('assets/dist/js/app.min.js') !!}
<!-- AdminLTE for demo purposes -->
{!! Html::script('assets/dist/js/demo.js') !!}

{!! Html::script('assets/plugins/datepicker/bootstrap-datepicker.js') !!}

{!! Html::script('assets/plugins/timepicker/bootstrap-timepicker.min.js') !!}
{!! Html::script('assets/plugins/datepicker/locales/bootstrap-datepicker.es.js') !!}
{!! Html::script('assets/js/jquery.mask.min.js') !!}

{!! Html::style('assets/plugins/datepicker/datepicker3.css') !!}
{!! Html::script('assets/js/loading.js') !!}
{!! Html::script('assets/js/SERO.js') !!}
{!! Html::style('assets/css/SERO.css') !!}

    <!-- Styles -->
{!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
{!! Html::style('https://code.getmdl.io/1.3.0/material.teal-pink.min.css') !!}
{!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css') !!}
{!! Html::script('https://code.jquery.com/jquery-3.2.1.slim.min.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') !!}
{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js') !!}
{!! Html::style('//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css') !!}


{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

{!! Html::script('vendors/ckeditor/ckeditor.js') !!}


{!! Html::style('css/admin.css') !!}
{!! Html::style('css/app.css') !!}



{!! Html::style('css/app.css') !!}
{!! Html::style('css/style.css') !!}

<!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
                <!-- Right aligned menu below button -->
                <button id="demo-menu-lower-right"
                        class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                    for="demo-menu-lower-right">
                    <li class="mdl-menu__item">Detalles de mi cuenta</li>
                    <li class="mdl-menu__item">Reestablecer contraseña</li>
                    <li class="mdl-menu__item">
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
            </div>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Color Space</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="#"><i class="material-icons">inbox</i>Inbox</a>
            <a class="mdl-navigation__link" href="#"><i class="material-icons">supervisor_account</i>Contactos</a>
            <a class="mdl-navigation__link" href="#"><i class="material-icons">shopping_basket</i>Promociones</a>
            <a class="mdl-navigation__link" href="#"><i class="material-icons">add_shopping_cart</i>Nueva Promoción</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">@yield('contenido')</div>
    </main>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
