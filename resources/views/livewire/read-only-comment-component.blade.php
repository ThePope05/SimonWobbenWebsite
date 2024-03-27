<div class="flex flex-col w-full">
    @if (count($post->comments) > 0)
    @foreach ($post->comments->sortByDesc('created_at') as $comment)
    <div class="flex flex-col py-4"> <!-- COMMENTS -->
        <div class="flex flex-row">
            <p class="{{ ($comment->user == Auth::user()) ? 'w-9/12' : 'w-full' }} text-gray-400">
                {{ $comment->content }}
            </p>
            @if ($comment->user == Auth::user())
            <div class="w-3/12 flex justify-end">
                <button wire:click="destroy({{ $comment->id }})" class="btn btn-danger text-pink-600 hover:text-pink-500 focus:text-pink-300 transition-colors">
                    <span class="material-symbols-outlined">delete</span>
                </button>
            </div>
            @endif
        </div>
        <div class="flex flex-row justify-end">
            <span class="text-gray-900 text-right w-2/4 block">
                {{ ($comment->user == Auth::user()) ? __('You') : $comment->user->name }} | {{ $comment->updated_at->diffForHumans() }}
            </span>
        </div>
    </div>
    @endforeach
    @else
    <div class="flex flex-col py-4"> <!-- COMMENTS -->
        <p class="text-gray-400">
            No comments yet.
        </p>
    </div>
    @endif
</div>