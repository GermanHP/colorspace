@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="{{url('/banners')}}">
                    <img class="imagen-porta-arqui" src="img/porta/desing/Banner.jpg" alt="">
                    <div class="">
                        <h3 id="arquitectura" class="text-center white-text"><span><b>Banners</b></span></h3><br>
                    </div>
                </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="{{url('/clothing')}}">
                    <img class="imagen-porta-arqui" src="img/porta/desing/Clothing.jpg"  alt="">
                    <div class="">
                        <h3 id="arquitectura" class="text-center white-text"><span><b>Clothing</b></span></h3><br>
                    </div>
                </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/flyers')}}">
                <img class="imagen-porta-arqui" src="img/porta/desing/Flyers.jpg"  alt="">
                <div class="">
                    <h3 id="arquitectura" class="text-center white-text"><span><b>Flyers</b></span></h3><br>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/ilustraciones')}}">
                <img class="imagen-porta-arqui " src="img/porta/desing/Ilustraciones.jpg" alt="">
                <div class="">
                    <h3 id="arquitectura" class="text-center white-text"><span><b>Ilustraciones</b></span></h3><br>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/logos')}}">
                <img class="imagen-porta-arqui" src="img/porta/desing/Logos.jpg" alt="">
                <div class="">
                    <h3 id="arquitectura" class="text-center white-text"><span><b>Logos</b></span></h3><br>
                </div>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <a href="{{url('/papeleria')}}">
                <img class="imagen-porta-arqui" src="img/porta/desing/Papeleria.jpg" alt="">
                <div class="">
                    <h3 id="arquitectura" class="text-center white-text"><span><b>Papelerias</b></span></h3><br>
                </div>
            </a>
        </div>
    </div>

@stop