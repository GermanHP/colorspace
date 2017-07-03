@extends('layouts.app')
@section('content')
    <!-- CAROUSEL START -->
    <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
        <!--Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img id="slide" src="img/bannerdg.jpg" alt="First Slide">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img id="slide" src="img/bannerarq.jpg" alt="Second Slide">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img id="slide" src="img/bannerdw.jpg" alt="Third Slide">
                <div class="carousel-caption">

                </div>
            </div>
        </div>
        <!--Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>

    <!--CAROUSEL END -->

    @include('includes.modals')
<div class="container" id="servicios">
    <div class="row">
        <div class="col-lg-4 panel" id="services">
            <div class="panel-header">
                <br><br>
                <img class="img-circle center-block" src="img/arquitectura.jpg" alt="" height="300" width="300">
            </div>
            <div class="panel" id="services">
                <h3 class="text-center teal-text"><b>Arquitectura</b></h3>
                <p class="text-justify">Color Space ofrece a los clientes los cambios a espacios existentes que
                    estos necesiten, generando nuevas dimensiones, formas, texturas, etc, que puedan cumplir con los
                    objetivos del cliente y la posibilidad de construir todas las ideas, por medio de personal
                    calificado y excelentes materiales.</p>
                <br>
                <div class="center">
                    <h5 class="text-center">Color de Espacios</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block" data-toggle="modal" data-target="#myModal" data-backdrop="false">
                        <i class="material-icons">format_paint</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Diseño Interior</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">tonality</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Construcción</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">assessment</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Remodelación</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">extension</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Inmobiliaria</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">home</i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 panel" id="services">
            <div class="panel-header">
                <br><br>
                <img class="img-circle center-block" src="img/design.jpg" alt="" height="300" width="300">
            </div>
            <div class="panel" id="services">
                <h3 class="text-center teal-text"><b>Diseño Gráfico</b></h3>
                <p class="text-justify">Color Space ofrece a los clientes soluciones a las necesidades de comunicación
                    visual, desde la creación de pequeños proyectos hasta el diseño de la imagen corporativa de empresas
                     o entidades, buscando el diseño más profesional, cuidando pequeños detalles que ayuden a impulsar
                     la economía de las mismas.</p>
                <br>
                <div class="center">
                    <h5 class="text-center">Identidad Corporativa</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">fingerprint</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Publicidad</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">gesture</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Audiovisual</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">subscriptions</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Imagen Gráfica Eventos</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">insert_photo</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Ilustración</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">mode_edit</i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-4 panel" id="services">
            <div class="panel-header">
                <br><br>
                <img class="img-circle center-block" src="img/web.jpg" alt="" height="300" width="300">
            </div>
            <div class="panel" id="services">
                <h3 class="text-center teal-text"><b>Desarrollo Web</b></h3>
                <p class="text-justify">Color Space ofrece a los clientes el desarrollo, puesta en marcha y soporte
                    técnico de sitios web para su empresa, aumentando el alcance de su negocio a nuevas fronteras, y
                    potenciando su competitividad en el mercado actual.</p>
                <br>
                <div class="center">
                    <h5 class="text-center">Diseño Web a Medida</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">computer</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Diseños Web Corporativos</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">domain</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Diseño Web PYME</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">store_mall_directory</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Diseño Web Portal</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">dashboard</i>
                    </button>
                </div>
                <div class="center">
                    <h5 class="text-center">Tienda Online</h5>
                    <button class="mdl-button mdl-js-button mdl-button--fab btn-color center-block">
                        <i class="material-icons">shopping_cart</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container" id="nosotros">
    <div class="panel" id="info">
        <div class="container">
            <h1 class="text-center">Biografía</h1>
            <h4 class="text-justify">Color Space fue fundado el 18 de septiembre del año 2016, siendo estudiantes
                decidimos direccionar nuestras capacidades a tres diferentes servicios: arquitectura, diseño gráfico
                y desarrollo web, el mismo año de inicio tuvimos la oportunidad de capacitarnos con el fin de mejorar
                el modelo empresarial con profesionales internacionales y nacionales, para poder realizar todo tipo
                de gestión para el inicio de la misma , actualmente somos socios profesionales que lideramos el
                proyecto con el fin de satisfacer en nuestras áreas todas las necesidades de nuestros clientes.</h4>
        </div>
        <div class="row">
            <div class="col-md-6 container">
                <h1 class="text-center">Misión</h1>

                <h3 class="text-center">Trabajar en conjunto con los requerimientos de los clientes y exceder sus
                    expectativas en términos de calidad, costo, control y gestión del tiempo.</h3>

            </div>
            <div class="col-md-6 container  ">
                <h1 class="text-center">Visión</h1>

                <h3 class="text-center">Ser una empresa innovadora, multinacional creando servicios únicos que
                    satisfagan al cliente y se adapte a sus necesidades.</h3>

            </div>
        </div>
    </div>
    </div>

    <div class="parallax">
        <a href="{{url('/team')}}"><img class="parallax" src="img/team.jpg" alt="El Equipo"></a>
    </div>
    <br>

    @include('includes.footer')
@stop