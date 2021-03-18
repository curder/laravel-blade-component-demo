@props(['route'])

@php
    $classes = Request::routeIs($route) ? ' text-blue-500 hover:text-blue-600' : ' hover:text-gray-200';
@endphp

<a href="{{ route($route) }}" {{ $attributes->merge(['class' => 'px-6 ' . $classes]) }}>
    {{ $slot }}
</a>
