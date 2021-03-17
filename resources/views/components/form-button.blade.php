<x-form method="{{ $method }}" action="{{ $action }}">
    <button type="submit" {{ $attributes->except(['method', 'action']) }}>{{ $slot }}</button>
</x-form>
