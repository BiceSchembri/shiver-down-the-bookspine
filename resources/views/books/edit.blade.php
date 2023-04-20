@extends ('components.layout')

@section('content')

<div class="bg-gray-900 text-purple-900">
    <div class="container mx-auto">
<h1 class="text-3xl font-bold mb-5 p-2 text-center text-white">Edit book</h1>
<div class="m-6 max-w-lg mx-auto p-2 rounded-xl">
    <form action="" method="POST">
        @csrf
        @method('PUT')

        <label for="title" class="block mb-2 uppercase font-bold text-xs text-purple-200">Title: </label>
        <input type="text" id="title" name="title" value="{{$book->title}}" class="border border-purple-200 p-2 w-full" required>
        @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorFirstname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Author's First Name: </label>
        <input type="text" id="authorFirstname" name="authorFirstname" value="{{$book->author->firstname}}" class="border border-purple-200 p-2 w-full" required>
        @error('authorFirstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorLastname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Author's Last Name: </label>
        <input type="text" id="authorLastname" name="authorLastname" value="{{$book->author->lastname}}" class="border border-purple-200 p-2 w-full" required>
        @error('authorLastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-purple-200">Description: </label>
        <input type="text" id="description" name="description" value="{{$book->description}}" class="border border-purple-200 p-2 w-full" required>
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="language" class="block mb-2 uppercase font-bold text-xs text-purple-200">Language: </label>
        <select type="text" id="language" name="language" value="{{$book->language}}" class="border border-purple-200 p-2 w-full" required>
            @foreach ($languages as $language)
            <option value="{{$language->id}}">{{$language->name}}</option>
            @endforeach
        </select>
        @error('language')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="status" class="block mb-2 uppercase font-bold text-xs text-purple-200">Status: </label>
        <select type="text" id="status" name="status" value="{{$book->status}}" class="border border-purple-200 p-2 w-full" required>
            <option value="available">available</option>
            <option value="on hold">on hold</option>
            <option value="reserved">reserved</option>
        </select>
            @error('status')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-purple-200 text-gray-900 rounded mt-2 p-1 hover:bg-purple-300">Update Book</button>
    </form>

    {{-- ADD FORM TO DELETE BOOK --}}
    <form action="{{ route('delete-book', $book->slug) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-200 text-gray-900 rounded mt-2 p-1 hover:bg-red-300">Delete Book</button>
    </form>
</div>
</div>
</div>

@endsection