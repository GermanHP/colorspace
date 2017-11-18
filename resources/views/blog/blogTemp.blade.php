@extends('layouts.app')
@section('content')
    <!--
    <div>
    <iframe src="http://colorspacemejorada-com.stackstaging.com/" width="100%" height="100%" style="position : fixed"> </iframe>
    </div>
    -->

    @foreach($entradas as $entrada)
        <div class="container">
            <div class="col-md-4">
                <div class="jumbotron">
                    <div class="caption">
                        <h2 class="text-center">{{$entrada->titulo}}</h2>
                        <p class="text-justify">{{$entrada->texto}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @stop