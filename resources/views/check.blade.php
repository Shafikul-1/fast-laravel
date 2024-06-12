<h2>Test check setn data</h2>

@foreach ($test as $id => $val)
    
<h3><a href="{{route('allusers', $id)}}">{{ $val['name'] }}</a>  \\ {{ $id }}</h3>

@endforeach