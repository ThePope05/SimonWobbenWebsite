<x-app-layout>

    <div class="flex flex-col py-12 odd:bg-gradient-to-b even:bg-gradient-to-t from-slate-800 to-slate-900 min-h-screen"> <!-- POSTS -->
        <x-page-card class="relative mt-16">
            <x-slot name="title">
                {{ $post->title }}
            </x-slot>
            <p class="text-gray-400 mb-6">
                {{ $post->content }}
            </p>
            <div class="flex flex-row justify-between">
                @auth
                @if ($post->user != auth()->user())
                <livewire:react-component :post="$post" />
                @else
                <livewire:read-only-reactions-component :post="$post" />
                @endif
                @else
                <a href="{{ Route('login') }}" class="text-gray-900 text-left w-2/4 block hover:underline">
                    Please login to react to this post.
                </a>
                @endauth
                <a href="{{ route('posts.show.user', $post->user) }}" class="flex flex-row justify-end">
                    <span class="text-gray-900 hover:underline text-right w-full block">
                        {{ ($post->user == Auth::user()) ? __('You') : $post->user->name }} | {{ $post->updated_at->diffForHumans() }}
                    </span>
                </a>
            </div>
        </x-page-card>


        @auth
        <x-page-card class="mt-16"> <!-- ADD AND READ COMMENTs -->
            <h2 class="text-2xl font-black text-gray-900">Comments</h2>
            <livewire:add-comment-component :post="$post" />
        </x-page-card>
        @else
        <x-page-card class="mt-16"> <!-- READ ONLY COMMENTS -->
            <h2 class="text-2xl font-black text-gray-900">Comments</h2>
            <livewire:read-only-comment-component :post="$post" />
        </x-page-card>
        @endauth
    </div>
</x-app-layout>