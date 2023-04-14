@extends('components.layout')

@section('content')

<div>
    <h1>{{$author->authorName()}}</h1>
    {{-- <p><a href="/{{$author->slug}}">{{$author->authorName()}}</a></p> --}}
    <p>{{$author->book->title}}</p>
</div>

@endsection