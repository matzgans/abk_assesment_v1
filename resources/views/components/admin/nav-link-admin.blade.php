@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'group flex items-center rounded-lg p-2 text-primary hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 bg-gray-200'
            : 'group flex items-center rounded-lg p-2 text-white hover:bg-gray-100 hover:text-primary dark:text-white dark:hover:bg-gray-700';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
