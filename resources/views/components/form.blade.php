@props([
    'method' => 'POST',
    'action' => '',
])

<form method="{{ strtoupper($method) === 'GET' ? 'GET': 'POST' }}"
      action="{{ $action }}"
      {{ $attributes }}
>
    @csrf
    @if(!in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
