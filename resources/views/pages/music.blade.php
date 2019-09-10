@extends('layouts.default')

@section('meta_title', 'Music | Colby Terry')
@section('meta_description', 'Rock-driven, metal-leaning, video game-lovin\', guitar player.')
@section('meta_keywords', 'Colby Terry, Colbydude, Colbydude VGM, Metal, Rock, VGM, Guitar, Cover')
@section('meta_canonical', 'https://colbydude.com/music')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Music</h1>
            <h2>Rock-driven, metal-leaning, video game-lovin', guitar player.</h2>
        </div>

        <div class="row">
            <div class="col-md-7">
                <h3 class="line-header"><span>Popular</span></h3>
                <ol class="tracklist">
                    @foreach ($topTracks as $track)
                        <li>
                            <a class="tracklist-row" href="{{ $track->external_urls->spotify }}" target="_blank">
                                <div class="tracklist-col tracklist-col-album-art">
                                    <div class="album-art tracklist-middle-align album-art--with-auto-height">
                                        <div class="album-art-image" style="background-image: url('{{ $track->album->images[2]->url }}');"></div>
                                    </div>
                                </div>
                                <div class="tracklist-col name">
                                    <div class="track-name-wrapper tracklist-middle-align">
                                        <div class="tracklist-name ellipsis-one-line">{{ $track->name }}</div>
                                    </div>
                                </div>
                                <div class="tracklist-col tracklist-col-duration">
                                    <div class="text-muted tracklist-middle-align">
                                        <span>{{ msToMinutes($track->duration_ms) }}</span>
                                    </div>
                                </div>
                                {{-- $track->preview_url --}}
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="col-md-5">
                <h3 class="line-header"><span>Latest Release</span></h3>
                <a class="latest-release" href="{{ $latestRelease->external_urls->spotify }}" target="_blank">
                    <div class="latest-release-col latest-release-col-album-art">
                        <div class="album-art middle-align album-art--with-auto-height">
                            <div class="album-art-image" style="background-image: url('{{ $latestRelease->images[1]->url }}');"></div>
                        </div>
                    </div>
                    <div class="latest-release-col meta">
                        <div class="middle-align">
                            <div class="release-title">{{ $latestRelease->name }}</div>
                            <div class="release-date text-muted">{{ Carbon\Carbon::parse($latestRelease->release_date)->format('M. Y') }}</div>
                        </div>
                    </div>
                </a>

                <h3 class="line-header"><span>Available On</span></h3>
                <div class="row flex-row streaming-services">
                    @foreach ($services as $name => $url)
                        <div class="col-xs-4">
                            <a class="streaming-service" href="{{ $url }}" target="_blank">
                                @svg($name, ['class' => 'service-logo'])
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        @include('pages.music.album-list', ['albums' => $albums, 'sectionTitle' => 'Albums'])
        @include('pages.music.album-list', ['albums' => $singles, 'sectionTitle' => 'Singles and EPs'])

        <h3 class="line-header"><span>Guitars</span></h3>
        <div class="row flex-row guitars">
            @foreach($guitars['current'] as $guitar)
                <div class="col-sm-6 col-md-4 guitar">
                    <img class="img-responsive img-thumbnail" src="/img/music/guitars/{{ $guitar['image'] }}" alt="{{ $guitar['model'] }}" width="600" height="202">
                    <div class="guitar-model">{{ $guitar['model'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
@stop
