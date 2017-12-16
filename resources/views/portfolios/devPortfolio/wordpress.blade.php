@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >

            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="#" data-toggle="modal" data-target="#modalColegio">
                <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <a href="img/porta/arqui/03adidasPerMulti.jpg " data-toggle="lightbox">
                <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">

        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
            <img class="imagen-porta-arqui" src="img/porta/dev/1.jpg" alt="">
        </div>
    </div>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>

@stop