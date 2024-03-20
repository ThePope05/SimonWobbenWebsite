<x-app-layout>
    <x-slot name="banner"></x-slot>

    <div class="flex flex-col py-12 bg-gradient-to-br from-orange-700 to-pink-700"> <!-- BLOGS -->
        <x-page-card>
            <x-slot name="title">
                Blogs
            </x-slot>
            <p>
                Just to show you I can actually do backend, I made a blog system. Everyone can make a blog, and everyone can comment on the blogs. You can also like and favorite blogs.
            </p>
        </x-page-card>
    </div>

    @foreach ($blogs as $blog)
    <div class="flex flex-col py-12 bg-gradient-to-br from-orange-700 to-pink-700"> <!-- BLOGS -->
        <x-page-card>
            <x-slot name="title">
                {{ $blog->title }} by {{ $blog->user->name }}
            </x-slot>
            <x-link-button route="{{ route('blogs.show', $blog) }}">
                Read more
            </x-link-button>
        </x-page-card>
    </div>
    @endforeach
</x-app-layout>