@extends('layouts.admin')
@section('content')
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="text-center">Nuevo Post</h3></div>

                    <div class="panel-body">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            {{Form::label('Título del Post'),null,['class'=>'mdl-textfield__label']}}
                            {{Form::text('tituloPost',null,['class'=>'mdl-textfield__input', 'placeholder'=>'Título del post'])}}
                        </div>
                        <form>
                            {{Form::textarea('cuerpoPost',null,['class'=>'ckeditor', 'placeholder'=>'Cuerpo del Post'])}}
                        </form>
                        <br>
                        {!!Form::submit('Publicar', ['class'=>'mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect','name'=>'btnPublicarNovedad'])!!}
                        <br>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop