@extends('layouts.app')

@section('page', 'Blog')

@section('content')
    <div class="container blog-page">
        <ul class="posts">
            @foreach($posts as $post)
                <li class="post">
                    <h2>{{ $post->title }}</h2>
                    <i>{{ $post->published_at }}</i>
                    @if($post->url)
                        <a target="_blank" href="{{ $post->url }}">{{ $post->url }}</a>
                    @endif
                    <p>
                        {{ $post->body }}
                    </p>
                </li>
                <hr class="clearfix" />
            @endforeach
        </ul>
    </div>
@endsection
