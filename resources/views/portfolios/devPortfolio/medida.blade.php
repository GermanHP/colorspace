@extends('layouts.sliders')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider centrado-slider">
                        <h2 class="text-center text-uppercase">Carcamo los naranjos</h2>
                        <h3 class="text-center">DISEÑO ARQUITECTÓNICO x SUPERVISIÓN x CONSTRUCCIÓN</h3>
                        <h4 class="text-center mobil-only">Desliza para más información</h4>
                    </div>
                </div>
                <img src="img/porta/arqui/cabana/1.jpg" alt="orange tree" />
                <div class="carousel-cell" style="background: red;">

                </div>
                <img src="img/porta/arqui/AdidasMetro/2.jpg" alt="look-out" />
                <div class="carousel-cell" style="background: orange;">

                </div>
            </div>
        </div>

    </div>

    <script>

        // Flickity options, defaults
        var options = {
            prevNextButtons: true
        };

        // enable prev/next buttons at 768px
        if ( matchMedia('screen and (min-width: 768px)').matches ) {
            options.prevNextButtons = false;
        }

        // disable draggable at 1200px
        if ( matchMedia('screen and (min-width: 1200px)').matches ) {
            options.draggable = true;
        }

        $('.carousel2').flickity(options);
    </script>

@stop