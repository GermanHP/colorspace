@extends('layouts.app')
@section('content')
    <div class="panel container">
        <h2 class="text-center">{{$postPublicados->titulo}}</h2>
        <br>
        <h4 class="text-justify">{{$postPublicados->texto}}</h4>
    </div>
@stop