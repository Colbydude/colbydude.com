@extends('layouts.page')

@section('meta')
	<title>Music by Colby Terry</title>
	<meta name="description" content="Music produced or performed by Colby Terry or We'd Be.">
	<meta name="keywords" content="Colby Terry, Colbydude, VoidTeam, Punk Programmer, We'd Be, Punk, Metal, Rock, Guitar, Cover">
	<link href="{{ $paths['url'].$paths['base'] }}/music" rel="canonical">
@stop

@section('content')
	<?php
		$music = json_decode(file_get_contents("http:".$paths["url"].$paths["base"]."/json/music.json"), true);
	?>
	<h1>Music</h1>
	<h2>Guitar Covers</h2>
	<div class="row">
		@foreach ($music['guitar-covers'] as $song)
			<div class="col-sm-6 col-md-4">
				<div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
				<h3>{{ $song['song'] }}</h3>
				<p>By: {{ $song['by'] }}</p>
			</div>
		@endforeach
	</div>
	<h2>We'd Be <small>(my band)</small></h2>
	<div class="row">
		@foreach ($music['wed-be'] as $song)
			<div class="col-sm-6 col-md-4">
				<div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
				<h3>{{ $song['song'] }}</h3>
				<p>{{ $song['subtitle'] }}</p>
			</div>
		@endforeach
	</div>
	<p>More coming soon. For now, check out the <a href="http://wedbeofficial.com/" target="_blank">website</a>.</p>
@stop