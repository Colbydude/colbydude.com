@props(['name', 'image', 'releaseDate', 'url'])

<x-link
    class="flex h-24 hover:bg-pink-800/20 dark:hover:bg-pink-700/20"
    href="{{ $url }}"
>
    <div class="h-24 mr-4">
        <div class="relative w-24 pt-[100%] bg-gray-800 border-0 block h-auto m-0 top-1/2 -translate-y-1/2">
            <div class="bg-cover h-full absolute top-0 w-full bg-center" style="background-image: url('{{ $image }}');"></div>
        </div>
    </div>
    <div class="h-24 overflow-hidden flex-1 -mr-[1px] pr-[1px] w-0">
        <div class="relative top-1/2 -translate-y-1/2">
            <div class="-mr-[1px] overflow-hidden pr-[1px] overflow-ellipsis whitespace-nowrap">
                <div>{{ $name }}</div>
                <span class="text-slate-500 dark:text-slate-400">{{ $releaseDate }}</span>
            </div>
        </div>
    </div>
</x-link>
