@extends('layouts.default')

@section('meta_title', 'Game Dev Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/portfolio/gamedev')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Game Dev Portfolio</h1>
            {{-- <h2>Software engineer, sometimes game-dev.</h2> --}}
        </div>

        <h3 class="line-header"><span>Shipped Projects</span></h3>
        <x-game-dev-project :video="asset('video/FishFriendosPreview.mp4')" name="FishFriendos">
            <x-markdown>
                @php include(public_path('markdown/fishfriendos.md')) @endphp
            </x-markdown>
        </x-game-dev-project>

        <x-game-dev-project :video="asset('video/FlyBugPreview.mp4')" name="FlyBug">
            <x-markdown>
                @php include(public_path('markdown/flybug.md')) @endphp
            </x-markdown>
        </x-game-dev-project>

        <x-game-dev-project :video="asset('video/TEMPOPreview.mp4')" name="TEMPO">
            <x-markdown>
                @php include(public_path('markdown/tempo.md')) @endphp
            </x-markdown>
        </x-game-dev-project>

        <x-game-dev-project :video="asset('video/PipeDrainPreview.mp4')" name="Pipe Drain">
            <x-markdown>
                @php include(public_path('markdown/pipedrain.md')) @endphp
            </x-markdown>
        </x-game-dev-project>

        <h3 class="line-header"><span>Game Jam Projects</span></h3>
        <x-game-dev-project :video="asset('video/GMTK2019Preview.mp4')" name="GMTK Game Jam 2019">
            <x-markdown>
                @php include(public_path('markdown/gmtk2019.md')) @endphp
            </x-markdown>
        </x-game-dev-project>

        <h3 class="line-header"><span>Other... stuff...?</span></h3>
        <x-game-dev-project :video="asset('video/FosterPlatformerPreview.mp4')" name="Foster Platformer">
            <x-markdown>
                @php include(public_path('markdown/fosterplatformer.md')) @endphp
            </x-markdown>
        </x-game-dev-project>

        <x-game-dev-project :video="asset('video/OoT2DUnityPreview.mp4')" name="OoT2D Unity">
            <x-markdown>
                @php include(public_path('markdown/oot2dunity.md')) @endphp
            </x-markdown>
        </x-game-dev-project>
    </div>
@stop
