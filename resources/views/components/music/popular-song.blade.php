@props(['name', 'link', 'image', 'duration'])

<li>
    <a
        class="flex h-14 text-[14px] md:text-base text-pink-500 hover:bg-pink-800/20 transition duration-500 ease-in-out"
        href="{{ $link }}"
        rel="noopener"
        target="_blank"
    >
        <div class="h-14 mr-4">
            <div class="relative w-[50px] pt-[100%] bg-gray-800 border-0 block h-auto m-0 top-1/2 -translate-y-1/2">
                <div class="bg-cover h-full absolute top-0 w-full bg-center" style="background-image: url('{{ $image }}');"></div>
            </div>
        </div>
        <div class="h-14 overflow-hidden flex-1 -mr-[1px] pr-[1px] w-0">
            <div class="relative top-1/2 -translate-y-1/2">
                <div class="-mr-[1px] overflow-hidden pr-[1px] overflow-ellipsis whitespace-nowrap">{{ $name }}</div>
            </div>
        </div>
        <div class="h-14 tabular-nums pr-4 text-right w-16 tracking-normal">
            <div class="relative top-1/2 -translate-y-1/2">
                <span class="text-slate-500 dark:text-slate-400">{{ msToMinutes($duration) }}</span>
            </div>
        </div>
        {{-- $track->preview_url --}}
    </a>
</li>
