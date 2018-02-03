@extends('layouts.sliders')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true, "initialIndex": 0 }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider centrado-slider">
                        <h2 class="text-center text-uppercase">Carcamo los Naranjo</h2>
                        <h3 class="text-center"><span>{{trans('arqui.desSupCons')}}</span></h3>
                        <h4 class="text-center mobil-only">Desliza para más información</h4>
                    </div>
                </div>
                <img src="img/porta/arqui/cabana/1.jpg" alt="Carcamo los naranjo" />
                <img src="img/porta/arqui/cabana/2.jpg" alt="Carcamo los naranjo" />
                <img src="img/porta/arqui/cabana/3.jpg" alt="Carcamo los naranjo" />
                <img src="img/porta/arqui/cabana/4.jpg" alt="Carcamo los naranjo" />
            </div>
        </div>

    </div>
@stop