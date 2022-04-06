@props(['story'])

<li class="w-[298px] h-[340px] mb-8 border-2 border-slate-200 dark:border-slate-700 transition duration-500 ease-in-out">
    <a class="block" href="{{ $story['links'][0]['url'] }}" rel="noopener" target="_blank">
        <img
            class="img-responsive"
            src="/img/code/showcase/{{ $story['image'] }}"
            alt="{{ $story['name'] }}"
            width="304" height="171"
        >
    </a>
    <div class="relative py-5 px-4">
        <h4 class="m-0 text-xl font-semibold">
            <x-link href="{{ $story['links'][0]['url'] }}">{{ $story['name'] }}</x-link>
        </h4>
        <p class="my-3 text-[14px] leading-5">{!! $story['description'] !!}</p>
        <div class="flex">
            @foreach ($story['links'] as $link)
                <x-link
                    class="inline-block mr-5 font-medium text-[14px]"
                    href="{{ $link['url'] }}"
                >
                    {{ $link['text'] }}
                </x-link>
            @endforeach
        </div>
    </div>
</li>
