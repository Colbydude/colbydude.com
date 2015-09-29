@extends('layouts.default')

@section('meta_title', 'Games | Colby Terry')
@section('meta_description', 'Nintendo-inspired retro games enthusiast. Mobile sellout.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, HTML5, games, Game Maker, portfolio')
@section('meta_canonical', 'http://colbydude.com/games')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Games</h1>
            <h2>Nintendo-inspired retro games enthusiast.<br>Mobile sellout.</h2>
        </div>
        <h3 class="line-header"><span>HTML5 Games</span></h3>
        <div class="row">
            @if (isset($games['html5']))
                @foreach ($games['html5'] as $game)
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="game-project">
                            <img class="img-responsive" src="http://voidteam.net/img/game-thumbnails/{{ $game['url'] }}.png" alt="{{ $game['name'] }}">
                            <h4>{{ $game['name'] }}</h4>
                            <div class="description">
                                {{ $game['headline'] }}
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="http://cdn.voidte.am/games/{{ $game['url'] }}?bm.source=colbydude.com/games" class="btn btn-primary-outline">Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-xs-12">
                    <p class="lead">Nothing to see here yet!</p>
                </div>
            @endif
        </div>
        <h3 class="line-header"><span>Licensing</span></h3>
        <p><a href="http://voidteamstudios.com/">VoidTeam Studios</a> (my company) is always on the look for content managers, portal owners, and sponsors to publish our work. Our games are developed specifically to run on several mobile devices, such as Android phones and tablets, iPhones, iPads, Windows phones, and more. Of course, these games will also run on modern desktop browsers as well. All of our games are available for licensing, branding, API integration, localization, etc.</p>
        <p>For further information please fill out the <a href="#" data-target="#contact-modal" data-toggle="modal">contact</a> form.</p>
    </div>
@stop
