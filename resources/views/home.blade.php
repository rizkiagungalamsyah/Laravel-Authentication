@extends('layouts.app')

@section('title', 'Auth')

@section('content')
    <h1>Home</h1>
    @auth
        <p>{{ Auth::user()->name }}</p>
    @endauth
    @guest
        <p>Anda Belum Login</p>
    @endguest
@endsection
