@extends('layouts.app')
@section('content')
    <div class="row" >
       <div class="col-lg-3 div-imagen">
           <div>
               <h1 class="text-center white-text">ARQUITECTURA</h1>
               <h4 class="text-center white-text">Diseño Interior</h4>
               <h4 class="text-center white-text">Construcción</h4>
               <h4 class="text-center white-text">Remodelación</h4>
               <h4 class="text-center white-text">Inmobiliaria</h4>
           </div>

           <a href="{{url('/architecture')}}"><img class="desvanecer inicio" src="img/front/A1.jpg" alt=""></a>
       </div>
        <div class="col-lg-3 div-imagen">
            <div>
                <h1 class="text-center white-text">DISEÑO GRÁFICO</h1>
                <h4 class="text-center white-text">Identidad Corporativa</h4>
                <h4 class="text-center white-text">Publicidad</h4>
                <h4 class="text-center white-text">Audiovisual</h4>
                <h4 class="text-center white-text">Imagen Gráfica de Eventos</h4>
                <h4 class="text-center white-text">Ilustración</h4>

            </div>
            <a href="{{url('/design')}}"><img class="desvanecer inicio" src="img/front/A2.jpg" alt=""></a>
        </div>
        <div class="col-lg-3 div-imagen">
            <div>
                <h1 class="text-center white-text">DESARROLLO WEB</h1>
                <h4 class="text-center white-text">Diseño Web a la Medida</h4>
                <h4 class="text-center white-text">Diseños Corporativos</h4>
                <h4 class="text-center white-text">Diseño Web PYME</h4>
                <h4 class="text-center white-text">Diseño Web Portal</h4>
                <h4 class="text-center white-text">Tienda Online</h4>

            </div>
            <a href="{{url('web')}}"><img class="desvanecer inicio" src="img/front/A3.jpg" alt=""></a>
        </div>
        <div class="col-lg-3 div-imagen">
            <div><h1 class="center-block white-text">PROMOCIONES</h1></div>
            <a href="#"><img class="desvanecer inicio" src="img/front/A4.jpg" alt=""></a>
        </div>
    </div>
@stop