@extends('components.layout')

@section('content')

<div>
    <h1>{{$author->authorName()}}</h1>

    @foreach($author->book as $book)
    <p>{{$book->title}}</p>
@endforeach

</div>

@endsection