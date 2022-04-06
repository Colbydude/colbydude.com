@props(['name', 'url'])

<a
    class="block p-2 w-full hover:bg-pink-800/20 dark:hover:bg-pink-700/20 transition duration-500 ease-in-out"
    href="{{ $url }}"
    rel="noopener"
    target="_blank"
>
    <span class="sr-only">{{ $name }}</span>
    @svg("music-delivery/{$name}", ['class' => 'block h-6 mx-auto max-w-full w-auto fill-black dark:fill-white transition duration-500 ease-in-out'])
</a>
