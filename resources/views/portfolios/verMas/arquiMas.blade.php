@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="col-md-4" >

                <img class="imagen-porta-arqui" src="img/porta/arqui/01adidasMetro.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Adidas Core Metrocentro</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter"><span>{{trans('arqui.supConst')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">

                <img class="imagen-porta-arqui" src="img/porta/arqui/02adidasMulti.jpg" alt="">

                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Adidas Originals Multiplaza</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.supConst')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <a href="img/porta/arqui/03adidasPerMulti.jpg " data-toggle="lightbox">
                <img class="imagen-porta-arqui" src="img/porta/arqui/03adidasPerMulti.jpg" alt="">
                </a>
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Adidas Performance Multiplaza</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.supConst')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <img class="imagen-porta-arqui" src="img/porta/arqui/04flexiSanMi.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Flexi San Miguel</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter"><span>{{trans('arqui.supConst')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <img class="imagen-porta-arqui" src="img/porta/arqui/05reboMulti.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Rebook Multiplaza</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.supConst')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <img class="imagen-porta-arqui" src="img/porta/arqui/06carcamo.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Carcamo los naranjos</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.desSupCons')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <img class="imagen-porta-arqui" src="img/porta/arqui/07atacoResi.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Ataco Residencia</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.desArqui')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <img class="imagen-porta-arqui" src="img/porta/arqui/08cenHallCali.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Cara Sucia Residencia</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.desArqui')}}</span></h5><br>
                </div>
            </div>
            <div class="col-md-4">
                <img class="imagen-porta-arqui" src="img/porta/arqui/09lucesResi.jpg" alt="">
                <div class="cont-porta">
                <h3 id="arquitectura" class="text-center "><span>Las Luces Residencia</span></h3><br>
                <h5 id="arquitectura" class="text-center up-inter "><span>{{trans('arqui.desArqui')}}</span></h5><br>
                </div>
            </div>
        </div>

        <script>
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
        </script>




@stop