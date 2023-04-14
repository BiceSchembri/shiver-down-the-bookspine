@extends('components.layout')

@section('content')

<div>
    <h1>{{$author->authorName()}}</h1>

    @foreach($author->book as $book)
    <p><a href="/books/{{$book->slug}}">{{$book->title}}</a></p>
@endforeach

</div>

@endsection