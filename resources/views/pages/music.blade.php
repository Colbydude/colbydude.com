@extends('layouts.default')

@section('meta_title', 'Music | Colby Terry')
@section('meta_description', 'Rock-driven, metal-leanin\', video game-lovin\', guitar player.')
@section('meta_keywords', 'Colby Terry, Colbydude, Colbydude VGM, Metal, Rock, VGM, Guitar, Cover')
@section('meta_canonical', 'https://colbydude.com/music')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 mb-10 px-4 min-h-[300px]">
        <x-page-header>Music</x-page-header>
        <x-page-subheader>Rock-driven, metal-leanin', video game-lovin', guitar player.</x-page-subheader>

        @if (count($upcomingShows) > 0)
            <section>
                <x-section-header>Upcoming Shows</x-section-header>

                @foreach ($upcomingShows as $show)
                    <x-music.show :show="$show" />
                @endforeach
            </section>
        @endif

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
                <x-music.latest-release
                    :name="$latestRelease->name"
                    :image="$latestRelease->images[1]->url"
                    :release-date="Carbon\Carbon::parse($latestRelease->release_date)->format('M. Y')"
                    :url="$latestRelease->external_urls->spotify"
                />

                <x-section-header>Available On</x-section-header>
                <div class="grid grid-cols-3 gap-6">
                    @foreach ($services as $name => $url)
                        <x-music.streaming-service :name="$name" :url="$url" />
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
                    <x-music.guitar
                        :image="$guitar['image']"
                        :model="$guitar['model']"
                    />
                @endforeach
            </div>
        </section>
    </main>
@stop
