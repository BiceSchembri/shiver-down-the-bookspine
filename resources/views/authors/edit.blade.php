@extends ('components.layout')

@section('content')

<div class="bg-gray-900 opacity-95 text-purple-900">
    <div class="container mx-auto">
<h1 class="text-3xl font-bold mb-5 p-2 text-center text-white">Edit author</h1>
<div class="m-6 max-w-lg mx-auto p-2 rounded-xl">
    <form action="" method="POST">
        @csrf
        @method('PUT')

        <label for="firstname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Author's First Name: </label>
        <input type="text" id="firstname" name="firstname" value="{{$author->firstname}}" class="border border-purple-200 p-2 w-full" required>
        @error('firstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="lastname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Author's Last Name: </label>
        <input type="text" id="lastname" name="lastname" value="{{$author->lastname}}" class="border border-purple-200 p-2 w-full" required>
        @error('lastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-purple-200">Description: </label>
        <input type="text" id="description" name="description" value="{{$author->description}}" class="border border-purple-200 p-2 w-full">
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-purple-200 text-gray-900 rounded mt-2 p-1 hover:bg-purple-300">Update Author</button>
    </form>

    {{-- ADD FORM TO DELETE BOOK -- SHOW ONLY IF NO BOOKS ASSOCIATED--}}
    <form action="{{ route('delete-author', $author->slug) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-200 text-gray-900 rounded mt-2 p-1 hover:bg-red-300">Delete Author</button>
    </form>
</div>

@endsection