@extends('components.layout')

@section('content')

<div class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Books</h1>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-700 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Author</th>
                        <th class="px-4 py-2 text-left">Language</th>
                        <th class="px-4 py-2 text-left">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)

                    <tr>
                        <td class="border border-gray-700 px-4 py-2 text-left"><a href="/books/{{$book->slug}}">{{$book->title}}
                        </a></td>
                        <td class="border border-gray-700 px-4 py-2 text-left"><a href="/authors/{{$book->author->slug}}">{{$book->author->authorName()}}</a></td>
                        <td class="border border-gray-700 px-4 py-2 text-left">{{$book->language->name}}</td>
                        <td class="border border-gray-700 px-4 py-2 text-left">{{$book->status}}</td>
                        <td class="border border-gray-700 px-4 py-2 text-left"><a href="/books/{{$book->slug}}/edit-book">Edit
                        </a></td>
                        <td class="border border-gray-700 px-4 py-2 text-left">
                            <form action="{{ route('delete-book', $book->slug) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection