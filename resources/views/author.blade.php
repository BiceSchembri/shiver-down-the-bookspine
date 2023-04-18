@extends('components.layout')

@section('content')

<div>
    <h1>{{$author->authorName()}}</h1>

    @foreach($book as $book)
    <p><a href="/books/{{$book->slug}}">{{$book->title}}</a></p>
@endforeach

</div>

{{-- EDIT AND DELETE WILL ONLY BE VISIBLE TO ADMIN --}}
<a href="/authors/{{$author->slug}}/edit-author" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Edit Author</a>

<form action="{{ route('delete-author', $author->slug) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Delete Author</button>
</form>

<a href="{{ route('authors') }}" class="text-sm text-blue-600 dark:text-blue-500 hover:underline">Back to Authors</a>


@endsection