@extends('layouts.admin')

@section('page', 'Posts')

@section('content')
<div class="container">
    <a href="{{ url(route('back.posts.create')) }}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Title</th>
                <th>Url</th>
                <th>Published At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($posts as $post)
                <tr data-href="{{ url(route('back.posts.edit', $post->id)) }}" class="{{ $post->published_at >= Carbon::now() || $post->published_at == null ? 'warning' : '' }}">
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ $post->url }}">{{ $post->url }}</a>
                        </td>
                        <td>{{ $post->published_at }}</td>
                        <td class="actions">
                            <a href="{{ url(route('back.posts.edit', $post->id)) }}" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></a>

                            <form action="{{ url(route('back.posts.destroy', $post->id)) }}" method="post">
                                {!! csrf_field() !!}
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="id" value="{{ $post->id }}">
                                <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $posts->links() !!}
</div>
@endsection
