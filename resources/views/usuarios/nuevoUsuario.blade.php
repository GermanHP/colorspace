@extends('layouts.app')
@section('content')
    <div class="panel panel-body">
        <h3>Nuevo Usuario</h3>


        @include('alertas.errores')
        @include('alertas.flash')
        @include('usuarios.formulario.nuevo')


    </div>

@stop