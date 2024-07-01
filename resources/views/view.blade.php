@extends('nav')
@section('mainPage')
    <div class="h-screen w-full dark:bg-gray-900">

        <div class="w-full mx-auto py-10 px-4 md:px-8">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                    From The Blog
                </h2>
            </div>
            <div
                class="grid max-w-2xl grid-cols-1 gap-8 mx-auto mt-8 auto-rows-fr lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($data as $datas)
                    <article
                        class="relative flex flex-col justify-end px-4 pt-40 pb-4 overflow-hidden bg-gray-900 md:pt-28 isolate rounded-xl dark:shadow dark:shadow-gray-400/50">
                        <img src="{{ asset('/storage') . "/" . $datas->file_name }}" alt=""
                            class="absolute inset-0 object-cover w-full h-full -z-10">
                        <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                        <div class="absolute inset-0 -z-10 rounded-xl ring-1 ring-inset ring-gray-900/10"></div>
                        <p class="mb-10 text-2xl text-white">{{$datas->name}}</p>
                        <p class="mb-10 text-sm text-white">{{$datas->age}}</p>
                        <sub class="mb-10 text-md text-white">{{$datas->email}}</sub>
                        <div class="flex justify-between">
                           
                            <a class="text-lg font-semibold leading-6 text-white hover:text-teal-100" href="{{route('upload.edit', $datas->id)}}">UpDate</a>
                            <form action="{{route('upload.destroy', $datas->id)}}" method="post" class="text-lg font-semibold leading-6 text-white hover:text-teal-100">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>  
                            </form>
                        </div>
                    </article>
                @endforeach

            </div>
        </div>

    </div>

    <x-aleart type="bg-green-600" massage="This is success massage"></x-aleart>
    {{-- @if (session('msg'))
        
    @endif --}}
@endsection