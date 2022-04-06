@extends('layouts.default')

@section('meta_title', 'Web Dev Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/code/webdev')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 mb-10 px-4 min-h-[300px]">
        <x-page-header>Web Dev Portfolio</x-page-header>
        <x-page-subheader>I've spent a bit of time making web apps.</x-page-subheader>

        <section>
            <x-section-header>Maintained Personal Projects</x-section-header>

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

            <x-code.portfolio-project :video="asset('video/MusicRequestsPreview.mp4')" name="Music Requests Twitch Extension">
                <x-markdown class="md">
                    @php include(public_path('markdown/music-requests.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://dashboard.twitch.tv/extensions/yvi77da9edbnjuffpghz4uluzf021g" rel="noopener" target="_blank">Install on Twitch</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/Music-Requests-Twitch-Extension" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :image="asset('img/web/ffxiv-progression.png')" name="XIVProgression">
                <x-markdown class="md">
                    @php include(public_path('markdown/ffxiv-progression.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://xivprogression.com" rel="noopener" target="_blank">View the App</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/XIVProgression" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section>
            <x-section-header>(Some) Frelance Projects</x-section-header>

            <x-code.portfolio-project :image="asset('img/web/ericvancleave.png')" name="Eric Van Cleave">
                <x-markdown class="md">
                    @php include(public_path('markdown/eric-van-cleave.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://ericvancleave.com" rel="noopener" target="_blank">View the Site</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :video="asset('video/EmogiPreview.mp4')" name="Emogi Twitch Extension">
                <x-markdown class="md">
                    @php include(public_path('markdown/emogi.md')) @endphp
                </x-markdown>
            </x-code.portfolio-project>

            <x-code.portfolio-project :image="asset('img/web/riseabovethemark.png')" name="Rise Above The Mark">
                <x-markdown class="md">
                    @php include(public_path('markdown/rise-above-the-mark.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://riseabovethemark.com" rel="noopener" target="_blank">View the Site</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section>
            <x-section-header>Tinkerings</x-section-header>

            <x-code.portfolio-project :image="asset('img/web/discord-bots.png')" name="Discord Bots">
                <x-markdown class="md">
                    @php include(public_path('markdown/discord-bots.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://github.com/Colbydude/Discord-Tumblr-Photo-Bot" rel="noopener" target="_blank">Tumblr Bot Source Code</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/ClobberBot" rel="noopener" target="_blank">ClobberBot Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :image="asset('img/web/youtube-karaoke.png')" name="YouTube Karaoke">
                <x-markdown class="md">
                    @php include(public_path('markdown/youtube-karaoke.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://karaoke.colbydude.com" rel="noopener" target="_blank">View the App</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/karaoke.colbydude.com" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :image="asset('img/web/among-us-roulette.png')" name="Among Us Roulette">
                <x-markdown class="md">
                    @php include(public_path('markdown/among-us-roulette.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://among-us-roulette.colbydude.com/" rel="noopener" target="_blank">View the App</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://github.com/Colbydude/among-us-roulette" rel="noopener" target="_blank">Source Code</x-btn-outline>
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

        <section class="text-justify md:text-center text-xl leading-6 font-light">
            <p class="mb-5">Although there's a bit of stuff here, you can find even more projects over on my <x-link href="https://github.com/Colbydude">GitHub</x-link> page!</p>
            <p class="text-center lead">You can also checkout my <x-link href="{{ url('/code/gamedev') }}" rel="prev" target="_self">Game Dev Portfolio</x-link>!</p>
        </section>
    </main>
@stop
