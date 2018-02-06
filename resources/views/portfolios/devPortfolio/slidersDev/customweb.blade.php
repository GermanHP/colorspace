@extends('layouts.sliders')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{"contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: #1A3C58;">
                    <div class="texto-slider centrado-slider white-text">
                        <h2 class="text-center text-uppercase">Web Development</h2>
                        <h4 class="text-center visible-xs ext-uppercase"><span>{{trans('arqui.desIz')}}</span></h4>
                    </div>
                </div>
                <img src="img/porta/dev/customwebs/3.jpg" alt="web" />
                <img src="img/porta/dev/customwebs/4.jpg" alt="web" />
                <img src="img/porta/dev/customwebs/5.jpg" alt="web" />
                <img src="img/porta/dev/customwebs/6.jpg" alt="web" />
                <img src="img/porta/dev/customwebs/7.jpg" alt="web" />
                <img src="img/porta/dev/customwebs/8.jpg" alt="web" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{"contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <div class="texto-slider centrado-slider cs-text">
                        <h2 class="text-center text-uppercase">Android Development</h2>
                        <h4 class="text-center visible-xs ext-uppercase"><span>{{trans('arqui.desIz')}}</span></h4>
                    </div>
                </div>
                <img src="img/porta/dev/customwebs/1.jpg" alt="android" />
                <img src="img/porta/dev/customwebs/2.jpg" alt="android" />
                <img src="img/porta/dev/customwebs/9.jpg" alt="android" />
                <img src="img/porta/dev/customwebs/10.jpg" alt="android" />
                <img src="img/porta/dev/customwebs/11.jpg" alt="android" />
                <img src="img/porta/dev/customwebs/12.jpg" alt="android" />
                <img src="img/porta/dev/customwebs/13.jpg" alt="android" />
            </div>
        </div>
    </div>
@stop