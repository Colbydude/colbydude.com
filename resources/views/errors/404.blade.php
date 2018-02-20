<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Page Not Found | Colby Terry</title>
        <link href="https://colbydude.com" rel="canonical">

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
        @include('layouts.partials.header')

        <div class="container default">
            <div class="page-header">
                <h1>404</h1>
                <h2>Page Not Found</h2>
            </div>
            <p><a class="btn btn-primary-outline" href="{{ url('/') }}">Return Home</a></p>
        </div>

        @include('layouts.partials.footer')

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
