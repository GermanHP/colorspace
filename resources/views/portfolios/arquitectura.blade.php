@extends('layouts.app')
@section('content')

    <div class="row" id="servicios">
        <br><br>
        <div class="col-xs-1"></div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">format_paint</i>
            </button>
            <h5 class="white-text text-center ocultarTexto">{{trans('arqui.colorEsp')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">tonality</i>
            </button>
            <h5 class="white-text text-center ocultarTexto">{{trans('arqui.interior')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">assessment</i>
            </button>
            <h5 class="white-text text-center ocultarTexto">{{trans('arqui.const')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">extension</i>
            </button>
            <h5 class="white-text text-center ocultarTexto">
                {{trans('arqui.remo')}}
            </h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
            <i class="material-icons white-text">home</i>
            </button>
            <h5 class="white-text text-center ocultarTexto">{{trans('arqui.inmo')}}</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/arquitectura/luminaria.jpg" alt="" class="img-responsive-opacity" id="luminaria">
               <div class="mascara">
                   <br>
                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio"><strong>{{trans('arqui.ilumi')}}</strong></h2>
                       <h3 class="white-text textoH3Servicio textoServicio">{{trans('general.inEx')}}</h3>
                       <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
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
                         <h2 class="white-text textoH2Servicio textoServicio"><strong>{{trans('arqui.spaceCo')}}</strong></h2>
                         <h3 class="white-text textoH3Servicio textoServicio">{{trans('general.inEx')}}</h3>
                         <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
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
                       <h2 class="white-text textoH2Servicio textoServicio"><strong>{{trans('arqui.design')}}</strong></h2>
                       <h3 class="white-text textoH3Servicio textoServicio">{{trans('arqui.arqDes')}}</h3>
                       <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
                   </div>
               </div>
          </div>
        </div>
    </div>
    <div class="row" id="moreinfo">
        <div class="center-block portafolio-link">
            <h3 class="textoH2Servicio white-text"><b>{{trans('general.porta')}}</b></h3>
            <a href="{{url('/porta-architecture')}}"><h3 class="text-center textoH3Servicio white-text ver-mas" >{{trans('general.ver')}}</h3></a>
        </div>
    </div>
@stop