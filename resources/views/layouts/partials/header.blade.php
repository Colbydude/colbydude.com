<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <a class="logo-sortof" href="{{ url('/') }}">Colby<span class="lastname" {!! session('style') == 'dark' ? 'style="display: none;"' : ''!!}> Terry</span><span class="username" {!! session('style') == 'light' ? 'style="display: none;"' : ''!!}>dude</span></a>
            </div>
            <div class="col-xs-4">
                <div id="style-chooser">
                    {{-- Inject style chooser vue component --}}
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="container">
    <ul class="header-nav">
        <li {!! Request::is('code*') ? 'class="active"' : '' !!}><a href="{{ url('code') }}"><span class="fa fa-code"></span><span class="nav-text">Code</span></a></li>
        <li {!! Request::is('music*') ? 'class="active"' : '' !!}><a href="{{ url('music') }}"><span class="fa fa-fw fa-music"></span><span class="nav-text">Music</span></a></li>
    </ul>
</nav>
