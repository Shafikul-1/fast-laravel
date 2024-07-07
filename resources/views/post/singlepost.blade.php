@extends('main')
@section('otherContent')
        <div class="dark:text-white">
            <pre>ID = {{$singlePostData['id']}}</pre>
            <h1 class="font-bold text-3xl ">title = {{$singlePostData['title']}}</h1>
            <p class="font-bold text-xl ">description = {{$singlePostData['description']}}</p>
            <pre class="text-xl ">user_id = {{$singlePostData['user_id']}}</pre>
        </div>
@endsection
