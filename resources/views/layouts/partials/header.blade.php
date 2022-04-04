<header class="max-w-6xl mx-auto mt-4 px-4">
    <div class="flex justify-between">
        <a
            class="block flex-shrink-0 text-3xl leading-none text-slate-800 hover:text-pink-500 transition duration-500 ease-in-out dark:text-slate-300 dark:hover:text-pink-500"
            href="{{ url('/') }}"
        >
            Colby<span id="lastname" {!! session('style') == 'dark' ? 'style="display: none;"' : ''!!}> Terry</span><span id="username" {!! session('style') == 'light' ? 'style="display: none;"' : ''!!}>dude</span>
        </a>
        <div id="style-chooser">
            {{-- Inject style chooser vue component --}}
        </div>
    </div>
</header>
<nav class="flex max-w-6xl mx-auto mt-4 px-4 ">
    <x-nav-link :href="url('code')" :active="request()->is('code*')">@svg('fontawesome/code', 'inline w-5 h-5 mr-2') Code</x-nav-link>
    <x-nav-link :href="url('music')" :active="request()->is('music*')">@svg('fontawesome/music', 'inline w-5 h-5 mr-2') Music</x-nav-link>
</nav>
