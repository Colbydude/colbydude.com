@props(['svg'])

<a
    {{ $attributes->merge(['class' => 'text-slate-600 dark:text-slate-400 transition duration-500 ease-in-out']) }}
    rel="noopener"
    target="_blank"
>
    @svg($svg, 'w-5 h-5 sm:w-6 sm:h-6')
</a>
