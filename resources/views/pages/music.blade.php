@extends('layouts.default')

@section('meta_title', 'Music by Colby Terry')
@section('meta_description', 'Punk Rocker with a hint of metal tendencies.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, We\'d Be, Punk, Metal, Rock, Guitar, Cover')
@section('meta_canonical', 'http://colbydude.com/music')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Music</h1>
            <h2>Punk Rocker with a hint of metal tendencies.</h2>
        </div>
        <h3 class="line-header"><span>Axes</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/ibanez-s5ex1-tg.jpg" alt="Ibanez S5EX1 Tiger Gray">
                <h4>Ibanez S5EX1 Tiger Gray</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/esp-ltd-ec-1000-ob.jpg" alt="ESP LTD EC-1000 Ocean Blue">
                <h4>ESP LTD EC-1000 Ocean Blue</h4>
            </div>
        </div>
        @if (isset($music))
            <h3 class="line-header"><span>Guitar Covers</span></h3>
            <div class="row">
                @if (!empty($music['guitar-covers']))
                    @foreach ($music['guitar-covers'] as $song)
                        <div class="col-sm-6 col-md-4">
                            <div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
                            <h4>{{ $song['song'] }}</h4>
                            <p>By: {{ $song['by'] }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-xs-12">
                        <p class="lead">Nothing to see here yet!</p>
                    </div>
                @endif
            </div>
            <h3 class="line-header"><a href="http://wedbeofficial.com" target="_blank"><span>We'd Be [My Band]</span></a></h3>
            <div class="row">
                @if (!empty($music['wed-be']))
                    @foreach ($music['wed-be'] as $song)
                        <div class="col-sm-6 col-md-4">
                            <div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
                            <h4>{{ $song['song'] }}</h4>
                            <p>{{ $song['subtitle'] }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-xs-12">
                        <p class="lead">Nothing to see here yet!</p>
                    </div>
                @endif
            </div>
        @endif
    </div>
@stop
