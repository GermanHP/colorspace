@extends('layouts.app')
<?php $titleTag = htmlspecialchars($post->title); ?>
@section('title', "| $titleTag")

@section('content')

    <div class="panel">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(!empty($post->image))
                <img src="{{asset('img/posts/img' . $post->image)}}" width="800" height="400" />
            @endif
            <h1>{{ $post->title }}</h1>
            <p>{!! $post->body !!}</p>
            <hr>
            <p>Posteado en: {{ $post->category->name }}</p>
                <br>
                <div class="fb-share-button" data-href="http://localhost:8000/blog/&#123;slug&#125;" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8000%2Fblog%2F%257Bslug%257D&amp;src=sdkpreparse">Compartir</a></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="comments-title"><span class="material-icons">comment</span>  {{ $post->comments()->count() }} Comentarios</h3>
            @foreach($post->comments as $comment)
                <div class="comment">
                    <div class="author-info">

                        <i class="material-icons">account_circle</i>
                        <div class="author-name">
                            <h4>{{ $comment->name }}</h4>
                            <p class="author-time">{{ date('F dS, Y - g:iA' ,strtotime($comment->created_at)) }}</p>
                        </div>

                    </div>

                    <div class="comment-content">
                        {{ $comment->comment }}
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

            <div class="row">
                <div class="col-md-6">
                    {{ Form::label('name', "Nombre:") }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-6">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <div class="col-md-12">
                    {{ Form::label('comment', "Comentario:") }}
                    {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

                    {{ Form::submit('Añadir Comentario', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;']) }}
                </div>
            </div>

            {{ Form::close() }}
            <br>
        </div>
    </div>
    </div>
@stop