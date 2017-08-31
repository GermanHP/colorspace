@extends('layouts.app')
@section('content')

    <div class="row" id="servicios">
        <br><br>
        <div class="col-xs-1"></div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">format_paint</i>
            </button>
            <h5 class="white-text text-center">Color de Espacios</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">tonality</i>
            </button>
            <h5 class="white-text text-center">Diseño Interior</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">assessment</i>
            </button>
            <h5 class="white-text text-center">Construcción</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">extension</i>
            </button>
            <h5 class="white-text text-center">
                Remodelación
            </h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">home</i>
            </button>
            <h5 class="white-text text-center">Inmobiliaria</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/arquitectura/luminaria.jpg" alt="" class="img-responsive-opacity" id="luminaria">
               <div class="mascara">
                   <br>
                   <h2 class="white-text"><strong>ILUMINACIÓN</strong></h2>
                   <h3 class="white-text">INTERIOR/EXTERIOR</h3>
                   <a href="#" class="white-text">Informacion</a>
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
                     <h2 class="white-text textoH2Servicio"><strong>COLOR DE ESPACIOS</strong></h2>
                     <h3 class="white-text textoH3Servicio">INTERIOR/EXTERIOR</h3>
                     <a href="#" class="informationText">Informacion</a>
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
                   <h2 class="white-text textoH2Servicio"><strong>DISEÑO</strong></h2>
                   <h3 class="white-text textoH3Servicio">ARQUITECTONICO</h3>
                   <a href="#" class="informationText">Informacion</a>
               </div>
          </div>
        </div>
    </div>
@stop