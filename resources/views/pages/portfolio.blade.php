@extends('layouts.default')

@section('meta_title', 'Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/portfolio')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 mb-10 px-4 min-h-[300px]">
        <x-page-header>Portfolio</x-page-header>
        <x-page-subheader>A brief look at things I like to make.</x-page-subheader>

        <section>
            <x-section-header>Showcase Projects</x-section-header>

            <x-code.portfolio-project :video="asset('video/FDaMCPreview.mp4')" name="First Day at Maze Corp.">
                <x-markdown class="md">
                    @php include(public_path('markdown/first-day-at-maze-corp.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://icecavern-games.itch.io/first-day-at-maze-corp" rel="noopener" target="_blank">Itch.io Page</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/IceCavern-Games/BrackeysGameJam2025.1" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :video="asset('video/ProjectPraeliumTrailerNoSound.mp4')" name="Project Praelium">
                <x-markdown class="md">
                    @php include(public_path('markdown/project-praelium.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://icecavern-games.itch.io/project-praelium" rel="noopener" target="_blank">Itch.io Page</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :video="asset('video/FishFriendosPreview.mp4')" name="FishFriendos">
                <x-markdown class="md">
                    @php include(public_path('markdown/fishfriendos.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://www.twitch.tv/ext/uqbw5s35wg1ztqw1kmrf37swiwxmyi" rel="noopener" target="_blank">Install on Twitch</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://www.twitch.tv/popout/colbydude/extensions/uqbw5s35wg1ztqw1kmrf37swiwxmyi/panel" rel="noopener" target="_blank">Play on my channel*</x-btn-outline>
                </div>
                <p><small>*Requires being logged into Twitch.</small></p>
            </x-code.portfolio-project>

            <x-section-header>Shipped Projects</x-section-header>

            <x-code.portfolio-project :video="asset('video/FlyBugPreview.mp4')" name="FlyBug">
                <x-markdown class="md">
                    @php include(public_path('markdown/flybug.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://cdn.voidte.am/games/flybug" rel="noopener" target="_blank">Play it in your browser</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :video="asset('video/TEMPOPreview.mp4')" name="TEMPO">
                <x-markdown class="md">
                    @php include(public_path('markdown/tempo.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://cdn.voidte.am/games/tempo" rel="noopener" target="_blank">Play it in your browser</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :video="asset('video/PipeDrainPreview.mp4')" name="Pipe Drain">
                <x-markdown class="md">
                    @php include(public_path('markdown/pipedrain.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://cdn.voidte.am/games/pipedrain" rel="noopener" target="_blank">Play it in your browser</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/PipeDrainGMS2" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section>
            <x-section-header>Some Web Stuff</x-section-header>

            <x-code.portfolio-project :video="asset('video/MusicRequestsPreview.mp4')" name="Music Requests Twitch Extension">
                <x-markdown class="md">
                    @php include(public_path('markdown/music-requests.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://github.com/Colbydude/Music-Requests-Twitch-Extension" rel="noopener" target="_blank">Frontend Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :image="asset('img/web/colbydude-' . session('style') . '.png')" name="colbydude.com">
                <x-markdown class="md">
                    @php include(public_path('markdown/colbydude.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="{{ url('/') }}">Go Home</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/colbydude.com" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section class="text-center md:text-center text-xl leading-6 font-light">
            <p class="mb-5">Although there's a bit of stuff here, you can find even more projects over on my <x-link href="https://github.com/Colbydude">GitHub</x-link> page!</p>
        </section>
    </main>
@stop
