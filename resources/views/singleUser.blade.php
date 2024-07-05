@extends('main')
@section('otherContent')
        <div class="dark:text-white">
            <h1 class="font-bold text-3xl ">{{$singleUserData['name']}}</h1>
            <p class="font-bold text-xl ">{{$singleUserData['email']}}</p>
            <pre class="text-xl ">{{$singleUserData['role']}}</pre>
        </div>
@endsection
