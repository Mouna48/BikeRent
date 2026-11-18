@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'input-error']) }}>
        @foreach ((array) $messages as $message)
            <li class="input-error__item">{{ $message }}</li>
        @endforeach
    </ul>
@endif