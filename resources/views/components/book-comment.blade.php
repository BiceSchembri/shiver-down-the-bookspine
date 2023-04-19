<form method="POST" action="">
    {{-- "/books/detail/{{$book->slug}}/comments" --}}
    @csrf

    <label for="comment" class="block mb-2 uppercase font-bold text-xs text-blue-700">What's your take? </label>
    <textarea rows="5" placeholder="Write something..." id="comment" name="comment" value="{{old('comment')}}" class="border border-purple-900 p-2 w-full" required></textarea>
    @error('comment')
    <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror

    <button type="Post" class="bg-blue-400 text-white rounded mt-2 p-1 hover:bg-blue-500">Submit</button>
</form>


@foreach ($book->comments as $comment)
<article class="flex">
    <div>
        <img src='' alt='avatar image'>
    </div>
    <div>
        <header>
        <h3 class='font-bold'>{{$comment->user->username}}</h3>
        <p class="text-xs">Posted
            <time>{{$comment->created_at}}</time>
        </p>
        </header>
        <p>
            {{$comment->body}}
        </p>
    </div>
</article>
@endforeach


