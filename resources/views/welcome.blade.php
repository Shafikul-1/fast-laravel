@extends('nav')

@php
    $massage = "Warning Massage this php";
    $information = "information Massage PHPH thake";
@endphp
<h1 class="text-center font-bold text-4xl">welcome page</h1>
<x-aleart type="red" massage="Error Massage" class="font-bold" id="errormassage" role="flesh" dismis></x-aleart>
<x-aleart type="green" massage="Success Massage"></x-aleart>
<x-aleart type="indigo" :massage="$information" dismis></x-aleart>
<x-aleart type="yellow" :massage></x-aleart>