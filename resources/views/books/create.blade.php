@extends ('components.layout')

@section('content')

<div class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
<h1 class="text-3xl font-bold mb-5 p-2 text-center">Add a New Book</h1>
<div class="m-6 max-w-lg mx-auto p-2 rounded-xl">
    <form method="POST" action="{{ route('create-book') }}">
        @csrf

        <label for="title" class="block mb-2 uppercase font-bold text-xs text-purple-200">Title: </label>
        <input type="text" id="title" name="title" value="{{old('title')}}" class="border border-purple-200 p-2 w-full" required>
        @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorFirstname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Author's First Name: </label>
        <input type="text" id="authorFirstname" name="authorFirstname" value="{{old('authorFirstname')}}" class="border border-purple-200 p-2 w-full" required>
        @error('authorFirstname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="authorLastname" class="block mb-2 uppercase font-bold text-xs text-purple-200">Author's Last Name: </label>
        <input type="text" id="authorLastname" name="authorLastname" value="{{old('authorLastname')}}" class="border border-purple-200 p-2 w-full" required>
        @error('authorLastname')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-purple-200">Description: </label>
        <input type="text" id="description" name="description" value="{{old('description')}}" class="border border-purple-200 p-2 w-full" required>
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="language" class="block mb-2 uppercase font-bold text-xs text-purple-200">Language: </label>
        <select type="text" id="language" name="language" value="{{old('language')}}" class="border border-purple-200 p-2 w-full" required>
            @foreach ($languages as $language)
            <option value="{{$language->id}}">{{$language->name}}</option>
            @endforeach
        </select>
        @error('language')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="status" class="block mb-2 uppercase font-bold text-xs text-purple-200">Status: </label>
        <select type="text" id="status" name="status" value="{{old('status')}}" class="border border-purple-200 p-2 w-full" required>
            <option value="available">available</option>
            <option value="on hold">on hold</option>
            <option value="reserved">reserved</option>
        </select>
            @error('status')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <button type="submit" class="bg-purple-200 text-gray-900 rounded mt-2 p-1 hover:bg-purple-300">Submit</button>
    </form>
</div>
</div>
</div>

@endsection