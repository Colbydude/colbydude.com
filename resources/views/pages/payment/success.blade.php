@extends('layouts.default')

@section('meta_title', 'Thank You!')
@section('meta_description', '')
@section('meta_keywords', '')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Thank You!</h1>
            <h2>Your payment/donation has been received.</h2>
            <div class="page-header-links">
                <a class="btn btn-primary-outline" href="{{ url('/') }}">Return Home</a>
            </div>
        </div>
    </div>
@stop
