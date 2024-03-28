<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>
    @if (count($posts) > 0)
    @foreach ($posts as $post)
    <x-page-part> <!-- POSTS -->
        <x-page-card class="relative">
            <x-slot name="title">
                {{ $post->title }}
            </x-slot>
            <p>
                {{ $post->content }}
            </p>
            <div class="flex flex-row justify-end">
                <span class="text-gray-900 text-right w-2/4 block">
                    {{ ($post->user == Auth::user()) ? __('You') : $post->user->name }} | {{ $post->updated_at->diffForHumans() }}
                </span>
            </div>
        </x-page-card>
    </x-page-part>
    @endforeach
    @else
    <x-page-part>
        <x-page-card>
            <x-slot name="title">
                {{ __('No posts found') }}
            </x-slot>
            <x-link-button :route="route('posts.create')">
                {{ __('Create a post') }}
            </x-link-button>
        </x-page-card>
    </x-page-part>
    @endif
</x-app-layout>