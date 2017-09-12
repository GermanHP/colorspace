@extends('layouts.app')
@include('includes.modals')
@section('content')
    <div class="row" id="servicios">
        <br><br>
        <div class="col-xs-1"></div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">fingerprint</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Identidad Corporativa</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">gesture</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Publicidad</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">subscriptions</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Audiovisuales</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">insert_photo</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Imagen Gráfica Eventos</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">mode_edit</i>
            </button>
                </a>
            <h5 class="white-text text-center ocultarTexto">Ilustración</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/disenio/animation.jpg" alt="" class="img-responsive-opacity" id="animacion">
               <div class="mascara">
                   <br>
                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio">ANIMACION DIGITAL</h2>
                       <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                   </div>
               </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
        
            <div class="contenedor-img-2 slide-1-1">
                 <img src="img/disenio/chloting.jpg" alt="" class="img-responsive-opacity" id="clothing">
                 <div class="mascara-2">
                     <br>
                     <div class="textoCentrado">
                         <h2 class="white-text textoH2Servicio textoServicio">SPACE CLOTHING</h2>
                         <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                     </div>
                 </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/disenio/publish.jpg" alt="" class="img-responsive-opacity" id="branding">
               <div class="mascara">
                   <br>
                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio">DISEÑO PUBLICITARIO</h2>
                       <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                   </div>
               </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
        
            <div class="contenedor-img-2 slide-1-1">
                 <img src="img/disenio/photo.jpg" alt="" class="img-responsive-opacity" id="photo">
                 <div class="mascara-2">
                     <br>
                     <div class="textoCentrado">
                         <h2 class="white-text textoH2Servicio textoServicio">PHOTO SPACE</h2>
                         <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                     </div>
                 </div>
            </div>
        </div>
    </div>

@stop