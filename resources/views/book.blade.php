@extends('components.layout')

@section('content')

<section>
    <h1>{{$book->title}}</h1>
    {{-- TODO: allow for more authors --}}
    <p><a href="/{{$book->author->slug}}">{{$book->author->authorName()}}</a></p>
    <p>{{$book->language->name}}</p>
    <p>{{$book->description}}</p>
    <p>{{$book->status}}</p>
</section>

<h2 class="font-bold text-xl">Comments</h2>

<section>

    <x-post-comment />
    <x-post-comment />
    <x-post-comment />

</section>

@endsection