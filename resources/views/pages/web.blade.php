@extends('layouts.default')

@section('meta_title', 'Web | Colby Terry')
@section('meta_description', 'Websites, Web Apps, APIs, Content Management Systems? You dream it. I build it.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, website, web, webapp, portfolio')
@section('meta_canonical', 'https://colbydude.com/web')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Web</h1>
            <h2>Websites, Web Apps, APIs, Content Management Systems?<br>You dream it. I build it.</h2>
        </div>
        <h3 class="line-header"><span>What I Do</span></h3>
        <p>As a web <em>developer</em>, I generally handle all the code work for the web apps I create. This goes for both front-end (what the end user sees) and the back-end development (the cool, server stuff). My typical stack leverages the <a href="https://laravel.com" target="_blank">Laravel PHP Framework</a> with the <a href="https://vuejs.org" target="_blank">VueJS Framework</a> to compliment it. This encompases a wide-range of use cases such as small, promotional, sites, all the way to full-blown Customer Relationship Managers. I'm also familiar with tools such as <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>, <a href="https://getcomposer.org/" target="_blank">Composer</a>, <a href="http://nodejs.org/" target="_blank">NodeJS</a>, <a href="https://yarnpkg.com/en/" target="_blank">Yarn</a>, and <a href="https://webpack.js.org/" target="_blank">Webpack</a>.</p>
        <p>While it's difficult to show off what a web developer can do without showing source code, below are some highlights of projects I have worked on -- whether they were building a site from the ground up, or making a custom CMS just for the client. Take a look. I also have a selection of projects on <a href="https://github.com/Colbydude" target="_blank">GitHub</a> as well (including this website!).</p>
        <h3 class="line-header"><span>A few projects to look at...</span></h3>
        <div class="row">
            @if (isset($websites))
                @foreach ($websites['completed'] as $website)
                    <div class="col-sm-6 col-md-4">
                        <div class="web-project">
                            @if ($website['url'])
                                <a href="{{ $website['url'] }}" target="_blank"><img class="img-thumbnail img-responsive" src="/img/web/{{ $website['img'] }}" alt="{{ $website['name'] }}" width="1920" height="1080"></a>
                            @else
                                <img class="img-thumbnail img-responsive" src="/img/web/{{ $website['img'] }}" alt="{{ $website['name'] }}" width="1920" height="1080">
                            @endif

                            <h4>{{ $website['name'] }}</h4>
                            <p>Designed by: {{ $website['designed-by'] }}</p>
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
