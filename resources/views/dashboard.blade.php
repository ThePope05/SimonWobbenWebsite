<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>@foreach ($posts as $post)
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