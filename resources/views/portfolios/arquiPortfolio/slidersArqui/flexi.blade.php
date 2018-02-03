@extends('layouts.sliders')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider centrado-slider">
                        <h2 class="text-center text-uppercase">Flexi San Miguel</h2>
                        <h3 class="text-center"><span>{{trans('arqui.supConst')}}</span></h3>
                        <h4 class="text-center mobil-only">Desliza para más información</h4>
                    </div>
                </div>
                <img src="img/porta/arqui/Flexi/1.jpg" alt="flexi san miguel" />
                <img src="img/porta/arqui/Flexi/2.jpg" alt="flexi san miguel" />
                <img src="img/porta/arqui/Flexi/3.jpg" alt="flexi san miguel" />
                <img src="img/porta/arqui/Flexi/4.jpg" alt="flexi san miguel" />
            </div>
        </div>

    </div>
@stop