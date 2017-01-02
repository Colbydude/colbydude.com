@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Hey, I'm Colby</h1>
            <h2>I program websites and games.<br>I also play guitar.</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <h3 class="line-header"><span>Featured Project</span></h3>
                <div class="row">
                    <div class="col-md-5">
                        <p><img class="img-responsive img-thumbnail" src="/img/music/releases/vgm-vol-1.jpg" alt="VGM, Vol. 1: New Game - EP" width="1400" height="1400"></p>
                    </div>
                    <div class="col-md-7">
                        <h3 class="featured">VGM, Vol. 1: New Game - EP</h3>
                        <h4>Available Now</h4>
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
            </div>
            @if (isset($activities))
                <div class="col-sm-6 col-md-4">
                    <h3 class="line-header"><span>What I'm Up To</span></h3>
                    <ul class="current-activities">
                        @foreach ($activities as $activity)
                            <li>
                                <span class="fa fa-{{ $activity['icon'] }}"></span>
                                <div class="activity">
                                    <strong>{{ $activity['name'] }}</strong>
                                    <em>{{ $activity['content'] }}</em>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@stop
