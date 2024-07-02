<x-layout>
    <x-form action="{{ route('store') }}" class="testing" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value="{{old('email')}}" type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email')
                 <div id="" class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input value="{{old('name')}}" type="text" name="name" class="form-control" id="Name">
            @error('name')
                 <div id="" class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input value="{{old('password')}}" type="text" name="password" class="form-control" id="exampleInputPassword1">
            @error('password')
                 <div id="" class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confrim Password</label>
            <input value="{{old('password_confirmation')}}" type="text" name="password_confirmation" class="form-control" id="password_confirmation">
            @error('password_confirmation')
                 <div id="" class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </x-form>
</x-layout>
