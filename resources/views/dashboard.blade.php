<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    @foreach ($posts as $post)
    <div class="flex flex-col py-12 odd:bg-gradient-to-b even:bg-gradient-to-t from-slate-800 to-slate-900"> <!-- POSTS -->
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
    </div>
    @endforeach
</x-app-layout>