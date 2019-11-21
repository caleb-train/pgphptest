@extends('layouts.app')

@section('image')
<span class="avatar"><img width="150px" height="150px" src="{{ asset('images/404.png') }}" alt="" /></span>
@endsection

@section('title')
    <h1>{{$user->name}}</h1>
@endsection

@section('body')
    <p>{{ nl2br($user->body) }}</p>
@endsection
