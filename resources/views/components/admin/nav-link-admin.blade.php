@props(['active', 'icon'])

@php
    $classes =
        $active ?? false
            ? 'group flex items-center rounded-lg p-2 text-primary hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 bg-gray-200'
            : 'group flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon)
        {{-- Render icon yang diterima dari parent --}}
        {!! $icon !!}
    @endif
    <span class="ms-3">{{ $slot }}</span>
</a>
