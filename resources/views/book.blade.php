@extends('components.layout')

@section('content')

<div>
    <h1>{{$book->title}}</h1>
    {{-- TODO: show full author name; then allow for more authors --}}
    <p>{{$book->author->lastname}}</p>
    <p>{{$book->language->name}}</p>
    <p>{{$book->description}}</p>
    <p>{{$book->status}}</p>
</div>

@endsection