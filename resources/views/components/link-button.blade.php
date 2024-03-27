@php
$classes = 'mx-auto w-2/5 block text-center bg-gradient-to-tl from-pink-500 to-pink-700 hover:from-pink-400 hover:to-pink-600 text-white font-bold py-2 px-4 mt-6 rounded-xl transition-colors shadow-xl';
@endphp

<a href="{{ $attributes['route'] }}" {{ $attributes->merge(['class' => $classes]) }} {{ (isset($attributes['target'])) ? $attributes['target'] : '' }}>
    {{ $slot }}
</a>