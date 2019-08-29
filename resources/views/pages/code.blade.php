@extends('layouts.default')

@section('meta_title', 'Code | Colby Terry')
@section('meta_description', '')
@section('meta_keywords', 'Colby Terry, Colbydude, developer, code, gamedev, games, webdev, web, webapp, portfolio')
@section('meta_canonical', 'https://colbydude.com/code')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Code</h1>
            <h2></h2>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <h3 class="line-header"><span>Top Languages</span></h3>
            </div>
            <div class="col-lg-9">
                <h3 class="line-header"><span>Pinned Repositories</span></h3>
                <h3 class="line-header"><span>Contributions</span></h3>
                <github-calendar
                    user="Colbydude"
                    :months="12"
                />
            </div>
        </div>
        <h3 class="line-header"><span>Showcase</span></h3>
        <ul class="story-grid">y
            @foreach ($showcase as $story)
                <li class="story">
                    <div class="story-image">
                        <a href="{{ $story['links'][0]['url'] }}" target="_blank">
                            <img class="img-responsive" src="/img/code/showcase/{{ $story['image'] }}" alt="{{ $story['name'] }}">
                        </a>
                    </div>
                    <div class="story-content">
                        <h4><a href="{{ $story['links'][0]['url'] }}" target="_blank">{{ $story['name'] }}</a></h4>
                        <p>{!! $story['description'] !!}</p>
                        <div class="story-links">
                            @foreach ($story['links'] as $link)
                                <a href="{{ $link['url'] }}" target="_blank">{{ $link['text'] }}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@stop

@push('scripts')
    <script src="{{ mix('js/code.js') }}"></script>
@endpush
