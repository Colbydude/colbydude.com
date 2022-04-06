@props(['svg'])

<a
    {{ $attributes->merge(['class' => 'transition duration-500 ease-in-out']) }}
    rel="noopener"
    target="_blank"
>
    @svg($svg, 'w-5 h-5 sm:w-6 sm:h-6')
</a>
