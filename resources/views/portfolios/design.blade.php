@extends('layouts.app')
@include('includes.modals')
@section('content')
    <div class="row" id="servicios">
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

@stop