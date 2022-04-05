@props(['albums', 'sectionTitle'])

@if (!empty($albums))
    <section>
        <x-section-header>{{ $sectionTitle }}</x-section-header>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            @foreach ($albums as $album)
                <div class="relative">
                    <a href="{{ $album->external_urls->spotify }}">
                        <img
                            class="p-1 bg-slate-200 hover:bg-pink-500 dark:bg-slate-700 dark:hover:bg-pink-500 transition duration-500 ease-in-out"
                            src="{{ $album->images[0]->url }}"
                            alt="{{ $album->name }}"
                            width="640" height="640"
                        >
                    </a>
                    <div class="mt-3 mb-1 overflow-hidden overflow-ellipsis">
                        <a
                            class="block text-[14px] font-bold leading-5 text-pink-500 hover:text-pink-600 transition duration-500 ease-in-out"
                            href="{{ $album->external_urls->spotify }}"
                        >
                            {{ $album->name }}
                        </a>
                    </div>
                    <div class="-mr-[1px] overflow-hidden pr-[1px] overflow-ellipsis whitespace-nowrap text-slate-800 dark:text-slate-300 text-[14px]">
                        {{ $album->artists[0]->name }} <span class="text-slate-500 dark:text-slate-400">&middot; {{ Carbon\Carbon::parse($album->release_date)->format('M. Y') }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
