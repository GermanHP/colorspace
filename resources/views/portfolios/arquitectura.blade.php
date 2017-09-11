@extends('layouts.app')
@include('includes.modals')
@section('content')


    <div class="row" id="servicios">
        <br><br>

        <div class="col-xs-1"></div>
        <div class="col-xs-2 ajuste-servicios">
            <a class="" data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">format_paint</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Color de Espacios</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">tonality</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Diseño Interior</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">assessment</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Construcción</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">extension</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">
                Remodelación
            </h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">home</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">Inmobiliaria</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/arquitectura/luminaria.jpg" alt="" class="img-responsive-opacity" id="luminaria">
               <div class="mascara">
                   <br>

                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio"><strong>ILUMINACIÓN</strong></h2>
                       <h3 class="white-text textoH3Servicio textoServicio">INTERIOR/EXTERIOR</h3>
                       <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                   </div>

               </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
        
            <div class="contenedor-img-2 slide-1-1">
                 <img src="img/arquitectura/paletas.jpg" alt="" class="img-responsive-opacity" id="paletas">
                 <div class="mascara-2">
                     <br>

                         <div class="textoCentrado">
                         <h2 class="white-text textoH2Servicio textoServicio"><strong>COLOR DE ESPACIOS</strong></h2>
                         <h3 class="white-text textoH3Servicio textoServicio">INTERIOR/EXTERIOR</h3>
                         <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                     </div>

                 </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/arquitectura/maqueta.jpg" alt="" class="img-responsive-opacity" id="maqueta">
               <div class="mascara">
                   <br>

                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio"><strong>DISEÑO</strong></h2>
                       <h3 class="white-text textoH3Servicio textoServicio">ARQUITECTÓNICO</h3>
                       <a href="#" class="informacion-servicio textoServicio">Informacion</a>
                   </div>

               </div>
          </div>
        </div>
    </div>
    <div class="row" id="moreinfo">
        <h3 class="center-block textoH2Servicio white-text" id="portafolios">PORTAFOLIO</h3>
        <h3 class="center-block textoH3Servicio white-text informacion-servicio" id="vermas">Ver más</h3>
    </div>
@stop