<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Color Space</title>


    <!-- Styles -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Permanent+Marker') !!}
    {!! Html::style('https://code.getmdl.io/1.3.0/material.grey-indigo.min.css') !!}
    {!! Html::script('https://code.getmdl.io/1.3.0/material.min.js') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') !!}

    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css') !!}
    {!! Html::script('https://code.jquery.com/jquery-3.2.1.slim.min.js') !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js') !!}



    {!! Html::script('https://s.codepen.io/assets/libs/modernizr.js') !!}


    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css') !!}

    {!! Html::style('css/countdown.css') !!}


</head>

<body>
    @yield('contenido')

{!! Html::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') !!}

{!! Html::script('js/countdown.js') !!}

</body>
</html>
