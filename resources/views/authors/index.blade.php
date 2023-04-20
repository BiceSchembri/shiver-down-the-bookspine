@extends('components.layout')

@section('content')

<x-success />
<x-fail />

<div class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5 p-2 text-center">Authors</h1>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-700 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left uppercase">Last Name</th>
                        <th class="px-4 py-2 text-left uppercase">First Name</th>
                        <th class="px-4 py-2 text-center uppercase">Page</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)

                    <tr class="border border-gray-700 hover:bg-purple-900">
                        <td class="px-4 py-2 text-left">{{$author->lastname}}</td>                        
                        <td class="px-4 py-2 text-left">{{$author->firstname}}</td>         
                        <td class="px-4 py-2 text-center">
                            <a href="/authors/detail/{{$author->slug}}" class="bg-purple-200 text-gray-900 px-2 py-1 rounded-full">read info</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection