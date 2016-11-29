@extends('layouts.default')

@section('meta_title', 'Page Not Found')
@section('meta_description', '')
@section('meta_keywords', '')

@section('content')
    <div class="container default">
        <div class="page-header">
            <h1>404</h1>
            <h2>Page Not Found</h2>
        </div>
        <p><a class="btn btn-primary-outline" href="{{ url('/') }}">Return Home</a></p>
    </div>
@stop
