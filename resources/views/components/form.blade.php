@props([
  'action',
  'method' => 'POST'
])

<form action="{{$action}}" method="{{$method === 'GET' ? 'GET' : 'POST'}}" {{$attributes}}>
    @csrf
    @unless (in_array($method, ['POST', 'GET']))
        @method($method)
    @endunless

    {{$slot}}
</form>