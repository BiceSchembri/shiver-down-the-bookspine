@extends('components.layout')

@section('content')

<section class="bg-gray-900 text-white p-10">

<div>
    <h1 class="text-3xl font-bold mb-5">{{$author->authorName()}}</h1>

    @foreach($book as $book)
    <p><a href="/books/detail/{{$book->slug}}" class="text-blue-300 dark:text-blue-400 hover:underline">{{$book->title}}</a></p>
@endforeach

</div>

{{-- EDIT AND DELETE WILL ONLY BE VISIBLE TO ADMIN --}}
<div class="flex">

<a href="/authors/edit/{{$author->slug}}" class="bg-purple-400 text-white rounded mt-2 p-1 hover:bg-purple-500">Edit Author</a>

<form action="{{ route('delete-author', $author->slug) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-400 text-white rounded mt-2 p-1 hover:bg-red-500 ml-2">Delete Author</button>
</form>
</div>

<a href="{{ route('authors') }}" class="text-sm text-blue-300 dark:text-blue-400 hover:underline mt-4">Back to Authors</a>

</section>

@endsection