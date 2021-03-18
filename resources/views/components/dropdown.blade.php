@props(['alignment' => 'left'])

@php
    $alignmentClasses = [
        'left' => 'left-0',
        'right' => 'right-0',
    ];
@endphp

<div class="relative" x-data="{ open: false }" @click.away="open = false">
    <div @click="open = !open">
        {{ $trigger }}
    </div>

    <div class="w-40 {{ $alignmentClasses[$alignment] }} absolute z-2 bg-white rounded shadow-md py-2 px-1"
         x-show="open"
         x-transition:enter="transition duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
    >
        {{ $slot }}
    </div>
</div>
