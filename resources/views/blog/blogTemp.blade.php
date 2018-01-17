@extends('layouts.app')
@section('content')

    <div class="panel">
        <div class="row">
            <div class="jumbotron">
    @foreach ($posts as $post)


            <div class="col-md-4">
                @if(!empty($post->image))
                    <img src="{{asset('img/posts/img' . $post->image)}}" width="350" height="180" />
                @endif
                <h2>{{ $post->title }}</h2>
                <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

                <p>{{ substr(strip_tags($post->body), 0, 100) }}{{ strlen(strip_tags($post->body)) > 100 ? '...' : "" }}</p>

                <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Continuar leyendo</a>
                <hr>
            </div>

    @endforeach
</div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                {!! $posts->links() !!}
            </div>
        </div>
    </div>

@stop