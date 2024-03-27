@php
$classes = 'p-6 sm:px-20 bg-slate-700 md:w-4/5 lg:w-3/5 xl:w-2/4 mx-auto md:rounded-xl';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    @if (isset($title))
    <div class="mt-8 text-4xl text-center font-black text-pink-700">
        {{ $title }}
    </div>
    @endif

    <div class="mt-6 text-gray-400">
        {{ $slot }}
    </div>
</div>