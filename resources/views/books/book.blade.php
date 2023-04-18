@extends('components.layout')

@section('content')

<section>
    <h1>{{$book->title}}</h1>
    {{-- TODO: allow for more authors --}}
    <p><a href="/authors/{{$book->author->slug}}">{{$book->author->authorName()}}</a></p>
    <p>{{$book->language->name}}</p>
    <p>{{$book->description}}</p>
    <p>{{$book->status}}</p>
</section>

{{-- EDIT AND DELETE WILL ONLY BE VISIBLE TO ADMIN --}}
<a href="/books/edit/{{$book->slug}}" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Edit Book </a>

<form action="{{ route('delete-book', $book->slug) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Delete Book</button>
</form>

<a href="{{ route('books') }}" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Back to Books</a>

{{-- START OF COMMENT SECTION --}}

<h2 class="font-bold text-xl">Comments</h2>

<section>

    <x-book-comment />
    <x-book-comment />
    <x-book-comment />

</section>

@endsection