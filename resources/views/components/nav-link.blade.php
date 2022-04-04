@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center justify-center text-center w-1/2 px-2 py-3 border-b-4 border-pink-500 text-lg font-bold leading-none text-pink-500 focus:outline-none focus:border-pink-500 transition duration-500 ease-in-out'
            : 'flex items-center justify-center text-center w-1/2 px-2 py-3 border-b-4 border-slate-600 text-lg font-bold leading-none text-slate-600 hover:text-pink-500 hover:border-pink-500 focus:outline-none focus:text-pink-500 focus:border-pink-500 transition duration-500 ease-in-out dark:text-slate-400 dark:border-slate-400 dark:hover:text-pink-500 dark:hover:border-pink-500 dark:focus:text-pink-500 dark:focus:border-pink-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
