@extends('components.layout')

@section('content')

<section class="bg-gray-900 text-white p-10">
    <h1 class="text-3xl font-bold mb-5">{{$book->title}}</h1>
    {{-- TODO: allow for more authors --}}
    <p><a href="/authors/detail/{{$book->author->slug}}" class="text-blue-300 dark:text-blue-400 hover:underline">{{$book->author->authorName()}}</a></p>
    <p class="text-gray-400">Language: {{$book->language->name}}</p>
    <p>{{$book->description}}</p>
    <p class="text-gray-400">Status: 
        
        
            @if($book->status === 'on hold')
                <span class="text-red-500">{{$book->status}}</span>
            @elseif($book->status === 'available')
                <span class="text-green-500">{{$book->status}}</span>
            @else
                <span class="text-blue-500">{{$book->status}}</span>
            @endif
    </p>
        
    {{-- EDIT AND DELETE WILL ONLY BE VISIBLE TO ADMIN --}}
    <div class="flex">
        <a href="/books/edit/{{$book->slug}}" class="bg-purple-400 text-white rounded mt-2 p-1 hover:bg-purple-500">Edit Book </a>

        <form action="{{ route('delete-book', $book->slug) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-400 text-white rounded mt-2 p-1 hover:bg-red-500 ml-2">Delete Book</button>
        </form>
    </div>

    <a href="{{ route('books') }}" class="text-sm text-blue-300 dark:text-blue-400 hover:underline mt-4">Back to Books</a>

    {{-- START OF COMMENT SECTION --}}
    <h2 class="font-bold text-xl mt-10 mb-5">Comments</h2>
    <section>
        <x-book-comment :book=$book class="mb-4"/>
    </section>
</section>

@endsection
