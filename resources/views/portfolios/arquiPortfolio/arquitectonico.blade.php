@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/adidas-metrocentro')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/1.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Adidas Core Metrocentro</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.supConst')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/adidas-multiplaza')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/2.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Adidas Originals Multiplaza</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.supConst')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/adidas-performance-multiplaza')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/3.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Adidas Performance Multiplaza</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.supConst')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/flexi-sanmiguel')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/4.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Flexi San Miguel</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.supConst')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/reebok-multiplaza')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/5.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Rebook Multiplaza</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.supConst')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/carcamo-naranjos')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/6.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Carcamo los naranjos</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.desSupCons')}}</span></h5><br>
            </a>
        </div>
        <!--
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/ataco-residencia')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/07atacoResi.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Ataco Residencia</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.desArqui')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/carasucia-residencia')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/08cenHallCali.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Cara Sucia Residencia</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.desArqui')}}</span></h5><br>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/lasluces-residencia')}}">
                <img class="imagen-porta-arqui" src="img/porta/arqui/09lucesResi.jpg" alt="">
                <h3 id="arquitectura" class="text-center white-text"><span>Las Luces Residencia</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter white-text"><span>{{trans('arqui.desArqui')}}</span></h5><br>
            </a>
        </div>
        -->
    </div>

@stop