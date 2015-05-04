@extends('layouts.default')

@section('meta_title', 'Music by Colby Terry')
@section('meta_description', 'Music produced or performed by Colby Terry or We\'d Be.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, We\'d Be, Punk, Metal, Rock, Guitar, Cover')
@section('meta_canonical', 'http://colbydude.com/music')
@section('footer_class', 'footer')

@section('content')
    <?php
        if (file_exists('json/music.json'))
            $music = json_decode(file_get_contents('json/music.json'), true);
        else
            $music = []
    ?>
    <div class="container page">
    	<h1>Music</h1>
    	<h2>Guitar Covers</h2>
    	<div class="row">
            @if (!empty($music['guitar-covers']))
        		@foreach ($music['guitar-covers'] as $song)
        			<div class="col-sm-6 col-md-4">
        				<div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
        				<h3>{{ $song['song'] }}</h3>
        				<p>By: {{ $song['by'] }}</p>
        			</div>
        		@endforeach
            @else
                <div class="col-xs-12">
                    <p class="lead">Nothing to see here yet!</p>
                </div>
            @endif
    	</div>
    	<h2>We'd Be <small>(my band)</small></h2>
    	<div class="row">
            @if (!empty($music['wed-be']))
        		@foreach ($music['wed-be'] as $song)
        			<div class="col-sm-6 col-md-4">
        				<div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
        				<h3>{{ $song['song'] }}</h3>
        				<p>{{ $song['subtitle'] }}</p>
        			</div>
        		@endforeach
            @else
                <div class="col-xs-12">
                    <p class="lead">Nothing to see here yet!</p>
                </div>
            @endif
    	</div>
    	<p>More coming soon. For now, check out the <a href="http://wedbeofficial.com/" target="_blank">website</a>.</p>
    </div>
@stop
