@extends('layouts.default')

@section('meta_title', 'Games from Colby Terry')
@section('meta_description', 'Games developed by Colby Terry and VoidTeam Studios.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, HTML5, games, Game Maker, portfolio')
@section('meta_canonical', 'http://colbydude.com/games')
@section('footer_class', 'footer')

@section('content')
    <?php
        if (file_exists('json/games.json'))
            $games = json_decode(file_get_contents('json/games.json'), true);
        else
            $games = []
    ?>
    <div class="container page">
        <h1>Games</h1>
        <h2>HTML5 Games</h2>
        <p><a href="http://voidteam.net/">VoidTeam</a> (my company) is always on the look for content managers, portal owners, and sponsors to publish our work. Our games are developed specifically to run on several mobile devices, such as Android phones and tablets, iPhones, iPads, Windows phones, and more. Of course, these games will also run on modern desktop browsers as well. All of our games are available for licensing, branding, API integration, localization, etc.</p>
        <p>For further information please fill out the <a href="http://voidteam.net/contact">contact</a> form.</p>
        <div class="row">
            @if (!empty($games['html5']))
                @foreach ($games['html5'] as $game)
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="thumbnail" style="min-height: 248px;">
                            <img class="img-responsive" src="http://voidteam.net/img/game-thumbnails/{{ $game['url'] }}.png" alt="{{ $game['name'] }}">
                            <h4>{{ $game['name'] }}</h4>
                            <div class="description">
                                {{ $game['headline'] }}
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="http://cdn.voidte.am/games/{{ $game['url'] }}?bm.source=colbydude.com/games" class="btn btn-primary" style="display: block;" target="_blank">Play</a>
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
        <h2>iOS Games</h2>
        <div class="row">
            @if (!empty($games['ios']))
                @foreach ($games['ios'] as $game)
                    <div class="col-sm-4 col-md-4 col-lg-3">
                        <div class="thumbnail" style="min-height: 248px;">
                            <img class="img-responsive" style="margin: 0 auto;" src="http://voidteam.net/img/game-thumbnails/{{ $game['img'] }}" alt="{{ $game['name'] }}">
                            <h4>{{ $game['name'] }}</h4>
                            <div class="description">
                                {{ $game['headline'] }}
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12">
                                    <a href="{{ $game['url'] }}" style="display: block;" target="_blank"><img class="img-responsive" style="margin: 0 auto;" src="http://voidteam.net/img/Download_on_the_App_Store_Badge_US-UK_135x40.png" alt="Download from the AppStore"></a>
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
    </div>
@stop
