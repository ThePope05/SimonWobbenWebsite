<x-app-layout>
    <x-slot name="banner"></x-slot>

    <x-page-part> <!-- WELCOME, ABOUT, SKILLS -->
        <x-page-card>
            <x-slot name="title">
                Welcome
            </x-slot>
            <p>
                I made this website to show off my skills, this is basically a portfolio website. To hopefully get an internship, it's also a big joke. Because this will probably never be used. I do intend to use this domain for my other projects.
            </p>
        </x-page-card>

        <div class="md:w-4/5 lg:w-3/5 xl:w-2/4 mt-6 flex max-md:flex-col justify-center mx-auto">
            <x-page-card class="md:mr-2 md:w-2/4 lg:w-2/4 xl:w-2/4 mx-0">
                <x-slot name="title">
                    About
                </x-slot>
                <p>
                    My name is Simon Wobben, I am currently 18 years old. I like to listen to music, play video games, and code. I started coding because of my dad, he's a software developer. I started in Scratch, then moved to Python, after that I tried C# in Unity which didn't go well. I then moved to web development, and I've been doing that ever since. I did at some point go back to Unity, which has been far more enjoyable now that I know more about programming.
                </p>
            </x-page-card>
            <x-page-card class="md:ml-2 max-md:mt-6 md:w-2/4 lg:w-2/4 xl:w-2/4 mx-0">
                <x-slot name="title">
                    Skills
                </x-slot>
                <p>
                    I have experience with:
                </p>
                <ul class="list-disc text-gray-300">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>PHP</li>
                    <li>Laravel</li>
                    <li>MYSQL</li>
                    <li>Unity</li>
                    <li>Blender</li>
                </ul>
                <p>
                    I am currently working a lot with PHP, Laravel and TailwindCSS. Which is very enjoyable, because of the fast work pace and the ease of working. On the side I also work on some Unity projects and Blender projects. But those are more for fun.
                </p>
            </x-page-card>
        </div>
    </x-page-part>


    <x-page-part> <!-- POSTS -->
        <x-page-card>
            <x-slot name="title">
                Posts
            </x-slot>
            <p>
                Just to show you I can actually do backend, I made a post system. Everyone can make posts, and everyone can comment on the posts. You can also react to the posts with a short emote.
            </p>
            <x-link-button route="{{ route('posts.index') }}" class="mt-6">
                Go to posts
            </x-link-button>
        </x-page-card>
    </x-page-part>

    <x-page-part> <!-- GITHUB -->
        <x-page-card>
            <x-slot name="title">
                Github
            </x-slot>
            <p>
                If you want to see behind the scenes, you can check out my github. This whole project is online on my Github, and I have a lot of other projects there as well.
            </p>
            <x-link-button route="https://github.com/ThePope05" target="_blank" class="mt-6">
                Go to Github
            </x-link-button>
        </x-page-card>
    </x-page-part>
</x-app-layout>