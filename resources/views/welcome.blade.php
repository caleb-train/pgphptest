@extends('layouts.app')

@section('title')
    PGPHPTEST
@endsection

@section('link')
<h3 style="margin-bottom:1.5rem;">{{count($users) > 0 ? 'View Users' : 'No Users, seed the database'}}</h3>
@foreach ($users as $user)
<a style="display:block;color:#ff7496;" href="/user/{{$user->id}}">{{$user->name}}</a>
@endforeach
@endsection
