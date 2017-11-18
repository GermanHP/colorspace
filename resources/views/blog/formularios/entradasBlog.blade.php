@extends('layouts.admin')
@section('contenido')

    <div class="container panel-body">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="text-center">Nuevo Post</h3></div>

                    {!!Form::open(['route'=>['Posts.Insert'], 'method'=>'POST', 'onsubmit'=>"waitingDialog.show('Creando Post... ',{ progressType: 'info'});setTimeout(function () {waitingDialog.hide();}, 3000);"])!!}
                    <div class="panel-body">
                        <div class="row">

                                <div class="col-md-6 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    {{Form::label('Título del Post'),null,['class'=>'mdl-textfield__label']}}
                                    {{Form::text('tituloPost',null,['class'=>'mdl-textfield__input', 'placeholder'=>'Título del post'])}}
                                </div>

                                <div class="col-md-6 mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                    {{Form::label('Categoria'),null,['class'=>'input-group-addon']}}
                                    {!! Form::select('categoria',$tipoCategoria,
                                    ['class'=>'js-example-basic-single form-control ',"describedby"=>"basic-addon1",
                                    'required', 'id'=>'categoria', 'onchange'=>'GetMunicipios(this)',
                                    'style'=>'width: 100%']) !!}
                                </div>

                        </div>

                        <form>
                            {{Form::textarea('cuerpoPost',null,['class'=>'ckeditor', 'placeholder'=>'Cuerpo del Post'])}}
                        </form>
                        <br>
                        {!!Form::submit('Publicar', ['class'=>'mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect','name'=>'btnPublicarNovedad'])!!}
                        <br>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>
    </div>
@stop