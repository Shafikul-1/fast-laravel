<x-layout>
    <x-form action="{{route('loginSore')}}" method="POST">
        <div class="form-floating mb-3">
            <input value="{{old('email')}}" type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            @error('email')
                 <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
            @enderror
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input value="{{old('password')}}" name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            @error('password')
                 <div id="validationServerUsernameFeedback" class="invalid-feedback">{{$message}}</div>
            @enderror
            <label for="floatingPassword">Password</label>
        </div>
        <input type="submit" value="Login">
    </x-form>
</x-layout>
