<section>

    <h2 class="font-bold text-xl mt-10 mb-5 px-2">Comments</h2>

    <x-fail />

{{-- SHOW COMMENTS --}}
@if (count($book->comments) === 0)
<p class="px-2 text-purple-200">No comments yet.</p>
@else
@foreach ($book->comments as $comment)

<article class="flex bg-gray-600 w-full md:w-1/2 p-2">
        <img src="{{ asset('images/monster.png') }}" class="h-8 mr-3" alt="monster avatar" />
    <div class="bg-gray-800 w-full p-1 rounded">
        <header>
        <h3 class='font-bold'>{{$comment->user->username}}</h3>
        <p class="text-xs">Posted on
            <time>{{$comment->created_at}}</time>
        </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>

@endforeach
@endif

{{-- POST A COMMENT --}}
<div class="flex-column w-full md:w-1/2 p-2">

<form method="POST" action="{{ route('store-comment', $book)}}">
   
    @csrf

    <label for="body" class="font-bold text-xl block mt-6 mb-5">What's your take? </label>
    <textarea rows="5" placeholder="Write something..." id="body" name="body" value="{{old('body')}}" class="border border-purple-900 p-1 w-full text-purple-900" required></textarea>
    @error('body')
    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
    <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>
</form>
</div>

</section>