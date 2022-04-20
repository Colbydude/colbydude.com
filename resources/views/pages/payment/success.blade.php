@extends('layouts.default')

@section('meta_title', 'Thank You!')
@section('meta_description', '')
@section('meta_keywords', '')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 px-4 min-h-[300px]">
        <x-page-header>Thank You!</x-page-header>
        <x-page-subheader>Your payment/donation has been received.</x-page-subheader>

        <x-btn-outline href="{{ url('/') }}">Return Home</x-btn-outline>
    </main>
@stop
