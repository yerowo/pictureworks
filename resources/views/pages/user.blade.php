@extends('layouts.default')
@section('user')

    <span class="avatar"><img src="{{ URL::asset('/images/overlay.png') }}" alt="profile Pic"></span>
    <h1>{{ $user->name }}</h1>
    <p>{{ $user->comments }}</p>

@stop
