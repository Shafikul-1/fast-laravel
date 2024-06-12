@php
    $a = ['fast', 'second', 'thred', 'four', 'five', 'six'];

@endphp


@extends('layout')
@section('dynamicContent')
<h1 class="font-bold text-xl text-center">Contact Page</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ipsum enim voluptatum cum mollitia, voluptatem ullam consectetur distinctio consequuntur voluptas provident reprehenderit tempora illo eos a corrupti ratione veniam placeat? Hic deserunt nihil amet alias, consequatur vero blanditiis illum atque molestias id harum eos enim ratione! Fuga autem earum consectetur provident, et laudantium veniam vel, quas quis, rem at sed itaque eveniet esse soluta tempore aut ab? Cum, consectetur, commodi molestiae doloribus dolores ad ullam molestias modi sed quasi optio blanditiis nisi numquam alias? Architecto, accusamus excepturi at error id totam ut repellendus, vitae quae adipisci quas, nisi ab a.</p>
    
@endsection


@section('title')
    Contact
@endsection


<script>

// const data = @json($a);
const data = {{ Js::from($a) }};
console.log(data);

</script>