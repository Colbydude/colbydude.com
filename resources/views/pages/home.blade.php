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
                    <div class="col-md-6">
                        <p><img class="img-responsive img-thumbnail" src="https://uqbw5s35wg1ztqw1kmrf37swiwxmyi.ext-twitch.tv/uqbw5s35wg1ztqw1kmrf37swiwxmyi/1.0.2/ee596be6432088cdb42977185e692cdb/internal/screenshots/227/670/screenshot-1.jpg" alt="FishFriendos Twitch Extension" width="1024" height="768"></p>
                    </div>
                    <div class="col-md-6">
                        <h3 class="featured">FishFriendos</h3>
                        <p>Raise the biggest school of fish this side of the Twitch stream! You and your audience work together to explore the sea!</p>
                        <div class="form-group">
                            <a class="btn btn-primary-outline" href="https://www.twitch.tv/ext/uqbw5s35wg1ztqw1kmrf37swiwxmyi-1.0.3">Install on Twitch</a>
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($activities))
                <div class="col-sm-6 col-md-4">
                    <h3 class="line-header"><span>What I'm Up To</span></h3>
                    <ul class="current-activities">
                        @foreach ($activities as $activity)
                            <li>
                                <span class="{{ $activity['icon'] }}"></span>
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
