@extends('components.layout')

@section('content')

<x-success />
<x-fail />

<div class="bg-gray-900 text-white">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-5 p-2 text-center">Authors</h1>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-700 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left uppercase">Name</th>
                        <th class="px-4 py-2 text-center uppercase">Page</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($authors as $author)

                    <tr>
                        <td class="border border-gray-700 px-4 py-2 text-left text-purple-200 hover:bg-purple-900 hover:text-white">{{$author->lastname}}, {{$author->firstname}}</td>                               
                        <td class="border border-gray-700 px-4 py-2 text-center">
                            <a href="/authors/detail/{{$author->slug}}" class="bg-purple-900 text-white px-2 py-1 rounded-full hover:bg-purple-200 hover:text-gray-900">read more</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection