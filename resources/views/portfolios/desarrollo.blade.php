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
            <h5 class="white-text text-center ocultarTexto">{{trans('front.desWebMed')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">domain</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.desWebCorp')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">store_mall_directory</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.desWebPYME')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">dashboard</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.desWebPort')}}</h5>
        </div>
        <div class="col-xs-2 ajuste-servicios">
            <a data-toggle="modal" data-target="#modalContacto">
            <button class="mdl-button mdl-js-button mdl-button--fab center-block">
                <i class="material-icons white-text">shopping_cart</i>
            </button>
            </a>
            <h5 class="white-text text-center ocultarTexto">{{trans('front.desWebOn')}}</h5>
        </div>
        <div class="col-xs-1"></div>
        <br>
        <div class="col-lg-12">
          <div class="contenedor-img-1 slide-1">
               <img src="img/porta/dev/wordpress.jpg" alt="" class="img-responsive-opacity" id="wordpress-page">
               <div class="mascara">
                   <br>
                   <div class="textoCentrado">
                       <h2 class="white-text textoH2Servicio textoServicio">{{trans('webdesign.desa')}} (WORDPRESS)</h2>
                       <a href="#" class="informacion-servicio textoServicio" data-toggle="modal" data-target="#modalContacto">{{trans('general.info')}}</a>
                   </div>
               </div>
          </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="contenedor-img-2 slide-1-1">
                 <img src="img/porta/dev/webmedida.jpg" alt="" class="img-responsive-opacity" id="web-medida">
                 <div class="mascara-2">
                     <br>
                     <div class="textoCentrado">
                         <h2 class="white-text textoH2Servicio textoServicio">{{trans('webdesign.desaMed')}}</h2>
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