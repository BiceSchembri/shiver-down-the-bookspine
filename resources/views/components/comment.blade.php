<section>

    <h2 class="font-bold text-xl mt-10 mb-5">Comments</h2>

    <x-fail />

{{-- SHOW COMMENTS --}}
@foreach ($book->comments as $comment)

<article class="flex">
    <div>
        <img src='' alt='avatar image'>
    </div>
    <div>
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

{{-- POST A COMMENT --}}
<form method="POST" action="{{ route('store-comment', $book)}}">
   
    @csrf

    <label for="body" class="block mb-2 uppercase font-bold text-xs text-blue-700">What's your take? </label>
    <textarea rows="5" placeholder="Write something..." id="body" name="body" value="{{old('body')}}" class="border border-purple-900 p-2 w-full text-purple-900" required></textarea>
    @error('body')
    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror

    <button type="submit" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>

</form>

</section>