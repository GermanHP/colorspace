@extends('layouts.app')
@include('includes.modals')
@section('content')

    <div class="row" id="servicios">
        <br><br>
        <div class="col-xs-1"></div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">computer</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Diseño Web a Medida</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">domain</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Diseños Web Corporativos</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">store_mall_directory</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Diseño Web PYME</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">dashboard</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Diseño Web Portal</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">shopping_cart</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Tienda Online</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/dev/wordpress.jpg" alt="" class="img-responsive-opacity" id="wordpress-page">
               <div class="mascara">
                   <br>
                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio">DESARROLLO WEB (WORDPRESS)</h2>
                       <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                   </div>
               </div>
          </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="contenedor-img-2 slide-1-1">
                 <img src="img/dev/webmedida.jpg" alt="" class="img-responsive-opacity" id="web-medida">
                 <div class="mascara-2">
                     <br>
                     <div class="textoCentrado">
                         <h2 class="white-text textoH2Servicio textoServicio">DESARROLLO WEB A MEDIDA</h2>
                         <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="row" id="moreinfo">
        <div>
            <h3 class="center-block textoH2Servicio white-text">PORTAFOLIO</h3>
            <h3 class="center-block textoH3Servicio white-text informacion-servicio">Ver más</h3>
        </div>
    </div>
@stop