@extends('components.layout')

@section('content')

<div>
    <h1>{{$book->title}}</h1>
    <p>{{$book->author}}</p>
    <p>{{$book->language->name}}</p>
    <p>{{$book->description}}</p>
    <p>{{$book->status}}</p>
</div>

@endsection