@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="contenedor-img-1 slide-1">
                <a href="#" data-toggle="modal" data-target="#modalContacto">
                    <img src="img/arquitectura/maqueta.jpg" alt="" class="img-responsive-opacity" id="maqueta">
                    <div class="mascara">
                        <br>
                        <div class="textoCentrado">
                            <h2 class="white-text textoH2Servicio textoServicio"><strong>{{trans('arqui.archi')}}</strong></h2>
                            <h3 class="white-text textoH3Servicio textoServicio">{{trans('arqui.amper')}}</h3>
                            <h3 class="white-text textoH3Servicio textoServicio">{{trans('arqui.interior')}}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row" id="servicios">
        <div class="col-lg-12">
            <div class="contenedor-img-2 slide-1-1">
                <a href="#" data-toggle="modal" data-target="#modalContacto">
                   <img src="img/arquitectura/luminaria.jpg" alt="" class="img-responsive-opacity" id="luminaria">
                   <div class="mascara-2">
                       <br>
                       <div class="textoCentrado">
                           <h2 class="white-text textoH2Servicio textoServicio"><strong>{{trans('arqui.ilumi')}}</strong></h2>
                           <h3 class="white-text textoH3Servicio textoServicio">{{trans('general.inEx')}}</h3>
                       </div>
                   </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="contenedor-img-1 slide-1">
                <a href="#" data-toggle="modal" data-target="#modalContacto">
                     <img src="img/arquitectura/paletas.jpg" alt="" class="img-responsive-opacity" id="paletas">
                     <div class="mascara">
                         <br>
                         <div class="textoCentrado">
                             <h2 class="white-text textoH2Servicio textoServicio"><strong>{{trans('arqui.spaceCo')}}</strong></h2>
                             <h3 class="white-text textoH3Servicio textoServicio">{{trans('general.inEx')}}</h3>
                         </div>
                     </div>
                </a>
            </div>
        </div>
    </div>
@stop