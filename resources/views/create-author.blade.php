@extends ('components.layout')

@section('content')

<h1 class="font-bold uppercase">Add a New Author</h1>
<div class="m-6 max-w-lg mx-auto bg-amber-100 border border-gray-200 p-6 rounded-xl">
    <form method="POST" action="{{ route('create-author') }}">
        @csrf

        <label for="authorFirstname" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author's First Name: </label>
        <input type="text" id="authorFirstname" name="authorFirstname" value="{{old('authorFirstname')}}" class="border border-purple-900 p-2 w-full" required>
        @error('authorFirstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorLastname" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author's Last Name: </label>
        <input type="text" id="authorLastname" name="authorLastname" value="{{old('authorLastname')}}" class="border border-purple-900 p-2 w-full" required>
        @error('authorLastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-blue-700">Description: </label>
        <input type="text" id="description" name="description" value="{{old('description')}}" class="border border-purple-900 p-2 w-full" required>
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>
    </form>
</div>

@endsection