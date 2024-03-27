<x-app-layout>
    <x-slot name="header">
        {{ __('Posts') }}
    </x-slot>

    @foreach ($posts as $post)
    <div class="flex flex-col py-12 odd:bg-gradient-to-b even:bg-gradient-to-t from-slate-800 to-slate-900"> <!-- POSTS -->
        <x-page-card class="relative shadow-2xl">
            <x-slot name="title">
                {{ $post->title }}
            </x-slot>
            <a href=" {{ route('posts.show', $post) }} " class="absolute right-6 top-6 text-slate-900 hover:text-slate-800 focus:text-slate-600 transition-colors">
                <span class="material-symbols-outlined text-4xl">
                    @if ($post->user == auth()->user())
                    more_vert
                    @else
                    arrow_circle_right
                    @endif
                </span>
            </a>
            <p>
                {{ $post->content }}
            </p>
            <div class="flex flex-row justify-end">
                @auth
                @if ($post->user != auth()->user())
                <livewire:react-component :post="$post" />
                @endif
                @endauth
                <span class="text-gray-900 text-right w-2/4 block">
                    {{ ($post->user == Auth::user()) ? __('You') : $post->user->name }} | {{ $post->updated_at->diffForHumans() }}
                </span>
            </div>
        </x-page-card>
    </div>
    @endforeach
</x-app-layout>