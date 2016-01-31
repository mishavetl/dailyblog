@extends('layouts.app')

@section('content')
<div class="container welcome-page">
    <h1>Welcome</h1>
    <p>
        This is a Daily blog app
    </p>
    @if(Auth::guest())
        <a href="#" class="btn btn-success">Register</a>
    @endif
</div>
@endsection
