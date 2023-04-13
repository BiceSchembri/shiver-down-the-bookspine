@extends('components.layout');

@section('content')

<div>
    @foreach ($books as $book)

<div>
    <p>Author: {{$book->author}}</p>
    <p>Title: {{$book->title}}</p>
</div>
        
    @endforeach
</div>

@endsection