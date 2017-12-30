@extends('layouts.sliders')
@section('content')
    <div class="row">
        <br>
        <!-- Flickity HTML init -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider">
                        <h1>Ejemplo de visita al portafolio</h1>
                        <p>Esto solo es un parrafo donde irá una pequeña descripción del proyecto
                        presentado en este slider</p>
                    </div>
                </div>
                <img src="img/porta/desing/awrik 1.jpg" alt="orange tree" />
                <div class="carousel-cell" style="background: red;">

                </div>
                <img src="img/porta/desing/awrik 2.jpg" alt="look-out" />
                <div class="carousel-cell" style="background: orange;">

                </div>
            </div>
        </div>

    </div>

@stop