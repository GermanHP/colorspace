@extends('layouts.teamlayout')
@section('content')

    <div id="sobre-nosotros">
        <div class="row">
            <div id="hideThis" class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-3">
                <img class="img-equipo" src="img/team/planos.png" alt="" >
            </div>
            <div class="col-xs-1 col-sm-1 col-md-4 col-lg-4 col-xl-3"></div>

            <div class="col-xs-10 col-sm-10 col-md-5 col-lg-5 col-xl-5">
                <br><br><br>
                <h3 class="white-text text-center">{{trans('team.about')}}</h3>
                <br>
                <h4 class="white-text text-justify pull-right">{{trans('team.bio')}}</h4>
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 ajustar-pantalla">
                    <br><br>
                    <h2 class="white-text text-center">{{trans('team.mision')}}</h2>
                    <br>
                    <h4 class="white-text text-center">{{trans('team.misionText')}}</h4>
                    <br><br>
                    <h2 class="white-text text-center">{{trans('team.vision')}}</h2>
                    <br>
                    <h4 class="white-text text-center">{{trans('team.visionText')}}</h4>
                </div>

                <div class="col-xs-11 col-sm-12 col-md-5 col-lg-5">
                    <img class="img-equipo2" src="img/team/compu.png" alt="" >
                </div>
                <div class="col-xs-1 col-sm-12 col-md-2 col-lg-2"></div>
            </div>
        </div>
        <div class="row">
            <div class="container col-12">
                <h1 class="text-center white-text">{{trans('team.team')}}</h1>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Alejandro Rodríguez</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text bg-equipo text-center"><strong>CEO</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Josseline Mejía</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>Project Developer</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Gustavo Chámul</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>COO/Architecture</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Kevin Rivera</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>Senior Project Manager</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Denys Bautista</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>Bussines Officer</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">German Hernández</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>Senior Project Manager</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Gabriel Ábrego</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>COO/Multimedia</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">José Anzora</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>System Developer</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">José Barrera</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>Creative Director</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Katherine Fernández</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>CAO</strong></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="white-text pull-right">Christian González</h3>
                    </div>
                    <div class="col-xs-6">
                        <h3 class="white-text  bg-equipo text-center"><strong>CMO</strong></h3>
                    </div>
                </div>
                    <br>
            </div>
        </div>
    </div>
@stop