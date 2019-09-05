@extends('layouts.default')

@section('meta_title', 'Code | Colby Terry')
@section('meta_description', '')
@section('meta_keywords', 'Colby Terry, Colbydude, developer, code, gamedev, games, webdev, web, webapp, portfolio')
@section('meta_canonical', 'https://colbydude.com/code')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1>Code</h1>
            <h2>Software engineer, sometimes game-dev.</h2>
        </div>

        <h3 class="line-header"><span>Pinned Repositories</span></h3>
        <ol class="d-flex flex-wrap list-unstyled row">
            @foreach ($pinnedRepos as $repo)
                <li class="col-md-6 mb-3 d-flex flex-content-stretch">
                    <div class="d-flex p-3 width-full box">
                        <div class="pinned-repo-content">
                            <div class="d-flex width-full flex-items-center position-relative">
                                <span class="fab fa-github mr-2 flex-shrink-0"></span>
                                <a class="text-bold flex-auto min-width-0 " href="https://github.com{{ $repo->node->resourcePath }}" target="_blank">{{ $repo->node->name }}</a>
                            </div>
                            <p class="pinned-repo-desc text-muted text-small d-block mt-2 mb-3">
                                {{ $repo->node->description }}
                            </p>
                            <div class="mb-0 text-small text-muted">
                                <span class="d-inline-block mr-3">
                                    <span class="repo-language-color" style="background-color: {{ $languageColors[$repo->node->primaryLanguage->name] }};"></span>
                                    @if ($repo->node->primaryLanguage->name != "Yacc")
                                        {{ $repo->node->primaryLanguage->name }}
                                    @else
                                        GameMaker
                                    @endif
                                </span>
                                @if ($repo->node->stargazers->totalCount > 0)
                                    <a class="d-inline-block mr-3 text-muted-link" href="https://github.com{{ $repo->node->resourcePath }}/stargazers" target="_blank">
                                        <span class="fa fa-fw fa-star"></span> {{ $repo->node->stargazers->totalCount }}
                                    </a>
                                @endif
                                @if ($repo->node->forkCount > 0)
                                    <a class="d-inline-block mr-3 text-muted-link" href="https://github.com{{ $repo->node->resourcePath}}/network/members" target="_blank">
                                        <span class="fa fa-fw fa-code-branch"></span> {{ $repo->node->forkCount }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ol>

        <div class="row">
            <div class="col-md-6">
                <h3 class="line-header"><span>Top Languages</span></h3>
                <ol class="d-flex flex-wrap list-unstyled row">
                    @foreach (array_slice($topLanguages, 0, 6) as $language => $count)
                        <li class="col-md-4 mb-3 d-flex flex-content-stretch">
                            <div class="d-flex p-2 width-full box">
                                <div class="pinned-repo-content">
                                    <div class="mb-0 text-small text-muted">
                                        <span class="d-inline-block mr-3">
                                            <span class="repo-language-color" style="background-color: {{ $languageColors[$language] }};"></span>
                                            @if ($language != "Yacc")
                                                {{ $language }}
                                            @else
                                                GameMaker
                                            @endif
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="col-md-6">
                <h3 class="line-header"><span>Contributions</span></h3>
                <github-calendar
                    user="Colbydude"
                    :months="12"
                />
            </div>
        </div>
        <h3 class="line-header"><span>Showcase</span></h3>
        <ul class="story-grid">
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
