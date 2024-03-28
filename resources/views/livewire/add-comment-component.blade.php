<div class="flex flex-col w-full">
    <div class="flex flex-row py-4"> <!-- ADD COMMENT -->
        <input type="text" wire:model="comment" class="form-control w-3/4 bg-slate-500 border-none focus:border-pink-700 focus:ring-pink-500 rounded-md shadow-sm text-white font-bold placeholder:text-slate-600" value="{{ $this->comment }}" placeholder="Add a comment">
        <button wire:click="store" class="btn btn-primary w-1/4 mx-auto block text-center bg-gradient-to-tl from-pink-500 to-pink-700 hover:from-pink-400 hover:to-pink-600 text-white font-bold py-2 px-4 rounded-md transition-colors shadow-xl">Add Comment</button>
    </div>
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
</div>