@extends('layouts.default')

@section('meta_title', 'Game Dev Portfolio | Colby Terry')
@section('meta_canonical', 'https://colbydude.com/portfolio/gamedev')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Game Dev Portfolio</h1>
            {{-- <h2>Software engineer, sometimes game-dev.</h2> --}}
        </div>

        <h3 class="line-header"><span>Featured Projects</span></h3>
        FishFriendos
        FlyBug
        TEMPO
        Pipe Drain
        <h3 class="line-header"><span>Game Jam Projects</span></h3>
        GMTK Game Jam 2019
        <h3 class="line-header"><span>Other... stuff...?</span></h3>
        FosterPlatformer
        OoT2D Unity
        2DGameEngine
        Phaser 3 Palette Swapping
        LAFishing
    </div>
@stop
