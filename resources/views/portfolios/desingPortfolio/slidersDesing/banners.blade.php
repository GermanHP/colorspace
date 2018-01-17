@extends('layouts.sliders')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider centrado-slider">
                        <h2 class="text-center text-uppercase">Banners</h2>
                        <h4 class="text-center mobil-only">Desliza para más información</h4>
                    </div>
                </div>
                <img src="img/porta/desing/Banners/1.jpg" alt="banners" />
                <img src="img/porta/desing/Banners/2.jpg" alt="banners" />
            </div>
        </div>

    </div>
@stop