@extends('layouts.default')

@section('meta_title', 'Code | Colby Terry')
@section('meta_description', 'Senior full-stack engineer, sometimes game dev.')
@section('meta_keywords', 'Colby Terry, Colbydude, developer, code, gamedev, games, webdev, web, webapp, portfolio')
@section('meta_canonical', 'https://colbydude.com/code')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 mb-10 px-4 min-h-[300px]">
        <x-page-header>Code</x-page-header>
        <x-page-subheader>Senior full-stack engineer, sometimes game dev.</x-page-subheader>

        <x-btn-outline href="{{ url('/code/gamedev') }}">Game Dev Portfolio</x-btn-outline>
        <x-btn-outline href="{{ url('/code/webdev') }}" class="ml-3">Web Dev Portfolio</x-btn-outline>

        <section>
            <x-section-header>Showcase</x-section-header>
            <ul class="flex flex-wrap justify-evenly list-none p-0">
                @foreach ($showcase as $story)
                    <x-code.showcase-story :story="$story" />
                @endforeach
            </ul>
        </section>
        <section>
            <x-section-header>Pinned Repositories</x-section-header>
            <ol class="grid gap-4 md:grid-cols-2 md:gap-8">
                @foreach ($pinnedRepos as $repo)
                    <x-code.pinned-repo
                        :repo="$repo"
                        :language-colors="$languageColors"
                    />
                @endforeach
            </ol>
        </section>
        <section>
            <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                    <x-section-header>Top Languages</x-section-header>
                    <ol class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        @foreach (array_slice($topLanguages, 0, 6) as $language => $count)
                            <x-code.top-language
                                :language="$language"
                                :languageColors="$languageColors"
                            />
                        @endforeach
                    </ol>
                </div>
                <div>
                    <x-section-header>Contributions</x-section-header>
                    <div id="github-calendar">
                        {{-- Inject github calendar vue component --}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@stop

@push('scripts')
    <script src="{{ mix('js/code.js') }}"></script>
@endpush
