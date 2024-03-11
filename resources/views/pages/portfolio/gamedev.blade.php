@extends('layouts.default')

@section('meta_title', 'Game Dev Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/code/gamedev')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 mb-10 px-4 min-h-[300px]">
        <x-page-header>Game Dev Portfolio</x-page-header>
        <x-page-subheader>I make games sometimes.</x-page-subheader>

        <section>
            <x-section-header>Active Projects</x-section-header>

            <x-code.portfolio-project :video="asset('video/ProjectPraeliumTrailerNoSound.mp4')" name="Project Praelium">
                <x-markdown class="md">
                    @php include(public_path('markdown/project-praelium.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://icecavern-games.itch.io/project-praelium" rel="noopener" target="_blank">Itch.io Page</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-section-header>Shipped Projects</x-section-header>

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
                    <x-btn-outline href="https://github.com/Colbydude/PipeDrainGMS2" rel="noopener" target="_blank">Source Code</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://cdn.voidte.am/games/pipedrain" rel="noopener" target="_blank">Play it in your browser</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section>
            <x-section-header>Game Jam Projects</x-section-header>

            <x-code.portfolio-project :video="asset('video/GMTK2019Preview.mp4')" name="GMTK Game Jam 2019">
                <x-markdown class="md">
                    @php include(public_path('markdown/gmtk2019.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://github.com/Colbydude/GMTKGameJam2019" rel="noopener" target="_blank">Source Code</x-btn-outline>
                    <x-btn-outline class="ml-2" href="https://colbydude.itch.io/gmtk-gamejam-2019" rel="noopener" target="_blank">Itch.io Page</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section>
            <x-section-header>Other... stuff...?</x-section-header>

            <x-code.portfolio-project :video="asset('video/FosterPlatformerPreview.mp4')" name="Foster Platformer">
                <x-markdown class="md">
                    @php include(public_path('markdown/fosterplatformer.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://github.com/Colbydude/FosterPlatformer" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>

            <x-code.portfolio-project :video="asset('video/OoT2DUnityPreview.mp4')" name="OoT2D Unity">
                <x-markdown class="md">
                    @php include(public_path('markdown/oot2dunity.md')) @endphp
                </x-markdown>

                <div class="mt-3">
                    <x-btn-outline href="https://github.com/Colbydude/OoT2DUnity" rel="noopener" target="_blank">Source Code</x-btn-outline>
                </div>
            </x-code.portfolio-project>
        </section>

        <section class="text-center md:text-center text-xl leading-6 font-light">
            <p class="mb-5">Although there's a bit of stuff here, you can find even more projects over on my <x-link href="https://github.com/Colbydude">GitHub</x-link> page!</p>
            <p>You can also checkout my <a href="{{ url('/code/webdev') }}">Web Dev Portfolio</a>!</p>
        </section>
    </main>
@stop
