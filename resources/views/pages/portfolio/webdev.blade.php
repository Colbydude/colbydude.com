@extends('layouts.default')

@section('meta_title', 'Web Dev Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/portfolio/webdev')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Web Dev Portfolio</h1>
            <h2>I've spent a bit of time making web apps.</h2>
        </div>

        <h3 class="line-header"><span>Maintained Personal Projects</span></h3>
        <x-portfolio-project :video="asset('video/FishFriendosPreview.mp4')" name="FishFriendos">
            <x-markdown>
                @php include(public_path('markdown/fishfriendos.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://www.twitch.tv/ext/uqbw5s35wg1ztqw1kmrf37swiwxmyi" rel="noopener" target="_blank">Install on Twitch</a>
                <a class="btn btn-primary-outline ml-2" href="https://www.twitch.tv/popout/colbydude/extensions/uqbw5s35wg1ztqw1kmrf37swiwxmyi/panel" rel="noopener" target="_blank">Play on my channel*</a>
            </div>
            <p><small>*Requires being logged into Twitch.</small></p>
        </x-portfolio-project>

        <x-portfolio-project :video="asset('video/MusicRequestsPreview.mp4')" name="Music Requests Twitch Extension">
            <x-markdown>
                @php include(public_path('markdown/music-requests.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://dashboard.twitch.tv/extensions/yvi77da9edbnjuffpghz4uluzf021g" rel="noopener" target="_blank">Install on Twitch</a>
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/Music-Requests-Twitch-Extension" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :image="asset('img/web/ffxiv-progression.png')" name="FFXIV Progression">
            <x-markdown>
                @php include(public_path('markdown/ffxiv-progression.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://ffxiv.voidteam.net/progression" rel="noopener" target="_blank">View the App</a>
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/FFXIVProgressionChecker" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <h3 class="line-header"><span>(Some) Freelance Projects</span></h3>
        <x-portfolio-project :image="asset('img/web/ericvancleave.png')" name="Eric Van Cleave">
            <x-markdown>
                @php include(public_path('markdown/eric-van-cleave.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://ericvancleave.com" rel="noopener" target="_blank">View the Site</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :video="asset('video/EmogiPreview.mp4')" name="Emogi Twitch Extension">
            <x-markdown>
                @php include(public_path('markdown/emogi.md')) @endphp
            </x-markdown>

            <div class="project-links">

            </div>
        </x-portfolio-project>

        <x-portfolio-project :image="asset('img/web/riseabovethemark.png')" name="Rise Above The Mark">
            <x-markdown>
                @php include(public_path('markdown/rise-above-the-mark.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://riseabovethemark.com" rel="noopener" target="_blank">View the Site</a>
            </div>
        </x-portfolio-project>

        <h3 class="line-header"><span>Tinkerings</span></h3>
        <x-portfolio-project :image="asset('img/web/discord-bots.png')" name="Discord Bots">
            <x-markdown>
                @php include(public_path('markdown/discord-bots.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/Discord-Tumblr-Photo-Bot" rel="noopener" target="_blank">Tumblr Bot Source Code</a>
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/ClobberBot" rel="noopener" target="_blank">ClobberBot Source Code</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :image="asset('img/web/youtube-karaoke.png')" name="YouTube Karaoke">
            <x-markdown>
                @php include(public_path('markdown/youtube-karaoke.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://karaoke.colbydude.com" rel="noopener" target="_blank">View the App</a>
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/karaoke.colbydude.com" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :image="asset('img/web/among-us-roulette.png')" name="Among Us Roulette">
            <x-markdown>
                @php include(public_path('markdown/among-us-roulette.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://among-us-roulette.colbydude.com/" rel="noopener" target="_blank">View the App</a>
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/among-us-roulette" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :image="asset('img/web/colbydude-' . session('style') . '.png')" name="colbydude.com">
            <x-markdown>
                @php include(public_path('markdown/colbydude.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="{{ url('/') }}">Go Home</a>
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/colbydude.com" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <p class="text-center lead">Although there's a bit of stuff here, you can find even more projects over on my <a href="https://github.com/Colbydude" rel="noopener" target="_blank">GitHub</a> page!</p>
        <p class="text-center lead">You can also checkout my <a href="{{ url('/code/gamedev') }}">Game Dev Portfolio</a>!</p>
    </div>
@stop
