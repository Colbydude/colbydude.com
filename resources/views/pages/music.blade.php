@extends('layouts.default')

@section('meta_title', 'Music | Colby Terry')
@section('meta_description', 'Punk Rocker with a hint of metal tendencies.')
@section('meta_keywords', 'Colby Terry, Colbydude, VoidTeam, Punk Programmer, We\'d Be, Punk, Metal, Rock, Guitar, Cover')
@section('meta_canonical', 'https://colbydude.com/music')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Music</h1>
            <h2>Punk Rocker with a hint of metal tendencies.</h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-7">
                <h3 class="line-header"><span>Popular</span></h3>
                <ol class="tracklist">
                    @foreach ($topTracks as $track)
                        <li class="tracklist-row">
                            <div class="tracklist-col tracklist-col-album-art">
                                <div class="album-art tracklist-middle-align album-art--with-auto-height">
                                    <div class="album-art-image" style="background-image: url('{{ $track->album->images[2]->url }}');"></div>
                                </div>
                            </div>
                            <div class="tracklist-col name">
                                <div class="track-name-wrapper tracklist-middle-align">
                                    <div class="tracklist-name ellipsis-one-line">
                                        {{ $track->name }}
                                    </div>
                                </div>
                            </div>
                            {{-- $track->preview_url --}}
                            {{-- $track->duration_ms --}}
                            {{-- $track->external_urls->spotify --}}
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="col-xs-6 col-sm-5">
                <h3 class="line-header"><span>Latest Release</span></h3>
            </div>
        </div>
        <h3 class="line-header"><span>Albums</span></h3>
        <div class="row flex-row album-list">
            @foreach ($albums as $album)
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="media-object">
                        <img class="img-responsive img-thumbnail" src="{{ $album->images[0]->url }}" alt="{{ $album->name }}" width="640" height="640">
                        <div class="mo-info">
                            <a href="#">{{ $album->name }}</a>
                        </div>
                        <div class="mo-meta ellipsis-one-line">
                            <span class="text-muted">{{ $album->artists[0]->name }} &middot; {{ $album->release_date }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <h3 class="line-header"><span>Singles and EPs</span></h3>
        <h3 class="line-header"><span>Guitars</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/music/guitars/prs-se-mhhb2.jpg" alt="PRS SE MHHB2 Holcomb Burst (Mark Holcomb Signature)" width="600" height="202">
                <h4>PRS SE MHHB2 Holcomb Burst (Mark Holcomb Signature)</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/music/guitars/ibanez-s61al-bm.jpg" alt="Ibanez S61AL Black Mirage" width="600" height="202">
                <h4>Ibanez S61AL Black Mirage</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-resonsive img-thumbnail" src="/img/music/guitars/esp-sn-25th.jpg" alt="ESP SN-25TH (Sonic the Hedgehog)">
                <h4>ESP SN-25TH (Sonic the Hedgehog)</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/music/guitars/esp-sd-15th.jpg" alt="ESP SD-15TH (Shadow the Hedgehog)">
                <h4>ESP SD-15TH (Shadow the Hedgehog)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/music/guitars/chapman-ml1-8rs.jpg" alt="Chapman ML1-8RS (Rob Scallon 8-String Signature)" width="600" height="202">
                <h4>Chapman ML1-8RS (Rob Scallon 8-String Signature)</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/music/guitars/esp-ltd-b-155dx-stb.jpg" alt="ESP LTD B-155DX See Thru Blue" width="600" height="202">
                <h4>ESP LTD B-155DX See Thru Blue</h4>
            </div>
        </div>
    </div>
@stop
