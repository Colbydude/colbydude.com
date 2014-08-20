@extends('layouts.default')

@section('meta')
	<title>Colby Terry | Web Developer | Musician | Game Developer</title>
	<meta name="description" content="Hey, I'm Colby. I program websites and games. I also play guitar. I may or may not also go by Punk Programmer.">
	<meta name="keywords" content="Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, website, web, games, music, portfolio">
	<link href="{{ $paths['url'].$paths['base'] }}" rel="canonical">
@stop

@section('content')
	<h1>Hey, I'm Colby</h1>
	<h2>I program websites and games.<br>I also play guitar.</h2>
	<div class="buttons">
		<a href="/web" data-toggle="tooltip" data-placement="bottom" title="Websites"><span class="icon-globe"></span></a>
		<a href="/games" data-toggle="tooltip" data-placement="bottom" title="Games"><span class="icon-gamepad"></span></a>
		<a href="/music" data-toggle="tooltip" data-placement="bottom" title="Music"><span class="icon-guitar"></span></a>
	</div>
	<div class="buttons">
		<a class="twitter" href="https://twitter.com/Colbydude" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span class="icon-twitter"></span></a>
		<a class="skype" href="skype:colbydude001?chat" data-toggle="tooltip" data-placement="bottom" title="Skype"><span class="icon-skype"></span></a>
		<a class="github" href="https://github.com/Colbydude" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub"><span class="icon-github"></span></a>
		<a class="youtube" href="http://www.youtube.com/user/Colbydude" target="_blank" data-toggle="tooltip" data-placement="bottom" title="YouTube"><span class="icon-youtube"></span></a>
	</div>
	<div class="buttons">
		<a href="#" id="contact-button" data-target="#contact-modal" data-toggle="tooltip modal" data-placement="bottom" title="Contact"><span class="icon-envelope"></span></a>
		<a class="paypal" href="http://goo.gl/zCfbmn" data-toggle="tooltip" data-placement="bottom" title="Donations and Payment"><span class="icon-paypal"></span></a>
	</div>
@stop