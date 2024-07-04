@extends('main')
@section('otherContent')
<p class="font-bold my-4">id || name || role || email</p>
    @foreach ($userdata as $data)
        <p class="font-bold my-4">
            {{ $data['id'] }} ||
            {{ $data['name'] }} ||
            {{ $data['role'] }} ||
            {{ $data['email'] }} 
        </p>
    @endforeach
@endsection
