@extends('layouts.default')

@section('meta_title', 'Music | Colby Terry')
@section('meta_description', 'Rock-driven, metal-leaning, video game-lovin\', guitar player.')
@section('meta_keywords', 'Colby Terry, Colbydude, Colbydude VGM, Metal, Rock, VGM, Guitar, Cover')
@section('meta_canonical', 'https://colbydude.com/music')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 mb-10 px-4 min-h-[300px]">
        <x-page-header>Music</x-page-header>
        <x-page-subheader>Rock-driven, metal-leanin', video game-lovin', guitar player.</x-page-subheader>

        <section class="md:grid md:grid-cols-12 md:gap-8">
            <div class="md:col-span-7">
                <x-section-header>Popular</x-section-header>
                <ol class="list-none mb-5">
                    @foreach ($topTracks as $track)
                        <x-music.popular-song
                            :name="$track->name"
                            :link="$track->external_urls->spotify"
                            :image="$track->album->images[2]->url"
                            :duration="$track->duration_ms"
                        />
                    @endforeach
                </ol>
            </div>
            <div class="md:col-span-5">
                <x-section-header>Latest Release</x-section-header>
                <a
                    class="flex h-24 text-pink-500 hover:bg-pink-800/20 transition duration-500 ease-in-out"
                    href="{{ $latestRelease->external_urls->spotify }}"
                    rel="noopener"
                    target="_blank"
                >
                    <div class="h-24 mr-4">
                        <div class="relative w-24 pt-[100%] bg-gray-800 border-0 block h-auto m-0 top-1/2 -translate-y-1/2">
                            <div class="bg-cover h-full absolute top-0 w-full bg-center" style="background-image: url('{{ $latestRelease->images[1]->url }}');"></div>
                        </div>
                    </div>
                    <div class="h-24 overflow-hidden flex-1 -mr-[1px] pr-[1px] w-0">
                        <div class="relative top-1/2 -translate-y-1/2">
                            <div class="-mr-[1px] overflow-hidden pr-[1px] overflow-ellipsis whitespace-nowrap">
                                <div>{{ $latestRelease->name }}</div>
                                <span class="text-slate-500 dark:text-slate-400">{{ Carbon\Carbon::parse($latestRelease->release_date)->format('M. Y') }}</span>
                            </div>
                        </div>
                    </div>
                </a>

                <x-section-header>Available On</x-section-header>
                <div class="grid grid-cols-3 gap-6">
                    @foreach ($services as $name => $url)
                        <div class="">
                            <a
                                class="block p-2 w-full hover:bg-pink-800/20 transition duration-500 ease-in-out"
                                href="{{ $url }}"
                                rel="noopener"
                                target="_blank"
                            >
                                <span class="sr-only">{{ $name }}</span>
                                @svg("music-delivery/{$name}", ['class' => 'block h-6 mx-auto max-w-full w-auto fill-black dark:fill-white transition duration-500 ease-in-out'])
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <x-music.album-list :albums="$albums" section-title="Albums" />
        <x-music.album-list :albums="$singles" section-title="Singles" />
        <x-music.album-list :albums="$appearsOn" section-title="Appears On" />

        <section>
            <x-section-header>Guitars</x-section-header>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($guitars['current'] as $guitar)
                    <div class="col-sm-6 col-md-4 guitar">
                        <img
                            class="p-1 bg-slate-200 hover:bg-pink-500 dark:bg-slate-700 dark:hover:bg-pink-500 transition duration-500 ease-in-out"
                            src="/img/music/guitars/{{ $guitar['image'] }}"
                            alt="{{ $guitar['model'] }}"
                            width="600" height="202"
                        >
                        <div class="mt-2 text-[14px] font-bold leading-5 text-slate-800 dark:text-slate-300">{{ $guitar['model'] }}</div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@stop
