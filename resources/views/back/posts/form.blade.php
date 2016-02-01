@extends('layouts.admin')

@section('page', $action == "create" ? 'Create Post' : 'Post: ' . $post->title)


@section('content')
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $action == "create" ? url(route('back.posts.store')) : url(route('back.posts.update', $post->id)) }}" method="post" class="form-horizontal">
        {!! csrf_field() !!}

        @if($action != "create")
            <input name="_method" type="hidden" value="PUT">
        @endif

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
        </div>

        <div class="form-group">
            <label for="url" class="col-sm-2 control-label">Url</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="url" name="url" value="{{ $post->url }}">
            </div>
        </div>

        <div class="form-group">
            <label for="published-at" class="col-sm-2 control-label">Published At</label>
            <div class="col-sm-10">
                <div class='input-group date' id='datetimepicker'>
                    <input type="text" class="form-control" id="published-at" name="published_at" value="{{ $post->published_at }}">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Body</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="body" name="body" rows="10">{{ $post->body }}</textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                defaultDate: "{{ $post->published_at }}"
            });
        });
    </script>
@endsection
