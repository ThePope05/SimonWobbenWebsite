<x-guest-layout>
    <x-slot name="header">
        {{ __('New posts') }}
    </x-slot>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <div class="mt-4">
            <x-input-label for="title" :value="__('Title')" />

            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
        </div>

        <div class="mt-4">
            <x-input-label for="content" :value="__('Content')" />

            <x-text-input id="content" class="block mt-1 w-full" type="text" name="content" :value="old('content')" required />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-3">
                {{ __('Post') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>