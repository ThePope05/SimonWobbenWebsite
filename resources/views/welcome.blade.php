<x-app-layout>
    <x-slot name="banner"></x-slot>

    <div class="flex flex-col py-12 bg-gradient-to-br from-slate-800 to-slate-900"> <!-- WELCOME, ABOUT, SKILLS -->
        <x-page-card>
            <x-slot name="title">
                Welcome
            </x-slot>
            <p>
                I made this website to show off my skills, this is basically a portfolio website. To hopefully get an internship, it's also a big joke.
            </p>
        </x-page-card>

        <div class="md:w-4/5 lg:w-3/5 xl:w-2/4 mt-6 flex max-md:flex-col justify-center mx-auto">
            <x-page-card class="md:mr-2 md:w-2/4 lg:w-2/4 xl:w-2/4 mx-0">
                <x-slot name="title">
                    About
                </x-slot>
                <p>
                    I'm a 20 year old student at the University of Oslo, I'm studying computer science. I'm currently in my second year, and I'm looking for an internship.
                </p>
            </x-page-card>
            <x-page-card class="md:ml-2 max-md:mt-6 md:w-2/4 lg:w-2/4 xl:w-2/4 mx-0">
                <x-slot name="title">
                    Skills
                </x-slot>
                <p>
                    I'm a full stack developer, I'm good at both frontend and backend. I'm also good at design, and I'm a good team player.
                </p>
            </x-page-card>
        </div>
    </div>

    <div class="flex flex-col py-12 bg-gradient-to-tr from-slate-800 to-slate-900"> <!-- GITHUB -->
        <x-page-card>
            <x-slot name="title">
                Github
            </x-slot>
            <p>
                If you want to see behind the scenes, you can check out my github. This whole project is online on my Github, and I have a lot of other projects there as well.
            </p>
            <x-link-button route="https://github.com/ThePope05" target="_blank">
                Go to Github
            </x-link-button>
        </x-page-card>
    </div>

    <div class="flex flex-col py-12 bg-gradient-to-br from-slate-800 to-slate-900"> <!-- POSTS -->
        <x-page-card>
            <x-slot name="title">
                Posts
            </x-slot>
            <p>
                Just to show you I can actually do backend, I made a post system. Everyone can make posts, and everyone can comment on the posts. You can also react to the posts with a short emote.
            </p>
            <x-link-button route="{{ route('posts.index') }}">
                Go to posts
            </x-link-button>
        </x-page-card>
    </div>
</x-app-layout>