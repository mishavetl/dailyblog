@extends('layouts.admin')

@section('page', 'Posts')

@section('content')
<div class="container">
    <table class="table table-hover">
        <tr>
            <th>Title</th>
            <th>Url</th>
            <th>Published At</th>
        </tr>

        @foreach($posts as $post)
            <tr class="{{ $post->isPublised() ? 'warning' }}">
                <td>{{ $post->title }}</td>
                <td>{{ $post->url }}</td>
                <td>{{ $post->published_at }}</td>
            </tr>
        @endforeach

    </table>
</div>
@endsection
