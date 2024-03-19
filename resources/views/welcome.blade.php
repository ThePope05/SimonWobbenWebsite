<x-app-layout>
    <x-slot name="banner">
        <h2 class="font-bold text-3xl text-gray-800 leading-tight">
            Welcome to Simons show off website!
        </h2>
    </x-slot>

    <div class="flex flex-col py-12 bg-gradient-to-br from-orange-700 to-pink-700">
        <x-page-card>
            <x-slot name="title">
                Welcome to Simons show off website!
            </x-slot>
            <p>
                I made this website to show off my skills, this is basically a portfolio website. To hopefully get an internship, it's also a big joke.
            </p>
        </x-page-card>

        <div class="md:w-4/5 lg:w-3/5 xl:w-2/4 mt-6 flex justify-center mx-auto">
            <x-page-card>
                <x-slot name="title">
                    About Me
                </x-slot>
                <p>
                    I'm a 20 year old student at the University of Oslo, I'm studying computer science. I'm currently in my second year, and I'm looking for an internship.
                </p>
            </x-page-card>
            <x-page-card>
                <x-slot name="title">
                    My Skills
                </x-slot>
                <p>
                    I'm a full stack developer, I'm good at both frontend and backend. I'm also good at design, and I'm a good team player.
                </p>
            </x-page-card>
        </div>
    </div>
</x-app-layout>