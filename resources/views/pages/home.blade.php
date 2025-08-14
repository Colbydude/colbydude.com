@extends('layouts.default')

@section('content')
    <main class="max-w-6xl mx-auto mt-5 px-4 min-h-[300px]">
        <x-page-header>Hey, I'm Colby.</x-page-header>
        <x-page-subheader>I like building games and web apps.<br>I also like playing guitar.</x-page-subheader>

        @if (count($upcomingShows) > 0)
            <section class="mb-8">
                <x-section-header>Upcoming Shows</x-section-header>

                @foreach ($upcomingShows as $show)
                    <x-music.show :show="$show" />
                @endforeach
            </section>
        @endif
    </main>
@stop
