@props([
    'type' => 'button',
    'variant' => 'primary',
])

@php
    $baseClass = 'w-full rounded-2xl py-3 font-semibold transition-all duration-200 active:scale-95';

    $variants = [
        'primary' => 'bg-green-600 hover:bg-green-700 text-white',
        'secondary' => 'bg-yellow-400 hover:bg-yellow-500 text-brown-900',
        'outline' => 'border-2 border-green-600 text-green-700 bg-white',
    ];
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => $baseClass . ' ' . $variants[$variant],
    ]) }}
>
    {{ $slot }}
</button>
