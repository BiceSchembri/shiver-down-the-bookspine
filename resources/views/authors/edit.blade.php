@extends ('components.layout')

@section('content')

<h1 class="font-bold uppercase">Edit Author</h1>
<div class="m-6 max-w-lg mx-auto bg-amber-100 border border-gray-200 p-6 rounded-xl">
    <form action="" method="POST">
        @csrf
        @method('PUT')

        <label for="firstname" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author's First Name: </label>
        <input type="text" id="firstname" name="firstname" value="{{$author->firstname}}" class="border border-purple-900 p-2 w-full" required>
        @error('firstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="lastname" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author's Last Name: </label>
        <input type="text" id="lastname" name="lastname" value="{{$author->lastname}}" class="border border-purple-900 p-2 w-full" required>
        @error('lastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-blue-700">Description: </label>
        <input type="text" id="description" name="description" value="{{$author->description}}" class="border border-purple-900 p-2 w-full">
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Update Author</button>
    </form>

    {{-- ADD FORM TO DELETE BOOK -- SHOW ONLY IF NO BOOKS ASSOCIATED--}}
    <form action="{{ route('delete-author', $author->slug) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Delete Author</button>
    </form>
</div>

@endsection