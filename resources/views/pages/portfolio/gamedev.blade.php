@extends('layouts.default')

@section('meta_title', 'Game Dev Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/portfolio/gamedev')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Game Dev Portfolio</h1>
            <h2>I make games sometimes.</h2>
        </div>

        <h3 class="line-header"><span>Shipped Projects</span></h3>
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

        <x-portfolio-project :video="asset('video/FlyBugPreview.mp4')" name="FlyBug">
            <x-markdown>
                @php include(public_path('markdown/flybug.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://cdn.voidte.am/games/flybug" rel="noopener" target="_blank">Play it in your browser</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :video="asset('video/TEMPOPreview.mp4')" name="TEMPO">
            <x-markdown>
                @php include(public_path('markdown/tempo.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://cdn.voidte.am/games/tempo" rel="noopener" target="_blank">Play it in your browser</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :video="asset('video/PipeDrainPreview.mp4')" name="Pipe Drain">
            <x-markdown>
                @php include(public_path('markdown/pipedrain.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/PipeDrainGMS2" rel="noopener" target="_blank">Source Code</a>
                <a class="btn btn-primary-outline ml-2" href="https://cdn.voidte.am/games/pipedrain" rel="noopener" target="_blank">Play it in your browser</a>
            </div>
        </x-portfolio-project>

        <h3 class="line-header"><span>Game Jam Projects</span></h3>
        <x-portfolio-project :video="asset('video/GMTK2019Preview.mp4')" name="GMTK Game Jam 2019">
            <x-markdown>
                @php include(public_path('markdown/gmtk2019.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/GMTKGameJam2019" rel="noopener" target="_blank">Source Code</a>
                <a class="btn btn-primary-outline ml-2" href="https://colbydude.itch.io/gmtk-gamejam-2019" rel="noopener" target="_blank">Itch.io Page</a>
            </div>
        </x-portfolio-project>

        <h3 class="line-header"><span>Other... stuff...?</span></h3>
        <x-portfolio-project :video="asset('video/FosterPlatformerPreview.mp4')" name="Foster Platformer">
            <x-markdown>
                @php include(public_path('markdown/fosterplatformer.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/FosterPlatformer" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <x-portfolio-project :video="asset('video/OoT2DUnityPreview.mp4')" name="OoT2D Unity">
            <x-markdown>
                @php include(public_path('markdown/oot2dunity.md')) @endphp
            </x-markdown>

            <div class="project-links">
                <a class="btn btn-primary-outline" href="https://github.com/Colbydude/OoT2DUnity" rel="noopener" target="_blank">Source Code</a>
            </div>
        </x-portfolio-project>

        <p class="text-center lead">Although there's a bit of stuff here, you can find even more projects over on my <a href="https://github.com/Colbydude" rel="noopener" target="_blank">GitHub</a> page!</p>
        <p class="text-center lead">You can also checkout my <a href="{{ url('/code/webdev') }}">Web Dev Portfolio</a>!</p>
    </div>
@stop
