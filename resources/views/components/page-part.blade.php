@php
$classes = 'flex flex-col py-12 odd:bg-gradient-to-br even:bg-gradient-to-tr from-slate-800 to-slate-900';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>