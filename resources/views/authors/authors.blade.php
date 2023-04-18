@extends('components.layout')

@section('content')

<x-success />
<x-fail />

<div class="bg-gray-900 text-white">
    <div class="container mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-5">Authors</h1>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-700 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">Last Name</th>
                        <th class="px-4 py-2 text-left">First Name</th>
                        <th class="px-4 py-2 text-left">Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)

                    <tr>
                        <td class="border border-gray-700 px-4 py-2 text-left">{{$author->lastname}}</td>                        
                        <td class="border border-gray-700 px-4 py-2 text-left">{{$author->firstname}}</td>         
                        <td class="border border-gray-700 px-4 py-2 text-left"><a href="/authors/detail/{{$author->slug}}">click here for more info
                        </a></td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection