@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?id={{$comment->user_id}}" alt="" height="60" width="60" class="rounded">
        </div>
        <div>
            <header mb-4>
                <h3 class="font-bold">{{$comment->author->username}}</h3>
                <p class="text-xs">
                    Posted
                    <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
                </p>
            </header>
            <p class="mt-4"> {{$comment->body}} </p>
        </div>
    </article>
</x-panel>
