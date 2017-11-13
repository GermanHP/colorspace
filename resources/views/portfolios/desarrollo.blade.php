@extends('layouts.app')
@include('includes.modals')
@section('content')

    <div class="row" id="servicios">
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
@stop