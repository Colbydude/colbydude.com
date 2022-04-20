<a
    {{ $attributes->merge(['class' => 'text-pink-500 dark:text-pink-400 hover:text-pink-600 dark:hover:text-pink-500 transition duration-500 ease-in-out']) }}
    rel="noopener"
    target="_blank"
>
    {{ $slot }}
</a>
