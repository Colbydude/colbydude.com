@extends('layouts.default')

@section('meta_title', 'Websites by Colby Terry')
@section('meta_description', 'Websites or webapps developed by Colby Terry.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, website, web, webapp, portfolio')
@section('meta_canonical', 'http://colbydude.com/web')
@section('footer_class', 'footer')

@section('content')
	<?php
        if (file_exists('json/websites.json'))
            $websites = json_decode(file_get_contents('json/websites.json'), true);
        else
            $websites = []
	?>
    <div class="container page">
    	<h1>Websites</h1>
    	<h2>What I Do</h2>
    	<p>As a web <em>developer</em>, I generally handle all the code work for the websites I create. This goes for both front-end (what the end user sees) and back-end development (the cool, server stuff). I primarily write websites with HTML, CSS (SASS/SCSS), and Javascript (with jQuery) for the front-end, with PHP and MySQL for the back. I'm also familiar with tools like <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>, <a href="http://bower.io/" target="_blank">Bower</a>, <a href="http://gulpjs.com/" target="_blank">Gulp</a>, <a href="http://gruntjs.com/" target="_blank">Grunt</a>, <a href="https://getcomposer.org/" target="_blank">Composer</a>, and <a href="http://nodejs.org/" target="_blank">NodeJS</a>; to name a few. I usually develop websites from scratch to get the job done quickly and tailor them specifically to the client's needs. I also leverage the <a href="http://laravel.com" target="_blank">Laravel PHP Framework</a> for larger web applications. Occasionally I'll make a WordPress or Tumblr theme or two.</p>
    	<p>While it's difficult to show off what a web developer can do without showing source code, below are some highlights of projects I have worked on -- whether they were building a site from the ground up, or making a custom CMS just for the client. Take a look. I do have a few small projects on <a href="https://github.com/Colbydude" target="_blank">GitHub</a> as well (including this website!).</p>
    	<h2>A few projects to look at...</h2>
    	<div class="row">
            @if (!empty($websites))
        		@foreach ($websites['completed'] as $website)
        			<div class="col-sm-6 col-md-4">
        				@if ($website['url'])
        					<p><a href="{{ $website['url'] }}" target="_blank"><img class="img-thumbnail img-responsive" src="/img/web/{{ $website['img'] }}" alt="{{ $website['name'] }}"></a></p>
        				@else
        					<p><img class="img-thumbnail img-responsive" src="/img/web/{{ $website['img'] }}" alt="{{ $website['name'] }}"></p>
        				@endif

        				<h3>{{ $website['name'] }}</h3>
        				<p>Designed by: {{ $website['designed-by'] }}</p>
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
