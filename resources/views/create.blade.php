@extends ('components.layout')

@section('content')

<h1 class="font-bold uppercase">Add a New Book</h1>
<div class="m-6 max-w-lg mx-auto bg-amber-100 border border-gray-200 p-6 rounded-xl">
    <form method="POST" action="{{ route('create') }}">
        @csrf

        <label for="language" class="block mb-2 uppercase font-bold text-xs text-blue-700">Language: </label>
        <select type="" id="language" name="language" value="{{old('language')}}" class="border border-purple-900 p-2 w-full" required>
            @foreach ($languages as $language)
            <option value="{{$language->id}}">{{$language->name}}</option>
            @endforeach
        </select>
        @error('language')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="title" class="block mb-2 uppercase font-bold text-xs text-blue-700">Title: </label>
        <input type="text" id="title" name="title" value="{{old('title')}}" class="border border-purple-900 p-2 w-full" required>
        @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="author" class="block mb-2 uppercase font-bold text-xs text-blue-700">Author: </label>
        <input type="author" id="author" name="author" value="{{old('author')}}" class="border border-purple-900 p-2 w-full" required>
        @error('author')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        <label for="description" class="block mb-2 uppercase font-bold text-xs text-blue-700">Description: </label>
        <input type="text" id="description" name="description" value="{{old('description')}}" class="border border-purple-900 p-2 w-full" required>
        @error('description')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror

        {{-- status default: available --}}
        {{-- <label for="title" class="block mb-2 uppercase font-bold text-xs text-blue-700">Title: </label>
        <input type="text" id="title" name="title" value="{{old('title')}}" class="border border-purple-900 p-2 w-full" required>
        @error('title')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror --}}

        <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>
    </form>
</div>

@endsection