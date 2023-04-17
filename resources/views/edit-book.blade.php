@extends ('components.layout')

@section('content')

<h1 class="font-bold uppercase">Edit Book</h1>
<div class="m-6 max-w-lg mx-auto bg-amber-100 border border-gray-200 p-6 rounded-xl">
    <form action="#" method="POST">
        @csrf
        @method('PUT')

        <label for="title" class="block mb-2 uppercase font-bold text-xs text-blue-700">Title: </label>
        <input type="text" id="title" name="title" value="{{$book->title}}" class="border border-purple-900 p-2 w-full" required>
        @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorFirstname" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author's First Name: </label>
        <input type="text" id="authorFirstname" name="authorFirstname" value="{{$book->author->firstname}}" class="border border-purple-900 p-2 w-full" required>
        @error('authorFirstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorLastname" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author's Last Name: </label>
        <input type="text" id="authorLastname" name="authorLastname" value="{{$book->author->lastname}}" class="border border-purple-900 p-2 w-full" required>
        @error('authorLastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-blue-700">Description: </label>
        <input type="text" id="description" name="description" value="{{$book->description}}" class="border border-purple-900 p-2 w-full" required>
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="language" class="block mb-2 uppercase font-bold text-xs text-blue-700">Language: </label>
        <select type="text" id="language" name="language" value="{{$book->language}}" class="border border-purple-900 p-2 w-full" required>
            @foreach ($languages as $language)
            <option value="{{$language->id}}">{{$language->name}}</option>
            @endforeach
        </select>
        @error('language')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="status" class="block mb-2 uppercase font-bold text-xs text-blue-700">Status: </label>
        <select type="text" id="status" name="status" value="{{$book->status}}" class="border border-purple-900 p-2 w-full" required>
            <option value="available">available</option>
            <option value="on hold">on hold</option>
            <option value="reserved">reserved</option>
        </select>
            @error('status')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>
    </form>
</div>

@endsection