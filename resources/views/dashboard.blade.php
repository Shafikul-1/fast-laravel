@extends('main')
@section('otherContent')
    {{Auth::user()}}
    <h1 class="font-bold text-3xl text-center ">Welcome Dsahboard</h1>
    <a href="{{route('logout')}}">logout</a>
    <a href="{{route('home')}}">home</a>
    
@endsection