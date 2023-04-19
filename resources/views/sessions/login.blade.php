@extends ('components.layout')

@section('content')

<h1 class="font-bold uppercase">Log In</h1>
<div class="m-6 max-w-lg mx-auto bg-amber-100 border border-gray-200 p-6 rounded-xl">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-credentials-fail />

        <label for="email" class="block mb-2 uppercase font-bold text-xs text-blue-700">Email: </label>
        <input type="text" id="email" name="email" value="{{old('email')}}" class="border border-purple-900 p-2 w-full" required>
        @error('email')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="password" class="block mb-2 uppercase font-bold text-xs text-blue-700">Password: </label>
        <input type="password" id="password" name="password" value="{{old('password')}}" class="border border-purple-900 p-2 w-full" required>
        @error('password')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="password_confirmation" class="block mb-2 uppercase font-bold text-xs text-blue-700">Confirm Password: </label>
        <input type="password" id="password_confirmation" name="password_confirmation" value="" class="border border-purple-900 p-2 w-full" required>
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>
    </form>
</div>

@endsection