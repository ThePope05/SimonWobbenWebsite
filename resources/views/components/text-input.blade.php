@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-slate-500 border-none focus:border-pink-700 focus:ring-pink-500 rounded-md shadow-sm']) !!}>