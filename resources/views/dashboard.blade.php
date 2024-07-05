@extends('main')
@section('otherContent')
{{Auth::user()}}
    <h1 class="font-bold text-3xl text-center ">Welcome Dsahboard</h1>
    <a class="font-bold text-xl bg-gray-400 mx-3" href="{{route('logout')}}">logout</a>
    <a class="font-bold text-xl bg-gray-400 mx-3" href="{{route('home')}}">home</a>
    <a class="font-bold text-xl bg-gray-400 mx-3" href="#">check</a>
    
@endsection