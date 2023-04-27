@extends('components.layout')

@section('content')

<section class="bg-gray-900 opacity-95 text-white p-10">

<div>
    <h1 class="text-3xl font-bold mb-5">{{$author->authorName()}}</h1>
<ul class="list-disc text-purple-200 list-inside">
    @foreach($book as $book)
    <li><a href="/books/detail/{{$book->slug}}" class="text-purple-200 dark:text-purple-400 hover:underline">{{$book->title}}</a></li>
@endforeach
</ul>
</div>

{{-- Start of admin rights - only admins can see edit and delete --}}
@if (auth()->check() && auth()->user()->is_admin)
<div class="flex">

<a href="/authors/edit/{{$author->slug}}" class="bg-purple-400 text-white rounded mt-2 p-1 hover:bg-purple-500">Edit Author</a>

<form action="{{ route('delete-author', $author->slug) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-400 text-white rounded mt-2 p-1 hover:bg-red-500 ml-2">Delete Author</button>
</form>
</div>
@endif
{{-- End of admin rights --}}

<a href="{{ route('authors') }}" class="text-sm text-blue-300 dark:text-blue-400 hover:underline mt-4">Back to Authors</a>

</section>

@endsection