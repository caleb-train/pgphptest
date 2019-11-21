@extends('layouts.app')

@section('image')
    <span class="avatar"><img src="{{ asset('images/users/' . $user->id. '.jpg') }}" alt="" /></span>
@endsection

@section('title')
    <h1>{{$user->name}}</h1>
@endsection

@section('body')
    <p>{{ nl2br($user->comments) }}</p>
@endsection
