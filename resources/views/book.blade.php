@extends('components.layout')

@section('content')

<div>
    <h1>{{$book->title}}</h1>
    {{-- TODO: allow for more authors --}}
    <p><a href="/{{$book->author->slug}}">{{$book->author->authorName()}}</a></p>
    <p>{{$book->language->name}}</p>
    <p>{{$book->description}}</p>
    <p>{{$book->status}}</p>
</div>

@endsection