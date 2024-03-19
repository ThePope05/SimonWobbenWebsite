<div class="p-6 sm:px-20 bg-slate-700 md:w-4/5 lg:w-3/5 xl:w-2/4 mx-auto md:rounded-xl">
    @if (isset($title))
    <div class="mt-8 text-2xl text-center font-bold">
        {{ $title }}
    </div>
    @endif

    <div class="mt-6 text-gray-500">
        {{ $slot }}
    </div>
</div>