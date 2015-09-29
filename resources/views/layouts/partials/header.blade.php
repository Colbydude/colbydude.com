<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-8">
                <a class="logo-sortof" href="{{ route('home') }}">Colby<span class="lastname" {!! $style == 'dark' ? 'style="display: none;"' : ''!!}> Terry</span><span class="username" {!! $style == 'light' ? 'style="display: none;"' : ''!!}>dude</span></a>
            </div>
            <div class="col-xs-4">
                <div class="style-chooser">
                    <a class="choose-dark" href="#" title="Switch to Dark Theme" data-style="dark"></a>
                    <a class="choose-light" href="#" title="Switch to Light Theme" data-style="light"></a>
                </div>
            </div>
        </div>
    </div>
</header>
<nav class="container">
    <ul class="header-nav">
        <li {!! Request::is('web*') ? 'class="active"' : '' !!}><a href="{{ route('web') }}"><span class="fa fa-globe"></span><span class="nav-text">Web</span></a></li>
        <li {!! Request::is('games*') ? 'class="active"' : '' !!}><a href="{{ route('games') }}"><span class="fa fa-gamepad"></span><span class="nav-text">Games</span></a></li>
        <li {!! Request::is('music*') ? 'class="active"' : '' !!}><a href="{{ route('music') }}"><span class="fa fa-music"></span><span class="nav-text">Music</span></a></li>
    </ul>
</nav>
