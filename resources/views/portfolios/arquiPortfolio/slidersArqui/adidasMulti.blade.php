@extends('layouts.sliders')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider centrado-slider">
                        <h2 class="text-center text-uppercase">Adidas Originals Multiplaza</h2>
                        <h3 class="text-center"><span>{{trans('arqui.supConst')}}</span></h3>
                        <h4 class="text-center mobil-only">Desliza para más información</h4>
                    </div>
                </div>
                <img src="img/porta/arqui/AdidasMulti/1.jpg" alt="adidas multiplaza" />
                <img src="img/porta/arqui/AdidasMulti/2.jpg" alt="adidas multiplaza" />
                <img src="img/porta/arqui/AdidasMulti/3.jpg" alt="adidas multiplaza" />
                <img src="img/porta/arqui/AdidasMulti/4.jpg" alt="adidas multiplaza" />
                <img src="img/porta/arqui/AdidasMulti/5.jpg" alt="adidas multiplaza" />
            </div>
        </div>

    </div>
@stop