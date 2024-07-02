@extends('nav')
{{-- 👉 Basic Aleart component --}}
{{-- <x-aleart id="basicComponent" class="Basic component" role="user other" type="green" massage="toher test sms"/>
<x-aleart id="basicComponent" class="Basic component" role="user other" type="red" massage="toher test sms" dismis></x-aleart> --}}





{{-- 👉 Aleart html component --}}
{{-- <x-alerthtml infoIcon='green' id="test" class="text class">

    <x-slot:info>
        x= slot pass
    </x-slot>
    <x-slot name="msg">
        Infosfd
    </x-slot>
    <button class="border-blue-400 bg-white hover:bg-gray-50 px-4 py-2 mt-4 border rounded font-bold">Understood</button>

</x-alerthtml> --}}






{{-- 👉 Aleart Link component --}}

{{-- <x-link-component dismis>
    <x-slot name="link" class="Other check slot class" id="cecklinkcomponentId">
        {{$component->linkText('Runjila', "https://www.youtube.com/watch?v=HkDIkN8t4tM&list=PL0b6OzIxLPbz7JK_YYrRJ1KxlGG4diZHJ&index=56")}}
    </x-slot>
    
</x-link-component> --}}


{{-- dynamic component --}}
{{-- @php
    $component = "link-component";
@endphp
<x-dynamic-component :component="$component" /> --}}