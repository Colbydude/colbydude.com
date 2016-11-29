@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Hey, I'm Colby</h1>
            <h2>I program websites and games.<br>I also play guitar.</h2>
        </div>
        <div class="row">
            @if (isset($featured))
                <div class="col-sm-7">
                    <h3 class="line-header"><span>Featured Project</span></h3>
                    <a href="{{ $featured['link'] }}"><img class="img-responsive img-thumbnail" src="{{ $featured['image'] }}" alt="{{ $featured['name'] }}" width="1920" height="1080"></a>
                </div>
            @endif
            @if (isset($activities))
                <div class="col-sm-5">
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
