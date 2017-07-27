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
        <h3 class="line-header"><span>Releases</span></h3>
        <div class="row">
            <div class="col-sm-4">
                <p><img class="img-responsive img-thumbnail" src="/img/music/releases/vgm-vol-1.jpg" alt="VGM, Vol. 1: New Game - EP" width="1400" height="1400"></p>
            </div>
            <div class="col-sm-8">
                <h3 class="featured">VGM, Vol. 1: New Game - EP</h3>
                <h4>Released January 2nd, 2017</h4>
                <p>on <a href="https://voidte.am/VGMVol1-Am">Amazon</a>, <a href="https://voidte.am/VGMVol1-GP">Google Play</a>, <a href="https://voidte.am/VGMVol1-iT">iTunes</a>, <a href="https://voidte.am/VGMVol1-Sp">Spotify</a>, and <a href="https://voidte.am/VGMVol1-YT">YouTube</a></p>
                <table class="table table-condensed text-left">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>SONG</th>
                            <th class="text-right"><span class="fa fa-clock-o"></span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Final Rush (From "Sonic Adventure 2")</td>
                            <td class="text-right">2:45</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Stone Tower Temple (From "The Legend of Zelda: Majora's Mask")</td>
                            <td class="text-right">3:20</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>The Man With the Machine Gun (From "Final Fantasy VIII")</td>
                            <td class="text-right">2:59</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Bowser's Road (From "Super Mario 64")</td>
                            <td class="text-right">3:38</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Force Your Way (From "Final Fantasy VIII")</td>
                            <td class="text-right">4:16</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mute City feat. SwigglesRP (From "F-Zero")</td>
                            <td class="text-right">2:43</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3 class="line-header"><span>Axes</span></h3>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/ibanez-s5ex1-tg.jpg" alt="Ibanez S5EX1 Tiger Gray" width="600" height="202">
                <h4>Ibanez S5EX1 Tiger Gray</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/esp-ltd-ec-1000-stb.jpg" alt="ESP LTD EC-1000 See Thru Blue" width="600" height="202">
                <h4>ESP LTD EC-1000 See Thru Blue</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/chapman-ml1-8rs.jpg" alt="Chapman ML1-8RS (Rob Scallon 8-String Signature)" width="600" height="202">
                <h4>Chapman ML1-8RS (Rob Scallon 8-String Signature)</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/prs-se-mhhb2.jpg" alt="PRS SE MHHB2 Holcomb Burst (Mark Holcomb Signature)" width="600" height="202">
                <h4>PRS SE MHHB2 Holcomb Burst (Mark Holcomb Signature)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-resonsive img-thumbnail" src="/img/guitars/esp-sn-25th.jpg" alt="ESP SN-25TH (Sonic the Hedgehog)">
                <h4>ESP SN-25TH (Sonic the Hedgehog)</h4>
            </div>
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/esp-sd-15th.jpg" alt="ESP SD-15TH (Shadow the Hedgehog)">
                <h4>ESP SD-15TH (Shadow the Hedgehog)</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="img-responsive img-thumbnail" src="/img/guitars/esp-ltd-b-155dx-stb.jpg" alt="ESP LTD B-155DX See Thru Blue" width="600" height="202">
                <h4>ESP LTD B-155DX See Thru Blue</h4>
            </div>
        </div>
        @if (isset($music))
            <h3 class="line-header"><span>Video Game Metal</span></h3>
            <div class="row">
                @if (!empty($music['vg-metal']))
                    @foreach ($music['vg-metal'] as $song)
                        <div class="col-sm-6 col-md-4">
                            <div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
                            <h4>{{ $song['song'] }}</h4>
                            <p>From: {{ $song['from'] }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-xs-12">
                        <p class="lead">Nothing to see here yet!</p>
                    </div>
                @endif
            </div>
            <h3 class="line-header"><a href="http://wedbeofficial.com" target="_blank"><span>We'd Be [My Band]</span></a></h3>
            <div class="row">
                @if (!empty($music['wed-be']))
                    @foreach ($music['wed-be'] as $song)
                        <div class="col-sm-6 col-md-4">
                            <div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
                            <h4>{{ $song['song'] }}</h4>
                            <p>{{ $song['subtitle'] }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-xs-12">
                        <p class="lead">Nothing to see here yet!</p>
                    </div>
                @endif
            </div>
            <h3 class="line-header"><span>(Old) Guitar Covers</span></h3>
            <div class="row">
                @if (!empty($music['guitar-covers']))
                    @foreach ($music['guitar-covers'] as $song)
                        <div class="col-sm-6 col-md-4">
                            <div class="video-container"><iframe width="635" height="353" src="{{ $song['video'] }}?wmode=transparent"></iframe></div>
                            <h4>{{ $song['song'] }}</h4>
                            <p>By: {{ $song['by'] }}</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-xs-12">
                        <p class="lead">Nothing to see here yet!</p>
                    </div>
                @endif
            </div>
        @endif
    </div>
@stop
