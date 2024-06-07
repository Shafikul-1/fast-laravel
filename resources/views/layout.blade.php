@include('header')

{{-- Check Yield Value set  --}}
@hasSection('dynamicContent')
    @yield('dynamicContent')
@else
    <h1 class="font-bold text-xl text-center">No Content Found</h1>
@endif

@include('footer')
