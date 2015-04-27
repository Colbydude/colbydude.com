@extends('layouts.default')

@section('meta_title', 'Page Not Found')
@section('meta_description', '')
@section('meta_keywords', '')

@section('addtional_meta')
    {{-- We need to do this in this view as well, since it's not being called by a controller. --}}
    <?php
        // If the style isn't set, we'll set it here, and share across all views.
        //session()->regenerate();
        if (!session()->has('style'))
        {
            $rand = rand(0, 1);
            if ($rand == 0)
                session(['style' => 'dark']);
            else
                session(['style' => 'light']);
        }

        $style = session('style');

        // Because Windows renders icon fonts badly.
        if (strpos($_SERVER["HTTP_USER_AGENT"], "Windows") !== false)
            $windows = "windows";
        else
            $windows = "not-windows";
    ?>
@stop

@section('content')
    <div class="container default">
    	<h1>404</h1>
    	<h2>Page Not Found</h2>
    	<div class="buttons">
    		<a href="/" data-toggle="tooltip" data-placement="bottom" title="Home"><span class="icon-home"></span></a>
    	</div>
    </div>
@stop
