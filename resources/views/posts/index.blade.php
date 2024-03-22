<x-app-layout>
    <div class="flex flex-col py-12 bg-gradient-to-br from-orange-700 to-pink-700"> <!-- TITLE -->
        <x-page-card class="mt-16">
            <x-slot name="title">
                {{ __('Posts') }}
            </x-slot>
        </x-page-card>
    </div>

    @foreach ($posts as $post)
    <div class="flex flex-col py-12 odd:bg-gradient-to-br even:bg-gradient-to-tr from-orange-700 to-pink-700"> <!-- POSTS -->
        <x-page-card class="relative">
            <x-slot name="title">
                {{ $post->title }}
            </x-slot>
            @if ($post->user == auth()->user())
            <a href="" class="absolute right-6 top-6">
                <span class="material-symbols-outlined">
                    more_vert
                </span>
            </a>
            @endif
            <p>
                {{ $post->content }}
            </p>
            <div class="flex flex-row justify-end">
                @auth
                <livewire:react-component :post="$post" />
                @endauth
                <span class="text-gray-900 text-right w-2/4 block">
                    {{ $post->user->name }} | {{ $post->updated_at->diffForHumans() }}
                </span>
            </div>
        </x-page-card>
    </div>
    @endforeach
</x-app-layout>