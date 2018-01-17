@extends('layouts.admin')
@section('contenido')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


    <div class="container panel">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Crear Nuevo Post</h1>
                <hr>
                {!! Form::open(['route' => ['posts.store'], 'method'=>'POST', 'data-parsley-validate' => '', 'files' => true]) !!}
                {{ Form::label('title', 'Título:') }}
                {{ Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => '255']) }}

                {{ Form::label('slug', 'URL:') }}
                {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}

                {{ Form::label('category_id', 'Categoría:') }}

                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endforeach

                </select>


                {{ Form::label('tags', 'Tags:') }}
                <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                    @foreach($tags as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->name }}</option>
                    @endforeach

                </select>

                {{ Form::label('featured_img', 'Adjuntar Recurso') }}
                {{ Form::file('featured_img') }}

                <div class="input-group form-group">
                    {{Form::label('Cuerpo del post'),null,['class'=>'input-group-addon']}}
                    {{Form::textarea('body',null,['class'=>'form-control ckeditor', 'placeholder'=>'Cuerpo del Post'])}}
                </div>

                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@stop