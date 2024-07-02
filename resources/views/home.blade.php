<x-layout>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getData as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
            </tr> 
            @endforeach
           
           
        </tbody>
    </table>
</x-layout>
