@props(['align' => 'right', 'width' => '48', 'contentClasses' => 'dropdown__content'])

@php
$alignmentClasses = match ($align) {
    'left' => 'dropdown__menu--left',
    'top' => 'dropdown__menu--top',
    default => 'dropdown__menu--right',
};
@endphp

<div class="dropdown" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            class="dropdown__menu dropdown__menu--width-{{ $width }} {{ $alignmentClasses }}"
            style="display: none;"
            @click="open = false">
        <div class="{{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>