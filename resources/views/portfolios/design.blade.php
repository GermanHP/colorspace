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
            <h5 class="white-text text-center ocultarTexto">{{trans('front.identiCorp')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">gesture</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.publi')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">subscriptions</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.audiovi')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">insert_photo</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.imgGraph')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">mode_edit</i>
            </button>
                </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.ilustrar')}}</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/disenio/animation.jpg" alt="" class="img-responsive-opacity" id="animacion">
               <div class="mascara">
                   <br>
                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio">{{trans('design.anima')}}</h2>
                       <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
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
                         <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
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
                       <h2 class="white-text textoH2Servicio textoServicio">{{trans('design.pubDes')}}</h2>
                       <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
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
                         <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
                     </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="row" id="moreinfo">
        <div class="center-block">
            <h3 class="textoH2Servicio white-text"><b>{{trans('general.porta')}}</b></h3>
            <h3 class="text-center textoH3Servicio white-text ver-mas">{{trans('general.ver')}}</h3>
        </div>
    </div>

@stop