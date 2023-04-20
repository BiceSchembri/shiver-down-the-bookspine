@extends ('components.layout')

@section('content')

<div class="bg-gray-900 opacity-95 text-purple-900">
    <div class="container mx-auto">
<h1 class="text-3xl font-bold mb-5 p-2 text-center text-white">Sign Up</h1>
<div class="m-6 max-w-lg mx-auto p-2 rounded-xl">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="firstname" class="block mb-2 uppercase font-bold text-xs text-purple-200">First Name: </label>
        <input type="text" id="firstname" name="firstname" value="{{old('firstname')}}" class="border border-purple-200 p-2 w-full" required>
        @error('firstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="lastname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Last Name: </label>
        <input type="text" id="lastname" name="lastname" value="{{old('lastname')}}" class="border border-purple-200 p-2 w-full" required>
        @error('lastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="username" class="block mb-2 uppercase font-bold text-xs text-purple-200">Username: </label>
        <input type="text" id="username" name="username" value="{{old('username')}}" class="border border-purple-200 p-2 w-full" required>
        @error('username')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="email" class="block mb-2 uppercase font-bold text-xs text-purple-200">Email: </label>
        <input type="text" id="email" name="email" value="{{old('email')}}" class="border border-purple-200 p-2 w-full" required>
        @error('email')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="password" class="block mb-2 uppercase font-bold text-xs text-purple-200">Password: </label>
        <input type="password" id="password" name="password" value="{{old('password')}}" class="border border-purple-200 p-2 w-full" required>
        @error('password')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-purple-200">Confirm Password: </label>
        <input type="password" id="password_confirmation" name="password_confirmation" value="" class="border border-purple-200 p-2 w-full" required>
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-purple-200 text-gray-900 rounded mt-2 p-1 hover:bg-purple-300">Submit</button>
    </form>
</div>
</div>
</div>

@endsection