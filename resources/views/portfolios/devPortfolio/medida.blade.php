@extends('layouts.app')
@section('content')
    <div class="row">
        <br>
        <!-- Flickity HTML init -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="carousel2"
                 data-flickity='{ "freeScroll": true, "contain": true, "prevNextButtons": true, "pageDots": false, "imagesLoaded": true }'>
                <div class="carousel-cell" style="background: white;">
                    <h1>Gabriel Eres un Crack</h1>
                    <p>Apoco no?</p>
                </div>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" alt="orange tree" />
                <div class="carousel-cell" style="background: red;">
                    <h1>Gabriel Eres un Crack X2</h1>
                    <p>Apoco no Carnal?x2</p>
                </div>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" alt="look-out" />
                <div class="carousel-cell" style="background: orange;">
                    <h1>Gabriel Eres un Crack X3</h1>
                    <p>Apoco no Carnal?x3</p>
                </div>
            </div>
        </div>

    </div>

@stop