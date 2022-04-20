<!doctype html>
<html class="{{ session('style') }}" lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('meta_title', 'Colby Terry | Developer & Musician')</title>
        <meta name="description" content="@yield('meta_description', 'Hey, I\'m Colby. I like building web apps and games. I also like playing guitar.')">
        <meta name="keywords" content="@yield('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, web, games, music, portfolio')">
        <meta name="author" content="@yield('meta_author', 'Colby Terry')">
        <link href="@yield('meta_canonical', 'https://colbydude.com')" rel="canonical">

        {{-- OpenGraph Meta --}}
        <meta property="og:title" content="@yield('meta_title', 'Colby Terry | Developer & Musician')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="@yield('meta_canonical', 'https://colbydude.com')">
        <meta property="og:image" content="/img/avatar.jpg">
        <meta property="og:description" content="@yield('meta_description', 'Hey, I\'m Colby. I like building web apps and games. I also like playing guitar.')">
        <meta property="og:site_name" content="Colby Terry | Developer & Musician">
        <meta property="og:locale" content="en_US">

        {{-- Facebook --}}
        <meta property="fb:admins" content="https://www.facebook.com/Colbydude">

        {{-- Twitter Meta --}}
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@Colbydude">
        <meta name="twitter:creator" content="@Colbydude">
        <meta name="twitter:title" content="@yield('meta_title', 'Colby Terry | Developer & Musician')">
        <meta name="twitter:description" content="@yield('meta_description', 'Hey, I\'m Colby. I like building web apps and games. I also like playing guitar.')">
        <meta name="twitter:image" content="/img/cover.jpg">
        <meta name="twitter:url" content="@yield('meta_canonical', 'https://colbydude.com')">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900 transition duration-500 ease-in-out">
        <div class="w-full">
            @include('flash::message')
            @include('layouts.partials.errors')
        </div>
        @include('layouts.partials.header')

        @yield('content')

        @include('layouts.partials.footer')

        @include('layouts.partials.contact-modal')

        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
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
