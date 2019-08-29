<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('meta_title', 'Colby Terry | Developer & Musician')</title>
        <meta name="description" content="@yield('meta_description', 'Hey, I\'m Colby. I program websites and games.')">
        <meta name="keywords" content="@yield('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, web, games, music, portfolio')">
        <meta name="author" content="@yield('meta_author', 'Colby Terry')">
        <link href="@yield('meta_canonical', 'https://colbydude.com')" rel="canonical">

        {{-- OpenGraph Meta --}}
        <meta property="og:title" content="@yield('meta_title', 'Colby Terry | Developer & Musician')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="@yield('meta_canonical', 'https://colbydude.com')">
        <meta property="og:image" content="/img/avatar.jpg">
        <meta property="og:description" content="@yield('meta_description', 'Hey, I\'m Colby. I program websites and games.')">
        <meta property="og:site_name" content="Colby Terry | Developer & Musician">
        <meta property="og:locale" content="en_US">

        {{-- Facebook --}}
        <meta property="fb:admins" content="https://www.facebook.com/Colbydude">

        {{-- Twitter Meta --}}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Colbydude">
        <meta name="twitter:creator" content="@Colbydude">
        <meta name="twitter:title" content="@yield('meta_title', 'Colby Terry | Developer & Musician')">
        <meta name="twitter:description" content="@yield('meta_description', 'Hey, I\'m Colby. I program websites and games.')">
        <meta name="twitter:image" content="/img/cover.jpg">
        <meta name="twitter:url" content="@yield('meta_canonical', 'https://colbydude.com')">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">

        {{-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --}}
        {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
            <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="{{ session('style') }}">
        <div id="app">
            <div class="flash-message">
                @include('flash::message')
                @include('layouts.partials.errors')
            </div>
            @include('layouts.partials.header')

            @yield('content')

            @include('layouts.partials.footer')

            @include('layouts.partials.contact-modal')
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')

        {{-- Google Analytics --}}
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-44205813-1', 'colbydude.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
