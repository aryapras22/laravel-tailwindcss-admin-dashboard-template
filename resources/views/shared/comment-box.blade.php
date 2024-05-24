{{-- <div>
    <form action="{{route('regulation.comments.store', $regulation->id)}}" method="POST">
        @csrf
        <div class="mb-3">
            <textarea name="content" class="text-sm form-input" rows="1"></textarea>
        </div>
        <div>
            <button type="submit" class="px-4 py-2 text-sm text-white bg-blue-500 rounded-md">Post Comment</button>
        </div>
    </form>
    <hr>
    @foreach($regulation->comments as $comment)
    <div class="flex items-start">
        <img style="width:35px" class="mr-2 rounded-full h-9 w-9"
            src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Luigi"
            alt="Luigi Avatar">
        <div class="w-full">
            <div class="flex justify-between">
                <h6 class="text-base">Luigi</h6>
                <small class="text-sm text-gray-500">{{$comment->created_at}}</small>
            </div>
            <p class="text-sm mt-3 text-gray-600">{{$comment->content}}</p>
        </div>
    </div> 
    @endforeach
</div> --}}


