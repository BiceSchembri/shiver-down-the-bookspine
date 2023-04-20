@extends('components.layout')

@section('content')

<x-success />
<x-fail />

<div class="bg-gray-900 text-white">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5 p-2 text-center">Books</h1>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-700 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left uppercase">Title</th>
                        <th class="px-4 py-2 text-left uppercase">Author</th>
                        <th class="px-4 py-2 text-center uppercase">Language</th>
                        <th class="px-4 py-2 text-center uppercase">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($books as $book)

                    <tr>
                        <td class="border border-gray-700 px-4 py-2 text-left text-purple-200 hover:bg-purple-900 hover:text-white"><a href="/books/detail/{{$book->slug}}">{{$book->title}}</a></td>
                        <td class="border border-gray-700 px-4 py-2 text-left text-purple-200 hover:bg-purple-900 hover:text-white"><a href="/authors/detail/{{$book->author->slug}}">{{$book->author->authorName()}}</a></td>
                        <td class="border border-gray-700 px-4 py-2 text-center text-purple-200">{{$book->language->name}}</td>
                        <td class="border border-gray-700 px-4 py-2 text-center">
                            @if ($book->status == 'available')
                                <span class="text-green-300 font-bold">{{$book->status}}</span>
                            @else
                                <span class="text-red-300 font-bold">{{$book->status}}</span>
                            @endif
                        </td>
                     </tr>
    
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection