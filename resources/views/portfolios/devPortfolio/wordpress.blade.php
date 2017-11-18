@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >

            <img class="imagen-porta-arqui" src="img/porta/arqui/01adidasMetro.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="#" data-toggle="modal" data-target="#modalColegio">
                <img class="imagen-porta-arqui" src="img/porta/arqui/02adidasMulti.jpg" alt="">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="img/porta/arqui/03adidasPerMulti.jpg " data-toggle="lightbox">
                <img class="imagen-porta-arqui" src="img/porta/arqui/03adidasPerMulti.jpg" alt="">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/arqui/04flexiSanMi.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/arqui/05reboMulti.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/arqui/06carcamo.jpg" alt="">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/arqui/07atacoResi.jpg" alt="">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/arqui/08cenHallCali.jpg" alt="">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/arqui/09lucesResi.jpg" alt="">
        </div>
    </div>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

@stop