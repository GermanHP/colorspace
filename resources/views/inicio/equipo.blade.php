@extends('layouts.teamlayout')
@section('content')
    <div id="sobre-nosotros">
        <div class="row">
            <div class="col-md-4">
                <img class="img-equipo" src="img/team/planos.png" alt="" >
            </div>
            <div class="col-xs-2"></div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-md-5">
                <br><br><br><br>
                <h3 class="white-text text-center">{{trans('team.about')}}</h3>
                <br>
                <h4 class="white-text text-justify pull-right">{{trans('team.bio')}}</h4>
            </div>
            <div class="col-xs-1"></div>
            <div class="container">
            <div class="col-md-5 ajustar-pantalla">
                <br><br>
                <h2 class="white-text text-center">{{trans('team.mision')}}</h2>
                <br>
                <h4 class="white-text text-center">{{trans('team.misionText')}}</h4>
                <br><br>
                <h2 class="white-text text-center">{{trans('team.vision')}}</h2>
                <br>
                <h4 class="white-text text-center">{{trans('team.visionText')}}</h4>
            </div>

            <div class="col-md-4">
                <img class="img-equipo2" src="img/team/compu.png" alt="" >
            </div>
                <div class="col-xs-1"></div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center white-text">{{trans('team.team')}}</h1>
            <div class="row">
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Alejandro Rodríguez</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text bg-equipo text-center"><strong>{{trans('team.arquiDes')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Josseline Mejía</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.arquia')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Gustavo Chámul</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.arqui')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Kevin Rivera</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.arqui')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Denys Bautista</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.arqui')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">German Hernández</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.dev')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Gabriel Ábrego</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.dev')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">José Anzora</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.dev')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">José Barrera</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.design')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Katherine Fernández</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.designa')}}</strong></h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text pull-right">Christian González</h3>
                </div>
                <div class="col-xs-6">
                    <h3 class="white-text  bg-equipo text-center"><strong>{{trans('team.design')}}</strong></h3>
                </div>
                <br>
            </div>
        </div>
    </div>
@stop