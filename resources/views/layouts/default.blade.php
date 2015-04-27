<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('meta_title', 'Colby Terry | Web Developer | Musician | Game Developer')</title>
        <meta name="description" content="@yield('meta_description', 'Hey, I\'m Colby. I program websites and games. I also may or may not also go by Punk Programmer.')">
        <meta name="keywords" content="@yield('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, web, games, music, portfolio')">
        <meta name="author" content="@yield('meta_author', 'Colby Terry')">
        <link href="@yield('meta_canonical', 'https://colbydude.com')" rel="canonical">

        @yield('additional_meta')

        <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

        @yield('additional_css')

        <!-- Google Analytics -->
        <script>
        	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        	ga('create', 'UA-44205813-1', 'colbydude.com');
        	ga('send', 'pageview');
        </script>

        @yield('header_scripts')

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="text-center {{ $style.' '.$windows}}">
        @include('layouts.partials.style-chooser')

        <div class="offset"></div>
        @yield('content')

        @include('layouts.partials.footer')

        <script src="{{ elixir('js/vendor.js') }}"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
